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
$query_Recordset1 = "SELECT Verbiage FROM SiteText WHERE theKey = 'CurrentIssues'";
$Recordset1 = mysql_query($query_Recordset1, $CollegeBoundNews) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/MainTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>College Bound News</title>

<!-- InstanceEndEditable -->
<META NAME="DESCRIPTION" CONTENT="Up-to-date reporting on the college admissions opportunities and financial aid issues that affect millions of high school students and their parents each admissions season.">
<META NAME="KEYWORDS" CONTENT="college,university,higher education,college admissions,financial aid,federal aid,grants,scholarships,merit scholarships, college tuition,admissions,counseling,advice,B.A.,accepted,diversity,trends,surveys,test scores,standardized tests,ACT,SAT,advisor,application,applications,campus,enrollment,curriculum,graduation,graduation rates,College Admissions Advisor,529 college savings plans,college essay,freshman,freshmen,high school students,seniors,minority students">
<meta name="GENERATOR" content="Adobe PageMill 3.0 Mac" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<LINK REL="SHORTCUT ICON" HREF="../favicon.ico">

<link rel="stylesheet" type="text/css" href="../CSS/csshorizontalmenu.css" />
<script language="javascript" type="text/javascript" src="../Scripts/csshorizontalmenu.js"></script>

<link href="../CSS/GradientShadow.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Scripts/GradientShadow.js"></script>

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
	background-image: url(../images/Background2.jpg);
	background-repeat: repeat-x;
}
.TahomaFont {
	font-family: Tahoma
}


-->


