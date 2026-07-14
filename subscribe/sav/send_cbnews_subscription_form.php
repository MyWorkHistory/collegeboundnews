<html>

<head>
<title>College Bound News Subscription Form</title>
</head>

<body bgcolor="#ffffff">

<table align="center" border="1" bordercolor="#ffcc66" height="400" width="484">
	<tr>
		<td valign="top"><?php

					require ("../phpScripts/common.php");
					extract($_GET); 
					$body = "\nREQUEST FOR SUBSCRIPTION - INSTITUTIONAL " .
						"\n-------------------------------  " .
						"\nSubscription Type " . 
						"\n".
						stripslashes(quotemeta($subscription_type)).
						"\n".
						"\n--------- Name ---------  " .
						"\nReceiver's Last Name " .
						"\n".
						stripslashes(quotemeta($lastname)).
						"\n".
						"\nReceiver's First Name " . 
						"\n".
						stripslashes(quotemeta($firstname)).
						"\n".
						"\nReceiver's Telephone Number " .
						"\n".
						stripslashes(quotemeta($phone)).
						"\n".
						"\nReceiver's Fax Number " . 
						"\n".
						stripslashes(quotemeta($fax)).
						"\n".
						"\nReceiver's Email Address " . 
						"\n".
						stripslashes(quotemeta($email)).
						"\n".
						"\n--------- Institution ---------  " .
						"\nInstitution Name " . 
						"\n".
						stripslashes(quotemeta($institutionname)).
						"\n".
            			"\nReceiver's Official Position " . 
						"\n".
            			stripslashes(quotemeta($officialposition)).
						"\n".
						"\n--------- Address ---------  " .
            			"\nSchool Name " . 
						"\n".
            			stripslashes(quotemeta($school_name)).
						"\n".
						"\nStreet " . 
						"\n".
						stripslashes(quotemeta($street)).
						"\n".
						"\nApartment or Unit Number " . 
						"\n".
						stripslashes(quotemeta($street2)).
						"\n".
						"\nCity " . 
						"\n".
						stripslashes(quotemeta($city)).
						"\n".
						"\nState " . 
						"\n".
						stripslashes(quotemeta($state)).
						"\n".
						"\nZip Code " . 
						"\n".
						stripslashes(quotemeta($zip)).
						"\n".
						"\n--------- Subscription Information ---------  " .
						"\nSubscriber Type " .
						"\n".
						stripslashes(quotemeta($subscriber_type)).
						"\n".
						"  " . stripslashes(quotemeta($other_specified));
						
						
						
					//mail_it(stripslashes($body), stripslashes($subject), $email, $recipient);
					//echo ("<br><center><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"blue\">Your Information has been sent. <br>Thank you for subscribing to College Bound News.</font>
					//<center><p><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"black\">We will bill you and upon payment will immediately send you <B>collegeboundnews.com</B> access code and begin sending
					// printed newsletters to you.</center>");
				?>
		<form action="../FM/FM2.php" method="POST" name="form1">
			<!--<FORM METHOD="POST" action="../ShowPassedPHPFields.php"NAME="form1">-->
			<input name="env_report" type="hidden" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER">
			<!-- STEP 2: Put your email address in the 'recipients' value. Note that you also have to allow this email 
							address in the $TARGET_EMAIL setting within formmail.php!-->
			<input name="recipients" type="hidden" value="<?php 
                          echo $_POST['recipient'] ?>" />
			<!-- STEP 3: Specify required fields in the 'required' value -->
			<!---<INPUT TYPE="hidden" NAME="required" VALUE="email:Your email address,realname:Your name" />	--->
			<!-- STEP 4: Put your subject line in the 'subject' value. -->
			<input name="subject" type="hidden" value="<?php echo $_POST['subject'] ?>" />
			<!-- Set up Bad Error handler & a template for it. -->
			<input name="good_template" type="hidden" value="UL_GoodTemplate.htm" />
			<input name="bad_template" type="hidden" value="UL_ErrorTemplate.htm" />
			<input name="bad_url" type="hidden" value="fmbadhandler.php" />
			<!--- <INPUT TYPE="hidden" NAME="this_form" VALUE="http://localhost/Work/PHP/FormMail/UpLoadFileExample/UpLoadFileExample.html" />--->
			<input name="body" type="HIDDEN" value="<? echo $body ?>" />
			<!---<INPUT TYPE="hidden" NAME="good_template" VALUE="http://www.collegeboundnews.com/phpScripts/send_cbnews_ThankYou.php" />-->
		</form>
		</td>
	</tr>
</table>

<script language="JavaScript">
  		document.form1.submit();
	</script>
<p></p>

<center>
<a href="../aboutus/aboutus.html"><font face="Arial" size="-1">About Us</font></a>
<font face="Arial" size="-1">| 
<a href="../subscribe.html">Subscribe</a> |
<a href="../contactus/contact.html">Contact Us</a> | 
<a href="../articles.php">2003-2004 Issues</a> | 
<a href="../visitors/index.html">Visitors</a>
</font>
<br>
<font face="Arial" size="-1"><a href="../backissues/index.html">Back Issues</a>| 
<a href="../whogotin/index.html">Who Got In?</a>
</font> |
<font face="Arial" size="-1">
<a href="../links/links.html">Links </a>|
<a href="../cbhome.html">Home</a></font>
</center>
<p></p>
<blockquote>
	<p></p>
	<center><a href="../privacypolicy.html"><font face="Arial" size="-1">Privacy 
	Policy/Terms of Service</font></a><font face="Arial" size="-1"><br>
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
	<br />
	All Rights Reserved.<br />
	<a href="mailto:s.sautter@sbcglobal.net">s.sautter@sbcglobal.net</a></font>
	</center>
</blockquote>
</form>

</body>

</html>
