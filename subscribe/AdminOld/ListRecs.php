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
$query_GetAllCaregories = "SELECT * FROM Categories WHERE Disabled != 1 ORDER BY CatDesc ASC";
$GetAllCaregories = mysql_query($query_GetAllCaregories, $CollegeBoundNews) or die(mysql_error());
$row_GetAllCaregories = mysql_fetch_assoc($GetAllCaregories);
$totalRows_GetAllCaregories = mysql_num_rows($GetAllCaregories);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
<!--
.BullPenHeader {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #0066FF;
}
.BullPen {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #7A7BF1;
	float: none;
	word-wrap:break-word;
	width: 345px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-color: #FFFFFF;
}
-->
</style>
</head>

<body>
<table border="0" cellpadding="5" cellspacing="5">
  <?php do { ?>
    <tr>
      <td>
      	<strong>
				<?php 
					//List the Categories
					echo $row_GetAllCaregories['CatDesc'] . '<br>'; 
					mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
					$query_Category1 = "SELECT Links.Description, Links.Link FROM Links WHERE Links.CatID=" . $row_GetAllCaregories['CatID'] . " ORDER BY Links.Description";
					$Category1 = mysql_query($query_Category1, $CollegeBoundNews) or die(mysql_error());
					$row_Category1 = mysql_fetch_assoc($Category1);
					$totalRows_Category1 = mysql_num_rows($Category1);
				?>
				</strong>
        <table border="0" cellpadding="0" cellspacing="0">
          <?php 
						//Lists the Links within the caregory.
						do { 
					?>
            <tr>
            	<td width="10%"></td>
              <td width="200"><?php echo $row_Category1['Description']; ?></td>
            	<td width="10%"></td>
              <td width="200">
								<a href="<?php echo $row_Category1['../AdminMenu/Link']; ?>"><?php echo $row_Category1['Description']; ?></a>              
              </td>
            </tr>
            <?php } while ($row_Category1 = mysql_fetch_assoc($Category1)); ?>
        </table></td>
    </tr>
    <?php } while ($row_GetAllCaregories = mysql_fetch_assoc($GetAllCaregories)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Category1);

mysql_free_result($GetAllCaregories);
?>
