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
                        <li><a href="articles.php">Curre<span class="style1"></span>nt Issues</a></li>
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
                           <p><b><font color="#3366cc" size="+2" face="Arial">2019-2020
                              Issues<br />
                              </font><font color="#3366cc" size="+1" face="Arial">Volume 34</font></b><span class="auto-style1"></span></p>
                           <p><b><font color="#3366cc" size="-1" face="Verdana">If you need
                              to renew your subscription call 773-262-5810, or subscribe on
                              this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
                              <br />
                              Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
                              </font></b>
                           </p>
                           <hr />
						   <!-- start copy here -->
                           <p><a href="June20.pdf"><b>
						   <font size="+1" face="Verdana">June 2020</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i> Admissions 2020:</i> 
							  "Through the Fog." A Roundup of Where Colleges Are in This Changing Environment: From California to Maine.
							  <br /><br />
							  <strong>COVID-19 UPDATES: </strong> How Will Colleges Reopen in Fall? 
							  <br /><br />
							  <strong>OTHER ADMISSOINS UPDATES: </strong> Among the Ivy Leagues. Among the News Headlines. 
							  <br /><br />
							  <strong>THE COUNSELOR'S BOOKSHELF:</strong> Resources for Tracking the COVID-19 Impact on High Ed.</i> 
                              <br /><br />
							  <strong>CURRICULUM CAPSULES:</strong> New Nursing Programs. New Sports Media Major. And Other New Majors and Minors.   
                              <br /><br />
							  <strong>NEWS YOU CAN USE:</strong> On the Nation's Report Card. On the Internet Homework Gap. On DACA Students. On Debt Updates. And More.
                              <br /><br />
                           </div>
                           <hr />
                           <!-- end copy here -->
                           <p><a href="May20.pdf"><b>
						   <font size="+1" face="Verdana">May 2020</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i> Admissions in a Changing Landscape:</i> Admissions Trends Around the Country Amidst the Pandemic. With a Spot-check on California.<i> The Counselor's Corner:</i> What are the Enrollment Scenarios for Fall? What is the COVID-19 Impact? What are the College Adaptations to the Virus? 
                              <br /><br />
							  <strong>THE COUNSELOR'S BOOKSHELF:</strong> On Encouraging Summer Enrollment. On Promising Practices and an Evaluation of the Use of Distance Learning. Plus, Two New Books Noted: <i>The College Stress Test and College Admissions Cracked.</i> 
                              <br /><br />
  							  <strong>FINANCIAL MATTERS:</strong> On Student Aid and Application Fees. 
                              <br /><br />
							  <strong>TESTING TABS.</strong> <i>And,</i> 
                              <br /><br />
							  <strong>CURRICULUM CAPSULES:</strong> From Engineering to Business.  
                              <br /><br />
                           </div>
                           <hr />
                           <p><a href="Apr20.pdf"><b>
						   <font size="+1" face="Verdana">April 2020</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i> Admissions Roundup 2020:</i> Expanded coverage of spring admissions numbers on who got in. Colleges from coast to coast included. 
                              <br /><br />
  							  <strong>FINANCIAL MATTERS:</strong> Who is cutting student debt and who is investing in state residents and transfer students. Plus, a resource on understanding financial aid. 
                              <br /><br />
							  <strong>THE COUNSELOR'S CORNER:</strong> The Consequences of  Covid-19 on Admissions from the stimulus package to schools going test optional in wake of the virus. 
                              <br /><br />
							  <strong>THE COUNSELOR'S BOOKSHELF:</strong> On recession-proofing colleges to empowering universities. And, in place of <i>News You Can Use,</i><strong> More 2020 Admission Numbers.</strong>
                              <br /><br />
                           </div>
                           <hr />
                           <p><a href="Mar20.pdf"><b>
						   <font size="+1" face="Verdana">March 2020</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i>Admissions Watch:</i> From the Small Privates to the Large Public Universities, Admissions Officers are Releasing new Info on Applications and Admissions. 
                              <br /><br />
							  <strong>ENROLLMENT TRENDS:</strong> From Massachusetts to California, Some Colleges are Still Releasing Their Fall Enrollment Stories.
                              <br /><br />
  							  <strong>FINANCIAL MATTERS:</strong> The State of Endowments, Where There is New Free Tuition and Scholarships.
                              <br /><br />
							  <strong>THE COUNSELOR'S CORNER:</strong> Admissions Strategies. With New Recruitment Strategies, New Requirements, or Not, and Programs to Attract Students.
                              <br /><br />
							  <strong>THE COUNSELOR'S BOOKSHELF:</strong>  On Best Value Colleges, "The Merit Myth" and More. 
                              <br /><br />							  
							  <strong>CURRICULUM CAPSULES:</strong>  New Programs Announced in Music, Art and Veterinary Medicine. <br /><br /><i>And, of Course,</i> 
                              <br /><br />
							  <strong>NEWS YOU CAN USE:</strong>   On the State of Hispanic Students, Where Students Live, Where the U.S. Stands on the Worldwide Education Index and More. 
                           </div>
                           <hr />
                           <p><a href="Feb20.pdf"><b>
						   <font size="+1" face="Verdana">February 2020</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i>Admissions Watch:</i> More Early Profiles.<strong> Financial Matters:</strong> New State Tuition Discount Programs. And Local Colleges Increasing Aid.  <i>The Last Word on the Class of 2023.</i> <strong> The Counselor's Corner: </strong> Enrollment Trends. On California's Response to the Admissions Scandal. Does ED Harm Low-Income Students? And Other News on Legacies, International Students.
                              <br /><br />
							  <strong>THE COUNSELOR'S BOOKSHELF:</strong> How Families Make College Work. Writing Essays. The Mindful College Applicant. And More.
                              <br /><br />
							  <strong>CURRICULUM CAPSULES:</strong> New Programs in "Sustainable Foods Systems," Neuroscience, Criminal Justice, Cybersecurity. <br /><strong>Is College Worth It?</strong> What Researches at Georgetown U. Found.<i><br /><br />And, of Course,</i> 
                              <br /><br />
							  <strong>NEWS YOU CAN USE:</strong>  On More Test Optional Schools. And Sleep. How Does it Impact Test Scores? 
                           </div>
                           <hr />
                           <p><a href="Jan20.pdf"><b>
						   <font size="+1" face="Verdana">January 2020</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i>Admissions Watch:</i> Early Returns for the Class of 2024.<strong> Financial Matters:</strong> The Latest on the Simplified FAFSA. And What is Included in the Updated Federal Scorecard?<strong> The Counselor's Corner: </strong> Enrollment Trends. On Fall Enrollment. Rural Gaps. States and Schools Addressing Enrollment Challenges. 
                              <br /><br />
							  <strong>THE COUNSELOR'S BOOKSHELF:</strong> On Yale Women, Rethinking Diversity, Why American Universities are Stronger Than Ever and the Net Price Calculator. 
                              <br /><br />
							  <strong>CURRICULUM CAPSULES:</strong> New Programs in Computer Science, Applied Mathematics and Physical Education. Who has a new program in Quantitative Economics? Study Abroad? And...Kindness. <strong>Career Wise:</strong> News on Manufacturing and Engineering Programs and a Career Skills Academy. 
                              <br /><br />
							  <strong>NEWS YOU CAN USE:</strong> On the ACT scores, mental health, test-optional schools and community colleges.  
                           </div>
                           <hr />
                           <p><a href="Dec19.pdf"><b>
						   <font size="+1" face="Verdana">December 2019</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i>Admissions Watch:</i>  Students are Applying to Colleges Earlier...and Earlier.<strong> Who Showed Up?</strong> A Look at Where Enrollments for the Class of 2023 Were Up...and Down. 
							  <br /><br />
							  <strong>Financial Matters:</strong> A Spot Check on New Financial Aid Programs and Tuition Discounting.  
                              <br /><br />
							  <strong>The Counselor's Corner:</strong> Is College Worth It? And Other National Reports Impacting Admissions. Plus, Tips on Writing the College Essay.    
                              <br /><br />
							  <strong>The Counselor's Bookshelf:</strong> A Family Guide, An Insider's Guide, the "Looming Enrollment Crisis" and a New Online College Cost Calculator.    
                              <br /><br />
							  <strong>Scholarship Scoops: </strong> New Need-Based Scholarships, New Merit Scholarships, a Scholarship for Classical Studies and Automotive Studies. 
                              <br /><br />
							  <strong>Curriculum Capsules:</strong> On "Applied" Diplomacy, Study Abroad, Health and Education. And, of course, 
							  <strong><i>News You can Use:</i></strong> On the Millennial Generation, Generation Z and College Course Materials..  
                           </div>
                           <hr />
                           <p><a href="Nov19.pdf"><b>
						   <font size="+1" face="Verdana">November 2019</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i>Admissions Watch:</i> A roundup of college reports on the class of 2023. Where they are from?  And who is included?<strong> Small Colleges Bucking Trends:</strong> A look at who is seeing an increase in their numbers and profiles.
							  <strong>Enrollment Trends:</strong> A Look at some of the new national data on enrollment trends, completion rates and new demographic dips. 
                              <br /><br />
							  <strong>The Greene Report:</strong> The Outlook for 2020, according to Matthew Greene. 
                              <br /><br />
							  <strong>The Counselor's Bookshelf:</strong> On demographics, how colleges makes or breaks us. And tips on paying for college.  
                              <br /><br />
							  <strong>News You Can Use:</strong> On Harvard, on the use of technology and the state of manufacturing. (Guess who needs a college degree?) 
                              <br /><br />
							  <strong>Financial Matters:</strong> Who is slashing tuition, providing tuition and guaranteeing tuition. 
                              <br /><br />
							  <strong>Curriculum Capsules:</strong> On a new veterinary school. New programs in esports. Top engineering programs. And, finally, a summary of NACAC's new admissions ethical code.  
                           </div>
                           <hr />
                           <p><a href="Oct19.pdf"><b>
						   <font size="+1" face="Verdana">October 2019</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i>Admissions Watch:</i> Some Colleges Seeing More First-Generation Students.  See Where.
							  <b>The College Board Introduces "Improved Admissions Resource"</b> One State Sees Enrollment Turnaround. Which One?
                              <br /><br />
                              <strong>The Counselor's Corner:</strong> Fall Financial Matters. See Trends Nationally and in Schools and One State. 
                              <br /><br />
                              <strong>The Counselor's Bookshelf:</strong> A Look at Some Rankings.
                              <br /><br />
                              <strong>New Curriculum Capsules:</strong> Molecular Engineering and Artificial Intelligence..to Name Two.    
                              <br /><br />
                              <strong>And, News You Can Use: </strong>The Impact of the Common Application and the State of K-12 Education. Plus, A Report on How One College Thought it was Finished, But is Now It is Taking New Applications.   
                           </div>
                           <hr />
						
                           <p><a href="Sept19.pdf"><b>
						   <font size="+1" face="Verdana">September 2019</font></b></a><br /></p>
                           <div>
                              <strong>FEATURE ARTICLES:</strong> <i>Admissions Watch:</i> The Class of 2023 Breaks Records. Some Universities have Unexpected Largest-Ever Class Sizes. Others Welcome "the Brightest Ever." And in Some Places, Diversity Expands.   
                              <br /><br />
                              <strong>The Counselor's Corner:</strong> New Report Finds That Time Well Spent Matters More Than School Attended. Really. Recruiters are Spending More Time Out of State. College Affordability is Declining.... And Students Have Some Regrets Over their Majors. 
                              <br /><br />
                              <strong>The Counselor's Bookshelf:</strong> On the Cost of Opportunity, Choosing College, The Best 385 Colleges and the College Dropout Scandal. Plus, a New Way to Visit Colleges and a Podcast on Admissions.
                              <br /><br />
                              <strong>New Curriculum Capsules:</strong>New Programs and Majors in Sustainability, Hispanic Studies, Theater, Hospitality and Dance.    
                              <br /><br />
                              <strong>And, News You Can Use: </strong>A Survey on What Affluent Parents Really Spend on their Children. New School Closings. And, a Last Word on College Athletics.  
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