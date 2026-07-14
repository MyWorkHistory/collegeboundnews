<HTML>
<HEAD>
	<TITLE>College Bound News Subscription Form</TITLE>
	<link rel="stylesheet" type="text/css" href="../CSS/csshorizontalmenu.css" />
	<script language="javascript" type="text/javascript" src="../Scripts/csshorizontalmenu.js"></script>
	<link href="../CSS/GradientShadow.css" rel="stylesheet" type="text/css" />
	<script language="javascript" type="text/javascript" src="../Scripts/GradientShadow.js"></script>
	<script language="javascript" type="text/javascript">
		gradientshadow.depth=6;
	</script>
	
	<script>
		function myFunction() {
			window.print();
			}
	</script>

	<style type="text/css">
	.tblMain {
		background-color: #FFCC66;
		}
		body {
			background-color: #FFE3AB;
			background-image: url(../images/Background2.jpg);
		}
			.TahomaFont {
			font-family: Tahoma
		}
            -->
      </style>
</HEAD>

<BODY>
<CENTER>
  <FONT SIZE="+1" COLOR="navy" FACE="vernada,courrier,helvetica">Please verify your information and click "submit" to send it to us </FONT>
  <br />
    <br />
  <br />

</CENTER>
<TABLE WIDTH="484" ALIGN="center" BORDERCOLOR="#ffcc66" BORDER="1" class="tblMain">
  <TR>
    <TD VALIGN="top"><?php
		require("common.php");

		extract($_POST);
		$_ErrorVariable = 0;

		echo ("<center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"teal\"></center>");
		echo ("<hr><p><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"red\"><b><u>Subscription</u></b></font><br>");
		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Subscription Type</u></b></font>");
		if (empty($subscription_type)) {
		    echo ("<br>Subscription type is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
			if($subscription_type == 'Credit Card')
			{
    			echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$subscription_type </font>");
	            echo '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >';
	            echo '<input src="https://www.paypal.com/images/x-click-but22.gif" type="image" border="0" name="submit6" align="bottom" />';
	            echo '<input type="hidden" name="cmd" value="_cart" />';
	            echo '<input type="hidden" name="business" value="user906928@aol.com" />';
	            echo '<input type="hidden" name="item_name" value="COLLEGE BOUND - collegeboundnews.com access - one year individual subscription" />';
	            echo '<input type="hidden" name="item_number" value="COLLEGE BOUND -  1 year" />';
	            echo '<input type="hidden" name="amount" value="59.00" />';
	            echo '<input type="hidden" name="currency_code" value="USD" />';
	            echo '<input type="hidden" name="add" value="1" />';
	            echo '</form>';
            
	            echo '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" enctype="x-www-form-urlencoded">';
	            echo '<input src="https://www.paypal.com/images/view_cart_02.gif" type="image" border="0" name="submit" align="bottom" />';
	            echo '<input type="hidden" name="cmd" value="_cart" />';
	            echo '<input type="hidden" name="business" value="user906928@aol.com" />';
	            echo '<input type="hidden" name="display" value="1" />';
	            echo '</form>';
	            echo '<hr />';
 
			} else {
    			echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$subscription_type </font>");
				echo ("<br />");
				echo '<button onclick="myFunction()">Print this page</button>';
			}
					
		}
		echo ("<p><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"red\"><b><u>Name</u></b></font><br>");
		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>First Name </u></b></font>");
		if (empty($firstname)) {
		    echo ("<br>First Name is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$firstname </font>");
		}
		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Last Name </u></b></font>");
		if (empty($lastname)) {
		    echo ("<br>Last Name is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$lastname </font>");
		}

		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Telephone </u></b></font>");
		if (empty($phone)) {
		    echo ("<br>Telephone is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$phone </font>");
		}

		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Fax </u></b></font>");
		if (!empty($fax)) {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$fax </font>");
		}
		
		echo ("<br><br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Email Address </u></b></font>");
		if (empty($email)) {
		    echo ("A Valid Email Address is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
	    if (!check_email($email)) {
	        echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$email </font><font size=\"-1\" face=\"Arial,Helvetica\" color=\"blue\">isn't a valide email address, please verify it.</font>");
	        echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	        $_ErrorVariable = 1;
	    	} else {
	        	echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$email </font>");
	    	}
		}

		echo ("<hr><p><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"red\"><b><u>School Name</u></b></font><br>");
		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>School Name </u></b></font>");
		if (empty($school_name)) {
			echo ("<br>School name is required");
			echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$school_name </font>");
		}

		echo ("<hr><p><font size=\"+1\" face=\"vernada,Arial,Helvetica\" color=\"red\"><b><u>Address</u></b></font><br>");
		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Street </u></b></font>");
		if (empty($street)) {
		    echo ("<br>Street is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$street </font>");
		}


		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>City </u></b></font>");
		if (empty($city)) {
		    echo ("<br>City is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$city </font>");
		}

		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>State </u></b></font>");
		if (empty($state)) {
		    echo ("<br>State is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$state </font>");
		}

		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Zip </u></b></font>");
		if (empty($zip)) {
		    echo ("<br>Zip Code is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$zip </font>");
		}

		echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"navy\"><b><u>Subscriber Type </u></b></font>");
		if (empty($subscriber_type)) {
		    echo ("<br>Subscriber Type is required");
		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		    $_ErrorVariable = 1;
		} else {
		    echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$subscriber_type </font>");
		    if ($subscriber_type == "Other") {
		        if (empty($other_specified)) {
		            echo ("<br>You chose \"Other\" please specify");
		            echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
		            $_ErrorVariable = 1;
		        } else {
		            echo ("<font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">  $other_specified </font>");
		        }
		    }
		}
	
	?>
	<P>
	<CENTER>

	<?php
		$queryString = "?firstname=:" . urlencode($firstname) . "&lastname=:" . urlencode($lastname) . "&subscription_type=:" . urlencode($subscription_type) . "&school_name=:" . urlencode($school_name) . "&street=:" . urlencode($street) . "&street2=:" . urlencode($street2) . "&city=:" . urlencode($city) . "&state=:" . urlencode($state) . "&zip=:" . urlencode($zip) . "&phone=:" . urlencode($phone) . "&fax=:" . urlencode($fax) . "&email=:" . urlencode($email) . "&check_payment_type=:" . urlencode($check_payment_type) . "&subscriber_type=:" . urlencode($subscriber_type) . "&other_specified=:" . urlencode($other_specified) . "&recipient=:" . urlencode($recipient) . "&subject=:" . urlencode($subject) . "thankyoudoc=:#";
		//										"&thankyoudoc=:" . urlencode($thankurl);

		$url = "send_cbnews_subscription_form.php" . $queryString;
	?>

	<P>

		<FORM METHOD="post" ACTION="<?php
			echo ($url);
			?>">
			<?php
				foreach ($_POST as $key => $value) {
				echo "<INPUT TYPE='HIDDEN' NAME='" . $key . "' VALUE='" . $value . "'/>" . "\n";
			}
			?>
			<CENTER>
			<?php
				if ($_ErrorVariable == 0) {
					echo ("<input name=\"submit\" type=\"submit\" value=\"Submit\"><font color=\"white\">---------------------</font>");
					echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
				} else {
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
	<P>
	<CENTER>
		<A HREF="../aboutus/aboutus.html"><FONT SIZE="-1" FACE="Arial">About
		Us</FONT></A><FONT SIZE="-1" FACE="Arial"> | <A HREF="../subscribe.html">Subscribe</A> | <A HREF="../contactus/contact.html">Contact Us</A> | <A HREF="../articles.php">2003-2004
		Issues</A> | <A HREF="../visitors/index.html">Visitors</A></FONT><BR>
		<FONT SIZE="-1" FACE="Arial"><A HREF="../backissues/index.html">Back
		Issues</A> | <A HREF="../whogotin/index.html">Who Got In?</A></FONT> | <FONT SIZE="-1" FACE="Arial"><A HREF="../links/links.html">Links </A>| <A HREF="../cbhome.html">Home</A></FONT>
	</CENTER>
	</P>
	<BLOCKQUOTE>
	<P>
    <CENTER>
		<A HREF="../privacypolicy.html"><FONT SIZE="-1" FACE="Arial">Privacy
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
