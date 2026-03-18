<HTML>
<HEAD>
  <TITLE>Choosing College Bound News Service</TITLE>
</HEAD>
<BODY BGCOLOR="#ffffff">

	<BR>
     <TABLE WIDTH="484" ALIGN="center" BORDERCOLOR="#ffcc66" BORDER="1">
		<TR>
			<TD VALIGN="top">
										<?php	
										require ("common.php");
										extract($_POST); 
										$_ErrorVariable = 0;

										echo("<center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"teal\"></center>");

										if(empty($payment_method)) {
											echo("<br>Please Select Your Payment Method");
											echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
											$_ErrorVariable = 1;
										}else {
												if($payment_method == "Pay by Credit Card") 
                                                    {
                                                        echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"black\">You chose to $payment_method <br>If this is your final decision, click Submit to proceed.  Otherwise, Go Back</font>");
                                                        $queryString = "?payment_method=:" . urlencode($payment_method);

										                $url = "credit_card_order.php".$queryString;
                                                    }
                                                 if($payment_method == "Pay by Check")
                                                    {
                                                        echo ("<center><br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"black\">You chose to $payment_method or Purchase Order<br>If this is your final decision, click Submit to proceed. Otherwise, Go Back</font></center><br>");
                                                      
                                                        $queryString = "?payment_method=:" . urlencode($payment_method);

										                $url = "cbnews_choose_service.php".$queryString;

										                
                                                    }
											}

										
								?>
								
								<CENTER>
									
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
