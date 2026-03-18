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

      <p><b><font color="#3366cc" size="+2" face="Arial">2014-2015

      Issues<br />

      </font><font color="#3366cc" size="+1" face="Arial">Volume 29</font></b></p>



      <p><b><font color="#3366cc" size="-1" face="Verdana">If you need

        to renew your subscription call 773-262-5810, or subscribe on

        this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />

        <br />

				Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  

        </font></b></p>
      <hr /> 


       	<p><a href="June15.pdf"><b><font size="+1" face="Verdana">June 2015</font></b></a><br />
       	  <strong>Feature Articles:</strong> <em>Admissions Watch</em>: Openings, Yields and Wait Lists: From American U. to   Williams.&nbsp;<strong>Financial   Aid Flash: </strong>California Tuition Deal, Merit Aid Questions and Student   Loan Rate Declines.<strong>&nbsp;Enrollment Trends: </strong>Check out Saint   Mary-of-the Woods, Rensselaer Polytechnic, Small Schools, Spring Enrollment   Numbers and the Latest Stat on Male/Female Ratios. <strong>The Counselor's   Corner</strong>:&nbsp;Avoiding Student Loan Scams<strong>. Counselor's Bookshelf: </strong>Books on Colleges That Pay You Back,&nbsp;the Modern Research University and   Best High Schools. <strong>Tuition Tabs: </strong>From Barnard to UVA.<strong> International Affairs: </strong>Reports on Japanese Students and Students in   Canada.<strong> High Stress, High Schools: </strong>A New Report on Student   Life.<strong>&nbsp; </strong><strong>News   You Can Use: On   Changing Majors, Job Market, Student Assessment and School Closings.</strong></p>       
      <hr /> 


       	<p><a href="May15.pdf"><b><font size="+1" face="Verdana">May 2015</font></b></a><br />
       	  <strong>Feature Articles:</strong> People are Talking About... <strong>Who Got In?   2015</strong> From Barnard to Williams, Maine to California. <strong>The Counselor's Corner</strong>: New Financial   Aid and Trends in Community Colleges. <strong>New Test Optional Schools.</strong> <strong>The   Counselor's Bookshelf: New Books </strong><strong>Hot Off the Press</strong>&nbsp;About Where Students   Go..., Colleges as Economic Drivers, a Liberal Education and a Guide, or Two, to   Colleges. <strong>Curriculum Capsules: </strong><strong>New Three-Plus-Four-Year   Program, New Civic Engagement Programs and Tougher New Requirements. News   You Can Use:</strong><strong> Calling Future Teachers   and Reports on Sleep, High School Grads, Foreign College Searches and Who Really   Pays for College, or Not.</strong></p>       
      <hr /> 


       	<p><a href="April15.pdf"><b><font size="+1" face="Verdana">April 2015</font></b></a><br />
       	  <strong>Feature Articles:</strong> Admissions Watch: <strong>First Wave of Admit   Numbers Are In. </strong>Acceptances Announced From Massachusetts to California. <strong>Enrollment Trends:</strong> News on Journalism Programs, Nursing and   Individual Schools. <strong>The</strong><strong>Counselor's Corner:</strong> What Schools are Doing to Hold the Line on College Costs. <strong>The   Counselor's Bookshelf: </strong>Hot Off the Press Items on the Future of   College, The History of Adulthood and Acing the ACT. <strong>Who are Today's   Freshmen? </strong>Items from a National Survey of Freshmen. <strong>And,   Curriculum Capsules: New Methods of Study, New Requirements, and New Subjects to   Study.</strong></p>       

      <hr /> 

       	<p><a href="Mar15.pdf"><b><font size="+1" face="Verdana">March 2015</font></b></a><br />
       	  <strong xzf9="1">Feature Articles:</strong> Admissions Watch: <strong xzf9="1">Apps Surge Amidst Some Planned Declines. </strong>Application News From   California to Massachusetts <strong xzf9="1">.&nbsp;Financial Aid </strong><strong xzf9="1">Flash:</strong> News on Student Loans and Debt Relief, Unused Aid and   New Aid and Tools. <strong xzf9="1">Enrollment Trends:</strong> From Individual   Schools to Nationwide Reports. <strong xzf9="1">The</strong> <strong xzf9="1">Counselor's Corner:</strong> A Roundup of New Curriculum&nbsp;Programs from   Engineering and Chemistry to Hospitality and Broadcasting.&nbsp; <strong>Scholarship</strong> <strong xzf9="1">Scoops:</strong> Aid Info for   Agricultural Students, Catholic Institutions and a Website on Finding Aid for   Students in One State. <strong xzf9="1">Report on the Growth of the Work College   Model.</strong> Profiles of Schools Throughout the Country. <strong xzf9="1">And, News You</strong> <strong xzf9="1">Can Use:</strong> Universities   Consolidate and Reports on the State of Student Skills.</p>       

      <hr /> 
       	<p><a href="Feb15.pdf"><b><font size="+1" face="Verdana">February 2015</font></b></a><br />
       	  <strong>Feature Articles:</strong> <strong>America&rsquo;s Promise: </strong>The Ins and Outs of   President Obama&rsquo;s Call for a New Program to Provide Students With Free Access to   Community College. <strong>Financial   Affairs:</strong> From Granny Aid to Aid in the States. <strong>Financial Aid Flash:</strong> Getting in the   FAFSA and a Look at FAFSA Questions and Possible Revisions. <strong>The</strong> <strong>Counselor's Corner:</strong> New Approaches to Getting In With Interventions and   International Approaches. <strong>The   Counselor&rsquo;s Bookshelf:</strong> New Books Hot off the Press. <strong>Curriculum Capsules:</strong> From Beer, (yes it   is true) and American Indian Studies. <strong>Career Capsules: </strong>Who Needs Skills and   What Employer&rsquo;s Value. <strong>And, News You</strong> <strong>Can Use:</strong> Garnering Alternative Credits   and a Scholarship Scoop.</p>       

      <hr /> 
       	<p><a href="Jan15.pdf"><b><font size="+1" face="Verdana">January 2015</font></b></a><br />
       	  <strong>Feature Articles:</strong> Financial Matters in the New Year: At   Colleges and in the States.&nbsp;<strong>Admissions Watch: </strong>Early   Applications Poured into Admissions Offices This Fall. See the Early   Stats.&nbsp;<strong>Scholarship Scoops:</strong> New Announcements From Organizations   and Colleges.&nbsp;<strong>Enrollment Trends: </strong>Who Was Up, Who Was Down in   Fall 2014<strong>.&nbsp;The</strong>&nbsp;<strong>Counselor's Corner:</strong> Mistakes   Parents Make in Paying for College.&nbsp;<strong>Curriculum Capsules:</strong> New   Majors and Programs in&nbsp;Entrepreneurship, Middle Eastern and North African   Studies and Health Care Advocacy.&nbsp;<strong>International Affairs: </strong>What's   Up in Canada and Around the Globe.<strong>&nbsp;And, News You</strong> <strong>Can Use:</strong> Why Counselors Matter,   Diversity Strategies and Campus Life Issues<strong>.</strong></p>       

       	<p><a href="Dec14.pdf"><b><font size="+1" face="Verdana">December 2014</font></b></a><br />
       	  <strong>Feature   Articles:</strong> THE GREENE   REPORT: Three Trends to Watch in the New Year.&nbsp;<strong>Financial   Affairs:</strong> New Financial Support for Guidance Counseling. New Schools   Joining College 529 Plans. The 2014-14 Cost/Debt Totals. Status of Tuition   Revenue Growth. And More. <strong>Admissions Watch: </strong>Early, Early   Reports.&nbsp;An Application Week. A New Personality Test for   Admission.&nbsp;<strong>Enrollment Trends: </strong>What Happened to the Recession   Class of 2008? Who is Up? Who is Down?<strong>&nbsp;</strong><strong>Curriculum   Capsules:</strong> New Majors and Programs in Fashion Merchandising to Other   Specialized Business Degrees.&nbsp;<strong>International Affairs: </strong>Who is   Coming to the U.S. to Study? Who is Going Abroad? And What is the State of   Higher Ed in European Countries?&nbsp;<strong>News   You</strong> <strong>Can Use:</strong> More Test Optional   Schools. Immigration Reform Implications. Athlete Graduation Rates. Is There   Interest in Medical School?&nbsp;And, a Word on Student Engagement.</p>       


       	<p><a href="Nov14.pdf"><b><font size="+1" face="Verdana">November 2014</font></b></a><br />
       	  <strong>Feature Articles:</strong> Cracking the Code: <strong>Getting Young Women   to STEM.</strong> <strong>&nbsp;</strong>New Approaches and Programs.<strong> Admissions Watch: </strong>Who Got In? From   Azusa to Utah. <strong>New Enrollment   Concerns:</strong> Where the Growth Is, Or Isn't. <strong>New Recruitment Efforts</strong>: In Chicago,   Syracuse and Beyond. <strong>Curriculum Capsules:</strong> New Majors and   Programs in Engineering, Public Health...and Contemporary Theater. <strong>Financial Aid Flash</strong>: Who is Actually   Borrowing Money. <strong>News You</strong> <strong>Can Use:</strong> On the Big Ten and Graduate   Hiring</p>       

       	<p><a href="Oct14.pdf"><b><font size="+1" face="Verdana">October 2014</font></b></a><br />
       	  <strong>Feature Articles:</strong> <strong>A Report From NACAC:</strong> The Latest   Trends, Surveys, Reports, Announcements and More. <strong>Admissions Watch:</strong> Who is Enrolling   Where at a Variety of Colleges and Universities. <strong>Financial Affairs: </strong>Why Does Tuition   Keep Rising? How are the Federal Student Loan Default Rates Doing? And What   States are Providing New Resources. <strong>The   Counselor's Bookshelf:</strong> Publications on Display at NACAC. <strong>Curriculum   Capsules:</strong> New Majors and Programs Around the Country. <strong>Scholarship Scoops:</strong> Updates on a Few Tried and True and a New   One for Students Involved in Community Programs. <strong>Plus, News You Can Use:</strong> On Schools   Abroad, Top Entrepreneur Schools, Predictors of Success...and Best Dining   Experiences at Colleges. Yes, It is True. Food Matters.</p>       

       	<p><a href="Sept14.pdf"><b><font size="+1" face="Verdana">September 2014</font></b></a><br />
       	  <strong>Feature Articles:</strong> Fall   Outlook in the States: What Happened in the States over the Summer from   California to   Massachusetts,   Minnesota to   New Mexico. <strong>Tuition Tabs:</strong> The Latest Results from   the ACT and What the Numbers Mean for College Readiness. Also, A Hard Issue   Faces Low-Income Students. Plus, a Bevy of New Schools That are Going Test   Optional. &nbsp;<strong>The Counselor's Corner:</strong> What   Counselor&rsquo;s and Admissions Officers Might Need to Know When Talking with Parents   This Fall. <strong>The Counselor's   Bookshelf:</strong> New Books on Essays. A Report on the Common Core. And a New   Company to Help Students Once Admitted to College. <strong>Curriculum Capsules:</strong> From Studying in   France to   Immersion Projects in the Silicon Valley. Also, a New   Major in &ldquo;Contemplative&rdquo; Studies, the First One in the   U.S. <strong>Scholarship Scoops:</strong> New Scholarships   for Those Achieving at Seeming Insurmountable Odds. Plus, Scholarships to Study   STEM Subjects at   Florida&rsquo;s   Newest   State   U.</p>       

 

       	<p>&nbsp;</p>       



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

