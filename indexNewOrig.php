<?php require_once('Connections/CollegeBoundNews.php'); ?>
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
$query_HomeBox = "SELECT Verbiage FROM SiteText WHERE theKey = 'HomeBox'";
$HomeBox = mysql_query($query_HomeBox, $CollegeBoundNews) or die(mysql_error());
$row_HomeBox = mysql_fetch_assoc($HomeBox);
$totalRows_HomeBox = mysql_num_rows($HomeBox);

mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
$query_PromoBlock = "SELECT Verbiage FROM SiteText WHERE theKey = 'PromoBlock'";
$PromoBlock = mysql_query($query_PromoBlock, $CollegeBoundNews) or die(mysql_error());
$row_PromoBlock = mysql_fetch_assoc($PromoBlock);
$totalRows_PromoBlock = mysql_num_rows($PromoBlock);
?>


<!-- saved from url=(0022)http://internet.e-mail -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>College Bound News</title>
<META NAME="DESCRIPTION" CONTENT="Up-to-date reporting on the college admissions opportunities and financial aid issues that affect millions of high school students and their parents each admissions season.">
<META NAME="KEYWORDS" CONTENT="college,university,higher education,college admissions,financial aid,federal aid,grants,scholarships,merit scholarships, college tuition,admissions,counseling,advice,B.A.,accepted,diversity,trends,surveys,test scores,standardized tests,ACT,SAT,advisor,application,applications,campus,enrollment,curriculum,graduation,graduation rates,College Admissions Advisor,529 college savings plans,college essay,freshman,freshmen,high school students,seniors,minority students">
<meta name="GENERATOR" content="Adobe PageMill 3.0 Mac" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
<link rel="stylesheet" type="text/css" href="CSS/csshorizontalmenu.css" />

<script language="javascript" type="text/javascript" src="Scripts/csshorizontalmenu.js"></script>

<link href="CSS/GradientShadow.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="Scripts/GradientShadow.js"></script>
<script language="javascript" type="text/javascript">
	gradientshadow.depth=6;
</script>




<style type="text/css">
<!--

body,td,th {
	font-family: Times New Roman, Times, serif;
	color: #3163CE;
}
.tblMain {
	background-color: #FFCC66;
}

-->
</style>
</head>
<body bgcolor="#FFE3AB" background="images/Background2.jpg">
<p>&nbsp;</p>
<center> 
  <table width="1085" border="5" cellpadding="0" cellspacing="0" class="tblMain">
    <tr>
      <td colspan="3" valign="top" align="center"><img src="resources/cbhome/newmast2.gif" alt="mast" width="451" height="67" border="0" align="bottom" naturalsizeflag="3" />&nbsp; </td>
    </tr> 
    <tr>
      <td colspan="3" valign="top" align="center" bgcolor="#3366CC" nowrap="nowrap">
      	<div class="horizontalcssmenu">
          <ul id="cssmenu1">
            <li><a href="index.html">Home</a></li>
            <li style="border-left: 1px solid #202020;"><a href="indexGoTo.php?x=aboutus/aboutus.html">About Us</a></li>
            <li><a href="indexGoTo.php?x=subscribe/subscribe.html" >Subscribe/Renew</a></li>
            <li><a href="indexGoTo.php?x=contactus/contact.html">Contact Us</a></li>
            <li><a href="indexGoTo.php?x=articles.html">Current Issues</a></li>
            <li><a href="indexGoTo.php?x=visitors/index.html">Visitors</a></li>
            <li><a href="indexGoTo.php?x=backissues/index.html">Back Issues</a></li>
            <li><a href="indexGoTo.php?x=whogotin/index.html">Who Got In?</a></li>
            <li><a href="links/links.html">Links/Resources</a></li>
<!--            
            <li><a href="#">Resources</a>
              <ul>
                <li><a href="http://www.dynamicdrive.com">Dynamic HTML</a></li>
                <li><a href="http://www.codingforums.com">Coding Forums</a></li>
                <li><a href="http://www.cssdrive.com">CSS Drive</a></li>
                <li><a href="http://www.dynamicdrive.com/style/">CSS Library</a></li>
                <li><a href="http://tools.dynamicdrive.com/imageoptimizer/">Image Optimizer</a></li>
                <li><a href="http://tools.dynamicdrive.com/favicon/">Favicon Generator</a></li>
              </ul>
            </li>

-->
          </ul>
          <br style="clear: left;" />
        </div>
      </td>
    </tr>
    <tr>
      <td width="194" height="758" align="center" valign="top">
      <br />
<script type="text/javascript"><!--
google_ad_client = "pub-8419580373588278";
/* 160x600, created 11/12/09 */
google_ad_slot = "8601862078";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> 
 	</td>
      <td class="CenterBox" width="588" valign="top" align="center">	
				<br /><img src="resources/cbhome/trunion.jpg" width="330" height="243"  class="shadow" rel="blue" />
        <br />
        <h2><strong>The Latest College Bound News</strong></h2>
        <div class="CenterBox"style="height: 631px; width: 395px overflow: auto">
	       	<p align="left"><?php echo $row_HomeBox['Verbiage']; ?></p>
       	</div>      
      </td>
	    <td width="287" align="center" valign="top">     
				<br />
				<a href="members/articles.html"><img src="resources/cbhome/FrontPageSmallest.gif" width="270" height="344" border="0" class="shadow" rel="blue" /></a>
        <h4><a href="members/articles.html">Current Issues Subscriber Login</a></h4>
        <hr />
        <div class="PrmoBox" align="left" style="height: 525px; width: 395px overflow: auto">
					<?php echo $row_PromoBlock['Verbiage']; ?>
        </div>
      </td>
    </tr>
    <tr>
    <td colspan="3" valign="center" align="center" height="98">
    	<br />
<script type="text/javascript"><!--
google_ad_client = "pub-8419580373588278";
/* 728x90, created 11/12/09 */
google_ad_slot = "1857534750";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			<br />
      </td>
    </tr>
    <tr>
      <td colspan="3" valign="top" align="center">
      	<br />
        <p>&nbsp;<font size="-1" face="Arial">
        <a href="#">Home</a> |
        <a href="indexGoTo.php?x=aboutus/aboutus.html">About  Us</a> | 
        <a href="indexGoTo.php?x=subscribe/subscribe.html">Subscribe/Renew</a> | 
        <a href="indexGoTo.php?x=contactus/contact.html">Contact Us</a> | 
        <a href="indexGoTo.php?x=articles.html">Current Issues</a> | 
        <a href="indexGoTo.php?x=visitors/index.html">Visitors</a> |
        <a href="indexGoTo.php?x=backissues/index.html">Back Issues</a> | 
        <a href="indexGoTo.php?x=whogotin/index.html">Who Got In?</a> | 
        <a href="indexGoTo.php?x=links/links.html">Links/Resources</a>
        </font></p>
        	<a href="privacypolicy.html"><font size="-1" face="Arial">Privacy Policy/Terms of Service</font></a><font size="-1" face="Arial"><br />

          <SCRIPT>
						<!--
							var year = new Date();
							year = year.getYear();
							if (year<1900) 
								year+=1900						
		
							cpy = "&copy; " + year + " COLLEGE BOUND Publications Inc.";
							document.write(cpy);
						//-->
						</SCRIPT> 

          <br />All Rights Reserved.<br />
          <a href="mailto:rcsautter@aol.com">editor@collegeboundnews.com</a></font><br /><br />
			</td>
    </tr>
  </table>
</center>
</body>
</html>
<?php
mysql_free_result($HomeBox);

mysql_free_result($PromoBlock);
?>
