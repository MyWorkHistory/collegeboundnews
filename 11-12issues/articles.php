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
.style1 {font-weight: bold}
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
            <li><a href="articles.php">Curre<span class="style1"></span>nt Issues</a></li>
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
      <p><b><font color="#3366cc" size="+2" face="Arial">2011-2012
      Issues<br />
      </font><font color="#3366cc" size="+1" face="Arial">Volume 26</font></b></p>

      <p><b><font color="#3366cc" size="-1" face="Verdana">If you need
        to renew your subscription call 773-262-5810, or subscribe on
        this website, www.collegeboundnews.com. (The subscriber access codes changed September 15.) Thank you. Have a great school year.<br />
        <br />
				Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
        </font></b></p>
      <hr /> 

       	<P><a href="June12.pdf"><b><font size="+1" face="Verdana">June 2012</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong>Tech Talk</strong>: From   &quot;How 'Techy' Are Today's Students?&quot; to New Apps and Online Courses. <strong>Year-End Ad Watch:</strong> From College Profiles to New Three-Year   Degrees. <strong>CB Goes to EWA</strong>: From Reports on What   Makes   College Students Succeed to the   Latest Opinions on College Spending. <strong>Curriculum Capsules</strong>: From   Music to Arab Studies. <strong>The Counselor's Bookshelf.</strong> Tuition Tabs.   And, of course <strong>News You Can Use</strong>!<br />
       	</P>

       	<P><a href="May12.pdf"><b><font size="+1" face="Verdana">May 2012</font></b></a><br />
       	  <strong>Feature   Articles</strong>: Wait Lists and Other   Trends: From the U. of Chicago to Princeton and   UNC; California Bound: A look at the latest state stats.&nbsp;The <strong>Counselor's Corner</strong>: Six Spring Studies (and a Resource or   Two).&nbsp;<strong>The Counselor's Bookshelf.</strong> Financial Affairs and, of   course,&nbsp;<strong>News You Can Use </strong>on Civic Learning, the   Common Application and Scholarship Scoops.<br />
       	</P>

       	<P><a href="Apr12.pdf"><b><font size="+1" face="Verdana">April 2012</font></b></a><br />
       	  <strong>Feature Articles</strong>: Admissions Watch: Early   Returns from Select Schools; Results of Student Hopes and Dreams Survey. <strong>Community College Updates--</strong>Reports and New Programs. <strong>Curriculum   Capsules</strong> on new programs in civil engineering, sciences and applied   psychology. <strong>Scholarship Scoops </strong>that look global and local<strong>. News You   Can Use </strong>on the GRE and more.<br />
       	</P>


       	<P><a href="Mar12.pdf"><b><font size="+1" face="Verdana">March 2012</font></b></a><br />
       	  <strong>Feature Articles</strong>: Admissions Trends 2012: In the Ivies and Beyond including state news, tuition tabs and scholarship scoops. <strong>College Costs Quandary</strong> with reports on college savings, tuition,   endowments and student debt<strong>. The Counselor&rsquo;s Corner: <em>CB</em></strong> Survey Results on   Gender and Minority Affairs.&nbsp; <strong>International Affairs. </strong>Graduation   Rates<strong>:</strong> More from <em>CB</em>'s Survey. <br />
       	</P>

       	<P><a href="Feb12.pdf"><b><font size="+1" face="Verdana">February 2012</font></b></a><br />
       	  <strong>Feature Articles</strong>:  "Rush to Early" and "Parental Pushback," Trends Cited in <em>CB's</em> 26th Annual National College Admissions Survey; 
       	  <strong>The Financial Picture, Application Trends, Wait Lists and Class Sizes:</strong> The Early Picture; 
       	  <strong>The Counselor's Corner:</strong> Updates on New Programs or Majors and Merit Scholarships; 
       	  <strong>Short Takes </strong>on a Tuition Guarantee and a Test Optional School;
       	  <strong>Admissions Watch:</strong> Boston U., Northwestern U. and other Top Universities.        </P>
       	<P><a href="Jan12.pdf"><b><font size="+1" face="Verdana">January 2012</font></b></a><br />
       	  <strong>Feature Articles</strong>: New Year Roundup of Financial Affairs, Tax Breaks to Recession Rebates; 
          <strong>Early Admissions Watch,</strong> Columbia to Yale; 
          <strong>Other Admissions News</strong>; Sneak Preview of CB's Survey Results, Advice from Admissions Officers; 
          <strong>Curriculum Capsules</strong>, Enrollment Trends;   and, News You Can Use including a scholarship scoop or two</P>

       	<P><a href="Dec11.pdf"><b><font size="+1" face="Verdana">December 2011</font></b></a><br />
       	  <strong>Feature Articles: </strong>The Early Birds Turn to College, Bowdoin to Yale; 
          <strong>Education Writers Meet at UCLA on Higher Education Trends, First-Year Students at a Glance; </strong>Enrollment Trends; 
          <strong>The Counselor's Bookshelf;</strong> Scholarship Scoops; <strong>And, Curriculum Capsules, California to Maine. </strong> </P>

       	<P><a href="Nov11.pdf"><b><font size="+1" face="Verdana">November 2011</font></b></a><br />
       	  <strong>Feature Articles: </strong>Financial Matters Top News with reports on the latest on the Federal Dollar, New College Cost Initiatives and State Stresses. 
          <strong>Enrollment Trends 2011: </strong>spot checks on schools. <strong>The Counselor's Corner:</strong> Aspects of student life. The   Counselor's Bookshelf.&nbsp;<strong>Minority Affairs, </strong>Scholarship Scoops. And,<strong> News You Can Use. </strong>
        </P>


       	<P><a href="Oct11.pdf"><b><font size="+1" face="Verdana">October 2011</font></b></a><br />
       	  <strong>Feature Articles: </strong>Higher Education Nation (Reports from NBC's Education Summit); <strong>&ldquo;Tweeking&rdquo; 
          the Admissions Process</strong> (New Policies and Programs Impacting the Admissions Process); <strong>The Counselor's Corner:</strong> 
          The Greene Report; <strong>Scholarship Scoops</strong>; The Counselor's Bookshelf; <strong>Curriculum Capsules</strong> and News You Can Use
          <strong>.</strong>
        </P>
       	<P><a href="Sept11.pdf"><b><font size="+1" face="Verdana">September 2011</font></b></a><br />
       	    <strong>The Economy Impacts&nbsp;Admissions:</strong> Colleges Hold On; Debt Deal Spares Most Student Aid; Student Debt; Loan Bubble: Enrollment Overall.&nbsp;<strong>Fall Admissions </strong><strong>Watch</strong>: Brandeis&nbsp;to Oregon to Wabash and more.&nbsp;<strong>The Counselor's Corner on the Internet Generation.&nbsp;</strong><strong>The Counselor's Bookshelf</strong><strong>: </strong>Guides and College Prep.&nbsp;<strong>International Affairs,</strong>&nbsp;<strong>Curriculum </strong><strong>Capsules </strong>and<strong> </strong>&nbsp;<strong>News You Can Use.</strong></P>
       	<P>&nbsp;</P></td>
    <td width="9" valign="top">&nbsp;</td> 
    <td width="149" valign="top">
      <p><center>&nbsp;</center></p>
      <p><center>&nbsp;</center></p>
      <p><center>&nbsp;</center></p>
      <p><center><a href="../subscribe/subscribe.html" target="_parent"><font face="Times">
      	<img  src="../resources/01-02/subscribenew.gif" width="149" height="19"  border="0" align="bottom" naturalsizeflag="3" /></font></a>
      <p>
      	<a href="http://www.adobe.com/products/acrobat/readstep2.html"><font size="-1" face="Verdana">
        <img src="../resources/allcommon/get_adobe_reader.gif"  align="bottom" border="0" width="112" height="33" naturalsizeflag="3" /></font></a>      </p>
                
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
        <a href="articles.php">Current Issues</a> | 
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
