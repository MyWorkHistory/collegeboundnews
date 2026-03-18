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
                           <p><b><font color="#3366cc" sizCurriculume="+2" face="Arial">2023-2024
                              Issues<br />
                              </font><font color="#3366cc" size="+1" face="Arial">Volume 38</font></b><span class="auto-style1"></span>
                           </p>
                           <p><b><font color="#3366cc" size="-1" face="Verdana">If you need to renew your subscription call 773-262-5810, or subscribe on
                              this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
                              <br />
                              Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
                              </font></b>
                           </p>
                           <hr />

                           <!-- start copy here -->
                           <p><a href="Jun24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">June 2024</font></b></a><br />
                           </p>
                           <div>
                              <b>Financial Aid Matters:</b> $50 Million to Boost FAFSA Numbers, Evergreen State Reports 1,000 Fewer FAFSA Applications, Gear Up Kentucky Helps Students Complete FAFSA, <i>Loan news:</i> More Student Loan Cancellations, Direct Loan Interest Rates for 2024-2025, and more.
                              <br /><br />
                              <b>Admissions Watch:</b> Elon U. Accepts 66%, Harvard's Yield Amidst "Tumultuous" Year, Lafayette, Admits 30.6 Percent, New England Institute of Technology, Smith Admits 20 Percent...
                              <br /><br />
                              <b>Enrollment Trends:</b> Where is the Enrollment Growth? Race and Ethnicity in Higher Education, CUNY Reconnects with 33,000 Students, Two-Year Colleges at Four-Year Institutions.
                              <br /><br />
                              <b>The Counselor's Corner: <i>Year-End Odds and Ends </i></b> Counselors-to-Student Ratios, AI to Transform Admissions, Who Isn't Planning to Go to College? Men Favored Over Women: The Dilemma?
                              Middle School Curriculum Critical.
                              <br /><br />
                              <b>The Counselor's Bookshelf:</b><i> "The Higher Education Financial Aid Workforce: Pay, Representation, Pay Equity and Retention" </i> by the College and University Professional Association for Human Resources. <i>"Higher Education in 2035: How to understand and prepare for the challenges ahead,"</i> The Chronicle of Higher Education and more.
                              <br /><br />
                              <b>Curriculum Capsules:</b> <i>"The Great Misalignment: Addressing the Mismatch between the Supply of Certificates and Associate's Degrees and the Future Demand for Workers in 565 US Labor Markets"</i> from a new report from Georgetown, Meteorologists Find New Niche: the financial field.
                              <br /><br />
                              <b>Scholarship Scoops:</b> Bowling Green Receives $250 Million for
                              Scholarships, Colorado Expands its Promise, P.S. Global Scholarships
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use</b> 

                           <hr />
                           <!-- end copy here -->
                           <p><a href="May24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">May 2024</font></b></a><br />
                           </p>
                           <div>
                            <b>FEATURED ARTICLE <br />
                              Admissions Watch:<i> More Impacts on Fall 2024, </i></b>Bethune-Cookman Bucks Trend, Georgetown Admits 12 Percent, Howard U. Sets Record, Lehigh Admits from 65 Countries, NYU Attracts 118,000 Apps, Rhode Island C. Admits 84 Percent, and more.
                              <br /><br />
                              <b>Financial Matters:</b> FAFSA Recomputed, Low-Income/Minority Students Aren't
                              Filing FAFSAs. <b>State Responses to FAFSA Problems:</b> Maryland Extends Deadline, New York Requires Universal FAFSA To Increase Access, West Virginia Declares Emergency. <b>Tuition and Aid: </b>Sticker Shock, Financial Aid at Elite Colleges, and more.
                              <br /><br />
                              <b>California Dreaming: </b>The U. of California released its admissions figures for the Class of 2028, UC Davis attracted 94,635 first-year applications, The U. of California at Los Angeles drew 145,904...
                              <br /><br />
                              <b>The Counselor's Bookshelf: </b><i>Higher Education in 2035: How to understand and prepare for the challenges ahead; The Chronicle of Higher Education;</i> see, https://store.chronicle.com/products highereducation-and-2035. <i>The Truth about College Admission: A Family Guide to Getting In and Staying Together</i> by Brennan Barnard and Rick Clark, A New Poll.
                              <br /><br />
                              <b>Enrollment Trends: </b>Undergraduate Degree Earners Decline, Fresno State's Direct Admissions, Maine's Automatic Enrollment Yields Results, Transferred Enrollment is up in 2023..
                              <br /><br />
                              <b>Testing Tabs </b>Test Reinstatement: The California Institute of Technology reinstated its requirement, the U. of Texas also announced that it has reinstated standardized test scores.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Apr24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">April 2024</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              Admissions Watch:<i> Outlook for Class of 2028, </i></b>The Common App has 7,541,148 applications, Amherst Apps, Bates Boasts its Largest Pool, Barnard Admits only 7 Percent, Bowdoin Admits from 40 Nations, Colby Admits 1,275 Students, and more.
                              <br /><br />
                              <b>Financial Matters:</b> FAFSA Update, Brown "Need-Blind" for International Students, Global Scholarships.
                              <br /><br />
                              <b>Ivy Profiles: </b>Brown's Admits Represent 96 Countries, Columbia's Admit Rate Dipped, Cornell Admits Increase 4 Percent, Dartmouth's Admits at Record Low, Harvard Tops 50,000 Apps, Again...
                              <br /><br />
                              <b>Among the Publics: </b>Indiana Tops 66,800 Apps, Texas at Austin Hits 73,000, Virginia Admits 9,665 Students.
                              <br /><br />
                              <b>The Counselor's Corner <i>Enrollment Trends, </i></b>Why Do Enrollments Seem To Be Falling? Colorado State 2023 Increases, Michigan Upper Peninsula Posts Enrollment Gains, NKU's Direct Admit, Research Finds College A Sound Investment Despite Rising Tuition, and more.
                              <br /><br />
                              <b>The Counselor's Bookshelf: </b><i>First-Generation Warriors: A University Leader's Experience as a First-Gen Student</i> by Dawn Meza Soufleris, <i>The Black Family's Guide To College Admissions </i>by Timothy L. Fields and Shereem Herndon-Brown, and more.
                              <br /><br />
                              <b>Curriculum Capsules: </b>California Community Colleges Offer New Degree Programs, Georgetown's Joint Environment and Sustainability Program, New C. Offers Online Program
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Mar24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">March 2024</font></b></a><br />
                           </p>
                           <div>
                              <b>ADMISSIONS WATCH <br /></b> Bowdoin Admits 13 Percent ED, Brown Attracts More Then 48,000 Apps, Connecticut Applications "Skyrocket," Florida State Tops 76,000 Apps, Miami Admits 900 More Than Last Year, Middlebury's Boasts Third Largest Pool...
                              <br /><br />
                              <b>Financial Flash:</b><i> Commitment Deadline Pushed Back by FAFSA Troubles.</i>
                              <br /><br />
                              <b>Financial Matters:</b> Cal State to Hike Tuition/Expand Grants, Carroll Offers Aid Guarantee, Southwestern University Creates Its Own SUFEF, Cleveland Jewish Family Services Help Middle Class Students, DePauw's $200 Million Transformation, The Temple Promise, Vanderbilt Expands No-Loan Program, and more.
                              <br /><br />
                              <b>Scholarship Scoops:</b> Links to financial aid information, state scholarships and grants in the 12 Midwestern states served by the MHEC (Midwestern Higher Education Compact Financial Aid Resources.)
                              <br /><br />
                              <b>Enrollment Trends:</b> Duke De-emphasizes Essays Because of AI, Goddard Goes Virtual, Iowa C.C. Enrollment Down Slightly, Lyon Retention Hits 92 Percent, Military Academies May Continue Using Race in Admissions, and more.
                              <br /><br />
                              <b>The Counselor's Bookshelf:</b><i> World University Rankings 2024. </i>The United Kingdom and U.S. institutions dominate the top 10 rankings of "World University Rankings 2024" but China moving up. <i>Wasted Education: How We Fail Our Graduates in Science, Technology, Engineering and Math</i> by John D Skrentny, <i>Tracking Transfer: Community College and Four-Year Institutional Effectiveness in Broadening Bachelor's Degree Attainment</i> by by Velasco, Fink, Bedoya-Guevara, Jenkins & LaViolet.
                              <br /><br />
                              <b>Curriculum Capsules: </b>Arizona State's Applied Military Veterans Studies, C. of Saint Benedict/St. John's U. New Finance Major. Elmhurst's Micro-Credentials
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Feb24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">February 2024</font></b></a><br />
                           </p>
                           <div>
                              <b>ADMISSIONS WATCH <br /></b><i>FSU ED Profile, </i> Georgetown Accepts 10 Percent EA, "Georgia Direct", James Madison Up 78 Percent Over 2021, Marquette Up 20 Percent Over 2020, MIT Admits 5.2 Percent EA, Tennessee Receives More Than 49,000 EA Apps, Tufts Sets Records. 
                              <br /><br />
                              <b>Financial Matters: </b>FAFSA Error Could Push Back Deadlines, FAFSA Check-Ins, Biden Accelerates Federal Loan Cancelations.
                              <br /><br />
                              <b>Enrollment Trends:</b> Fall 2023 Undergraduate Enrollment Grew 1.2 Percent according to the National
                              Student Clearinghouse Research Center, Declining Male Enrollment, More Californians at UC.
                              <br /><br />
                              <b>The Counselor's Corner: <i>State Financial News: </i></b>State-Sponsored Student Financial Aid, Idaho Launches LAUNCH, Illinois Tuition Holds Steady, Massachusetts Increases Aid, Ohio Colleges Lose Money on Dual Enrollment, New Jersey Requires FAFSA to Graduate, and more. 
                              <br /><br />
                              <b>The Counselor's Bookshelf:</b> <i>City of Intellect: The Uses and Abuses of the
                              University</i>, by Nicholas B. Dirks; Cambridge U. Press, "Global Higher Education Market to Surge" according to the <i>"Global Higher Education Market 2024-2028 report"</i> from ResearchAndMarkets.com, and more.
                              <br /><br />
                              <b>Scholarship Scoops</b> Skidmore and Cornell Join QuestBridge, Spelman Receives $100 Million Gift, HBCU's $100 Million Gift, Health Care Diversity after Affirmative Action.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Jan24.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">January 2024</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              Admissions Watch:<i> Early Admissions Shaping
                              Class of 2028. </i></b>Barnard Draws 1,694 Early Apps, Boston U. Admits 1,300 Early Decision, Brown Selects 14 Percent ED, Columbia Receives Most ED Apps Since 2020, Dartmouth Admits 17 Percent ED, Duke Admits Record-Low ED, Harvard Accepts 629 EA Students, Johns Hopkins Draws New Talent, and more.  
                              <br /><br />
                              <b>Financial Matters: </b>FAFSA Finally Available in January, Aid for Colleges Improving Rural Graduations, College Inflation Down to 4 Percent, Louisville Expands Cardinal Commitment...and more.
                              <br /><br />
                              <b>Georgia on Their Minds: </b>Emory Attracts More Apps This Year, Georgia Admits 9,000 EA, Georgia Tech Concentrates In-State.
                              <br /><br />
                              <b>The Counselor's Corner: <i>New Year
                              Enrollment Trends: </i></b> Colleges Take "Laissez Faire" Approach to AI in Admissions, Beloit Steps Up Recruitment in Wisconsin and Illinois, California Reconnect, Colorado Says 90 Percent of Livable Wage Jobs Require Postsecondary Credentials. Kansas Sets New H.S. Requirements, Wisconsin Seeks More International Students, York Joins Direct Admissions Program, and more.
                              <br /><br />
                              <b>The Counselor's Bookshelf: </b><i>Recent Studies: </i>Diverse College STEM Classrooms Score Better. Generation Z. beliefs. Workforce Development is the top priority.
                              <br /><br />
                              <b>Curriculum Capsules: </b>Bradley "Sunsets" several programs, Caltech Partners with Khan Academy, Cleveland C.C. Animal Science Tech Program, IU Kelley's Master of Management Program.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <!-- end copy here -->

                           <p><a href="Dec23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">December 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              Admissions Watch:<i> Early Apps...and More. </i></b>The number of common applications submitted this year before
                              November 1 soared by 41 percent, <b><i>Early Returns:</i></b> CUNY's October Apps Soar by 386 Percent. Cornell U. Makes Change in Application "Process." Lafayette College Closes Early Decision Applications with Increase, Virginia Draws More than 42,000 Early Apps, and more.
                              <br /><br />
                              <b>Fall 2023 Enrollment Increases: </b>According to NSCRC, undergraduate enrollment grew in Fall 2023 for the first time since the beginning of the pandemic, International Students Return. Seton Hall's Most Diverse Class.
                              <br /><br />   
                              <b>Financial Matters: </b>Michigan State Offers Free Tuition...for some, Pittsburgh Promise Going Away, Over Half of California Students Report Economic Insecurities, SAT Gap Between Rich and Poor Students, New Gainful Employment Regulation, and Student Debt Data.
                              <br /><br />
                              <b>Scholarship Scoops:</b> New "Family Grant," Eastern Michigan Boosts Financial Aid and Scholarships by 8.9 Percent, Meredith's Full-Ride Merit Scholarship, UCLA Affordability Scholarships.
                              <br /><br />
                              <b>The Counselor's Bookshelf: </b><i>New Pathways for College; </i>The Chronicle of Higher Education. <i>Teacher Preparedness Through Effective Student Teaching;</i> published October 2023. <i>HBCU Enrollment and Longer-Term Outcomes</i> Annenberg Brown University's Working Paper No. 23-883
                              <br /><br />
                              <b>Curriculum Capsules: </b>Alma C.'s Route to Ferris State's College of Pharmacy, Ithaca's Integrative Studies Major, Johns Hopkins' New Distribution Requirements, UCLA's Disabilities B.A, ...
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
 
                           <p><a href="Nov23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">November 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i></b>Bowdoin's Records Record Apps, DePaul's Freshmen: 51 Percent are Students of Color, Illinois Sets Records, Lafayette Anticipated Supreme Court Ruling, Michigan Enrolls 52,000, Pitt Fielded 58,000 Apps for 2023, and more.
                              <br /><br />   
                              <b>Financial Matters: </b>Biden Makes Second Attempt at Student Loan Cancellation, California State U. Tuition Increases, Colorado Offers Free College for Some Engineering Students, Oakland Insures "Golden Guarantee," Wesleyan Eliminates Loans, Wesleyan Eliminates Loans.
                              <br /><br />
                              <b>The Counselor's Corner: <i>New Ways of Getting In </i></b> California Seeks Transfers, Michigan's Assured Admission Pact, Georgia Boasts New Direct Admissions, No Supplemental Essay... 
                              <br /><br /> 
                              <b>The Counselor's Bookshelf: </b>Reading for Pleasure is down, see <i>Kids & Family Reading Report,</i> a study conducted by Scholastic. <i>The Future of Advising: Strategies to support student success; </i>The Chronicle of Higher Education. AI Scholarship Searches.
                              <br /><br />
                              <b>Curriculum Capsules: </b>ACT Declines, Miami Dade is Building New Construction Trades Institute.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Oct23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">October 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i></b>Bates Welcomes "Problem Solvers," Colby Touts New Opportunities, Johns Hopkins Photo Shoots New Class, Minnesota Leaders Welcome New Class, MIT's Got Talent, Nicholls State Touts Small, Friendly Campus, Oregon Boasts Having Second Largest Class, and more.
                              <br /><br />   
                              <b>Financial Matters:</b> 100-Plus Groups Join SAVE, Central Arkansas Debt Free Graduates, Tuition Shock, Duke Offers Free Tuition for Carolina Students from Families Earning Less than $150,000, Illinois Partnership Loan Program...
                              <br /><br />
                              <!-- <b>The Counselor's Corner: <i>New Reports on Admissions Trends </i></b> States Preserved Financial Aid Programs During Pandemic, Wealth Counts at the Ivy-Plus, Dropping Legacy Admissions at Wesleyan U, the "Some College, No Degree" Initiative...
                              <br /><br /> -->
                              <b>The Counselor's Bookshelf:</b> <i>Heroic Fraternities: How College Men Can Save Universities and America</i>, by Anthony Bradley, How Important Are The College Rankings?, <i>The K&W Guide To Colleges For Students With Learning Differences</i>, 16th Edition, by Marybeth Kravets, M.D. and Imy F. Wax, MS.<i>The Best 389 Colleges, 2024,</i> by Robert Franek, The Princeton Review.
                              <br /><br />
                              <b>Enrollment Trends:</b> Community College Enrollment Rebounds, Fitch Ratings for Higher Education, UConn Acceptance Rate High, Harvard Crimson Editorializes on Harvard's New Application Questions. 
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Sept23.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">September 2023</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i>Early Reports for Fall 2023 </b><br />
                              Catholic U. Welcomes Largest Class, Elon Greets 1,688 New Students, Georgia's New Students Post 4.0-plus for Seventh Straight Year, Kentucky Promotes "Student Success.", Lebanon Valley C in Pennsylvania welcomed 480 new students, in Boston, Northeastern U. received 96,620 applications for 2,600 seats in its Class of 2027, <i>California Admits Record Number of In-State Residents,</i> and more.
                              <br /><br />   
                              <b>Fall Financial Matters:</b> New Income-Driven Loan Repayment Plan Will Drastically Reduce Student Debt, Supreme Court Nullifies Student Debt Forgiveness Plan, $39 Billion Forgiven.
                              <br /><br />
                              <b>The Counselor's Corner: <i>New Reports on Admissions Trends </i></b> States Preserved Financial Aid Programs During Pandemic, Wealth Counts at the Ivy-Plus, Dropping Legacy Admissions at Wesleyan U, the "Some College, No Degree" Initiative...
                              <br /><br />
                              <b>The Counselor's Bookshelf:</b> <i>The Career Arts: Making the Most of College, Credentials, and Connections; </i> Ben Wildavsky, <i> The Future of Advising: Strategies to Support Student Success, </i> The Chronicle of Higher Education, and more.
                              <br /><br />
                              <b><i>Supreme Court Outlaws Affirmative Action in College Admissions.</i></b>
                              <br /><br />
                              <b>Curriculum Capsules:</b> Clinton C.'s New Nursing BS, Portland State's Chicano/Latino Studies
                              BA, SUNY Cobleskill's BA in Agricultural Communication. 
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