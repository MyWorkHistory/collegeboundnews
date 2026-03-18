<html>
<head>
<meta name="generator" content=
  "HTML Tidy for Windows (vers 13 May 2007), see www.w3.org">
<title>College Bound News Subscription Form</title>
</head>
<body bgcolor="#FFFFFF">
<center>
  <font size="+1" color="navy" face=
    "vernada,courrier,helvetica">Please verify your information and
  click "submit" to send it to us</font>
</center>
<table width="484" align="center" bordercolor="#FFCC66" border=
  "1">
  <tr>
    <td valign="top"><?php
														require ("common.php");
														extract($_POST); 
														$_ErrorVariable = 0;

														echo("<center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"teal\"></center>");
                            echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Check Payment Type: $check_payment_type</u></b></font>");

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Subscription Type</u></b></font>");
														if(empty($subscription_type)) {
																		echo("<br>Subscription type is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$subscription_type </font>");
																		}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>First Name </u></b></font>");
														if(empty($firstname)) {
																		echo("<br>First Name is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$firstname </font>");
																		}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Last Name </u></b></font>");
														if(empty($lastname)) {
																		echo("<br>Last Name is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$lastname </font>");
																		}


														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Institution Name </u></b></font>");
														if(empty($institutionname)) {
																		echo("<br>Institution Name is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$institutionname </font>");
														}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Official Position </u></b></font>");
																		if(empty($officialposition)) {
																						echo("<br>Official position is required");
																						echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																						$_ErrorVariable = 1;
																		}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$officialposition </font>");
														}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Telephone </u></b></font>");
														if(empty($phone)) {
																		echo("<br>Telephone is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$phone </font>");
														}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Fax </u></b></font>");
														if(!empty($fax)) {
																		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$fax </font>");
														}


														echo("<br><br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Email Address </u></b></font>");
														if(empty($email)) {
																		echo("A Valid Email Address is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																		if(!check_email($email)) {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$email </font><font size=\"-1\" face=\"Arial,Helvetica\" color=\"blue\">isn't a valide email address, please verify it.</font>");
																						echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																						$_ErrorVariable = 1;
																		} else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$email </font>");
																		}
														}


                            echo("<hr><p><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"red\"><b><u>Address</u></b></font><br>");
														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Street </u></b></font>");
														if(empty($street)) {
																		echo("<br>Street is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$street </font>");
														}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>City </u></b></font>");
														if(empty($city)) {
																		echo("<br>City is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$city </font>");
														}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>State </u></b></font>");
														if(empty($state)) {
																		echo("<br>State is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$state </font>");
														}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Zip </u></b></font>");
														if(empty($zip)) {
																		echo("<br>Zip Code is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																						echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$zip </font>");
														}

														echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Subscriber Type </u></b></font>");
														if(empty($subscriber_type)) {
																		echo("<br>Subscriber Type is required");
																		echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																		$_ErrorVariable = 1;
														}else {
																					echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$subscriber_type </font>");
																					if($subscriber_type == "Other") {
																									if(empty($other_specified)){
																													echo("<br>You chose \"Other\" please specify");
																													echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
																													$_ErrorVariable = 1;
																									}else {
																													echo ("<font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">  $other_specified </font>");
																									}
																					}
													}
					?>
      <center>
        <?php
												$queryString = "?firstname=:" . urlencode($firstname) .
												"&lastname=:" . urlencode($lastname).
												"&subscription_type=:" . urlencode($subscription_type).
                        "&institutionname=:" . urlencode($institutionname).
												"&street=:" . urlencode($street).
												"&street2=:" . urlencode($street2).
												"&city=:" . urlencode($city).
												"&state=:" . urlencode($state).
												"&zip=:" . urlencode($zip).
												"&phone=:" . urlencode($phone).
												"&fax=:" . urlencode($fax).
												"&email=:" . urlencode($email).
                        "&check_payment_type=:" . urlencode($check_payment_type).
												"&subscriber_type=:" . urlencode($subscriber_type).
												"&other_specified=:" . urlencode($other_specified).
												"&recipient=:" . urlencode($recipient).
												"&subject=:" . urlencode($subject).
                        "&thankyoudoc=:#";
                        //												"&thankyoudoc=:" . urlencode($thankurl);

												$url = "send_cbnews_subscription_form.php".$queryString;
								?>
       		<!--<form method="post" action="%3C?php%20echo($url);?%3E">-->
          <form method="post" action="<?php echo($url);?>">

          <?php
						foreach ($_POST as $key => $value) {
							echo "<INPUT TYPE='HIDDEN' NAME='" . $key . "' VALUE='" . $value . "'/>" . "\n";
						}
					?>
					
          <center>
            <?php
												if($_ErrorVariable == 0) {
													echo ("<input name=\"submit\" type=\"submit\" value=\"Submit\"><font color=\"white\">---------------------</font>");
													echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
												}else {
													echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\"><blink>Error - Missing Field(s)</blink></font><font color=\"f8eeee\">---------------------</font>");
													echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
													echo ("<p><font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font><font size=\"-1\" face=\"vernada,Arial,Helvetica\" color=\"blue\">The value is required</font>");
												}
								?>
          </center>
        </form>
      </center></td>
  </tr>
</table>
<hr>
<center>
  <a href="../aboutus/aboutus.html"><font size="-1" face=
    "Arial">About Us</font></a> <font size="-1" face="Arial">| <a href="../subscribe.html">Subscribe</a> | <a href=
    "../contactus/contact.html">Contact Us</a> | <a href=
    "../articles.php">2003-2004 Issues</a> | <a href=
    "../visitors/index.html">Visitors</a></font><br>
  <font size="-1" face="Arial"><a href=
    "../backissues/index.html">Back Issues</a> | <a href=
    "../whogotin/index.html">Who Got In?</a></font> | <font size=
    "-1" face="Arial"><a href="../links/links.html">Links</a> | <a href="../cbhome.html">Home</a></font>
</center>
<blockquote>
  <center>
    <a href="../privacypolicy.html"><font size="-1" face=
      "Arial">Privacy Policy/Terms of Service</font></a><font size=
      "-1" face="Arial"><br>
          <SCRIPT>
						<!--
							var year = new Date();
							year = year.getYear();
							if (year<1900) 
								year+=1900						
		
							cpy = "&copy; " + year + " COLLEGE BOUND Publications Inc.";
							document.write(cpy);
						//-->
						</SCRIPT> 

          <br />All Rights Reserved.<br />
    <a href=
      "mailto:s.sautter@sbcglobal.net">s.sautter@sbcglobal.net</a></font>
  </center>
</blockquote>
</body>
</html>
