<?php require_once('../../CollegeBoundNews.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("saveSiteText")) {
function saveSiteText($siteKey, $siteVerbiage, $databaseName, $dbConnection)
{
  mysql_select_db($databaseName, $dbConnection);
  $checkSQL = sprintf("SELECT theKey FROM SiteText WHERE theKey=%s LIMIT 1",
                       GetSQLValueString($siteKey, "text"));
  $checkResult = mysql_query($checkSQL, $dbConnection) or die(mysql_error());
  $siteTextExists = mysql_num_rows($checkResult) > 0;
  mysql_free_result($checkResult);

  if ($siteTextExists) {
    $updateSQL = sprintf("UPDATE SiteText SET Verbiage=%s WHERE theKey=%s",
                         GetSQLValueString($siteVerbiage, "text"),
                         GetSQLValueString($siteKey, "text"));
    mysql_query($updateSQL, $dbConnection) or die(mysql_error());
  } else {
    $insertSQL = sprintf("INSERT INTO SiteText (theKey, Verbiage) VALUES (%s, %s)",
                         GetSQLValueString($siteKey, "text"),
                         GetSQLValueString($siteVerbiage, "text"));
    mysql_query($insertSQL, $dbConnection) or die(mysql_error());
  }
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if (!function_exists("sanitizeUploadPart")) {
function sanitizeUploadPart($rawValue)
{
  $cleanValue = trim($rawValue);
  $cleanValue = str_replace("\\", "/", $cleanValue);
  $cleanValue = preg_replace("/[^A-Za-z0-9_\\-\\.\\/]/", "", $cleanValue);
  while (strpos($cleanValue, "..") !== false) {
    $cleanValue = str_replace("..", "", $cleanValue);
  }
  return trim($cleanValue, "/");
}
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $currentIssuesIntro = isset($_POST['Verbiage']) ? $_POST['Verbiage'] : '';
  $currentIssuesPage = isset($_POST['PageVerbiage']) ? $_POST['PageVerbiage'] : '';
  $uploadStatus = "none";
  $uploadMessage = "";

  saveSiteText("CurrentIssues", $currentIssuesIntro, $database_CollegeBoundNews, $CollegeBoundNews);
  saveSiteText("CurrentIssuesPage", $currentIssuesPage, $database_CollegeBoundNews, $CollegeBoundNews);

  if (isset($_FILES['IssuePdf']) && $_FILES['IssuePdf']['error'] !== UPLOAD_ERR_NO_FILE) {
    if ($_FILES['IssuePdf']['error'] === UPLOAD_ERR_OK) {
      $membersBasePath = realpath(dirname(__FILE__) . "/../members");
      if ($membersBasePath === false) {
        $uploadStatus = "error";
        $uploadMessage = "Members directory not found.";
      } else {
        $requestedFolder = isset($_POST['PdfFolder']) ? $_POST['PdfFolder'] : '';
        $safeFolder = sanitizeUploadPart($requestedFolder);
        $safeFolder = ($safeFolder !== '') ? $safeFolder : '25-26issues';
        $targetDirectory = $membersBasePath . DIRECTORY_SEPARATOR . str_replace("/", DIRECTORY_SEPARATOR, $safeFolder);

        if (!is_dir($targetDirectory)) {
          @mkdir($targetDirectory, 0775, true);
        }

        $targetDirectoryReal = realpath($targetDirectory);
        $membersPrefix = rtrim($membersBasePath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        $isInsideMembersDir = ($targetDirectoryReal !== false && strpos($targetDirectoryReal . DIRECTORY_SEPARATOR, $membersPrefix) === 0);

        if (!$isInsideMembersDir) {
          $uploadStatus = "error";
          $uploadMessage = "Invalid PDF folder path.";
        } else {
          $submittedFileName = isset($_POST['PdfFileName']) ? $_POST['PdfFileName'] : '';
          $submittedFileName = sanitizeUploadPart($submittedFileName);
          $submittedFileName = basename($submittedFileName);
          if ($submittedFileName === '') {
            $submittedFileName = basename($_FILES['IssuePdf']['name']);
          }
          $submittedFileName = preg_replace("/[^A-Za-z0-9_\\-\\.]/", "", $submittedFileName);
          if ($submittedFileName === '') {
            $submittedFileName = "issue.pdf";
          }
          if (strtolower(substr($submittedFileName, -4)) !== ".pdf") {
            $submittedFileName .= ".pdf";
          }

          $extension = strtolower(pathinfo($submittedFileName, PATHINFO_EXTENSION));
          if ($extension !== "pdf") {
            $uploadStatus = "error";
            $uploadMessage = "Only PDF files are allowed.";
          } else {
            $destinationFile = $targetDirectoryReal . DIRECTORY_SEPARATOR . $submittedFileName;
            if (@move_uploaded_file($_FILES['IssuePdf']['tmp_name'], $destinationFile)) {
              $uploadStatus = "ok";
              $uploadMessage = "members/" . $safeFolder . "/" . $submittedFileName;
            } else {
              $uploadStatus = "error";
              $uploadMessage = "PDF upload failed.";
            }
          }
        }
      }
    } else {
      $uploadStatus = "error";
      $uploadMessage = "PDF upload error code " . intval($_FILES['IssuePdf']['error']) . ".";
    }
  }

  $updateGoTo = "ModCurrrentIssues.php?U=y";
  if ($uploadStatus !== "none") {
    $updateGoTo .= "&PU=" . urlencode($uploadStatus);
  }
  if ($uploadMessage !== "") {
    $updateGoTo .= "&PM=" . urlencode($uploadMessage);
  }
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= "&src=1";
  }
  header(sprintf("Location: %s", $updateGoTo));
  exit;
}

mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
$query_Recordset1 = "SELECT * FROM SiteText WHERE theKey IN ('CurrentIssues', 'CurrentIssuesPage')";
$Recordset1 = mysql_query($query_Recordset1, $CollegeBoundNews) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$currentIssuesIntroText = "";
$currentIssuesPageText = "";

if ($totalRows_Recordset1 > 0) {
  do {
    if ($row_Recordset1['theKey'] === 'CurrentIssues') {
      $currentIssuesIntroText = $row_Recordset1['Verbiage'];
    }
    if ($row_Recordset1['theKey'] === 'CurrentIssuesPage') {
      $currentIssuesPageText = $row_Recordset1['Verbiage'];
    }
  } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/CollegeBoundNewsAdmin2.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>College Bound News: Admin</title>

<script type="text/javascript" src="scripts/wysiwyg.js"></script>
<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
<script language="javascript" type="text/javascript">

	function CxlButton(){
		 location.href="index.php";
	}

</script>
<!-- InstanceEndEditable -->
<script src="https://cdn.tiny.cloud/1/o23npnn9lfe2rw5jg2dzads5yuwq6148ktaj596tlv3g5llh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" type="text/css" href="../CSS/cssverticalmenu.css" />
<style type="text/css">
<!--
h2 {
	color: #0000FF;
} 
.SmallText {
   font-size: small;
   text-align: center;
}
.tox-tinymce {
   border: 2px solid #eee;
   border-radius: 10px;
   box-shadow: none;
   box-sizing: border-box;
   display: flex;
   flex-direction: column;
   font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
   overflow: hidden;
   position: relative;
   visibility: inherit!important;
   margin-left: 170px;
}
.tox .tox-editor-container {
   display: flex;
   flex: 1 1 auto;
   flex-direction: column;
   overflow: hidden;
   width: 600px;
}


-->
</style>
<script type="text/javascript" src="scripts/cssverticalmenu.js">

/***********************************************
3366CCFFCC66
* CSS Vertical List Menu- by JavaScript Kit (www.javascriptkit.com)
* Menu interface credits: http://www.dynamicdrive.com/style/csslibrary/item/glossy-vertical-menu/ 
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more

***********************************************/

</script>

<script type="text/javascript">

/***********************************************
* Static Menu script- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/

//ids of menus to keep static on page (must be absolutely positioned, with left/top attribute added inline inside tag)
//Separate multiple ids with a comma (ie: ["menu1", "menu2"]
var staticmenuids=["staticmenu"]

var staticmenuoffsetY=[]

function getmenuoffsetY(){
	for (var i=0; i<staticmenuids.length; i++){
		var currentmenu=document.getElementById(staticmenuids[i])
	 staticmenuoffsetY.push(isNaN(parseInt(currentmenu.style.top))? 0 : parseInt(currentmenu.style.top))
	}
		initstaticmenu()
}

function initstaticmenu(){
	var iebody=(document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
	var topcorner=(window.pageYOffset)? window.pageYOffset : iebody.scrollTop
	for (var i=0; i<staticmenuids.length; i++)
		document.getElementById(staticmenuids[i]).style.top=topcorner+staticmenuoffsetY[i]+"px"
	setTimeout("initstaticmenu()", 100)
}

if (window.addEventListener)
window.addEventListener("load", getmenuoffsetY, false)
else if (window.attachEvent)
window.attachEvent("onload", getmenuoffsetY)
 
</script>
<link href="../CSS/ErrorsDiv2.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<BODY BGCOLOR="#ffcc66" BACKGROUND="../resources/allcommon/colortile.gif">

<!-- InstanceBeginEditable name="EditRegion4" -->

<DIV id=errorsDiv >
  <h4>
  
  <?php 
     if (isset($_GET['U']) && $_GET['U'] != "") {
       echo 'Current Issues saved.';
     }
     if (isset($_GET['PU']) && $_GET['PU'] == "ok") {
       echo '<br />PDF uploaded: ' . htmlentities($_GET['PM'], ENT_COMPAT, 'utf-8');
     }
     if (isset($_GET['PU']) && $_GET['PU'] == "error") {
       echo '<br />PDF upload error: ' . htmlentities($_GET['PM'], ENT_COMPAT, 'utf-8');
     }
  ?>						
  </h4>
</DIV>  


<!-- InstanceEndEditable -->
  
<table width="1050" cellpadding="2" cellspacing="2">
    <tr>
      <td valign="top"><img src="../resources/Admin/AdminMenuFiller.jpg" width="200" height="1" /></td>    
      <td colspan="2" align="center"><img src="../resources/cbhome/newmast2.gif" /></td>
  </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td height="24" align="center" colspan="1">
      <h2 align="left">Administrator Control Panel</h2></td>
			</tr>
     
    <tr>
      <td width="200" valign="top">
        <div id="staticmenu" class="glossymenu" style="left: 19px; top: 323px">
          <ul id="verticalmenu" class="glossymenu">
            <li><a href="../index.html">Home</a></li>
              <li><a href="index.php" >Admin Home</a></li>
              <li><a href="#">Edit Links Page</a>
                <ul>
                  <li><a href="AddCatRecs.php">Add a Category</a></li>
                  <li><a href="ModCatRecs.php">Modify a Category</a></li>
                  <li><a href="AddRecs.php">Add a Link</a></li>
                  <li><a href="ModRecs.php">Modify a Link</a></li>
                  <li><a href="DelRecs.php">Delete a Link</a></li>
                </ul> 
              </li>
            <li><a href="#">Edit Home Page</a>
                <ul>
                  <li><a href="HomePageBlock.php">Modify Center Block</a></li>
                  <li><a href="HomePromoBox.php">Modify Promo Box</a></li>
                </ul>
            </li>
            <li><a href="ModCurrrentIssues.php">Current Issues Text</a></li>
            <!--<li><a href="../links/links.html">Links Page</a></li>-->
          </ul>
        </div>      </td>
      <td width="834" valign="top">
      
        <!-- InstanceBeginEditable name="EditRegion3" -->
        
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" enctype="multipart/form-data">
      <hr />
      <h2 class="BlueHeaderText">Modify Current Issues (Full Page)</h2>
      <hr />

      <table>
        <tr valign="baseline">
          <td nowrap="nowrap" class="SmallText" colspan="2">Update the left intro text, the full center page content, and optionally upload the monthly PDF.</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" class="SmallText" colspan="2"><strong>Left Intro (existing CurrentIssues key):</strong></td>
        </tr>
        <tr valign="baseline">
          <td width="589"><textarea name="Verbiage" id="Verbiage" cols="75" rows="8"><?php echo htmlentities($currentIssuesIntroText, ENT_COMPAT, 'utf-8'); ?></textarea>
          </td>
          <td valign="top">
          	<input type="submit" value="Update" /><br />
            <input onclick="CxlButton()" name="Cancel" type="button"  value="Cancel"/>          </td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" class="SmallText" colspan="2"><strong>Main Current Issues Block (new CurrentIssuesPage key):</strong></td>
        </tr>
        <tr valign="baseline">
          <td width="589"><textarea name="PageVerbiage" id="PageVerbiage" cols="75" rows="20"><?php echo htmlentities($currentIssuesPageText, ENT_COMPAT, 'utf-8'); ?></textarea>
          </td>
          <td valign="top">
            <span class="SmallText">WYSIWYG HTML block shown in<br />`members/articles_automatic.php`.</span>
          </td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" class="SmallText" colspan="2"><strong>Optional PDF Upload:</strong> choose file and folder under <em>members/</em> (example: <em>25-26issues</em>).</td>
        </tr>
        <tr valign="baseline">
          <td width="589">
            <label class="SmallText">Issue PDF:&nbsp;</label>
            <input type="file" name="IssuePdf" id="IssuePdf" accept=".pdf,application/pdf" /><br /><br />
            <label class="SmallText">Folder under members/:&nbsp;</label>
            <input type="text" name="PdfFolder" id="PdfFolder" size="30" value="25-26issues" /><br /><br />
            <label class="SmallText">Save as filename (optional):&nbsp;</label>
            <input type="text" name="PdfFileName" id="PdfFileName" size="30" placeholder="Mar26.pdf" />
          </td>
          <td valign="top">
            <span class="SmallText">If file name is blank,<br />the uploaded file name is used.</span>
          </td>
        </tr>
        <tr valign="baseline">
          <td width="589">
            <!-- <script language="javascript1.2">
              var mysettings = new WYSIWYG.Settings();
              mysettings.Height = "500px";
    
              WYSIWYG.attach('Verbiage', mysettings ); // full featured setup
            </script>  -->
            <script>
            tinymce.init({
              selector: 'textarea',
              plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
              toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
              height: 420 
            });
          </script>
                     </td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="center" colspan="2"></td>
        </tr>
      </table>
      <input type="hidden" name="MM_update" value="form1" />
    </form>
    <p>&nbsp;</p>
  <!-- InstanceEndEditable -->     </td>
  </tr>
  </table>

</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Recordset1);
?>




