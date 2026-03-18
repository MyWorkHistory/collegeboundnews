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
          extract($_GET); 
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
						
					mail_it(stripslashes($body), stripslashes($subject), $email, $recipient);

					echo ("<br><center><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"blue\">Thank you - Your Information has been sent to College Bound News Editor.</font>");
				?>
			</TD>
		</TR>
	</TABLE>
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
  </FONT>
  </CENTER>
</BLOCKQUOTE>
</FORM>

</BODY>
</HTML>
