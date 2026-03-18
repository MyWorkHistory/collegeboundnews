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

mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
$query_Recordset1 = "SELECT CatDesc, Disabled FROM Categories ORDER BY CatDesc ASC";
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
<script language="javascript" type="text/javascript">
	function SubmitForm() {
		document.form1.submit();
	}
</script><!-- InstanceEndEditable -->
</head>

<BODY BGCOLOR="#ffcc66" BACKGROUND="../resources/allcommon/colortile.gif">

<!-- InstanceBeginEditable name="EditRegion4" -->
    
    <?php 
         if ($_REQUEST['CatModified'] != "") {
           echo 'Link <font color="red"><em> ' . $_REQUEST['CatModified'] . '</em></font> Changed.';
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
    <hr />
    <span class="BlueHeaderText">Modify a Category: Select Category</span>
    <hr />
    <span class="ListTbl">To modify a Category, click on it's radio button.</span>
    <form id="form1" name="form1" method="post" action="ModCatRecs2.php">
    <table class="ListTbl" cellpadding="2" cellspacing="0">
      <tr>
        <td><strong>Description</strong></td>
        <td><strong>Disabled</strong></td>
  			<td><strong>Selected</strong></td>
      </tr>
      <?php do { ?>
        <tr>
          <td width="200"><?php echo $row_Recordset1['CatDesc']; ?></td>
          <td width="5" align="center"><?php echo $row_Recordset1['Disabled']; ?></td>
	        <td width="5"align="center"><input type="radio" name="btnRadio" id="btnRadio" value="<?php echo $row_Recordset1["CatDesc"];?>" onclick="SubmitForm()" /></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </table>
    </form>
   	<!-- InstanceEndEditable -->     </td>
  </tr>
  </table>

</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Recordset1);
?>
