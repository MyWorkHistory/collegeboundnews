<?php
require_once('../../CollegeBoundNews.php');
?><?php
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
$row_Recordset1       = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- InstanceBegin template="/Templates/MainTemplate.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>College Bound News</title>
<!-- InstanceEndEditable -->
<meta content="Up-to-date reporting on the college admissions opportunities and financial aid issues that affect millions of high school students and their parents each admissions season." name="DESCRIPTION">
<meta content="college,university,higher education,college admissions,financial aid,federal aid,grants,scholarships,merit scholarships, college tuition,admissions,counseling,advice,B.A.,accepted,diversity,trends,surveys,test scores,standardized tests,ACT,SAT,advisor,application,applications,campus,enrollment,curriculum,graduation,graduation rates,College Admissions Advisor,529 college savings plans,college essay,freshman,freshmen,high school students,seniors,minority students" name="KEYWORDS">
<meta content="Adobe PageMill 3.0 Mac" name="GENERATOR" />
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<link href="../favicon.ico" rel="SHORTCUT ICON">
<link href="../CSS/csshorizontalmenu.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../Scripts/csshorizontalmenu.js" type="text/javascript"></script>
<link href="../CSS/GradientShadow.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../Scripts/GradientShadow.js" type="text/javascript"></script>
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
	font-family: Tahoma;
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
	word-wrap: break-word;
	background-color: #FFCC66;
	padding: 5px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.BorderRight {
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #000000;
}
.style1 {
	font-weight: bold;
}
-->
</style>
<!-- InstanceEndEditable -->
</head>

<body>

<p>&nbsp;</p>
<center>
<table border="5" cellpadding="0" cellspacing="0" class="tblMain" width="1085">
	<tr>
		<td align="center" valign="top" width="1069">
		<img align="bottom" alt="mast" border="0" height="67" naturalsizeflag="3" src="../resources/cbhome/newmast2a.gif" width="451" />&nbsp;
		</td>
	</tr>
	<tr>
		<td align="center" bgcolor="#3366CC" nowrap="nowrap" valign="top">
		<div class="horizontalcssmenu">
			<ul id="cssmenu1">
				<li><a href="../indexNew.php">Home</a></li>
				<li style="border-left: 1px solid #202020;">
				<a href="../aboutus/aboutus.html">About Us</a></li>
				<li><a href="../subscribe/subscribe.html">Subscribe/Renew</a></li>
				<li><a href="../contactus/contact.html">Contact Us</a></li>
				<li><a href="../members/articles.php">Current Issues</a></li>
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
		</div>
		</td>
	</tr>
	<tr>
		<td align="left" height="98" valign="center">
		<!-- InstanceBeginEditable name="EditRegion3" -->
		<table border="0" cellpadding="0" cellspacing="0" width="921">
			<tr>
				<td valign="top" width="29">&nbsp;</td>
				<td align="left" class="BorderRight" valign="top" width="310">
				<br />
				<br />
				<p>&nbsp;</p>
				<div align="left" class="CurrentIssuesBox" style="height: 600px; width: 295px; overflow: auto">
					<?php
