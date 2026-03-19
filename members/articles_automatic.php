<?php require_once "../../CollegeBoundNews.php"; ?>
<?php
/**
 * Current Issues page driven by database (SiteText keys: CurrentIssues, CurrentIssuesPage).
 * Content is edited in Admin/ModCurrrentIssues.php (left intro + main block + optional PDF upload).
 *
 * SWITCHOVER: Do not modify members/articles.php until after the manual monthly update is done.
 * Then: (1) Put the updated page HTML into the control panel "Main Current Issues Block" and save.
 * (2) Change articles.php to use the DB—either redirect here (header Location: articles_automatic.php)
 *     or replace its center section with the same SELECT/echo logic as below so the URL stays articles.php.
 */
if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString(
        $theValue,
        $theType,
        $theDefinedValue = "",
        $theNotDefinedValue = ""
    ) {
        $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
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
                $theValue = $theValue != "" ? "'" . doubleval($theValue) . "'" : "NULL";
                break;
            case "date":
                $theValue = $theValue != "" ? "'" . $theValue . "'" : "NULL";
                break;
            case "defined":
                $theValue = $theValue != "" ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }
}

$currentIssuesIntro = "";
$currentIssuesPageHtml = "";

mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
$query_Recordset1 = "SELECT theKey, Verbiage FROM SiteText WHERE theKey IN ('CurrentIssues', 'CurrentIssuesPage')";
$Recordset1 = mysql_query($query_Recordset1, $CollegeBoundNews) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

if ($totalRows_Recordset1 > 0) {
    do {
        if ($row_Recordset1["theKey"] === "CurrentIssues") {
            $currentIssuesIntro = $row_Recordset1["Verbiage"];
        }
        if ($row_Recordset1["theKey"] === "CurrentIssuesPage") {
            $currentIssuesPageHtml = $row_Recordset1["Verbiage"];
        }
    } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>College Bound News</title>
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
         .tblMain {
            background-color: #FFCC66;
         }
         body {
            background-color: #FFE3AB;
            background-image: url(../images/Background2.jpg);
            background-repeat: repeat-x;
         }
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
      </style>
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
                  <table width="921" border="0" cellpadding="0" cellspacing="0">
                     <tr>
                        <td width="29" valign="top">&nbsp;</td>
                        <td width="310" valign="top" align="left" class="BorderRight">
                           <br /><br />
                           <p>&nbsp;</p>
                           <div class="CurrentIssuesBox" align="left" style="height: 600px; width: 295px; overflow: auto">
                              <?php echo $currentIssuesIntro; ?>
                           </div>
                        </td>
                        <td width="13" valign="top">&nbsp;</td>
                        <td width="440" valign="top" align="left">
                           <br /><br />
                           <p>&nbsp;</p>
                           <?php
                           if (trim($currentIssuesPageHtml) !== "") {
                               echo $currentIssuesPageHtml;
                           } else {
                               echo '<p><strong>Current issues content has not been published yet.</strong></p>';
                           }
                           ?>
                        </td>
                        <td width="9" valign="top">&nbsp;</td>
                        <td width="149" valign="top">
                           <p><center>&nbsp;</center></p>
                           <p><center>&nbsp;</center></p>
                           <p><center>&nbsp;</center></p>
                           <p>
                           <center>
                              <a href="../subscribe/subscribe.html" target="_parent"><font face="Times">
                              <img src="../resources/01-02/subscribenew.gif" width="149" height="19" border="0" align="bottom" naturalsizeflag="3" /></font></a>
                              <p>
                                 <a href="http://www.adobe.com/products/acrobat/readstep2.html"><font size="-1" face="Verdana">
                                 <img src="../resources/allcommon/get_adobe_reader.gif" align="bottom" border="0" width="112" height="33" naturalsizeflag="3" /></font></a>
                              </p>
                           </center>
                           </p>
                        </td>
                     </tr>
                  </table>
                  <meta name="GENERATOR" content="Adobe PageMill 3.0 Mac" />
               </td>
            </tr>
            <tr>
               <td valign="top" align="center">
                  <br />
                  <p>&nbsp;<font size="-1" face="Arial">
                     <a href="../indexNew.php">Home</a> |
                     <a href="../aboutus/aboutus.html">About Us</a> |
                     <a href="../subscribe/subscribe.html">Subscribe/Renew</a> |
                     <a href="../contactus/contact.html">Contact Us</a> |
                     <a href="articles.php">Current Issues</a> |
                     <a href="../backissues/index.html">Back Issues</a> |
                     <a href="../visitors/index.html">Visitors</a> |
                     <a href="../links/links.php">Links/Resources</a>
                     </font>
                  </p>
                  <a href="../privacypolicy.html"><font size="-1" face="Arial">Privacy Policy/Terms of Service</font></a>
                  <font size="-1" face="Arial">
                     <br />
                     <script>
                        var year = new Date();
                        year = year.getYear();
                        if (year < 1900) {
                           year += 1900;
                        }
                        cpy = "&copy; " + year + " COLLEGE BOUND Publications Inc.";
                        document.write(cpy);
                     </script>
                     <br />All Rights Reserved.<br />
                     <a href="mailto:collegeboundnews@gmail.com">collegeboundnews@gmail.com</a>
                  </font>
                  <br /><br />
               </td>
            </tr>
         </table>
      </center>
   </body>
</html>
<?php mysql_free_result($Recordset1); ?>
