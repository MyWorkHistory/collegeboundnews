<?php require_once('../CollegeBoundNews.php'); ?>
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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/MainTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>College Bound News</title>
<style type="text/css">
<!--
.BorderLeftRight {
	border-right-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-left-style: solid;
}

.BorderTop {
	border-top-width: 1px;
	border-top-style: solid;
}

.CenterBox {
	font-size: 16px;
	color: #000000;
	float: none;
	word-wrap:break-word;
	background-color: #FFCC66;
	padding: 5px;
}
.MainHeader {
	font-size: 24px;
}

.PrmoBox {
	font-size: 16px;
	color: #000000;
	float: none;
	word-wrap:break-word;
	background-color: #FFCC66;
	padding: 5px;
}

-->

</style>
<!-- InstanceEndEditable -->
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

/* body,td,th {
	font-family: Times New Roman, Times, serif;
	color: #3163CE;
} */

.tblMain {
	background-color: #FFCC66;
}
body {
	background-color: #FFE3AB;
	background-image: url(images/Background2.jpg);
	background-repeat: repeat-x;
}
.TahomaFont {
	font-family: Tahoma
}


-->


</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body>
<p>&nbsp;</p>
<center> 
  <table width="1085" border="5" cellpadding="0" cellspacing="0" class="tblMain">
    <tr>
      <td width="1069" align="center" valign="top"><img src="resources/cbhome/newmast2a.gif" alt="mast" width="451" height="67" border="0" align="bottom" naturalsizeflag="3" />&nbsp; </td>
    </tr> 
    <tr>
      <td valign="top" align="center" bgcolor="#3366CC" nowrap="nowrap">
      	<div class="horizontalcssmenu">
          <ul id="cssmenu1">
            <li><a href="indexNew.php">Home</a></li>
            <li style="border-left: 1px solid #202020;"><a href="aboutus/aboutus.html">About Us</a></li>
            <li><a href="subscribe/subscribe.html" >Subscribe/Renew</a></li>
            <li><a href="contactus/contact.html">Contact Us</a></li>
            <li><a href="members/articles.php">Curre<span class="style1"></span>nt Issues</a></li>
            <li><a href="backissues/index.html">Back Issues</a></li>
            <li><a href="visitors/index.html">Visitors</a></li>
            <li><a href="links/links.php">Links/Resources</a></li>
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
        </div>      </td>
    </tr>
    <tr>
    <td valign="center" align="left" height="98">

			<!-- InstanceBeginEditable name="EditRegion3" -->
      
 		 <table width="1085" cellpadding="0" cellspacing="0">
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
    
      <td class="CenterBox BorderLeftRight" width="588" valign="top" align="center">	
				<br /><img src="resources/cbhome/trunion.jpg" width="330" height="243"  class="shadow" rel="blue" /><br />
        <h1 class="MainHeader"><strong>The Latest <em>CollegeBound</em> News</strong></h1>
        <div class="CenterBox"style="height: 631px; width: 580px; overflow: auto">
	       	<p align="left"><?php echo $row_HomeBox['Verbiage']; ?></p>
       	</div>      
      </td>
      
	    <td width="287" height="525" align="center" valign="top">
      	<br />     
				<a href="../members/articles.php"><img src="resources/cbhome/FrontPageSmallest.gif" width="270" height="344" border="0" class="shadow" rel="blue" /></a>
        <h4><a href="../members/articles.php">Current Issues Subscriber Login</a></h4>
        <hr />
        <div class="PrmoBox" align="left" style="height: 505px; width: 280px; overflow: auto">
					<?php echo $row_PromoBlock['Verbiage']; ?>
        </div>
      </td>
    
    </tr>
    <tr>
      <td class="BorderTop" colspan="3" valign="center" align="center" height="98">
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
        <br /><br />
      </td>
     </tr>
    </table>
			 
			<!-- InstanceEndEditable -->    
      
      </td>
    </tr>
    <tr>
      <td valign="top" align="center">
      	<br />
        <p>&nbsp;<font size="-1" face="Arial">
        <a href="indexNew.php">Home</a> |
        <a href="aboutus/aboutus.html">About  Us</a> | 
        <a href="subscribe/subscribe.html">Subscribe/Renew</a> | 
        <a href="contactus/contact.html">Contact Us</a> | 
        <a href="members/articles.php">Current Issues</a> | 
        <a href="backissues/index.html">Back Issues</a> | 
        <a href="visitors/index.html">Visitors</a> |
        <a href="links/links.html">Links/Resources</a>
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
          <a href="mailto:collegeboundnews@gmail.com">collegeboundnews@gmail.com</a></font><br /><br />			</td>
    </tr>
  </table>
</center>

<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-12376434-1");
		pageTracker._trackPageview();
		} 
	catch(err) {}
</script>

<!-- Quantcast Tag -->
<script type="text/javascript">
	var _qevents = _qevents || [];
		 
	(function() {
		var elem = document.createElement('script');
		elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
		elem.async = true;
		elem.type = "text/javascript";
		var scpt = document.getElementsByTagName('script')[0];
		scpt.parentNode.insertBefore(elem, scpt);
	})();
	
	
	_qevents.push({
	qacct:"p-76rwokGV3rEps"
	});
</script>


<noscript>
  <div style="display:none;">
    <img src="//pixel.quantserve.com/pixel/p-76rwokGV3rEps.gif" border="0" height="1" width="1" alt="Quantcast"/>
  </div>
</noscript>
<!-- End Quantcast tag -->


</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($HomeBox);

mysql_free_result($PromoBlock);
?>
