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
<html xmlns="http://www.w3.org/1999/xhtml">
   <!-- InstanceBegin template="/Templates/MainTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
   <head>
      <!-- InstanceBeginEditable name="doctitle" -->
      <title>College Bound News</title>
      <!-- InstanceEndEditable -->
      <meta name="DESCRIPTION" content="College admissions trends, financial aid and student loan information.">
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
            .auto-style1 {
            font-family: Arial;
            font-size: +1;
            color: #3366CC;
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
                        <li><a href="articles.php">Current Issues</a></li>
                        <li><a href="../backissues/index.html">Back Issues</a></li>
                        <li><a href="../visitors/index.html">Visitors</a></li>
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
               <td valign="center" align="left" height="98">
                  <!-- InstanceBeginEditable name="EditRegion3" -->
                  <table width="921" border="0" cellpadding="0" cellspacing="0">
                     <tr>
                        <td width="29" valign="top">&nbsp;</td>
                        <td width="310" valign="top" align="left" class="BorderRight">
                           <br /><br />
                           <p>&nbsp;</p>
                           <div class="CurrentIssuesBox" align="left" style="height: 600px; width: 295px; overflow: auto">
                              <?php echo $row_Recordset1['Verbiage']; ?>
                           </div>
                        </td>
                        <td width="13" valign="top">&nbsp;</td>
                        <td width="440" valign="top" align="left">
                           <br /><br />
                           <p>&nbsp;</p>
                           <p><b><font color="#3366cc" sizCurriculume="+2" face="Arial">2022-2023
                              Issues<br />
                              </font><font color="#3366cc" size="+1" face="Arial">Volume 37</font></b><span class="auto-style1"></span>
                           </p>
                           <p><b><font color="#3366cc" size="-1" face="Verdana">If you need to renew your subscription call 773-262-5810, or subscribe on
                              this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
                              <br />
                              Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
                              </font></b>
                           </p>
                           <hr />

                           <!-- start copy here -->
                           <p><a href="Jun23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">June 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i></b>Alabama A&M's "Growth Not Accidental." Columbia 2027, Elon's Commitments, Hampshire C.'s "Unconventional Curriculum," Harvard's Admitted Students Receive Calls, Loyola U. Maryland Projects Large 2027, Marquette U. Attracts More Diverse Students, and more. 
                              <br />
                              <br />   
                              <b>Financial Matters:</b> Per-Student State Funding Finally Exceeds Great Recession Levels, More Free Community College Programs, Interest on Federal Loans Hit 5.5 Percent.
                              <br />
                              <br />
                              <b>Enrollment Trends:</b> Current Term Enrollment Estimates, Hispanic Gains, Law Schools Are Back, P.S. Pacific Union C. Highest in Ten Years
                              <br />
                              <br />
                              <b>The Counselor's Corner:</b>
                              <br />
                              <b><i>AI Comes to Admissions?</i></b><i> So far not really.</i> Augusta Enrollment and Scholarships Increase, Middlebury Sends First-Year Students to Denmark, Minnesota's Direct Admissions Program, Korean U.s Consider Violence Records, Online Learning Skyrockets, Wisconsin Promotes Access for Rural Students. 
                              <br />
                              <br />
                              <b>Tuition Tabs:</b> Delaware Tuition Increases 5-Plus Percent, Haverford to Cost 6.4 Percent More, Illinois State Increases Tuition 2.7 Percent.
                              <br />
                              <br />
                              <b>Curriculum Capsules:</b> Adelphi's Museum Studies Certificate, South Dakota State Offers Two New Education Majors, Stockton’s Esports Management BS, Susquehanna Creates Two New Majors, Washington & Jefferson to Offer New Nursing Degree, Xavier Plans New Medical School.
                              <br />
                              <br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <!-- end copy here -->

                           <p><a href="May23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">May 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i></b>Cornell Admits Hail from 114 Countries, Dartmouth Posts New Record, Denison Receives Most Apps in History, Harvard Graduates 80 Percent Debt-Free, Info from Lafayette, Lehigh, Massachusetts College of Liberal Arts, NYU and Saint Anslem. 
                              <br /><br />   
                              <b>Financial Matters:</b> California Receives More Aid Applications, Colorado Boulder Doubles Size of CU Promise, The Ithaca Commitment, Minnesota Assists Former Foster Care Students, and more. 
                              <br />
                              <br />
                              <b>NACAC's 'College Openings 2023' is Open</b>
                              <br />
                              <br />
                              <b>The Counselor's Corner.</b>
                              <br /><b><i>Enrollment Trends:</i></b> Chicago Releases Common Data for Class of 2026. Trends in Dual Enrollment, Florida State Retention Hits 99 Percent, Oregon C. C. Enrollment Begins to Rebound, <br /><i>Transfers Made Easy:</i> Heidelberg's Open Transfer for C.C. Students, Holyoke C.C. and Western New England U. Simplify Transfer, and more.
                              <br />
                              <br />
                              <b>Curriculum Capsules:</b> Duquesne Adds Four Engineering Programs, Harvard and Stanford Revise H.S. Math 
                              Recommendations.
                              <br />
                              <br />
                              <b>Counselor's Bookshelf:</b> From<i> 'The Chronicle of Higher Education': 1. The Future of Gen Z, Recruiting and Retaining Students in a Challenging Market, and Building Tomorrow's Work Force</i>  
                              <br />
                              <br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Apr23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">April 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i>New Programs Attract Applicants</b> Amherst Admits 38 Percent Without Test Scores, Berea Responds to Flooding, Bowdoin's Diversity, Caltech Pool Committed to STEM, Colby Admits 6 Percent, and more.
                              <br /><br />   
                              <b>Financial Matters:</b> More Will Be Pell Eligible, North Carolina Streamlines Aid, Cincinnati Area Colleges' "Moon Shot." 
                              <br />
                              <br />
                              <b>State News:</b> Connecticut, Florida, Georgia.
                              <br />
                              <br />
                              <b>The Counselor's Corner.</b>
                              <br /><b><i>Tuition Tabs:</i></b> <i>Elon to Cost 5 Percent More</i>  MIT Increases Tuition 3.75 Percent, Rice Posts Tuition Increase, USC Tuition up 5 Percent, and more.
                              <br/>
                              <b><i>Scholarship Scoops:</i></b> Brown Pre-College Scholarships, Luther Receives $4.5 Million in Gifts for Scholarships, Northern Michigan's Last Dollar, Tufts Scholarship Home Run.
                              <br />
                              <br />
                              <b>Enrollment Trends:</b> Indiana Pennsylvania's Dual Admissions, Montana's First-Generation Student Decline, North Central Michigan C. Up 8.6 Percent, UW-Madison's Largest First-Year Class
                              <br />
                              <br />
                              <b>Curriculum Capsules:</b> Carthage C. Opens New School, a change at Rochester, Colorado-Colorado Springs Makes Three Departments, and more.
                              <br />
                              <br />
                              <b>Counselor's Bookshelf:</b> <i>Thinking Critically in College: The Essential Handbook for Student Success </i> by Louis E. Newman. <i>The Education Myth: How Human Capital Trumped Social Democracy</i> by Jon Shelton, and more. 
                              <br />
                              <br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Mar23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">March 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i>Applications up "Significantly."</b> Baylor up, Bowdon sees big increase, BU and others see increase in applications from international students. Info from FSU, Johns Hopkins, and early admissions trends. 
                              <br /><br />   
                              <b>Financial Matters:</b> Pandemic relief funds assisted 18 million college students, Pandemic drove down net tuition revenue. Forty-four percent skipped 2022 FAFSA, endowments decline, <i>Spot-check on tuition tabs.</i>
                              <br />
                              <br />
                              <b>The State of California:</b> California apps decrease for fall 2023, individual campus reports, California slow to meet in-state goals. 
                              <br />
                              <br />
                              <b>The Counselor's Corner.</b>
                              <br />
                              <br />
                              <b>Enrollment Trends:</b> <i>Public Health Degrees up big.</i>  Students with children have higher college dropout rates. Men to women ratios shift. <i>Women now have a higher rate of attaining a degree.</i> Trends in academic preparation. The world's 10 largest universities.
                              <br />
                              <br />
                              <b>Curriculum Capsules:</b> New offerings from Clinton Social Innovation, Houston Community College, a change at Rochester, CUNY ends remedial classes, and more.
                              <br />
                              <br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Feb23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">February 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i></b>Big increase in Common Applications, Air Force applications take off, Carnegie Mellon Qatar, Duke, NYU Hits 120,000 Apps, <i>The Community College Story</i>, and more.
                              <br /><br />   
                              <b>Financial Matters:</b> College Costs Soar, the main culprits are Administrative bloat and an arms race of amenities. Also other factors. <i>Debt Disparity - </i>a greater percentage of black college students take out federal loans vs. white students. Women are responsible for paying back most student debt. Working students less likely to graduate. Loan forgiveness update; 26 million have applied.
                              <br />
                              <br />
                              <b>The Counselor's Corner:</b> <i>Who is Today's Student</i> 37 Percent are over 25 years old. Students feel unprepared but feel that College is worth the effort. Some students gamble with their financial aid. Do Students often regret majors?
                              <br />
                              <br />
                              <b>Counselor's Bookshelf:</b> <i>Thinking Critically in College: The Essential Handbook for Student Success </i> by Louis E. Newman <i>The Black Family's Guide to College Admissions:<br /> A Conversation about Education, Parenting and Race</i> by Timothy L. Fields, and more. 
                              <br />
                              <br />
                              <b>Students are Using ChatGPT:</b> Nearly 60 percent of students used ChatGPT on more than half of all assignments and 30 percent of them used it on written assignments.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Jan23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">January 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i>Colleges Regroup Post Pandemic </b><br/>Early Apps - Brown Admits 13 Percent Early, California State Apps Climb, Dartmouth ED Apps Up 14 Percent, trends from Georgia, Harvard, Notre Dame, and more.
                              <br /><br />   
                              <b>Financial Matters:</b> Insights Into How Higher Ed Gains in $1.7 Trillion Spending Bill, The latest in Financial Aid Offers, info about the "Paying for College Transparency Initiative"; and Bucky’s Tuition Promise.
                              <br />
                              <br />
                              <b>Counselor's Bookshelf:</b> <i>Reimagining the Student Experience: How colleges can help students connect, belong, and 
                              engage. The Chronicle of Higher Education; </i> Find at the Chronicle Store, Chronicle.com <i>Commencement: The Beginning of a New Era in Higher Education</i> by Kate Colbert, <i>MyPromiseTool.org</i> - searchable database of Promise programs nationwide, and more. 
                              <br />
                              <br />
                              <b>Cirriculum Capsules:</b> <i>Counting Credentials</i> A new report from Credential Engine, Five B.A. Fields Attract Half of Student Growth, Kalamazoo Research and Creative Projects, DePaul Nursing.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Dec22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">December 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i>The Early Outlook: </b>Deadline Updates: Key Findings from the Common App. Spotlight: Yale's Early Action, Maryville C. Apps "Skyrocketing."<br /> <b><i>More on the Class of 2026:</i></b> Cal Poly's Most Diverse Class. 
                              <br /><br />   
                              <b>Financial Matters:</b> Debt Relief Update, The Bottom Line Nonprofit Holds Line on Debt, California Requires FAFSA, Some FAFSA Progress, Carleton Supports Pell Students, Indigenous Students Face Financial Barriers, Maryland Grants Multi-Million Aid for Low-Income Students, Stillman Aid for STEM Majors, Supporting Transfer Athletes, Texas Woman's "Zero Tuition", Vermont Freezes Tuition for Fifth Straight Year.
                              <br /> 
                              <b><i>Scholarship Scoops:</i></b> Loyola U. Chicago adds $100 Million in Scholarships, Michigan Achievement Scholarship. 
                              <br />
                              <br />
                              <b>Enrollment Trends:</b> Certificate Program Enrollment, Indiana Enrollment Dropped 12 Percent, Texas San Antonio up Five Percent,  Transfer Scholars Network.<br /> <i><b>International Students are Returning</i></b> 
                              <br />
                              <br />
                              <b>Counselor's Bookshelf:</b> <i>State of the American College Student: </i>Anxiety, feelings of being overwhelmed and a sense of loss. A <i>Tech Ethics Video Series</i> from Purdue.
                              <br />
                              <br />
                              <b>Cirriculum Capsules:</b> California State U. Channel Islands' New Dance Studies Major, Illinois State Promises Equity in New Engineering School, Methodist U. Launches Occupational Therapy Assistant Program, Purdue/Ivy Tech Partner on Next-Generation Microelectronics Workforce...
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Nov22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">November 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Enrollment Trends: </i>Enrollment Declines </b>Ivy League and Flagship Universities continue to maintain enrollment, others decline. "Cataclysmic" Declines: With the exception of wartime, the US has never been through a period of declining educational attainment like this."  Will students return? 
                              <br /><br />   
                              <b>Financial Matters:</b> Student Loan Relief Plan to Cost $379 Billion. Real College Costs Decline - for the second straight year. 
                              <br />
                              <b>Admissions Watch:</b> <i> Some colleges are bucking admissions and enrollment trends. </i> Augustana's second largest first-year class. Colorado up. DePauw Enrolls Largest Class in four years. News from Drexel and HBCU colleges. <i>Disability Programs Spread</i>
                              <br />
                              <br />
                              <b>The Counselor's Corner:</b> <i> Decision Drivers, </i> What Drives Legacy Admissions? <br />College No Guarantee of Prosperity. <i>New Drivers</i> FARSA, a new program in California, a new requirement in Milwaukee.
                              <br />
                              <br />
                              <b>The Counselor's Bookshelf:</b> <i>Poison Ivy: How Elite Colleges Divide Us </i> Mandry, <i>The Affordability Gap</i> report, and several more.
                              <br />
                              <b>Scholarship Scoops:</b> Akron Two New Sports Majors, Albertus Magnus Expands Options, Colby's AI Institute, Florida State's Human Rights B.A, Ithaca's Accelerated Occupational Therapy Degrees...and more.
                              <br />
                              <b>Money's Top Liberal Arts Colleges</b> <i>Is a liberal arts education worth it?</i> It depends on the school. Money magazine evaluates 600 four-year liberal arts colleges based on quality, affordability and outcomes.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Oct22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">October 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i>The Class of 2026 Moves On </b>Ramifications of COVID, 2026 Stats: Berkeley, Chapman, Georgia, Houston C. International, Ohio State, Princeton, and more.
                              <br /><br />   
                              <b>Financial Matters:</b> College Endowments Post Losses, 2022 College Student Financial Survey, Education Trust Reports on Barriers to Student Parents.<br /> <i>College Counts </i>Colby-Sawyer Cuts Tuition by 62 Percent, Drexel Offers 50 Percent Break to C.C. Transfers, Lawrence Launches a Full-Tuition Aid Program, North Carolina Pembroke Offers Tuition Rebates...
                              <br />
                              <b>The Counselor's Bookshelf:</b> <i>The Ultimate Guide To HBCUs; Profiles, Stats, And Insights For All 101 Historically Black Colleges And Universities, </i> Braque Tally. <i> <br />The Best 388 Colleges, 2023 Edition; </i> Princeton Review and a few others.
                              <br />
                              <b>Curriculum Capsules:</b> Akron Two New Sports Majors, Albertus Magnus Expands Options, Colby's AI Institute, Florida State's Human Rights B.A, Ithaca's Accelerated Occupational Therapy Degrees...and more.
                              <br />
                              <b>Money's Top Liberal Arts Colleges</b> <i>Is a liberal arts education worth it?</i> It depends on the school. Money magazine evaluates 600 four-year liberal arts colleges based on quality, affordability and outcomes.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Sept22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">September 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i>Early Fall '22 Review </b>Binghamton evaluated more than 50,000 Apps, Colorado celebrates its 149th Academic Year, Elon moves In, Fairfield shatters records, the latest from Harvard, and more.
                              <br /><br />   
                              <b>Financial Matters:</b> Student debt cancellation details, Tuition chases inflation but some hold the line, Dartmouth ends student loans. 
                              <br />
                              <b>The Counselor's Bookshelf:</b> <i>College Admission 101: Expert Advice for New Challenges in Admission, Testing, Financial Aid and More, The Community's College" </i> and more.
                              <br />
                              <b>Curriculum Capsules:</b> Antioch U. and Otterbein launch affiliation. California State U Channel Islands new Dance Studies major, <i>Niagara Agrees to train orthodox students in early education skills,</i> and more. 
                              <br />
                              <b>Testing Tabs:</b> <i>1,830 colleges and universities are going "test-free" in their admissions decisions.</i> AP score transparency reduced.  
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p>&nbsp;</p>
                        </td>
                        <td width="9" valign="top">&nbsp;</td>
                        <td width="149" valign="top">
                           <p>
                           <center>&nbsp;</center>
                           </p>
                           <p>
                           <center>&nbsp;</center>
                           </p>
                           <p>
                           <center>&nbsp;</center>
                           </p>
                           <p>
                           <center>
                              <a href="../subscribe/subscribe.html" target="_parent"><font face="Times">
                              <img  src="../resources/01-02/subscribenew.gif" width="149" height="19"  border="0" align="bottom" naturalsizeflag="3" /></font></a>
                              <p>
                                 <a href="http://www.adobe.com/products/acrobat/readstep2.html"><font size="-1" face="Verdana">
                                 <img src="../resources/allcommon/get_adobe_reader.gif"  align="bottom" border="0" width="112" height="33" naturalsizeflag="3" /></font></a>      
                              </p>
                           </center>
                           </p>    
                        </td>
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
                     <a href="../links/links.html">Links/Resources</a>
                     </font>
                  </p>
                  <a href="../privacypolicy.html"><font size="-1" face="Arial">Privacy Policy/Terms of Service</font></a>
                  <font size="-1" face="Arial">
                     <br />
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
                     <a href="mailto:collegeboundnews@gmail.com">collegeboundnews@gmail.com</a>
                  </font>
                  <br /><br />         
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
         <div style="display:none;">
            <img src="//pixel.quantserve.com/pixel/p-76rwokGV3rEps.gif" border="0" height="1" width="1" alt="Quantcast"/>
         </div>
      </noscript>
      <!-- End Quantcast tag -->
   </body>
   <!-- InstanceEnd -->
</html>
<?php
   mysql_free_result($Recordset1);
   ?>