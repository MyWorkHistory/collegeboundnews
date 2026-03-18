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
                           <p><b><font color="#3366cc" sizCurriculume="+2" face="Arial">2025-2026
                              Issues<br />
                              </font><font color="#3366cc" size="+1" face="Arial">Volume 40</font></b><span class="auto-style1"></span>
                           </p>
                           <p><b><font color="#3366cc" size="-1" face="Verdana">If you need to renew your subscription call 773-262-5810, or subscribe on
                              this website, www.collegeboundnews.com. (The subscriber access codes change September 15.) Thank you. Have a great school year.<br />
                              <br />
                              Download your current issue by clicking the month below. If you need Adobe Reader to read your issue, please click the link to the right for a free download.                  
                              </font></b>
                           </p>
                           <hr />
                           <!-- Start copy here -->
                           <p>
                             <a href="25-26issues/Nov25.pdf" target="_blank"><b>
                               <font size="+1" face="Verdana">November 2025</font>
                             </b></a><br />
                           </p>

                           <p>
                             <strong>Admissions Watch:</strong> 
                             New Records, Three-Year Tracks: "Quantum" Futures for the Class of 2029, Florida State U. Apps Up 182 Percent, Northeastern U. Tops 100,000, U. of Texas Records 7.5 Percent More Apps Than Last Year.
                           </p>

                           <p>
                             <strong>Financial Matters:</strong>
                             Colleges Face Tough Economic Times, New York Waives Application Fees, Room and Board Costs Pose Affordability Issues.
                           </p>

                           <p>
                             <strong>Enrollment Trends:</strong>
                             Harvard Enrolled Fewer Minority Students, Ohio Reports Public College Gains and Losses, Oklahoma Public Colleges and Universities See Increased Enrollment.
                           </p>

                           <p>
                             <strong>The Counselor's Corner:</strong>
                             Application Tips and Sources.
                           </p>

                           <p>
                             <strong>Curriculum Capsules:</strong>
                             New Schools, Majors and Degrees Throughout the Country.
                           </p>

                           <p>
                             <strong>Counselor's Bookshelf:</strong>
                             (As always.)
                           </p>

                           <hr />     
                           <!-- end copy here -->
                           <p><a href="25-26issues/Oct25.pdf" target="_blank"><b>
                              <font size="+1" face="Verdana">October 2025</font></b></a><br />
                           </p>
                           <p><strong>Admissions Watch:</strong> <i>More 2025 Matriculations
                              Provide Outlook for 2026, </i> Augsburg's largst class in history, Bowdoin admitted 7 Percent, Dartmouth enrolled all its new... 
                           </p>
                           <b>Financial Matters:</b>
                              FAFSA available earlier than expected. High Schoolers underestimate debt burden, Worst-Paying college majors.
                           </p>
                           <p>
                              <strong>Harvard's Yield Up Slightly:</strong> Harvard U. has been   under attack by politicians and in the courts over the past few years, but the bad publicity doesn't seem to have dimmed..
                           </p>
                           <p>
                              <b>Curriculum Capsules</b>
                              Iowa's Integrated Health Sciences, Montclair State U. launched four new online programs, Oregon's three new programs, and Pepperdine Japan.
                           </p>
                           <p>
                              <strong>Counselor's Bookshelf:</strong>The Chronicle of Higher Education: <i>"The Home Stretch of Student Recruitment: How colleges are reinventing the post-admissions process"</i>, Dream Schools: <i> Finding the College That's Right for You by Jeffery Selingo.</i> 
                           </p>
                           <hr />
                           <!-- end copy here -->
                           <p><a href="25-26issues/Sept25.pdf" target="_blank"><b>
                              <font size="+1" face="Verdana">September 2025</font></b></a><br />
                           </p>
                           <p><strong>Admissions Watch:</strong> <i>Binghamton Received 74,725 Apps, </i> Bucknell's 180th Year, Clemson Recruits from 34 Countries, DePauw Students Posted 3.9 GPA, and more.
                           </p>
                           <p><strong>Military Academies Began in Summer:</strong> The U.S. Military Academies started basic training for the Class of 2029 and 2025-26 academic year <i>this summer</i>. 1,230 to West Point, 1,121 to the U.S. Air Force Academy...
                           </p>
                           <p><strong>The Counselor's Corner</strong><i> Enrollment Trends:</i> 
                              According to the National Center for Education Statistics, undergraduate enrollment is projected to increase, Do we see some demographic shifts? Dismantling DEI (Diversity, Equity and Inclusion), and more.
                           </p>
                           <p><strong>Counselor's Bookshelf:</strong> Chronicle of Higher Education: <i>"Overcoming Student Loneliness"</i>, MyIntuition.org: <i>College price estimator tool...</i>
                           </p>
                           <p>And, <strong>UCLA Attracted Most Applications in the Nation.</strong> 
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