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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE SiteText SET Verbiage=%s WHERE theKey=%s",
                       GetSQLValueString($_POST['Verbiage'], "text"),
                       GetSQLValueString($_POST['theKey'], "text"));

  mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
  $Result1 = mysql_query($updateSQL, $CollegeBoundNews) or die(mysql_error());

  $updateGoTo = "index.php?U=y";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
$query_Recordset1 = "SELECT * FROM SiteText WHERE theKey = 'HomeBox'";
$Recordset1 = mysql_query($query_Recordset1, $CollegeBoundNews) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/CollegeBoundNewsAdmin2.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>College Bound News: Admin</title>
<!-- InstanceEndEditable -->
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

.tox .tox-editor-container {
   display: flex;
   flex: 1 1 auto;
   flex-direction: column;
   overflow: hidden;
   padding-left: 5.5em;
}
.tox-tinymce {
   border: 0px;
   border-radius: 10px;
   box-shadow: none;
   box-sizing: border-box;
   display: flex;
   flex-direction: column;
   font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
   overflow: hidden;
   position: relative;
   visibility: inherit!important;
}
.tox .tox-editor-container {
   display: flex;
   flex: 1 1 auto;
   flex-direction: column;
   overflow: hidden;
   width: 600px;
   padding-left: 5.5em;
}
.tox-tinymce {
   border: 0px !important;
   border-radius: 10px;
   width: 600px !important;
   box-shadow: none;
   box-sizing: border-box;
   display: flex;
   flex-direction: column;
   font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
   overflow: hidden;
   position: relative;
   visibility: inherit!important;
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
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.SmallText {
   font-size: small;
   margin-left: 140px;
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
   margin-left: 84px;
}
.tox .tox-menubar {
   background: repeating-linear-gradient(transparent 0 1px,transparent 1px 39px) center top 39px/100% calc(100% - 39px) no-repeat;
   background-color: #fff;
   display: flex;
   flex: 0 0 auto;
   flex-shrink: 0;
   flex-wrap: wrap;
   grid-column: 1/-1;
   grid-row: 1;
   padding: 0 11px 0 12px;
}

-->
</style>
<!-- InstanceEndEditable -->

<script src="https://cdn.tiny.cloud/1/o23npnn9lfe2rw5jg2dzads5yuwq6148ktaj596tlv3g5llh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<BODY BGCOLOR="#ffcc66" BACKGROUND="../resources/allcommon/colortile.gif">

<!-- InstanceBeginEditable name="EditRegion4" -->

<DIV id=errorsDiv >
  <h4>
  
  <?php 
     if ($_GET['U'] != "") {
       echo 'Record Updated.';
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



<script type="text/javascript" src="scripts/wysiwyg.js"></script>
<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
<script language="javascript" type="text/javascript">

	function CxlButton(){
		 location.href="index.php";
	}

</script>

 

<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <hr />
  <h2 class="BlueHeaderText">Modify Home Center Block</h2>
  <hr />



<table>
    <tr valign="baseline">
    <td nowrap="nowrap" class="SmallText" colspan="2">Make changes to the event and the press the Update Button:</td>
      </tr>
        <tr valign="baseline">
   <td width="589"><textarea name="Verbiage" id="Verbiage" cols="75" rows="25"><?php echo $row_Recordset1['Verbiage']; ?></textarea>
				<!-- <script language="javascript1.2">
					var mysettings = new WYSIWYG.Settings();
					mysettings.Height = "500px";

	   			WYSIWYG.attach('Verbiage', mysettings); // full featured setup
        </script>    -->  
         <script>
            tinymce.init({
              selector: 'textarea',
              plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
              toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
              height: 500 
            });
          </script>   
        </label>       
      </td>
      <td width="56" align="center" valign="top">
      	<input type="submit" value="Update"  /><br />
        <input onclick="CxlButton()" name="Cancel" type="button"  value="Cancel"/>      
     	</td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="theKey" value="<?php echo $row_Recordset1['theKey']; ?>" />
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