</style>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.CurrentIssuesBox {
	font-size: 12px;
	color: #000000;
	float: none;
	word-wrap:break-word;
	background-color: #FFCC66;
	padding: 5px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.BorderRight {
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #000000;
}
-->
</style>
<!-- InstanceEndEditable -->
</head>
<body>
<p>&nbsp;</p>
<center> 
  <table width="1085" border="5" cellpadding="0" cellspacing="0" class="tblMain">
    <tr>
      <td width="1069" align="center" valign="top"><img src="../resources/cbhome/newmast2a.gif" alt="mast" width="451" height="67" border="0" align="bottom" naturalsizeflag="3" />&nbsp; </td>
    </tr> 
    <tr>
      <td valign="top" align="center" bgcolor="#3366CC" nowrap="nowrap">
      	<div class="horizontalcssmenu">
          <ul id="cssmenu1">
            <li><a href="../indexNew.php">Home</a></li>
            <li style="border-left: 1px solid #202020;"><a href="../aboutus/aboutus.html">About Us</a></li>
            <li><a href="../subscribe/subscribe.html" >Subscribe/Renew</a></li>
            <li><a href="../contactus/contact.html">Contact Us</a></li>
            <li><a href="../members/articles.php">Curre<span class="style1"></span>nt Issues</a></li>
            <li><a href="../backissues/index.html">Back Issues</a></li>
            <li><a href="../visitors/index.html">Visitors</a></li>
            <li><a href="../whogotin/index.html">Who Got In?</a></li>
            <li><a href="../links/links.php">Links/Resources</a></li>
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
	<table width="921" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="29" valign="top">&nbsp;</td>   
    <td width="310" valign="top" align="left" class="BorderRight">
	    <br /><br /><p>&nbsp;</p>
      <div class="CurrentIssuesBox" align="left" style="height: 600px; width: 295px; overflow: auto">
				<?php echo $row_Recordset1['Verbiage']; ?>
       </div>    
      </td>
    <td width="13" valign="top">&nbsp;</td>     
    <td width="440" valign="top" align="left">
	    <br /><br /><p>&nbsp;</p>
      <p><b><font color="#3366cc" size="+2" face="Arial">2009-2010
      Issues<br />
      </font><font color="#3366cc" size="+1" face="Arial">Volume 24</font></b></p>

      <p><b><font color="#3366cc" size="-1" face="Verdana">If you need
        to renew your subscription call 773-262-5810, or subscribe on
        this website, www.collegeboundnews.com. Thank you. Have a great
        school year.</font></b>      </p>
      <hr />  
      
     	<P><A HREF="June10.html"><B><FONT SIZE="+1" FACE="Verdana">June 2010</FONT></B></A><BR>
     	  <strong>Year-End Admission Tallies</strong>; CB Goes   to EWA; <strong>College Going&hellip;Going&hellip;Gone</strong>, DNA and freshman   University   College; <strong>The Counselor&rsquo;s Corner:</strong> Minority   Affairs, New Direct Loan Switchover; <strong>Summer Reading</strong>; and News You Can Use.</P>

      
     	<P><A HREF="May10.html"><B><FONT SIZE="+1" FACE="Verdana">May 2010</FONT></B></A><BR>
     	  <strong><em>CB</em>&rsquo;s Spring Admissions Round-up;</strong> New Research on Getting In; <strong>The Counselor&rsquo;s Corner:</strong> Tuition  Discounts, Financial Matters, Scholarship Scoops; <strong>CB&rsquo;s Bookshelf</strong></P>


     	<P><A HREF="April10.html"><B><FONT SIZE="+1" FACE="Verdana">April 2010</FONT></B></A><BR>
        <FONT SIZE="-1" FACE="Verdana">
         <strong>New Ways of Applying and Getting In; </strong> 
         Direct Loan Program Passes;
         <strong>The Counselor's Corner;</strong> News You Can Use.<BR>
  	    </FONT>      
      </P>

     	<P><A HREF="Mar10.html"><B><FONT SIZE="+1" FACE="Verdana">March 2010</FONT></B></A><BR>
        <FONT SIZE="-1" FACE="Verdana">
          <strong>State News Impacts College Admissions; </strong> 
         Admission Updates;
         <strong>Financial Aid Flash;</strong>
         Scholarship Scoops;
         <strong>The Counselor's Corner;</strong>
         Counselor's Bookshelf.
	       <BR>
  	    </FONT>      </P>

     	<P><A HREF="Feb10.html"><B><FONT SIZE="+1"
       FACE="Verdana">February 2010</FONT></B></A><BR>
        <FONT
       SIZE="-1" FACE="Verdana"><strong>Aid Issues Top Survey Results; </strong>
       Admissions Watch for 2010.<BR>
      </FONT></P>

 
    	<P><A HREF="jan10.html"><B><FONT SIZE="+1"
       FACE="Verdana">January 2010</FONT></B></A><BR>
        <FONT
       SIZE="-1" FACE="Verdana"><strong>CB&rsquo;s 24th Annual National Admissions Trends Survey Results Economic Stress Ripples Through Admissions Offices; </strong>
       Survey Notes State of Out-of-State Students; 
       <strong>New Programs for a New Decade</strong><strong>.</strong><BR>
      </FONT></P>
 
    	<P><A HREF="dec09.html"><B><FONT SIZE="+1"
       FACE="Verdana">December 2009</FONT></B></A><BR>
        <FONT
       SIZE="-1" FACE="Verdana"><strong>Out-of-State Students, Community College Students Out? </strong>The Ups and Downs of "Phantom App-ers;" 
        <strong>International Affairs; </strong>Sneak Preview from CB's 24th Annual Survey,&nbsp;What Talents or Skills do Colleges   Seek?&nbsp;
        <B>Counselor's Bookshelf</B>; Scholarship Scoops; and<strong> News You Can Use.</strong><BR>
      </FONT></P>
 
      
      <p><a href="nov09.html"><b><font size="+1"
       face="Verdana">November 2009</font></b></a><br />
            <b><font size="-1" face="Verdana">Tuition Up Sharply</font></b><font
       size="-1" face="Verdana">;<b> </b>Admissions Watch;<b> Counselor's
              Corner:</b> New Twists in College Admissions; <b>Counselor's
                Bookshelf</b>; International Affairs; <b>Curriculum Capsules</b>;<b> Financial Matters</b></font></p>
      <p><a href="oct09.html"><b><font size="+1"
       face="Verdana">October 2009</font></b></a><br />
          <b><font size="-1" face="Verdana">Recapping Changes in the Federal
            Dollar</font></b><font size="-1" face="Verdana">;<b> Counselor's
              Corner:</b> <i>THE GREENE REPORT:</i> The Five Major Concerns
              of Parents; <b>Enrollment Trends</b>; Financial Aid Flash, <b>News
                You Can Use</b></font></p>
      <p><a href="sept09.html"><b><font size="+1" face="Verdana">September 2009</font></b></a><br />
          <b><font size="-1" face="Verdana">Roundup of Summer Numbers</font></b><font
       size="-1" face="Verdana">;<b> </b>What's New with <i>U.S. News</i>?; <b>Counselor's Corner:</b> Tours, Tests and Technology; <b>Counselor's
            Bookshelf</b>; Financial Aid Flash, <b>News You Can Use</b></font></p>
      <p>&nbsp;</p></td>
    <td width="9" valign="top">&nbsp;</td> 
    <td width="149" valign="top">
      <p><center>&nbsp;</center></p>
      <p><center>&nbsp;</center></p>
      <p><center>&nbsp;</center></p>
      <p><center><a href="../subscribe/subscribe.html" target="_parent"><font face="Times">
      	<img  src="../resources/01-02/subscribenew.gif" width="149" height="19"  border="0" align="bottom" naturalsizeflag="3" /></font></a>
      </center>
    </p>    </td>
  </tr>
</table>


  <meta name="GENERATOR" content="Adobe PageMill 3.0 Mac" />
  
<!-- InstanceEndEditable -->    
      
      </td>
    </tr>
    <tr>
      <td valign="top" align="center">
      	<br />
        <p>&nbsp;<font size="-1" face="Arial">
        <a href="../indexNew.php">Home</a> |
        <a href="../aboutus/aboutus.html">About  Us</a> | 
        <a href="../subscribe/subscribe.html">Subscribe/Renew</a> | 
        <a href="../contactus/contact.html">Contact Us</a> | 
        <a href="../members/articles.php">Current Issues</a> | 
        <a href="../backissues/index.html">Back Issues</a> | 
        <a href="../visitors/index.html">Visitors</a> |
        <a href="../whogotin/index.html">Who Got In?</a> | 
        <a href="../links/links.html">Links/Resources</a>
        </font></p>
   	<a href="../privacypolicy.html"><font size="-1" face="Arial">Privacy Policy/Terms of Service</font></a><font size="-1" face="Arial"><br />

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
          <a href="mailto:rcsautter@aol.com">editor@collegeboundnews.com</a></font><br /><br />			</td>
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
mysql_free_result($Recordset1);
?>
