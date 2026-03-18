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
                        <li><a href="../members/articles.php">Current Issues</a></li>
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
                           <p><b><font color="#3366cc" sizCurriculume="+2" face="Arial">2020-2021
                              Issues<br />
                              </font><font color="#3366cc" size="+1" face="Arial">Volume 35</font></b><span class="auto-style1"></span>
                           </p>
                           <p><b><font color="#3366cc" size="-1" face="Verdana">If you need
                              to renew your subscription call 773-262-5810, or subscribe on
                              this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
                              <br />
                              Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
                              </font></b>
                           </p>
                           <hr />

                           <!-- start copy here -->
                           <p><a href="Jun21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">June 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES</B><i> Admission Watch:</i>  Small increase in apps overall. <B>Financial Matters:</B> Pandemic Discounting. <b> Enrollment Trends:</b> from Arkansas, Daemen C./SUNY, New Hampshire and more. <B>The Counselor's Corner: </B> <i>How students pay for college - </i> info from Dartmouth, North Carolina, also "Financial Aid Appeal Letters." <B>The Counselor's Bookshelf: </B> a book on  best value colleges; "Like Nobody's Business: an insiders guide to..." <B>Curriculum Capsules:</B> Changes at Bob Jones, a new major in Diversity, Equity and Inclusion, and <i>of course,</i> <B>News You Can Use.</B>
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <!-- end copy here -->

                           <p><a href="May21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">May 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES</B><i> Admission Watch:</i>  Applications to selective colleges surge. <B>Financial Matters:</B> The latest in financial aid, <i> Scholarship Scoops</i> for transferring students.<br /> <B>State News:</B> From Florida, Minnesota, UCLA and Washington. <B>The Counselor's Corner </B> <i>COVID Enrollment Numbers: </i>Saint Mary's, Colorado, Albion & Kalamazoo, and more... <br /> <B>The Counselor's Bookshelf: </B> Hopes & Worries; Colleges With no student loans, reduced tuition. <br /> <B>Ivy League 2021 Updates:</B> Brown, Harvard, Penn and more.     
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Apr21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">April 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES:</B><i> A Year of "Adaptation":</i>  New Applications Numbers for Spring 2021.
                              <B>Financial Matters:</B> How the Federal Stimulus Helps Higher Ed. How Colleges and Universities can Defray COVID-Related Costs and how this Affects You. <B>State News</B> Things of Note from Connecticut, Maine, Virginia and Florida <B>The Counselor's Corner:</B> Counseling Amidst COVID; Longer Wait Lists, Virtual vs. In-Person Tours, Kids Under Pressure  <B>The Counselor's Bookshelf:</B> A Guide for Students with Learning Differences, Remaking Inequality in Boston, Colleges Worth Your Money, and <B>Ivy League Early Acceptance Rates.</B> and <B>News You Can Use.</B>     
                              <!-- <br /> -->
                           </div>
                           <hr />

                           <p><a href="Mar21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">March 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES:</B><i> Admission Watch:</i>  New Admissions Numbers for Spring 2021.
                              <b>Financial Matters:</b> The Federal Reserve's Take on College Attendance. Reports on the FAFSA and No-Loan Policies. State News. And New Initiatives.
                              <b>Enrollment Trends</b> Among Freshmen and International Students. The Impact of HBCU's. <B>The Counselor's Bookshelf:</B> On the Impact of Underfunding Public Universities. On College Belonging. On Social Mobility. <B>Curriculum Capsules:</B> New Programs on Ocean Science and another on Marine Science, Plus, a new Major in Software Engineering and a new Biomedical and Biotech Degree. And, then, of course,  <b>Scholarship Scoops</b> and <B>News You Can Use.</B>     
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Feb21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">February 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES:</B><i> Admission Watch:</i>  COVID Impacts the College Application Process  
                              <b>Financial Matters:</b> COVID Relief Package for Colleges and Universities <i>how Community Colleges cope.</i>
                              <b>A Special Report:</b> <i>The Lost Class?</i> College enrollment for High School Class of 2020 is down substantially <B>The Counselor's Corner:</B> <i>New Recruiting Tactics</i> - methods of reaching more students, new counseling methods...and more <B>The Counselor's Bookshelf:</B> A new spin on in-person College tours. <b>Curriculum Capsules:</b> New Education Models Emerging. And, of course, <B>News You Can Use.</B>     
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Jan21.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">January 2021</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES:</B><i> Admission Watch:</i> Colleges find new ways to recruit students 
                              <b>Financial Matters:</b> The impact of the stimulus package on higher education. Will President-Elect Joseph Biden cancel student debt? COVID's Further impact on Higher Ed. FAFSA apps down: <i>How One State Responds.</i> How Colleges are addressing tuition costs. 
                              <B>Enrollment Trends:</B> Who is up and who is down. States hit the hardest. <B>The Counselor's Bookshelf:</B> A new report on higher ed budgets and COVID From Lumina. And people are talking about the new PBS Series, "Rethinking College." <b>Early reports from the Ivy League.</b> A profile of one state and its enrollment challenges. <b>Curriculum Capsules:</b> Including new online programs.
                              <b>A Special Report:</b> On best practices for graduating low-income students. And, of course, <B>News You Can Use.</B>     
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Dec20.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">December 2020</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES:</B> <i>Admission Watch:</i> More Expected to be Admitted Early. 
                              <b>Financial Matters:</b> Will Congress Cancel Student Debt? Price Increases Slow. One State Freezes Tuition. One College Eliminates Loans. And Medical School Applications Soar.
                              <i>The Counselor's Corner.</i> Recruiting in the Age of COVID. <b>Counselor's Bookshelf:</b> A Book Here. A Report There. <b>Curriculum Capsules:</b> New Finance Programs. New Internships. A New Degree in Sustainability. New Reports about Online Learning.
                              <b>And, News You Can Use:</b> On the ACT, Affirmative Actions. And More.                       
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Nov20.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">November 2020</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES:</B> A First Look at Fall Enrollment Trends. On a National Scale and at Local Colleges. <B>A COVID-19 Campus Update: </B>The Impact on Colleges. And How Some Colleges Are Recruiting Students.
                              <B>Counselor's Bookshelf. </B> A Couple of New Items. <B>Financial Matters:</B> On the State of Student Aid. And How Aid Impacts Middle-Class Mobility. <B>A New Report:</B> On How Long it Takes Grads to Find a Job.  
                              <B>Tuition Tabs. Curriculum Capsules: </B> New Programs, New Partnerships. <B>And News You Can Use: </B> On Education Gaps and the Common App. Among Other Things.
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Oct20.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">October 2020</font></b></a><br />
                           </p>
                           <div>
                              <B>FEATURED ARTICLES:</B> Another Special Six-Page Issue: <B>Colleges and COVID-19: Updates:</b> 
                              Snapshots Of College Trends. <B>Will COVID Impact the Class of 2025?</B> 
                              A Roundup of Colleges Facing the Pandemic. <B>Presidential Candidates on Higher Ed.</B> 
                              A Look at Key Issues. <B>The Counselor's Corner:</B> A Look Ahead. 
                              <B>Counselor's Bookshelf:</B> Resources on the New Enrollment Challenge, a Gap Year and the Post-Pandemic College. 
                              <B>Financial Matters:</B> On New Tuition Free-Program in the States. A Scholarship Scoop or Two. <B>More Enrollment Trends:</B> 
                              New Programs, New Partnerships. <B>How Some Colleges in California Face the Challenges This Fall.</B> And,  <B>Graduate News:</B> New Programs, New Trends. 
                              <B>As Well As, News You Can Use:</B> On Censorship on Campuses, the Learning Disabled and Greek Life.
                              <!-- <br /> -->
                           </div>
                           <hr />
                           <p><a href="Sept20.pdf"  target="_blank"><b>
                              <font size="+1" face="Verdana">September 2020</font></b></a><br />
                           </p>
                           <div>
                              <b>FEATURED ARTICLES: </b>Special Six-Page Issue: 
                              <i><b>How COVID-19 is Impacting Higher Ed</b></i>.&nbsp; 
                              <b>Financial Measures. </b><i>A Memo from the National Governors Association.</i><b> The Shape of Things to Come.</b> 
                              The Counselor's Corner focused on Colleges Opening Face to Face and Online. 
                              <b>Enrollment Trends: </b>A Look at California Universities. 
                              <b>Admissions Watch.</b> With Community College Options and a Word on How Student Plans are Changing. 
                              <b>Counselor's Bookshelf: </b>From New Resources on How to Navigate the New Challenges. 
                              Best Value Colleges, Web Sources and New Reports. And, of course, 
                              <b>News You Can Use:</b> On Online Learning, What Parents Think and New Test Optional Schools.  
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