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
                           <p><b><font color="#3366cc" sizCurriculume="+2" face="Arial">2021-2022
                              Issues<br />
                              </font><font color="#3366cc" size="+1" face="Arial">Volume 36</font></b><span class="auto-style1"></span>
                           </p>
                           <p><b><font color="#3366cc" size="-1" face="Verdana">If you need to renew your subscription call 773-262-5810, or subscribe on
                              this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
                              <br />
                              Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
                              </font></b>
                           </p>
                           <hr />

                           <!-- start copy here -->
                           <p><a href="June22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">June 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i></b>Unprecedented Competition due in part to shift to test optional policies. Bryant Apps Up 25 Percent, Hillsdale’s Classical Approach, Lafayette Seeks “Right Size,” and more.
                              <br /><br />   
                              <b>Financial Matters:</b> Staffing Shortages in College Financial Aid Offices, New Brown Aid for International Students, Colorado Law Provides Help with Financial Aid Forms...
                              <br />
                              <b>The Counselor's Corner:</b> New Recruiting Efforts:<i> Recruiting Men,</i> "College Possible" Expands, Cornell’s Alternative Engineering Recruitment Mode, Accelerate ED... 
                              <br />
                              <b>The Counselor's Bookshelf:</b> Limited College Advising Time Helped By On-Demand Videos.<i> "Indentured Students: How Government Guaranteed Loans Left Generations Drowning in College Debt,"</i> and more.
                              <br />
                              <b>Tuition Tabs:</b> Tuition Discount Rates Highest Ever. Spot Check on fall tuition increases: Cornell up, Delaware up, Duke up. 
                              <br />
                              <b>Enrollment Trends:</b> Enrollment Declines Continued This Spring. <i>A Third of Students Considered Withdrawing,</i> Pandemic’s Impact on Students. 
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <!-- end copy here -->

                           <p><a href="May22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">May 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: </i></b>The latest from BC, BU, Cornell, Duke, Illinois, and more.
                              <br /><br />   
                              <b>Financial Matters:</b> Biden Administration Forgives More Federal Loans, New FAFSA Applications Rebound but  FAFSA Renewals Tumble, U. of California Ends Tuition for Native Americans, various "Comings and Goings", and more.  
                              <br />
                              <b>The Counselor's Bookshelf:</b><i> Best Value Colleges 2022</i> - public and private colleges that have the highest ROI, <i>The Community’s College: The Pursuit of Democracy, Economic Development, and Success,</i> by Robert L. Pura and Tara L. Parker; and a New Website Resource. 
                              <br />
                              <b>Curriculum Capsules:</b> Indiana Wesleyan Launches Engineering Program, North Carolina A&T Expands Engineering, SUNY Oswego Integrative Professional Studies Degree, hot Two-Year Programs.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Apr22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">April 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch 2022: "Selective School Apps are Up"</i></b><br /> Applications from highly-selective colleges and universities jumped. Some specifics from Barnard, Bowdon, Caltech, Colby and more.
                              <br /><br />   
                              <b>Financial Matters:</b> Federal Budget for Higher Education up by 3 billion. Fewer Submit FAFSA. Long-Term Debt continues to rise, and much more. 
                              <br />
                              <b>The Ivy League Report:</b> Information from Princeton, Brown, Dartmouth, Harvard, Penn and Yale.
                              <br />
                              <b>The Counselor's Bookshelf:</b><i> The Handbook of Online Learning in Higher Education. Collective Illusions: Conformity, Complicity and the Science of Why We Make Bad Decisions.</i>Several good web resources. 
                              <br />
                              <b>Enrollment Trends:</b> From UC Berleley to Oklahoma.
                              <br />
                              <b>Curriculum Capsules:</b> A new Transfer Partnership, a new BS in Data Science...
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Mar22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">March 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: "Forming the Class of 2026"</i></b><br /> Admissions trends from Boston College to William & Mary. <i>California Shatters Records:</i> UC Berkeley Warns It May Admit Thousands Fewer, UC Davis Sees Increase..   <br /><br />   
                              <b>Financial Matters:</b> State Higher Ed Support Increases in Inflation’s Shadow, State Tuition Increases Resume, Charitable Support for Higher Ed Increases, Defrauded Students Compensated, and more.
                              <br />
                              <b>The Counselor's Corner:</b><i> Keeping Up - Research and Recruitment; </i> Half of 18- to 24-Year-Olds Did Not Enroll in College, College Completion Rates, Why Students Leave Community Colleges, <i>New Recruitment Strategies:</i>
                              DePauw Boosts International Enrollment, Rutgers New Aid Strategy, and more. 
                              <br />
                              <b>Counselors Bookshelf: </b> Good reads on <i>The Future of Gen Z</i>, and <i>God, Grades and Graduation.</i>
                              <br />
                              <b>Curriculum Capsules:</b> Alvernia Expands Engineering, Bemidji State Offers Communications, Evergreen State Opens Social Justice Center, Niagara Intensifies... 
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Feb22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">February 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: "Challenging Admissions Season"</i></b><br /> James Madison Early Pool Up 40 Percent, MIT Early Admits Record Low, NYU Tops, Tufts Apps Grow..<br /><br />    
                              <b>Financial Matters:</b> Graduates Sue 16 Elites Schools, Inflation Threats, <i>New College Initiatives: </i>Central Florida's Tuition Assistance for Company Employees, Concordia's FARSA Fridays, Dartmouth goes..and more.
                              <br />
                              <b>The Counselor's Corner:</b><i> New Enrollment Trends </i> <br />
                              Fall 2021 Enrollment Continues Decline, Four States Account for 50 Percent of Decline, <i>Enrollment in the States </i>Missouri down, Western Nevada up.
                              <br />
                              <b>Counselors Bookshelf: </b> <i>Reopening Campus, How to Do It Safely and Successfully,</i> a good book on book on building student's resilience, and more 
                              <br />
                              <b>Curriculum Capsules:</b> Houston's Early Childhood Program, Quachita Baptist Engineering B.S., St. Louis’s Medical Cannabis Science Certificate Program, a new Online MBA.
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Jan22.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">January 2022</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch 2022: "Early Aps Up Again:"</i></b> Applications Per Student Soar, Brown Admits Fewest in History, California Sees "Crush of Students", and news from Columbia, Dartmouth..<br /><br />    
                              <b>The Counselor's Corner:</b><i> 2021 Year in Review</i> 
                              "Continued Polarization," Community Colleges See Decline, International Student Enrollment Grows, College Athletes Graduate at Record Levels...
                              <br />
                              <b>Counselors Bookshelf: </b> <i>Understanding Academic Freedom,</i> surveys academic freedom's history, <i>There Is No College in COVID: Selections from the Oregon State University-Cascades COVID-19 Journaling Project,</i> a new report shows more California Latino Graduates.
                              <br />
                              <b>Financial Matters:</b> Student Loan Repayment Moratorium Extended, Student Borrowing Declines, Changes Coming to FAFSA...and more.
                              <br />
                              <b>Curriculum Capsules:</b> Lake Superior has a new B.S. in Data Science, NY Trade Schools are busy, some new stuff from Rowan U, and Tuskegee.
                              <!-- <br /> -->
                           </div>
                           <hr />
                           
                           <p><a href="Dec21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">December 2021</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>Admissions Watch: "2021 Year-End News:"</i></b> Bucknell, Lewis & Clark Expands Financial Aid, Maine Attracts Out-of-Staters... 
                              <br /> <br />
                              <b>Financial Matters:</b> FAFSA Drop, FAFSA Verification Reform.
                              <br />
                              <b>The Counselor's Corner:</b>&nbsp; <i>Who Gets In, Who Stays?</i> 
                              Where Have All The Male Students Gone? Who Wants to Graduate? Native Americans Still Left Out.
                              <br />
                              <b>Counselors Bookshelf: </b> <i>"The Hidden Curriculum..,"</i> and a new tool from Bill and Melinda Gates.
                              <br />
                              <b>Curriculum Capsules:</b> States Target Career Technical Education, Harvard Removes Study Abroad Program from China...a Law School Boom. More.
                              <br />
                              <b>Scholarship Scoops:</b> Middlebury, Montana...
                              <br /><br />                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Nov21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">November 2021</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLE <br />
                              <i>"Talent, Smarts and Global Perspectives:"</i></b> Brandeis, Bucknell, Dartmouth and others. 
                              <br /> <br />
                              <b>Financial Matters:</b> Tuition Up "Higher than Inflation." The Financial Aid Picture, trends in Private debt.
                              <br />
                              <b>The Counselor's Bookshelf:</b> 
                              Career readiness is the number one priority.
                              <br />
                              <b>Enrollment Trends: </b> Fall Enrollment Continues to Plunge...   
                              <br />
                              <b>Curriculum Capsules:</b> An expansion into nursing, online trends. Criminology.
                              <br />
                              <b>Scholarship Scoops:</b> From Arkansas, Chicago, and more. 
                              <br /><br />
                              <i>And, of course, </i><b>News You Can Use.</b>
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Oct21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">October 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES</B><i> Admissions Watch: </i> Insights from Hanover research, info from Alvernia, Bates, and more. 
                              <B>Financial Matters:</B> FAFSA Available October, student borrowing trends. <B> The Counselor's Corner: </B><i>What is impacting admissions. </i><B>Counselor's Bookshelf: </B>A good Wellness Guide and a good book on Passion and more, plus: <B>Curriculum Capsules, Scholarship Scoops,</B> and <i>Of course: </i> <B>News You Can Use.</B>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           
                           <p><a href="Sept21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">September 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES</B><i> Fall Outlook: Toward a Post-Pandemic Future.</i> How the nation’s higher educational institutions responded to the challenges of
                              COVID-19. <B>Admissions Watch:</B> Brown’s Wait List, <i> California Admits a Record Number of Students.</i> <b> Financial Matters:</b> H.S. Students Change Plans. Ramifications. FAFSA Apps Down 4.8 Percent..and more.<B> The Counselor's Bookshelf: </B> <i>"An Inconvenient Minority", "Game On: Why College Admission is Rigged and.." are two good ones.</i><B> Enrollment Trends: </B> Pandemic Enrollment Declines are the big story. <B>State News:</B> From Idaho, California and North Dakota. <B>Curriculum Capsules:</B> Some schools are expanding into well known areas, some are adding "newish" things. <i>Of course, </i> <B>News You Can Use.</B>
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