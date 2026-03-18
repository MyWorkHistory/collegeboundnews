<HTML>
<HEAD>
  <TITLE>Contact College Bound News Editorial</TITLE>
</HEAD>
<BODY BGCOLOR="#ffffff">

	<CENTER><FONT SIZE="+1" COLOR="navy" FACE="vernada,courrier,helvetica">Please verify your information and click "submit" to send it to us </FONT></CENTER>
  	<TABLE WIDTH="484" ALIGN="center" BORDERCOLOR="#ffcc66" BORDER="1">
		<TR>
			<TD VALIGN="top">
										<?php
										require ("common.php");
										extract($_POST); 
										$_ErrorVariable = 0;

										echo("<center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"teal\"></center>");

										echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>ID Number </u></b></font>");
										if(!empty($idnumber))
										{
											if(!is_numeric($idnumber)){
												echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font><font size=\"+1\" face=\"Arial,Helvetica\" color=\"navy\">A number is required for ID</font>");
												$_ErrorVariable = 1;
											}else {
												if(strlen(strval($idnumber))>4)
												{
													echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font><font size=\"+1\" face=\"Arial,Helvetica\" color=\"navy\">ID Number must be 4 digits</font>");
													$_ErrorVariable = 1;
												}
												else {
													echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$idnumber </font>");
												}
											}
										}

										echo("<center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"teal\"></center>");

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

										echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Telephone </u></b></font>");
										if(empty($phone)) {
											echo("<br>Telephone is required");
											echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
											$_ErrorVariable = 1;
										}else {
											echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$phone </font>");
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

										echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Zip Code </u></b></font>");
										if(empty($zipcode)) {
											echo("<br>Zip Code is required");
											echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
											$_ErrorVariable = 1;
										}else {
												echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$zipcode </font>");
										}

										echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Message </u></b></font>");
										if(empty($message)) {
											echo("<br>Message is required");
											echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
											$_ErrorVariable = 1;
										}else {
												echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$message </font>");
										}

										echo("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Category Type </u></b></font>");
										if(empty($category_type)) {
											echo("<br>Category Type is required");
											echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
											$_ErrorVariable = 1;
										}else {
												echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$category_type </font>");
												if($category_type == "Other") {
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
										"&idnumber=:" . urlencode($idnumber).
										"&lastname=:" . urlencode($lastname).
										"&message=:" . urlencode($message).
										"&phone=:" . urlencode($phone).
										"&zipcode=:" . urlencode($zipcode).
										"&email=:" . urlencode($email).
										"&category_type=:" . urlencode($category_type).
										"&other_specified=:" . urlencode($other_specified).
										"&recipient=:" . urlencode($recipient).
										"&subject=:" . urlencode($subject).
										"&thankyoudoc=:" . urlencode($thankurl);

										$url = "send_cbnews_contact_editorial.php".$queryString;
									?>
								<P>

									<FORM METHOD="post" ACTION="<?php echo($url);?>">
										<?php
											foreach ($_POST as $key => $value) {
												echo "<INPUT TYPE='HIDDEN' NAME='" . $key . "' VALUE='" . $value . "'/>" . "\n";
											}
										?>
										
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
| <A HREF="../contactus/contact.html">Contact Us</A> | <A HREF="../articles.php">2003-2004
Issues</A> | <A HREF="../visitors/index.html">Visitors</A></FONT><BR>
<FONT SIZE="-1" FACE="Arial"><A HREF="../backissues/index.html">Back
Issues</A> | <A HREF="../whogotin/index.html">Who Got In?</A></FONT>
| <FONT SIZE="-1" FACE="Arial"><A HREF="../links/links.html">Links
</A>| <A HREF="../cbhome.html">Home</A></FONT></CENTER></P>

<BLOCKQUOTE>
  <P><CENTER><A HREF="../privacypolicy.html"><FONT SIZE="-1" FACE="Arial">Privacy
  Policy/Terms of Service</FONT></A><FONT SIZE="-1" FACE="Arial"><BR>
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
  <A HREF="mailto:s.sautter@sbcglobal.net">s.sautter@sbcglobal.net</A></FONT>
  </CENTER>
</BLOCKQUOTE>
</FORM>

</BODY>
</HTML>
