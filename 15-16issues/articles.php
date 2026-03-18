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

<meta name="DESCRIPTION" content="Up-to-date reporting on the college admissions opportunities and financial aid issues that affect millions of high school students and their parents each admissions season.">

<meta name="KEYWORDS" content="college,university,higher education,college admissions,financial aid,federal aid,grants,scholarships,merit scholarships, college tuition,admissions,counseling,advice,B.A.,accepted,diversity,trends,surveys,test scores,standardized tests,ACT,SAT,advisor,application,applications,campus,enrollment,curriculum,graduation,graduation rates,College Admissions Advisor,529 college savings plans,college essay,freshman,freshmen,high school students,seniors,minority students">

<meta name="GENERATOR" content="Adobe PageMill 3.0 Mac" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<link rel="SHORTCUT ICON" href="../favicon.ico">



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

      <p><b><font color="#3366cc" size="+2" face="Arial">2015-2016

      Issues<br />

      </font><font color="#3366cc" size="+1" face="Arial">Volume 30</font></b></p>



      <p><b><font color="#3366cc" size="-1" face="Verdana">If you need

        to renew your subscription call 773-262-5810, or subscribe on

        this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />

        <br />

				Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  

        </font></b></p>
        
      <hr /> 

       	<p><a href="June16.pdf"><b><font size="+1" face="Verdana">June 2016</font></b></a><br />
       	</p>       
        	<div><strong>FEATURE ARTICLES: Admissions Watch: </strong>The Year-End Report,<strong> </strong>Statistics from DePaul to   Wellesley.<strong> Financial Affairs:</strong> Does Federal Aid Simply Encourage Tuition   Increases? Spending Still Below Pre-Recession Levels.<strong> </strong><strong>Enrollment Trends:</strong> College Completion   Rates. Top Transfer Institutions. Ivy Discrimination? <strong>The Counselor's Corner: </strong>Tuition Tabs for the Fall at Boston   C. to William &amp; Mary.<strong> Counselor's Bookshelf</strong>: Class and Campus Life.   New Application Tools.&nbsp;<strong>Curriculum Capsules:</strong> A Range of New Programs from   Transdisciplinary Studies in Technology to Sports Fitness, Recreation and   Coaching. <strong>News You Can Use:</strong> Hiring Prospects   for 2016 Graduates. Last Minute Openings at Scores of   Colleges.</div>
        	<hr />      

       	<p><a href="May16.pdf"><b><font size="+1" face="Verdana">May 2016</font></b></a><br />
       	</p>       
        	<strong>FEATURE ARTICLES: Admissions Match Month: </strong>From Massachusetts to Texas. <strong>Update on the Claremont Colleges: </strong>Admit Rates and   Demographics<strong>. </strong><strong>Enrollment   Trends:</strong> The Wait List Limbo and China's College   Population. <strong>The Counselor's Corner: </strong>Follow the Aid: New Grants and   Loan Programs at Colleges, Plus Reports on Funding and Financial Aid Strains<strong>.   Counselor's Bookshelf</strong>: Two New Resources. <strong>Curriculum Capsules:</strong> A Range of   New Programs from Financial Economics to Neuroscience. <strong>News You Can Use:</strong> Reports on New Test-Optional   Colleges and a Tuition Freeze.
        	<hr />      

       	<p><a href="Apr16.pdf"><b><font size="+1" face="Verdana">April 2016</font></b></a><br />
       	</p>       
        	<strong>Feature Articles: Who Will Be In the Class of 2020? </strong><strong>Early   Reports on Admits from the Privates to the Publics</strong>.<strong> State of the 2020 Applications:</strong> Some Causes and   Effects. <strong>Enrollment Trends:</strong> Do Video   Applications Work? What Percentage of Students are Graduating from College? <strong>The Counselor's Corner: </strong><strong>Frank C. Leana Wonders   about the Gallimaufry in Admissions. Counselor's   Bookshelf</strong>:   Three New Books on Higher Education Reform and Another About the Problem of   Drinking on Campus. <strong>International Affairs</strong>: From Cuba to Canada to   Scotland. <strong>Curriculum Capsules:</strong> New Programs in Urban Affairs,   Public Health, Law and General Ed. <strong>And, News You Can Use:</strong> The   Chivas Regal Strategy, What are the Risks and Rewards of Student Loans? And,   What is the Trend in the Humanities?
        	<hr />      

       	<p><a href="Mar16.pdf"><b><font size="+1" face="Verdana">March 2016</font></b></a><br />
       	</p>       
        	<strong>Feature   Articles: Colleges Reach for New Pool of Applicants:</strong> Increasing   Outreach, Creating New Marketing Strategies and Launching&nbsp;&quot;Red Envelope&quot;   Campaigns.<strong>&nbsp;Stats from the States:</strong> Applications Up from Illinois   to Virginia<strong>. Financial Affairs:</strong> New&nbsp;Reports, Record Charitable   Contributions and State of Student Loans and Defaults.&nbsp;<strong>The Counselor's Corner: </strong>What   Impacts the Admissions Process?&nbsp;<strong>Counselor's Bookshelf</strong>: On   Athletics, Classifications and Hispanic-Serving Institutions. <strong>Curriculum   Capsules:</strong> New Program and What Students Read on Campus.&nbsp;<strong>And,   News You Can Use:</strong> New Test-Optional Schools, Program to Address Sexual   Assault on Campus as well as the&nbsp;Outlook for Jobs and Law Schools
        	<hr />      

       	<p><a href="Jan16.pdf"><b><font size="+1" face="Verdana">January 2016</font></b></a><br />
       	</p>       
        	<strong>Feature Articles:&nbsp;Admissions   2016 Begins!&nbsp;</strong>And   Early Application Rates Decline at a Number of Colleges<strong>.&nbsp;Enrollment   Trends: </strong>From Georgia to New York and In Between.   Also, National and International Trends in the New Year.&nbsp;Plus, More Fall 2015   Enrollment Numbers.&nbsp;<strong>The Counselor's   Corner:&nbsp;</strong>On   Financial Affairs in the States and for Those Abroad. <strong>The Counselor's   Bookshelf:&nbsp;</strong>New Titles Arriving for the New   Year.<strong> The Federal Elementary and Secondary Act   Renewed. </strong>What it Means<strong>.&nbsp;A Scholarship Scoop: </strong>Or   Two.&nbsp;<strong>And, News You Can Use:</strong> From New MOOCs to&nbsp;New Programs.
				<hr />      

       	<p><a href="Feb16.pdf"><b><font size="+1" face="Verdana">February 2016</font></b></a><br />
       	</p>       
        	<strong>Feature   Articles: Admissions Watch: New Programs and New Financial Aid Initiatives Spur   Applications. </strong>From California to Massachusetts the Applications Numbers   are In.<strong> Inside the College Campus: </strong>More on the Class of 2019. <strong></strong><strong>The   Counselor's Corner: </strong>On Financial Affairs. <strong>A Scholarship Scoop: </strong>Or Two. <strong>Enrollment Trends:</strong> In the States and Out of   the Country. <strong>Curriculum Capsules:</strong> New Majors and Programs. <strong>And, Quality Counts:</strong> Highlights of a New Report on Education in   the States
        	<hr />      

       	<p><a href="Jan16.pdf"><b><font size="+1" face="Verdana">January 2016</font></b></a><br />
       	</p>       
        	<strong>Feature Articles:&nbsp;Admissions   2016 Begins!&nbsp;</strong>And   Early Application Rates Decline at a Number of Colleges<strong>.&nbsp;Enrollment   Trends: </strong>From Georgia to New York and In Between.   Also, National and International Trends in the New Year.&nbsp;Plus, More Fall 2015   Enrollment Numbers.&nbsp;<strong>The Counselor's   Corner:&nbsp;</strong>On   Financial Affairs in the States and for Those Abroad. <strong>The Counselor's   Bookshelf:&nbsp;</strong>New Titles Arriving for the New   Year.<strong> The Federal Elementary and Secondary Act   Renewed. </strong>What it Means<strong>.&nbsp;A Scholarship Scoop: </strong>Or   Two.&nbsp;<strong>And, News You Can Use:</strong> From New MOOCs to&nbsp;New Programs.
				<hr />      


       	<p><a href="Dec15.pdf"><b><font size="+1" face="Verdana">December 2015</font></b></a><br />
       	</p>       
        	<strong>Feature   Articles:&nbsp;More Fall 2015 Enrollment Trends: </strong>From   New Spring Semester Admissions to Welcoming Record Size   Classes<strong>.&nbsp;The Early Rush in Applications and a Glitch   or Two With Electronic Reporting.&nbsp;&nbsp;</strong><strong>&nbsp;</strong>The State of the Enrollment of International   Students<strong><em> &nbsp;</em>The   Counselor's Corner: </strong>Year-End Financial Matters&nbsp;From   New Grants and Scholarships to News From the Federal Government.&nbsp;<strong> The Counselor's Bookshelf: </strong>From New Web Sites on   Study Abroad Info to Princeton Reviews Top Entrepreneurship Programs. <strong>Curriculum Capsules</strong>:&nbsp;New Programs on Engineering, Biomathematics, Middle Eastern/North   African Studies,&nbsp;Digital Media and More.&nbsp;<strong>And, News You   Can Use:</strong> On New Programs for International High School   Students to a New University Stem Coalition.
        	<hr />      


       	<p><a href="Nov15.pdf"><b><font size="+1" face="Verdana">November 2015</font></b></a><br /></p>       
        	<strong>Feature   Articles:&nbsp;A Look Inside the States: </strong>Admissions   Profiles from Connecticut to Wisconsin. &nbsp;<strong>The   New Admissions Requirements: </strong>States   Changing Requirements and Admissions Criteria.<strong> The New College Coalition   Promises Improvement in the Admissions Process. </strong>(And What One Critic Has to   Say.)<strong> A Snapshot of What Admissions Looks Like This Fall Among Private   Colleges: </strong>From &quot;Classzillas&quot; to Legacies<strong>. The Counselor's Corner: </strong>Tracking the Federal Dollar<strong>. A Word (or Two) About the Colleges Adopting   New Test Optional Policies: </strong>From the Privates to the Public.<strong> The   Counselor's Bookshelf: </strong>From Guides to an Article on SAT Prep.<strong> And, News   You Can Use:</strong> On The Latest National Report Card to&nbsp;Info on Canada's New   Online Portal to Reports on Race and Homeless Students.
        	<hr />      

       	<p><a href="Oct15.pdf"><b><font size="+1" face="Verdana">October 2015</font></b></a><br /></p>       
        	<strong>Feature   Articles:&nbsp;</strong>Enrollment Scene Changes in Fall 2015:&nbsp;Profiles   of Colleges From East to West.&nbsp;<strong>The New FAFSA Rules and Other Financial   News: </strong>On Tuition Resets and New Financial Aid Options.&nbsp;<strong>The   Annual&nbsp;Greene Report</strong>:<strong> </strong>&quot;Hurry Up... And   Wait.&quot;&nbsp;<strong>Counselor's Bookshelf:</strong> On Colleges That Create Futures,   Enrollment and Advancement and a New Website Aimed at 
	        Improving College Applications.&nbsp;<strong>Scholarship   Scoops:</strong> New Resources for Students.<strong>&nbsp;Curriculum Capsules: </strong>On Fashion, Nursing and&nbsp;Business.&nbsp;<strong>And,</strong> <strong>News   You Can Use: </strong>On The State of Student Proficiency to Athletics, Survey of Students and ... What   Doesn't the&nbsp;Class of 2019 Know?

				<hr />      

       	<p><a href="Sept15.pdf"><b><font size="+1" face="Verdana">September 2015</font></b></a><br />
       	  <strong>Feature   Articles:</strong> The Class of 2019 Sets New Records: From   Massachusetts to Texas. <strong>The Military Academies:</strong> The State of   the Classes&nbsp;That Showed Up&nbsp;This Summer. <strong>Enrollment Trends</strong>: Who   Didn't Go to College, Minority Application Patterns and the Outlook in Community   Colleges.&nbsp;<strong>The Counselor's Corner:</strong> A Roundup of Summer Studies. <strong>Counselor's Bookshelf:</strong> On Summer Melt, the ACT, How College   Works and What Employers Want Students to Learn. <strong>Financial   Aid Update: </strong>On Student Debt, Improving FAFSA, &quot;Best&quot; Colleges and a   Scholarship Scoop.<strong>&nbsp;International Affairs: </strong>Reports on Asian   Universities.&nbsp;<strong>News   You Can Use: </strong>  From&nbsp;News on Test Optional Schools to&nbsp;Drone Education. Yes, It's True!</p>       
      	<hr />



       	<p>&nbsp;</p>
      </td>

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



          <script>

						<!--

							var year = new Date();

							year = year.getYear();

							if (year<1900) 

								year+=1900						

		

							cpy = "&copy; " + year + " COLLEGE BOUND Publications Inc.";

							document.write(cpy);

						//-->

						</script> 



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

