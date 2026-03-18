<?php require_once "../../CollegeBoundNews.php"; ?>
<?php
   if (!function_exists("GetSQLValueString")) {
       function GetSQLValueString(
           $theValue,
           $theType,
           $theDefinedValue = "",
           $theNotDefinedValue = ""
       ) {
           $theValue = get_magic_quotes_gpc()
               ? stripslashes($theValue)
               : $theValue;
           $theValue = function_exists("mysql_real_escape_string")
               ? mysql_real_escape_string($theValue)
               : mysql_escape_string($theValue);
           switch ($theType) {
               case "text":
                   $theValue = $theValue != "" ? "'" . $theValue . "'" : "NULL";
                   break;
               case "long":
               case "int":
                   $theValue = $theValue != "" ? intval($theValue) : "NULL";
                   break;
               case "double":
                   $theValue =
                       $theValue != "" ? "'" . doubleval($theValue) . "'" : "NULL";
                   break;
               case "date":
                   $theValue = $theValue != "" ? "'" . $theValue . "'" : "NULL";
                   break;
               case "defined":
                   $theValue =
                       $theValue != "" ? $theDefinedValue : $theNotDefinedValue;
                   break;
           }
           return $theValue;
       }
   }
   mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
   $query_Recordset1 =
       "SELECT Verbiage FROM SiteText WHERE theKey = 'CurrentIssues'";
   ($Recordset1 = mysql_query($query_Recordset1, $CollegeBoundNews)) or
       die(mysql_error());
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
                              <?php echo $row_Recordset1["Verbiage"]; ?>
                           </div>
                        </td>
                        <td width="13" valign="top">&nbsp;</td>
                        <td width="440" valign="top" align="left">
                           <br /><br />
                           <p>&nbsp;</p>
                           <p><b><font color="#3366cc" sizCurriculume="+2" face="Arial">2024-2025
                              Issues<br />
                              </font><font color="#3366cc" size="+1" face="Arial">Volume 39</font></b><span class="auto-style1"></span>
                           </p>
                           <p><b><font color="#3366cc" size="-1" face="Verdana">If you need to renew your subscription call 773-262-5810, or subscribe on
                              this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
                              <br />
                              Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
                              </font></b>
                           </p>
                           <hr />
                           <!-- Start copy here -->
                           <p><a href="24-25issues/June25.pdf" target="_blank"><b>
                              <font size="+1" face="Verdana">June 2025</font></b></a><br />
                           </p>
                           <p><strong>Admissions Watch:</strong> <i>Record applications</i> at Amherst College, Cal Poly (San Luis Obispo), Colby College, and others. <br><br> Penn State's closure of seven Commonwealth campuses, Middlebury's continued test-optional policy, Commentary on competitive applicant pools, NACAC's "College Openings Update", and more.</p>
                           <p><strong>Financial Matters:</strong> Student loan default collections resume, SAVE Plan legal blockage and its impact on borrowers, Department of Education workforce reduction’s effects, FAFSA system delays and aid eligibility disruptions...</p>
                           <p><strong>Curriculum Capsules:</strong> Lafayette College's new "Common Course of Study", Georgia's HB 192 aligning education with high-demand careers, 16 AP Exams transitioning to fully digital formats.</p>
                           <p><strong>Enrollment Trends:</strong> National Student Clearinghouse enrollment estimates: Undergraduate enrollment up 3.5% overall, Increases across bachelor's, associate, and certificate programs, Strong growth among 21 to 29 year-olds, and Black/multiracial students, and more.</p>
                           <p><strong>
                           Counselor's Bookshelf:</strong> <em>The Disengaged Teen</em> - book for parents of struggling teens,<em> The Home Stretch of Student Recruitment - </em> Chronicle guide, <em>Forget the Rankings</em> - card-sorting tool for college search, <em>How to Apply for College as an International Student</em> - Scholaro, <em>A College For the Future</em> - USF's interdisciplinary AI and cybersecurity initiative.</p>
                           <p>And of course, <strong>News You Can Use.</strong> </p>
                           <!-- end copy here -->
                           <p><a href="24-25issues/May25.pdf" target="_blank"><b>
                              <font size="+1" face="Verdana">May 2025</font></b></a><br />
                           </p>
                           <p>Pell Grant recipients rose significantly across U.S. colleges this year, thanks to new federal aid formulas. Public two-year colleges saw a 17% increase, while private four-year institutions reported a 14% jump. At the same time, charitable donations to colleges climbed 3% and the University of Delaware received a record $71.5 million gift for a new business school.</p>
                           <p>Michigan launched a $1 million FAFSA sweepstakes, offering major prizes to boost student participation. Meanwhile, the University of Connecticut broke its application record with over 62,000 applicants, driven partly by NCAA basketball glory. Oberlin’s Conservatory saw a stunning 41% surge in applications, and Vanderbilt University expects 10% of its incoming class to come from the waitlist.</p>
                           <p>Financial headlines include Wellesley College surpassing the $100,000 cost threshold, while Boston College, Cornell, and GWU announced tuition hikes alongside expanded financial aid. Illinois community college enrollment rose nearly 9%, aided by new state investments.</p>
                           <p>AI in college essays continues to raise concern among admissions officers, with warnings about authenticity and software detection. And the CIRP Freshman Survey highlighted high financial stress, especially among Latino and Black students.</p>
                           <p>Curriculum shifts were also noted: Amherst College now limits students to two majors, Barnard requires more classes on its own campus, and Columbia introduced a new climate science engineering degree. Meanwhile, Mississippi's fourth-graders ranked first nationally in NAEP tests, and Ohio State reinstated standardized testing for future applicants.</p>
                           <p><a href="24-25issues/Apr25.pdf" target="_blank"><b>
                              <font size="+1" face="Verdana">April 2025</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Admissions Watch: <i>Wishes and Dreams</i> </b></br>
                              Amherst Admits 7 Percent, BC Accepts 12.6 Percent, UC Riverside Apps Surge 23 Percent, Duke Admits 4.8 Percent, Fairfield Apps Up 15 Percent...<br>
                              <b><i>Ivy League:</i></b> Brown Admits 5.65 Percent (Fewer Apps than Last Year), Cornell Admits 5,824, Dartmouth Admits 1,702 (Apps Up 32 Percent Since 2020), Princeton Expected Around 5 Percent Admit Rate (Test-Optional Extended), Yale Admits 2,380 to Expanded Class.
                           </p>
                           <p>
                              <b>Financial Matters</b></br>
                              Some Changes in FAFSA Eligibility Resulted in State Aid Cutbacks, College Inflation Rate at 8 Percent, Georgetown Ranks College ROI, Bucknell Funds Study Abroad for Low-Income Students, Cleveland State Cuts Three Athletic Programs...
                           </p>
                           <p>
                              <b>Scholarship Scoops</b></br>
                              Grace College Aids 100 Percent of Students (20 Percent Tuition-Free), Smith College Receives Record $51 Million Gift for Financial Aid.
                           </p>
                           <p>
                              <b>Transfer Trends</b></br>
                              Overall Transfers Up 4.4 Percent, Strongest Growth at Community Colleges (5.8 Percent) and Online Schools (6.6 Percent), Reverse Transfers (4-Year to Community College) Up 6.3 Percent, Black Student Transfers Up 8.3 Percent.
                           </p>
                           <p>
                              <b>News You Can Use</b></br>
                              State-Run Direct Admissions Programs Expand to 14 States, Common App Sees 4 Percent Applicant Increase (Notably Latinx, Black, First-Gen, Low-Income Applicants Up).
                           </p>
                           <p>
                              <b>Counselor's Bookshelf</b></br>
                              <i>The First-Year Experience: How to support student success</i>, The Chronicle of Higher Education.<br>
                              <i>Improving Support for Nontraditional Students</i> and <i>The Future of Regional Publics</i>, The Chronicle of Higher Education.
                           </p>
                           <!-- end copy here -->
                           <p><a href="24-25issues/Mar25.pdf" target="_blank"><b>
                              <font size="+1" face="Verdana">March 2025</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Admissions Watch:</b>
                              Bennington Admits 37 Percent EDI, Bowdoin Tops 14,000 Apps, James Madison's Apps Up 34 Percent Since 2022, Rice Admits 6 Percent ED II, USC Attracts 83,000 Apps, UVA Admits 6,746 Early Action, and more.
                           </p>
                           <p>
                              <b>Financial Matters</b></br>
                              FAFSA Mandates, Florida Eliminated In-State Tuition for Undocumented Students, State Support Grows by 4.3 Percent, Cal Poly Humboldt Covers Last Dollar, Public Still Backs Government Aid To Education, Impact of NCAA Athletic Revenue Sharing.
                           </p>
                           <p>
                              <b>Enrollment Trends</b></br>
                              Black Male Enrollment Initiative, Demographic Dip, Glenville State Enrollment Up 10 Percent in 2024, Harvard Partners With QuestBridge, Texas A&M Caps Enrollment, Steep Decline in Legacies.
                           </p>
                           <p>
                              <b>Curriculum Capsules</b><br />
                              Accounting Popular, More First-Year Law Students, SUNY's New Core Competency Requirements, Texas A&M/Maritime Licensing, USC to Introduce EA for Business & Accounting.
                           </p>
                           <p>
                              <b>News You Can Use</b></br>
                              Race-Based Policies Declared Illegal, Common App Adding Community Colleges.
                           </p>
                           <p>
                              <b>Scholarship Scoops</b></br>
                              ASU/LA Fire Victims, Emerson Arts & Communications Aid, Rural Teacher Education.
                           </p>
                           <p>
                              <b>Testing Tabs</b></br>
                              Miami Reinstates Standardized Testing, Learning Loss, NAEP Tests Cancelled for 17 Year-olds.
                           </p>
                           <p>
                              <b>Counselor's Bookshelf</b></br>
                              <i>Hands-On Career Preparation: Experiential learning to engage students and meet employers' needs</i>, The Chronicle of Higher Education.<br />
                              <i>Serving Nontraditional Students</i> and <i>The Future of Regional Publics</i>, The Chronicle of Higher Education.<br />
                              <i>Geography of Opportunity</i>, The Institute for College Access & Success.
                           </p>
                           <p><a href="24-25issues/Feb25.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">February 2025</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Admissions Watch:</b>
                              Columbia Fields Slightly Fewer ED Apps, Fairfield U. Admissions Officers "Have Never Been Busier," 
                              George Washington U. Admits 11 Percent, NYU Tops 120,000 Apps, and more.
                           </p>
                           <p>
                              <b>Financial Matters</b></br>
                              Financial Aid To Continue Uninterrupted, Debt Forgiveness Era Ends, Final Biden Debt Forgiveness Actions, Colby Expands Help For Middle Class
                              Families, Concord�s Last Dollar Makes Tuition Free, The Elms Promise..
                           </p>
                           <p>
                              <b>Enrollment Trends</b></br>
                              On Second Look, Freshman Enrollment Actually Increased, U. of California Enrollment Up 1.2 Percent, Grand Canyon�s 75th Year Marked with
                              Record Enrollment, and more.
                           </p>
                           <p>
                              <b>The Counselor's Corner</b><br /><i>
                              Challenges Ahead</i></b><br />
                              Counselor Burnout, The Risks Facing Colleges, Stop Campus Hazing Act, "Spiritual and Mental Health in Higher Education," Miami Reinstates Standardized Testing..
                           </p>
                           <!-- Note: this section was not in current issue but is a common section. 
                              <p>
                                 <b>Outlook </b><br /><i>
                                 New Initiatives in Admissions</i></b><br />
                                 Florida International Conducts EA Decision Day, Quinnipiac U. Hosts 100th Class, Stockton U. Hosts Instant Decision Day, Texas to Admit Top 5 Percent Automatically..
                              </p>
                              -->
                           <p>
                              <b>Counselor's Bookshelf</b></br>
                              <i>The Times Good University Guide 2025: Where to go and what to study</i> by Zoe Thomas.<br />
                              <i>Hands-On Career Preparation: Experiential learning to engage students and meet employers� needs </i> The Chronicle of Higher Education.
                           </p>
                           <p>
                              <b>Transition Matters</b></br>
                              Illinois Transfers Guaranteed, Marist Takes A Step Up.. 
                           </p>
                           <!-- Note: this section was not in current issue but is a common section. 
                              <p>
                                 <i>And, of course, <b>News You Can Use.</i></b>
                              </p>
                              --> 
                           <p><a href="24-25issues/Jan25.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">January 2025</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Admissions Watch:</b>
                              <b><i> EDs Begin to Shape Class of 2029</i></b></br>
                              Barnard Selects 56 Percent of New Class Early, Brown Welcomes 906 ED Students, Duke Admits Record-Low 12 Percent ED, Emory Received 3,311 ED Apps, and more.
                           </p>
                           <p>
                              <b>Financial Matters</b></br>
                              Congress Acts on FAFSA, More Student Debt Relief, Donations Matter, Reed's Tuition-Free Initiative.. 
                           </p>
                           <p>
                              <b>Enrollment Trends</b></br>
                              Harvard's Overall Diversity Remains Relatively Stable.
                           </p>
                           <p>
                              <b>Outlook </b><br /><i>
                              New Initiatives in Admissions</i></b><br />
                              Florida International Conducts EA Decision Day, Quinnipiac U. Hosts 100th Class, Stockton U. Hosts Instant Decision Day, Texas to Admit Top 5 Percent Automatically..
                           </p>
                           <p>
                              <b>Counselor's Bookshelf</b></br>
                              <i>Reimagining Student Engagement: From Disrupting to Driving</i> by Amy Elizabeth Berry,  
                              <i>Radical Reimagining for Student Success in Higher Education</i> Jo Arney, Timothy
                              Dale, etc, and more.
                           </p>
                           <p>
                              <b>Testing Tabs</b></br>
                              Dartmouth Reinstates Testing Requirement, Princeton Remains Test-Optional.. 
                           </p>
                           <p>
                              <i>And, of course, <b>News You Can Use.</i></b>
                           </p>
                           <p><a href="24-25issues/Dec24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">December 2024</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Fall 2024: </b>
                              <b><i>The Ups and Downs for Class of 2028</i></b><br />
                              Brown's "Underrepresented Students" Declined in Class of 2028, New Jersey Brings Back 8,600 Stopped-Out Students, SUNY Enrolled 376,000 Students, and more.
                           </p>
                           <p>
                              <b>Financial Matters</b><br/>
                              FAFSA Ready, More Biden Administration Student Debt Relief, Recalculating Aid Formulas, MIT's New Financial Aid Policy..
                           </p>
                           <p>
                              <b>Sticker versus Real Price</b><br />Key details of "The Trends in College Pricing and Student Aid 2024" report released by the College Board.
                           </p>
                           <p>
                              <b>The Counselor's Corner</b><br /><i>
                              More Fall Enrollment Trends</i></b><br />
                              FAFSA Rollout Hurts Private Colleges, Niche Used for Direct Admissions, Postsecondary Outcomes of High School Dual Enrollment Students, and more.
                           </p>
                           <p>
                              <b>Counselor's Bookshelf</b><br /> <i>Learning for Work: How Industrial Education Fostered Democratic Opportunity</i>, by Connie
                              Goddard, and several more.
                           </p>
                           <p>
                              <b>Scholarship Scoops</b><br/>
                              DePaul's Lighting Design, Marshall for All, Questbridge Scholars Announced, UMASS Amherst Offers Some Free Tuition, Western Kentucky Healthcare Workforce Supported.
                           </p>
                           <p>
                              <b>Transfers Stay Near Home</b><br/>
                              Northwestern U. Admits City Colleges of Chicago Transfers.
                           </p>
                           <p>
                              <i>And, of course, <b>News You Can Use.</i></b>
                           </p>
                           <p><a href="24-25issues/Nov24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">November 2024</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Enrollment Trends: </b>
                              <b><i> Freshman Enrollment Declined </i></b><br /> Total undergraduate enrollment increased by 3 percent but freshman enrollment declined, Latino Enrollment Continues to Grow, Australia Limits International Students...
                           </p>
                           <p>
                              <b>Financial Matters</b> <br />FAFSA Update, Holy Cross Expands Low-Income Tuition-Free program. Muhlenberg Offers $2,000 to Students Who Complete the FAFSA, and more.
                           </p>
                           <p>
                              <b>Updates on the Class of 2028 </b><br />NYU's Pell-Eligible Population Grows, Stanford Students Speak 76 Languages, Wesleyan's Minority Population Remains Steady.
                           </p>
                           <p>
                              <b>The Counselor's Corner</b><br /><i>
                              Fall Surveys, Reports</i></b><br /> Why Is Enrollment Declining?,  Nearly 40 Percent of H.S. Upperclassman Have Trouble Finding Reliable Information About College, GPA Less Reliable Indicator, Certificates or College..
                           </p>
                           <p>
                              <b>Counselor's Bookshelf</b><br /> <i>The Best 390 Colleges, 2025 Edition by Princeton
                              Review. <br />Class Dismissed: When Colleges Ignore Inequality and Students Pay the Price,</i> 
                           </p>
                           <p>
                              <b>Curriculum Capsules:</b> Chicago Expands C.C. Engineering, DePaul's B.S. in Robotics, Fordham's Internship Promise, and more.
                           </p>
                           <p>
                              <i>And, of course, <b>News You Can Use.</i></b>
                           </p>
                           <hr />
                           <p><a href="24-25issues/Oct24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">October 2024</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Admissions Watch: </b>
                              <b><i>More on Class of 2028 Up Close</i></b><br /> Augusta U. Celebrates 200th Year, Babson C. Welcomes Freshmen, Bates C.'s New Students Exhibited Extraordinary Experiences, Baylor Most Diverse in History, and more.
                           </p>
                           <p>
                              <b>Financial Matters</b> <br /><i>Damaging FAFSA Reports</i><br /> FAFSA scheduled for 2025-26 is again at risk of technical and bureaucratic problems, <br /><i>FAFSA 2025-26 Testing Begins</i><br /> FAFSA is Still Scheduled for December, Other Financial Matters.
                           </p>
                           <p>
                              <b>The Counselor's Corner </b><br /><i>Enrollment Trands</i><br/> Black Male Enrollment Plunges, Brown's Minority Population Falls, Connecticut Enrollment Declines Persisted After Pandemic, Direct Admissions Expands, Clarkson Sends Ed Programs to Siena and more.  
                           </p>
                           <p>
                              <b>Counselor's Bookshelf</b><br /> <i>Forbes' Top Colleges,</i> Forbes released its list of the 500 top colleges, <i>Bluebook Digital AP Exam.</i>
                           </p>
                           <p>
                              <b>Tuition Tabs:</b> Tuition this fall rose at the majority of the nation's schools but there were a few exceptions.
                           </p>
                           <p>
                              <b>Last Chapters:</b> One Closure Per Week, Oregon C. of Oriental Medicine and more...
                           </p>
                           <hr />
                           <p><a href="24-25issues/Sept24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">September 2024</font></b></a><br />
                           </p>
                           <p>
                              <b>FEATURED ARTICLE</b><br>
                              <b>Financial Matters: </b>
                              <b><i>It's All About the FAFSA,</i></b> The Latest News: The Outlook for 2025-26, FAFSA Fallout, The Impact of the FAFSA Delays So Far on the Class of 2028, The Good News, and more.
                           </p>
                           <p>
                              <b>A Class of 2028 Sampler:</b> Auburn Admits 46 Percent, BC Admits 14 Percent, Guildford's Lush Trees and Red-Brick Buildings Leave Indelible Impressions, Gonzaga's Most Diverse Class..
                           </p>
                           <p>
                              <b>Welcome Mats:</b> Carolina on Their Minds, LSU Welcomes New Tigers, Mercer 191st Academic Year, Tulane's "Hullabaloo Hello," Western Kentucky Advice.
                           </p>
                           <p>
                              <b><i>The Counselor's Corner: </i>Other Financial Matters, </b> Sibling Deduction Cut Could Affect Many Families, Students More Dependent on Aid, How America Paid for College in 2024, Court Puts Biden Repayment Plan on Hold, and more.
                           </p>
                           <p>
                              <b>Counselor's Bookshelf:</b> <i>Princeton Review</i> names Virginia No. 1 Public for Financial Aid, <i>Fiske Guide to Colleges</i> lists the 10 most affordable.</i>
                           </p>
                           <p>
                              <b>New Transfer Agreements:</b> Augustana C. and Rivermont Collegiate Agree on Guaranteed Admission, Maine Transfer Guarantee..
                           </p>
                           <p>
                              <i>And, of course, <b>News You Can Use.
                           </p>
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
<?php mysql_free_result($Recordset1); ?>