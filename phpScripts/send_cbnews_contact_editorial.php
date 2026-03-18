<HTML>
<HEAD>
  <TITLE>College Bound News Subscription Form</TITLE>
</HEAD>
<BODY BGCOLOR="#ffffff">

  <TABLE WIDTH="484" ALIGN="center" BORDERCOLOR="#ffcc66" BORDER="1" HEIGHT="400">
		<TR>
			<TD VALIGN="top">
				<?php

					require ("common.php");
          extract($_POST); 
					$body = "\nUSERS FEEDBACK TO CBNEWS EDITOR  " .
						"\n-------------------------------  " .
						"\nID Number " . stripslashes(quotemeta ($idnumber)).
						"\nFirst Name " . stripslashes(quotemeta ($firstname)).
						"\nLast Name " . stripslashes(quotemeta($lastname)).
						"\n\n--------- Contact Information ---------  " .
						"\nPhone " . stripslashes(quotemeta($phone)).
						"\nZip Code " . stripslashes(quotemeta($zipcode)).
						"\nEmail " . stripslashes(quotemeta($email)).
						"\n\n--------- Category Information ---------  " .
						"\nCategory Type " . stripslashes(quotemeta($category_type)).
						"  " . stripslashes(quotemeta($other_specified)).
						"\n\n--------- User Message ---------  " .
						"\nMessage " . stripslashes(quotemeta($message));
						
					//mail_it(stripslashes($body), stripslashes($subject), $email, $recipient);
					//echo ("<br><center><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"blue\">Thank you - Your Information has been sent to College Bound News Editor.</font>");
				?>

			<FORM METHOD="POST" ACTION="../FM/FM2.php" NAME="form1">
				 <INPUT TYPE="hidden" NAME="env_report" VALUE="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER">
			
					<!-- STEP 2: Put your email address in the 'recipients' value. Note that you also have to allow this email 
							address in the $TARGET_EMAIL setting within formmail.php!-->
					<INPUT TYPE="hidden" NAME="recipients" VALUE=" <?php echo $_POST['recipient'] ?>" />
			
					<!-- STEP 3: Specify required fields in the 'required' value -->
					<!---<INPUT TYPE="hidden" NAME="required" VALUE="email:Your email address,realname:Your name" />	--->
			
					<!-- STEP 4: Put your subject line in the 'subject' value. -->
					<INPUT TYPE="hidden" NAME="subject" VALUE="<?php echo $_POST['subject'] ?>" />
			
					<!-- Set up Bad Error handler & a template for it. -->
					<INPUT TYPE="hidden" NAME="good_template" VALUE="UL_GoodTemplate.htm" />
					<INPUT TYPE="hidden" NAME="bad_template" VALUE="UL_ErrorTemplate.htm" />		
					<INPUT TYPE="hidden" NAME="bad_url" VALUE="fmbadhandler.php" />	
					<!--- <INPUT TYPE="hidden" NAME="this_form" VALUE="http://localhost/Work/PHP/FormMail/UpLoadFileExample/UpLoadFileExample.html" />--->

					<INPUT TYPE="HIDDEN" NAME="body" VALUE="<? echo $body ?>" />
					<!---<INPUT TYPE="hidden" NAME="good_template" VALUE="http://www.collegeboundnews.com/phpScripts/send_cbnews_ThankYou.php" />-->
				</FORM>
			</TD>
		</TR>
	</TABLE>
	 <SCRIPT LANGUAGE="JavaScript">
  		document.form1.submit();
	</SCRIPT>


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
  </FONT>
  </CENTER>
</BLOCKQUOTE>
</FORM>

</BODY>
</HTML>
