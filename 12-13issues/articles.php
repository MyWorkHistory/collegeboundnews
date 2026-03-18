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
      <p><b><font color="#3366cc" size="+2" face="Arial">2012-2013
      Issues<br />
      </font><font color="#3366cc" size="+1" face="Arial">Volume 27</font></b></p>

      <p><b><font color="#3366cc" size="-1" face="Verdana">If you need
        to renew your subscription call 773-262-5810, or subscribe on
        this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
        <br />
				Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
        </font></b></p>
      <hr /> 
      
       	<P><a href="June13.pdf"><b><font size="+1" face="Verdana">June 2013</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong>Where   Things Stand</strong>: Loans, Debts and 529s. <strong>Yield Action</strong>:   From Brown U. to the U. of Chicago. <strong>The Counselor's Corner:</strong> Why   Travel to Scotland for College? <strong>The Counselor's Bookshelf:</strong> Items to Send with College Bound Students. <strong>State News</strong>: From   East Carolina to Wyoming. <strong>And, News You Can Use</strong>: Spring   Enrollment Numbers, Hispanic College Rates and Dual Enrollment Benefits.</P>
       
       	<P><a href="May13.pdf"><b><font size="+1" face="Verdana">May 2013</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong><em>Who Got In</em>? Record Rejectons:</strong> The May Roundup of Admissions News from   Amherst to Williams. <strong>Tuition Tabs</strong>: Who is Holding the Line,   Who is Giving More Aid. <strong>The Counselor's Corner</strong>: It&rsquo;s the Economy:&nbsp;How the   Economy is Impacting Higher Education, Students and Families. <strong>The Counselor's   Bookshelf: </strong>A New Tool and New   Rankings.<strong> News You Can Use</strong>: Reports on the Contributions Colleges   Make to a Community, the Traits of Successful Schools and Who Stays in School.</P>
            
       	<P><a href="Apr13.pdf"><b><font size="+1" face="Verdana">April 2013</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong>Inside Admissions   Offices</strong>: Spring Roundup of Admissions News from Boston to Texas. <strong>NCAA Stats That Caught Our Eye</strong>: The Impact of an NCAA   Appearance. <strong>Who Got In?</strong> A Spot Check of Ivy League Numbers. <strong>The Counselor's Corner</strong>: Ways to Save Tuition. <strong>The   Counselor's Bookshelf:</strong> New Books and What People Are Talking About. <strong>Curriculum Capsules</strong>: New Criminal Justice and Community Health   Programs. <strong>News You Can Use</strong>: The Impact of the Sequestration,   Family &quot;Hopes and Worries,&quot; Changing Trends in Admissions and a New Scholarship   for Students from the Americas.</P>

       	<P><a href="Mar13.pdf"><b><font size="+1" face="Verdana">March 2013</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong>New   Programs in the States</strong>: New Resources in Connecticut to Texas Calling   Engineering Students. <strong>A<strong>d   Watch:</strong></strong> Where Applications are Up. <strong>Financial Matters</strong>: College Endowments   Down, Fund Raising Slows and How to Get the New Scorecard. <strong>The Counselor&rsquo;s Corner:</strong> Who Got In? <em>CB</em>&rsquo;s Annual Survey, Plus Advice from   Admissions Offices and Tuition Tabs. <strong>Curriculum Capsules</strong>: New   Majors and a Scholarship or Two. <strong>Testing   Tabs</strong>. And, of course <strong>News You Can Use</strong>!</P>

       	<P><a href="Feb13.pdf"><b><font size="+1" face="Verdana">February 2013</font></b></a><br />
       	  <strong>Feature   Articles</strong>: <strong>Admissions Watch</strong>: From Babson C. to Williams   C. <strong>State News Alerts:</strong> Projections on Growth and Declines,&nbsp;State   Programs on Financial Aid and&nbsp;Trends to Watch in the States. <strong>Financial   Affairs</strong>: Moody's Outlook on Tuition,&nbsp;Are Net Price Calculators Working? <strong>Who Got In?</strong> Enrollment Trends from <em>CB</em>'s Annual Survey. <strong>New Programs and Majors: </strong>From Chinese Literature to   Architectural Engineering.<strong> </strong>&nbsp;<strong>Curriculum   Capsules</strong>: From Biological Sciences to Global Climate Change. <strong>Online U News</strong>. Are Online Programs Growing? Who Has the &quot;Best&quot;   Programs? And, <strong>News You Can Use</strong> including Scholarship Scoops.</P>
      
      
       	<P><a href="Jan13.pdf"><b><font size="+1" face="Verdana">January 2013</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong>Who Got In   Early?</strong> From Barnard to Yale.&nbsp;<strong>Financial Affairs</strong>: From   the Latest Word on College Loans to Who Uses 529? <strong>Inside Financial   Aid</strong> <strong>Offices:</strong> Tuition Resets to Scholarship Scoops. <strong>The Counselor's Corner:</strong> Enrollment Ups and Downs. <strong>A   Roundup of Recent Rankings: </strong>Some New Twists on College Comparisons. <strong>Curriculum Capsules</strong>: From the Arts to&nbsp;Medical Humanities. And,   of Course, <strong>News You Can Use</strong><strong>.</strong></P>

       	<P><a href="Dec12.pdf"><b><font size="+1" face="Verdana">December 2012</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong>College Admissions Goes Global</strong>. New   Reports on International Students on Campus, the Global Talent Pool and   Foreign-born Students. Plus, Global Affairs Around the Globe. <strong>The</strong> <strong>Early Word on Applications</strong>. Enrollment   Trends: Around the Country and on College Campuses. <strong>The Counselor&rsquo;s Corner</strong>: Frank Leana   Provides Ten Steps for Juniors. <strong>Online   U. News</strong>: New Consortiums, Programs and the State of   WGU. <strong>Curriculum Capsules</strong>: From Computer   Science to Middle East Studies. <strong>Scholarship Scoops</strong>. And, News You Can   Use.</P>

       	<P><a href="Nov12.pdf"><b><font size="+1" face="Verdana">November 2012</font></b></a><br />
       	  <strong>Feature Articles</strong>: <strong>News from NACAC</strong>: What About Those Wait   Lists? Other News on the Common App, A Survey of Admission Strategies and Tips   Gleaned from Some of the NACAC Sessions. <strong>The Latest News on College Pricing: </strong>Trends in Tuition and Financial Aid from the College Board.<strong> Early Enrollment Numbers: </strong>From   New York   State to the State of   Washington<strong>. Tuition at Top Schools. </strong>The   Counselor&rsquo;s Bookshelf.<strong> Financial   Affairs</strong>: On College Debt to Colleges with New Aid Programs. <strong>Curriculum Capsules.</strong> And, News You Can   Use.</P>

       	<P><a href="Oct12.pdf"><b><font size="+1" face="Verdana">October 2012</font></b></a><br />
       	  <strong>Feature Articles:</strong> <strong>Election 2012</strong>: What the Presidential   Candidates Have to Say on College Admissions. <strong>The Greene Report</strong>: On the Outlook for   the Coming Year. <strong>Fall Enrollment Inside   the States</strong>: From Arkansas to   Vermont. <strong>Scholarship Scoops</strong>: For Outer Space or   Thinking Local<strong>. A Testing Tab</strong>: A   Closer Look at the SAT Results. <strong>Financial Aid Updates</strong>: Where Tuition   Has Been Slashed and Aid Increased. And, of course, <strong>News You Can Use</strong>: A Couple of   Additional College Rankings<strong>.</strong></P>

       	<P><a href="Sept12.pdf"><b><font size="+1" face="Verdana">September 2012</font></b></a><br />
       	  <strong><strong>Feature Articles</strong></strong>: <strong>Financial Outlook Impacting&nbsp;Admissions:</strong> From Problems Facing   Pell Grants&nbsp;and&nbsp;Private Student Loans&nbsp;to&nbsp;the State of Scholarships and   Savings.&nbsp;<strong>Federal Actions This Summer</strong> and State Financial   News.&nbsp;<strong>Inside Financial Aid Offices</strong>. The Counselor's Corner: <strong>Inside Irish Universities</strong>, a first-hand report. <strong>Books</strong> hot off the press. And,&nbsp;<strong>Scholarship   Scoops.</strong> <strong>Testing Tabs</strong>: From the ACT to the Science   Report Card. <strong>Curriculum Capsules. </strong>And,&nbsp;<strong>News You Can   Use:</strong> From&nbsp;what schools are doing to combat &quot;summer melt&quot; to the latest   lists of the &quot;most beautiful campuses.&quot;</P>

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
