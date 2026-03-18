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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO Links (ID, Title, `Description`, Link, CatID) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['ID'], "int"),
                       GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($_POST['Description'], "text"),
                       GetSQLValueString($_POST['Link'], "text"),
                       GetSQLValueString($_POST['CatID'], "int"));

  mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
  $Result1 = mysql_query($insertSQL, $CollegeBoundNews) or die(mysql_error());

  $insertGoTo = "AddRecs.php?theLink=" . $_POST['Title'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
$query_GetCatDesc = "SELECT CatID, CatDesc FROM Categories ORDER BY CatDesc ASC";
$GetCatDesc = mysql_query($query_GetCatDesc, $CollegeBoundNews) or die(mysql_error());
$row_GetCatDesc = mysql_fetch_assoc($GetCatDesc);
$totalRows_GetCatDesc = mysql_num_rows($GetCatDesc);
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
    
     <?php 
			 if ($_REQUEST['theLink'] != "") {
				 echo 'Link <font color="red"><em> ' . $_REQUEST['theLink'] . '</em></font> added.';
			 }
     ?> 
			
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
     <h2 class="BlueHeaderText">Add a New Link</h2>
     <hr />
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
	    <table class="ListTbl" cellpadding="2" cellspacing="0" align="left">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><strong>Title:</strong></td>
          <td><input type="text" name="Title" value="" size="75" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right" valign="top"><strong>Description:</strong></td>
          <td><textarea name="Description" cols="55" rows="3"></textarea></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><strong>Link:</strong></td>
          <td>
            <input type="text" name="Link" value="http://" size="75" />
            <br />
            <span class="SmallText">Format: http://www.someURL.com.</span>                      
          </td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><strong>Category:</strong></td>
          <td>
            <select name="CatID" id="CatID" >
              <option value="x" selected="selected">&nbsp;</option>
          	  <?php
								do {  
								?>
                  <option value="<?php echo $row_GetCatDesc['CatID']?>"><?php echo $row_GetCatDesc['CatDesc']?></option>
                <?php
								} while ($row_GetCatDesc = mysql_fetch_assoc($GetCatDesc));
									$rows = mysql_num_rows($GetCatDesc);
									if($rows > 0) {
											mysql_data_seek($GetCatDesc, 0);
										$row_GetCatDesc = mysql_fetch_assoc($GetCatDesc);
									}
								?>             
            </select>
           <br />
           <span class="SmallText">Select a Category from the drop-down box above.</span> 
          
          </td>
        </tr>
          <tr valign="baseline">
            <td colspan="2" align="center"><input type="submit" value="Insert record" />&nbsp;<input name="btnReset" type="reset" value="Reset" /></td>
          </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
    <p>&nbsp;</p>
   	<!-- InstanceEndEditable -->     </td>
  </tr>
  </table>

</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($GetCatDesc);
?>
