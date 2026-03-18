<HTML>
<HEAD>
  <TITLE>College Bound News Who Got In? Form</TITLE>
</HEAD>
<BODY BGCOLOR="#ffffff">

	<CENTER><FONT SIZE="+1" COLOR="navy" FACE="vernada,courrier,helvetica">Please verify your information and click "submit" to send it to us </FONT></CENTER>
  	<TABLE WIDTH="484" ALIGN="center" BORDERCOLOR="#ffcc66" BORDER="1">
		<TR>
			<TD VALIGN="top">
										<?php
										require ("common.php");
										$_ErrorVariable = 0;

										echo("<center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"teal\"></center>");

                    echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Check Payment Type: $check_payment_type</u></b></font>");

										echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Order Type</u></b></font>");
										if(empty($Who_Got_In_2001) && empty($Who_Got_In_2002) && empty($Who_Got_In_2003)) {
											echo("<br>Please choose your Who Got In?");
											echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
											$_ErrorVariable = 1;
										}else {
												echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$Who_Got_In_2003 </font>");
                                                echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$Who_Got_In_2002 </font>");
                                                echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$Who_Got_In_2001 </font>");
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
								<P>
								<CENTER>
									<?php
										$queryString = "?firstname=:" . urlencode($firstname) .
										"&lastname=:" . urlencode($lastname).
										"&order_type=:" . urlencode($order_type).
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
										"&thankyoudoc=:" . urlencode($thankurl);

										$url = "send_cbnews_whogotin_form.php".$queryString;
									?>
								<P>

									<FORM METHOD="post" ACTION="<?php echo($url);?>">
									<CENTER>
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
							</CENTER>
  					</FORM>
				</CENTER>
			</TD>
		</TR>
	</TABLE>


<HR>
<P><CENTER><A HREF="../aboutus/aboutus.html"><FONT SIZE="-1" FACE="Arial">About
Us</FONT></A><FONT SIZE="-1" FACE="Arial"> | <A HREF="../subscribe.html">Subscribe</A>
| <A HREF="../contactus/contact.html">Contact Us</A> | <A HREF="../articles.html">2003-2004
Issues</A> | <A HREF="../visitors/index.html">Visitors</A></FONT><BR>
<FONT SIZE="-1" FACE="Arial"><A HREF="../backissues/index.html">Back
Issues</A> | <A HREF="../whogotin/index.html">Who Got In?</A></FONT>
| <FONT SIZE="-1" FACE="Arial"><A HREF="../links/links.html">Links
</A>| <A HREF="../cbhome.html">Home</A></FONT></CENTER></P>

<BLOCKQUOTE>
  <P><CENTER><A HREF="../privacypolicy.html"><FONT SIZE="-1" FACE="Arial">Privacy
  Policy/Terms of Service</FONT></A><FONT SIZE="-1" FACE="Arial"><BR>
  &copy;2001-2008 COLLEGE BOUND Publications Inc.<BR>
  All Rights Reserved.<BR>
  <A HREF="mailto:s.sautter@sbcglobal.net">s.sautter@sbcglobal.net</A></FONT>
  </CENTER>
</BLOCKQUOTE>
</FORM>

</BODY>
</HTML>