echo $row_Recordset1['Verbiage'];
?></div>
				</td>
				<td valign="top" width="13">&nbsp;</td>
				<td align="left" valign="top" width="440"><br />
				<br />
				<p>&nbsp;</p>
				<p><b><font color="#3366cc" face="Arial" size="+2">2017-2018 Issues<br />
				</font><font color="#3366cc" face="Arial" size="+1">Volume 32</font></b></p>
				<p><b><font color="#3366cc" face="Verdana" size="-1">If you need 
				to renew your subscription call 773-262-5810, or subscribe on this 
				website, www.collegeboundnews.com. (The subscriber access codes 
				change September 15.) Thank you. Have a great school year.<br />
				<br />
				Download your current issue by clicking the month below. If you 
				need Adobe Reader to read your issue, please click the link to the 
				right for a free download. </font></b></p>
				<hr />
				<p><a href="June18.pdf"><b><font face="Verdana" size="+1">June 2018</font></b></a><br />
				</p>
				<div>
					<div>
						<strong>FEATURE ARTICLES:</strong> Small and Large, Far 
						and Wide:<b><span>&nbsp;</span>Admissions Roundup.<span>&nbsp;</span></b>Resurgence 
						at Some Small Private Colleges. Large Freshman Classes at 
						Others. Plus, Early versus Regular Admit Rates at the Ivy 
						League.<span>&nbsp;</span><b>ENROLLMENT TRENDS:<span>&nbsp;</span></b>Who 
						Gets Recruited? Who are the Winners and Losers? Are Dual 
						Majors a Good Idea?<span>&nbsp;</span><b>The Counselor's 
						Corner:<span>&nbsp;</span></b>Tools, Trends and Tuition: 
						From the Use of Artificial Intelligence in Advising to a 
						New Study on the Cost Factor. Plus, a Spot Check on Tuition.<b><span>&nbsp;</span>Counselor's 
						Bookshelf:<span>&nbsp;</span></b>On Admission, the Academic 
						Life and Equity.<span>&nbsp;</span><b>CURRICULUM CAPSULES: 
						New Programs in Comedy and Music to Medicine and AI.<span>&nbsp;</span></b>And, 
						Of Course, a Little News You Can Use. </div>
				</div>
				<hr />
				<p><a href="May18.pdf"><b><font face="Verdana" size="+1">May 2018</font></b></a><br />
				</p>
				<div>
					<div>
						<strong>FEATURE ARTICLES:</strong> Inside Admissions Offices:
						<strong>The Talk About the Class of 2022</strong>. What 
						Admissions Officers are Saying About the Acceptances and 
						Admissions Process. <strong>FINANCIAL MATTERS:</strong> 
						Who is In Debt. Laws Impacting DACA Students. Keeping Students 
						in College with Small Grants. Where Community College is 
						Free. And Who is Increasing Financial Aid. <strong>COUNSELOR'S 
						CORNER:</strong> Preparing for the College Transition...Now. 
						And, Enrollment Trends. </div>
				</div>
				<hr />
				<p><a href="April18.pdf"><b><font face="Verdana" size="+1">April 
				2018</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES: </strong>Class of 2022 Takes Shape: 
					From Maine to California, Illinois to Virginia, and Places in 
					Between. <strong>FINANCIAL MATTERS</strong>: On Discount Rates, 
					Scholarships, Financial Aid Plans, Tuition and Debt. <strong>
					THE COUNSELOR'S CORNER:</strong> Inside College Campuses.
					<strong>COUNSELOR'S BOOKSHELF:</strong> On Teenagers and On 
					Online Learning. <strong>CURRICULUM CAPSULES:</strong> On the 
					Environment. STEM and Game Design. <strong>INTERNATIONAL AFFAIRS:</strong> 
					From England to Qatar. And, of course, <strong>NEWS YOU CAN 
					USE:</strong> On Studies About Testing, Teens and the "2018 
					Job Outlook Survey." </div>
				<hr />
				<p><a href="Mar18.pdf"><b><font face="Verdana" size="+1">March 2018</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES: </strong>Application Numbers Continue 
					to Top Records: A Look at Colleges from Massachusetts to California, 
					Florida to Wisconsin. <strong>FINANCIAL MATTERS:</strong> A 
					Roundup of Financial News Impacting the Affordability of College.
					<strong>INTERNATIONAL AFFAIRS:</strong> Two Takes on Where European 
					Students, and Others, are Going to College. <strong>THE COUNSELOR'S 
					CORNER ON ADMISSIONS TRENDS:</strong> Reports on What is Impacting 
					the Admissions Process and Success. <strong>COUNSELOR'S BOOKSHELF:
					</strong>Resources on Comparing Financial Aid Offers and Boosting 
					Graduation Rates.<strong> CURRICULUM CAPSULES: </strong>On New 
					Programs in Business, Neuroscience, Environmental Management, 
					Among Others. <strong>SCHOLARSHIP SCOOPS </strong>and, Of Course,
					<strong>NEWS YOU CAN USE. </strong></div>
				<hr />
				<p><a href="Feb18.pdf"><b><font face="Verdana" size="+1">February 
				2018</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES: Admissions Watch 2018:</strong> Early 
					Admits and Regular Results<strong> Enrollment Trends:</strong> 
					More Reports on Who Showed Up Last Fall. <strong>NACAC&#8217;s 
					College Admissions Report 2017:</strong> Highlights of Recent 
					Trends. <strong>Scholarship Scoops:</strong> Where to Find New 
					Dollars at Colleges in Various Spots around the Country.
					<strong>The Counselor's Bookshelf:</strong> New Thought-Provoking 
					Books on Changing Demographics and Test-Optional Policies.<strong> 
					Financial Aid Matters:</strong> New Funds for Low-Income Students.<strong> 
					OnlineUnews:</strong> New Programs and Enrollments. And,
					<strong>News You Can Use:</strong> How One City Increased College 
					Completion, &#8220;Superscoring&#8221; and the Need for More 
					Computer Science Majors. </div>
				<hr />
				<p><a href="Jan18.pdf"><b><font face="Verdana" size="+1">January 
				2018</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES:Early Results: The Class of 2022 Begins 
					to Take Shape.</strong> Reports from Barnard to Yale, California 
					to Wisconsin and Virginia to Missouri. <strong>Financial Aid 
					Matters: </strong>The Tax Bill Creates Uncertainties for Higher 
					Education. Plus, News About Loans, Prepaid Tuition Programs 
					and ... Do Parents Save More for Their Boys ... Or Girls?
					<strong>Counselor's Bookshelf:</strong> Resources on Paying 
					for College, Transition Planning and College Opportunities.
					<strong>Curriculum Capsules:</strong> New Programs in Computer 
					Science Education and Climate Change. Plus, New Partnerships 
					and a Study on Digital Learning. <strong>And, Of Course, News 
					You Can Use:</strong> On the "Food Insecurity" of Students, 
					Best Business Schools, Computer Software to Assist Visually-Impaired 
					Students and the Impact of the Excelsior Scholarships on Private 
					Colleges in New York. Plus, Data Notes: Interesting Items That 
					Came Across COLLEGE BOUND'S Desk. </div>
				<hr />
				<p><a href="Dec17.pdf"><b><font face="Verdana" size="+1">December 
				2017</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES: Changes Ahead in Admissions:</strong> 
					From Arkansas to Rhode Island, New York to Indiana. <strong>
					International Affairs: </strong>The Number of International 
					Students Declines.<strong> Fall 2017 Enrollment Trends:</strong> 
					Up in Delaware and Michigan (Among Others). <strong>The Counselor's 
					Corner:</strong> A Mother-Daughter Dialogue on Visiting Colleges 
					(and More). <strong>Financial Aid Matters:</strong> Who is Shutting 
					Out the Poor? How Can We Make College More Affordable? Where 
					is There a New Aid Program?<strong> And, Of Course, News You 
					Can Use: </strong>On College Completion Rates. On Athlete Graduate 
					Rates. On Alumni Start-Ups, Career and Tech Courses and the 
					Future of U.S. Jobs.</div>
				<hr />
				<p><a href="Nov17.pdf"><b><font face="Verdana" size="+1">November 
				2017</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES: Admissions Watch:</strong> News From 
					Schools Coast to Coast: Where More Women Are Being Accepted, 
					Where More First Generation Students Have Enrolled and Where 
					Test Scores and Yields Are Up. <strong>Enrollment Trends:</strong> 
					On College Completion Rates and Where Graduation Rates Are Increasing.
					<strong>The Counselor's Corner:</strong> Seven Mistakes That 
					Could Cost Students Federal Aid. <strong>Counselor's Bookshelf:</strong> 
					Books on Writing the College Admissions Essay And on How to 
					Prep for the ACT.<strong> More News on Financial Affairs:
					</strong>Including An Analysis of Pell Grants. <strong>Curriculum 
					Capsules: </strong>On Where Students Can Find the Top Internships.
					<strong>And, Of Course, News You Can Use: </strong>Including 
					Surveys of Counselors And Another of Admissions Officers.
				</div>
				<hr />
				<p><a href="Oct17.pdf"><b><font face="Verdana" size="+1">October 
				2017</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES: Admissions Watch: </strong>More Fall 
					Enrollment Numbers and Admit News. <strong>Plus, News from the 
					States. The Counselor's Corner:</strong> Spot Checks on What 
					Colleges are Doing to Support New First-Generation and Underrepresented 
					Students. <strong>Counselor's Bookshelf:</strong> A Parent's 
					Guide to Mental Health and Wellness for College Students, a 
					Guide to Paying for College, New Resource for Writing Personal 
					Statements, a Source for Finding Top Paying Jobs and a New Resource 
					from NACAC. <strong>Online U News:</strong> On New Programs 
					in Cybersecurity, Nursing, the New Digital Economy and Applied 
					Health Sciences. <strong>Scholarship Scoops: </strong>A Few 
					New Ones That Will Surprise You.<strong> And, News You Can Use:</strong> 
					On the FAFSA, Common App, Campus News and Comings and Goings.
				</div>
				<hr />
				<p><a href="Sept17.pdf"><b><font face="Verdana" size="+1">September 
				2017</font></b></a><br />
				</p>
				<div>
					<strong>FEATURE ARTICLES: The Class of 2021 Arrives:</strong> From Indiana to 
					California, Connecticut to, Yes, Houston. <strong>Plus, What's Up in 
					the States?:</strong> How Things are Shaping Up in Public Universities 
					from Maine to Washington. <strong>THE GREENE REPORT:</strong> Howard and Matthew 
					Greene are Back with a New Column on Promoting "the Voice of 
					Reason." <strong>COUNSELOR'S BOOKSHELF:</strong> On Which College Has the Most 
					Accessible Professors (Among Other Items). And Books on Selling 
					Hope, Paying the Price, Making Decisions and Loving the Journey. 
					<strong>FINANCIAL MATTERS: </strong>On New Student Loan Interest Rates and Oregon's 
					Promise.<strong> CURRICULUM CAPSULES:</strong> On New Programs in Computer Science, 
					Statistics, Environmental and Urban Studies and Chemistry.<strong> And, 
					NEWS YOU CAN USE: O</strong>n More Test Optional Schools, "Good" Jobs, 
					the New Demographic Dip and Tenure.<strong> Oh, and People are Talking 
					About... </strong> </div>
				<hr /></td>
				<td valign="top" width="9">&nbsp;</td>
				<td valign="top" width="149">
				<p></p>
				<center>&nbsp;</center>
				<p></p>
				<p></p>
				<center>&nbsp;</center>
				<p></p>
				<p></p>
				<center>&nbsp;</center>
				<p></p>
				<p></p>
				<center><a href="../subscribe/subscribe.html" target="_parent">
				<font face="Times">
				<img align="bottom" border="0" height="19" naturalsizeflag="3" src="../resources/01-02/subscribenew.gif" width="149" /></font></a>
				<p>
				<a href="http://www.adobe.com/products/acrobat/readstep2.html">
				<font face="Verdana" size="-1">
				<img align="bottom" border="0" height="33" naturalsizeflag="3" src="../resources/allcommon/get_adobe_reader.gif" width="112" /></font></a>
				</p>
				</center>
				<p></p>
				</td>
			</tr>
		</table>
		<meta content="Adobe PageMill 3.0 Mac" name="GENERATOR" />
		<!-- InstanceEndEditable --></td>
	</tr>
	<tr>
		<td align="center" valign="top"><br />
		<p>&nbsp;<font face="Arial" size="-1"> <a href="../indexNew.php">Home</a> 
		| <a href="../aboutus/aboutus.html">About Us</a> |
		<a href="../subscribe/subscribe.html">Subscribe/Renew</a> |
		<a href="../contactus/contact.html">Contact Us</a> |
		<a href="../members/articles.php">Current Issues</a> |
		<a href="../backissues/index.html">Back Issues</a> |
		<a href="../visitors/index.html">Visitors</a> |
		<a href="../whogotin/index.html">Who Got In?</a> |
		<a href="../links/links.html">Links/Resources</a> </font></p>
		<a href="../privacypolicy.html"><font face="Arial" size="-1">Privacy Policy/Terms 
		of Service</font></a><font face="Arial" size="-1"><br />
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
		<br />
		All Rights Reserved.<br />
		<a href="mailto:rcsautter@aol.com">editor@collegeboundnews.com</a></font><br />
		<br />
		</td>
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
<div style="display: none;">
    <img alt="Quantcast" border="0" height="1" src="//pixel.quantserve.com/pixel/p-76rwokGV3rEps.gif" width="1" />             
</div>
</noscript>
<!-- End Quantcast tag -->

</body>
<!-- InstanceEnd -->

</html>
<?php
mysql_free_result($Recordset1);
?>