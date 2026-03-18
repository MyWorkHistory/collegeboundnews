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

      <p><b><font color="#3366cc" size="+2" face="Arial">2013-2014

      Issues<br />

      </font><font color="#3366cc" size="+1" face="Arial">Volume 28</font></b></p>



      <p><b><font color="#3366cc" size="-1" face="Verdana">If you need

        to renew your subscription call 773-262-5810, or subscribe on

        this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />

        <br />

				Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  

        </font></b></p>

      <hr /> 



       	<p><a href="June14.pdf"><b><font size="+1" face="Verdana">June 2014</font></b></a><br />

       	  <strong>Feature Articles</strong>:&nbsp;As We Head into Summer: <strong>Admissions Numbers Add Up in the   States:</strong>&nbsp;From the Midwest to the East to the West.&nbsp;<strong>New Takes on   Tuition</strong>: Where You Will Find Tuition Discounts. <strong>A Tuition   Sampler:</strong> The Latest Numbers from a Sampling of Schools.&nbsp;<strong>The   Counselor's Corner</strong>: Year-End Food for Thought. Plus, a Link&nbsp;to Find Out   Where Schools Have Openings.&nbsp;<strong>The Counselor's Bookshelf</strong>: New   Books and What People are Talking About.&nbsp;<strong>Curriculum Capsules</strong>:   From Politics to Law to Civics.&nbsp;<strong>Scholarship Scoops</strong>: For   Students in the Stem Fields and Other High Achievers.&nbsp;N<strong>ews You Can   Use:</strong> On Where We are&nbsp;After Brown v. The Board of Education. Where   Fraternities are Banned and the Last Word on the Undergraduate Experience</p>       

 

       	<p><a href="May14.pdf"><b><font size="+1" face="Verdana">May 2014</font></b></a><br />

       	  <strong>Feature Articles</strong>:&nbsp;Admissions&nbsp;Watch:&nbsp;<strong>Who Got In?   2014.</strong>&nbsp;From   Amherst to Wellesley.&nbsp;<strong>Minority   Affairs</strong><strong>:</strong> From Affirmative Action to Post   Affirmative Action to Minority&nbsp;Trends.&nbsp;<strong>The Counselor's   Corner</strong><strong>:</strong> New Trends to Watch.&nbsp;<strong>The Counselor's   Bookshelf</strong><strong>:</strong> New Books, Guides and a&nbsp;Financial Planning   Resource.<strong>Curriculum   Capsules</strong>:   On Nursing to New&nbsp;Online Programs.&nbsp;<strong>Dwindling   Demographics:</strong>&nbsp;Its Impact on&nbsp;Colleges,&nbsp;as We Speak.&nbsp;<strong>News You Can   Use:</strong>&nbsp;From&nbsp;Degrees&nbsp;Attainment to a&nbsp;Scholarship   Scoop.&nbsp;<strong>Comings and Goings</strong><strong>.</strong></p>       



       	<p><a href="Apr14.pdf"><b><font size="+1" face="Verdana">April 2014</font></b></a><br />

       	  <strong>Feature   Articles</strong>: People are   Talking About&hellip;<strong>The New SAT Pros and   Cons</strong>. From California to Washington: <strong>What is the State News? </strong>From Brown to   Princeton: <strong>What is the Early News on   Admissions Spring 2014?</strong> What We Learned During the NCAA Tournament. <strong>The Counselor&rsquo;s Corner</strong>: New Programs   for a New Age. <strong>The Counselor&rsquo;s   Bookshelf</strong>: Publications and Web Sites. <strong>Scholarship Scoops</strong>: College   Savings Plans, Scholarships for Studying Agriculture and STEM Fields. <strong>Campus Life</strong>: New Campuses, New   Colleges. <strong>News You Can Use:</strong> On Gap Years, Liberal Arts, Online Learning   and Much More!</p>       



       	<p><a href="Mar14.pdf"><b><font size="+1" face="Verdana">March 2014</font></b></a><br />

       	  <strong>Feature   Articles</strong>: <strong>Who is Up, Who is Down?</strong> An Admissions   Watch on the State of Applications Around the Country. <strong>Early Admits In</strong>: How Are Early   Admissions Shaping Up? <strong>California   Dreaming</strong>: How Many Students Actually Applied to the California Campuses? <strong>A News Flash:</strong> Financial Aid News on   Increased Need, Need-Based Changes, Tuition Freezes and More. <strong>Who Got In?</strong> More Profiles from <em>COLLEGE BOUND&rsquo;s</em> Annual Survey of Admissions. <strong>Scholarship Scoops</strong>: On Dream Scholarships, Honors College Scholarships   and More. <strong>Curriculum Capsules</strong>: Dual   Enrollment, General Education Facelifts, Engineering and Changes at UMass   Boston. <strong>An</strong> <strong>International   Affair:</strong> What Mexico Proposes. <strong>News You Can Use:</strong> On STEM, Charitable   Contributions and the Common App.</p>       



       	<p><a href="Feb14.pdf"><b><font size="+1" face="Verdana">February 2014</font></b></a><br />

       	  <strong>Feature   Articles</strong>: <strong>News on Data, the FAFSA and Aid</strong>: New   Initiatives, Tips and Programs. <strong>Admissions Watch</strong>: From Cleveland to   Maine, Florida to California. <strong>Who Got   In?</strong> An Early Look at <em>COLLEGE   BOUND&rsquo;s</em> Annual Survey of&nbsp; Admissions Trends with Profiles of Five Colleges. <strong>Scholarship Scoops</strong>: From Agriculture   to STEM and Info on a New Scholarship for Middle Class Families. <strong>Campus Life:</strong> Where There Are Bikes,   Trees, Snow and Tours. <strong>International   Affairs:</strong> In the United Kingdom and Israel. <strong>News You Can Use:</strong> On&nbsp;Tests and&nbsp;Studies   Impacting Students.</p>       



       	<p><a href="Jan14.pdf"><b><font size="+1" face="Verdana">January 2014</font></b></a><br />

       	  <strong>Feature Articles:</strong> <strong>Early Results   of Some Early Apps:</strong> From Boston to   Colorado and Back. <strong>Enrollment Trends:</strong> Where Fall College   Enrollment was Down, or Up. Who is Looking for Stem Applicants? What is the   Status of Minority and First-Generation Enrollments? <strong>Admissions Watch:</strong> New Agreements, and   Initiatives. <strong>The Counselor's&nbsp;Corner:</strong> Managing a College-Going Culture:&nbsp; Do   Majors Matter? What are Colleges Looking for? Are Colleges Really Looking at   Facebook? And New Financial Aid Tools. <strong>The Counselor's Bookshelf:</strong> Who is   Likely to Do Well in Academics? Where in Latin   America are the Top Universities? <strong>Financial Aid Updates</strong>:   Does   College Payoff? Is Debt Still   Climbing? And Where Might There be New Sources of Financial Aid? <strong>News You Can Use</strong>: A Sports Beat. A   Summer Program. And Who is Using Web Courses.</p>       



       	<p><a href="Dec13.pdf"><b><font size="+1" face="Verdana">December 2013</font></b></a><br />

       	  <strong>Feature Articles:</strong> <strong>New Trends in International Affairs:</strong> Who is Studying in the   U.S., Who is   Studying Abroad. And Where There are New Programs. <strong>Financial News</strong>: Who is Targeting   Low-Income Students and Where There are Cutbacks. <strong>Admissions Watch:</strong> New Admissions   Options, New Requirements and New Enrollment Problems. <strong>The Counselor&rsquo;s Corner:</strong> New Initiatives   for Preparing Students and Getting Them to Apply to College. <strong>The Counselor&rsquo;s Bookshelf:</strong> Resources   for Paying for College and, Yes, New Rankings. <strong>Scholarship Scoops</strong>: Awards for   Determination, Sportsmanship and Students with Special Needs. <strong>Curriculum Capsules:</strong> New Programs for a   New World. <strong>News   You Can Use</strong>: New Test Dates and the State of   Science and Engineering Degrees</p>       

      

       	<p><a href="Nov13.pdf"><b><font size="+1" face="Verdana">November 2013</font></b></a><br />

       	  <strong>Feature Articles</strong>: The Latest Reports on   Where Tuition is Up... And Where Tuition is Kept at Bay. <strong>Online   Admissions Hit a Few Snafus:</strong> A Word on the Common Application and   College Navigator.<strong> Admissions Watch:</strong> Where Yield was Higher   Than Expected and Where Legacies Count.<strong> The Greene Report: </strong>What   Howard and Matthew Greene Have to Say About Calming the Application   Process.<strong> New Scholarship Scoops: </strong>From Terrorism Studies to   Classical Music.<strong> </strong> <strong>Curriculum Capsules:</strong> Where   are There New Programs in Creative Writing, Legal Studies and &quot;Socially   Responsible&quot; Business. <strong>News You Can Use</strong>: Where are the Hot   Careers? Who is Getting Computer Degrees, or Not? How are Demographics Impacting   the Colleges in Ohio? And, What is the Latest Word on the American Dream and the   Last Word on Saving for College.</p>       

      

       	<p><a href="Oct13.pdf"><b><font size="+1" face="Verdana">October 2013</font></b></a><br />

       	  <strong>Feature Articles</strong>: <strong>The</strong> <strong>Early Word on the Class of 2017</strong>: Inside Admissions Offices from   Massachusetts to California. <strong>Financial Affairs News: </strong>From Grants   to Loans to a Tuition Tab. <strong>The Counselor's Corner:</strong> A Focus on   the Admissions Process including News from NACAC, New Programs for Low-Income   Students and New Aid Sources. <strong>The Counselor's Bookshelf</strong>: A   Guide or Two and a New Book or Two Hot Off the Press. <strong>Curriculum   Capsules:</strong> Colleges with New Programs in Business, Computing and the   Environment<strong>.</strong> <strong>Enrollment Trends</strong>: In Community   Colleges and at Graduate Schools. <strong>News You Can Use</strong>: Who has the   Top Entrepreneurial Programs? And What Did the College Board Say About the   Latest Sats?</p>       

      

       	<p><a href="Sept13.pdf"><b><font size="+1" face="Verdana">September 2013</font></b></a><br />

       	  <strong>Feature Articles</strong>: <strong>Summer Admission Stories Summary</strong>:   Reports on the News Over the Summer, Summer Melt, Financial Aid Updates and   International Affairs. <strong>Federal Dollar   News</strong> Looks at President Obama&rsquo;s New Plan for Higher Education. Also, New   Reports   Center on the Federal Debt and the   Impact of Federal Aid on College Costs. <strong>The Counselor's Corner </strong>Takes &ldquo;a Look at   the Forest&rdquo; Before We Focus on the Trees with Reports on   Overall Enrollment Trends. <strong>The   Counselor's Bookshelf</strong> Examines New Items Hot of the Press. 

          <strong>Curriculum Capsules</strong> Includes Items   about Film   Schools,   STEM Initiatives and New Majors and Degrees. 

          <strong>Tech Talk</strong>: What Students and Parents   Say about the Use of Technology. <strong>News   You Can Use</strong>: What Did the Supreme Court Say This Summer about Diversity?   Where Can Illegal Immigrants Go to School? Plus, What Were the Employment Stats   for Recent College Grads. </p>

       

       	<p>&nbsp;</p></td>

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

