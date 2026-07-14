<HTML>
	<HEAD>
		<TITLE>College Bound News Subscription Form</TITLE>
		<link rel="stylesheet" type="text/css" href="../CSS/csshorizontalmenu.css" />
		<link rel="stylesheet" type="text/css" href="../CSS/customsub.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script language="javascript" type="text/javascript" src="../Scripts/csshorizontalmenu.js"></script>
		<link href="../CSS/GradientShadow.css" rel="stylesheet" type="text/css" />
		<script language="javascript" type="text/javascript" src="../Scripts/GradientShadow.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      
		<script language="javascript" type="text/javascript">
			gradientshadow.depth=6;
		</script>
      
		<script>
			function toggleDisplayFields() {
				var x = document.getElementById("thePrintSection");
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
			}
		</script>

		<script>
			function printDiv(divName) {
				var x = document.getElementById("thePrintSection");

				x.style.display = "block";
				var printContents = document.getElementById(divName).innerHTML;
				x.style.display = "none";
				var originalContents = document.body.innerHTML;
	         
				document.body.innerHTML = printContents;
				window.print();
				document.body.innerHTML = originalContents;
	
			}
         
			function printDivOld(divName) {
				var printContents = document.getElementById(divName).innerHTML;
				var originalContents = document.body.innerHTML;
	         
				toggleDisplayFields();
				document.body.innerHTML = printContents;
				window.print();
				document.body.innerHTML = originalContents;
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
   
	<?php
	
	require("common.php");
		extract($_POST);
		$_ErrorVariable = 0;
	?>

     <section class="container-section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 topbar">
                  <h3>
                     <span>
                     1) Verify your information
                     </span>
                     <span>
                     <?php
                     
                        if ('Credit Card' === $subscription_type) {
                               echo ("2) Make a payment");
                           }

						if ('Credit Card, 2 years' === $subscription_type) {
                               echo ("2) Make a payment");

                           }
                           

						if ('Check or Money Order 1 year' === $subscription_type) {
                               echo ("2) Finalize your order");

                           }

						if ('Check or Money Order 2 years' === $subscription_type) {
                               echo ("2) Finalize your order");
                               
                           }
    
					?>                     
                     </span>

                     <?php
                     	if ('Credit Card' === $subscription_type) {
                     		echo ("<span>");
                     		echo ("3) Send your info to us");
                     		echo ("</span>");
                     	}
                     	if ('Credit Card, 2 years' === $subscription_type) {
                     		echo ("<span>");
                     		echo ("3) Send your info to us");
                     		echo ("</span>");
                     	}
                     ?>
                     
                  </h3>
               </div>
            </div>
                   
            
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12 sidebar">
                  <div class="sidebar_content col-md-12 col-sm-12 col-xs-12">
                     <h3>
                        1) Verify Your Information
                     </h3>
                     <div  class="sidebarColumn"> <!-- The subscription type section --> 
                        <?php
							echo ("<br />");
							echo ("<h4>");
							echo ("Individual Subscription");
							echo ("</h4>");
							echo ("<div class=\"sidebar-fields\">");
							echo ("<label>");
							echo ("Subscription Type");
							echo ("</label>");
							echo ("</div>");
                           if (empty($subscription_type)) {
                               echo ("<br>Subscription type is required");
                               echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
  								echo ("<br />");
								echo ("<br />");
                                $_ErrorVariable = 1;
                           } else {
								echo ("&nbsp;&nbsp;&nbsp; <i> $subscription_type </i>");
								echo ("<br />");
								echo ("<br />");
                           }
                           ?>
                     </div>
                     
                     <div class="sidebarColumn">  <!-- Name section --> 
                        <h4>
                           Name
                        </h4>
                        <div class="sidebar-fields"> <!-- First name --> 
                           <label>
                           	First Name
                           </label>
                           <?php
								echo ("<i>");
	                           if (empty($firstname)) {
             		            	echo ("&nbsp;&nbsp;&nbsp;First Name is required");
              		            	echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
                     		    	$_ErrorVariable = 1;
								}else {
									echo ("&nbsp;&nbsp;&nbsp;$firstname");
								}
								echo ("</i>");
		                   ?>
                        </div>
                        
						<div class="sidebar-fields">  <!-- Last name --> 
							<label>
								Last Name 
							</label>
                           
							<?php
								echo ("<i>");
								if (empty($lastname)) {
									echo ("&nbsp;&nbsp;&nbsp;Last Name is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$lastname");
									}
								echo ("</i>");
							?>
						</div>

                        <div class="sidebar-fields">  <!-- Telephone number --> 
                           <label>
								Telephone
                           </label>
                           <?php
								echo ("<i>");
								if (empty($phone)) {
									echo ("&nbsp;&nbsp;&nbsp;A Telephone number is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$phone");
									}
								echo ("</i>");
							?>
                        </div>

						<!-- Fax number is not required hence we will not print out anything if it's missing. That's why this block is sort of inside out. --> 
						<?php
	                        echo("<div class=\"sidebar-fields\">");
							if (!empty($fax)) {
								echo ("<label>");
								echo ("Fax");
								echo ("</label>");
								echo ("<i>");
								echo ("&nbsp;&nbsp;&nbsp;$fax");
								echo ("</i>");

							}
							echo("</div>");
						?>
                        <div class="sidebar-fields">
                           <label>
								Email Address
                           </label>
                           <?php
								echo ("<i>");
								if (empty($email)) {
									echo ("&nbsp;&nbsp;&nbsp;A valid email address is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$email");
									}
								echo ("</i>");
							?>
							<br />
							<br />
                        </div>
					</div>
					<div class="sidebarColumn">
						<h4>
                           School Name
                        </h4>
                        <div class="sidebar-fields">
                           <label>
								School Name
                           </label>
							<?php
								echo ("<i>");
								if (empty($school_name)) {
									echo ("&nbsp;&nbsp;&nbsp;School name is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$school_name");
									}
								echo ("</i>");
							?>
                        </div>
						<br />
                     </div>
                     <div class="sidebarColumn">
                        <h4>
                           Address
                        </h4>
                        <div class="sidebar-fields">
                           <label>
	                           Street 
                           </label>
                           <?php
								echo ("<i>");
								if (empty($street)) {
									echo ("&nbsp;&nbsp;&nbsp;A street name is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$street");
									}
								echo ("</i>");
								
								if (!empty($street2)) {
									echo ("<br />");
									echo ("<i>");
									echo ("&nbsp;&nbsp;&nbsp;$street2");
									echo ("</i>");
								}
							?>
                        </div>
                        <div class="sidebar-fields">
                           <label>
	                           City  
                           </label>
                           <?php
								echo ("<i>");
								if (empty($city)) {
									echo ("&nbsp;&nbsp;&nbsp;A city name is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$city");
									}
								echo ("</i>");
							?>
                        </div>
                        <div class="sidebar-fields">
                           <label>
	                           	State   
                           </label>
                           <?php
								echo ("<i>");
								if (empty($state)) {
									echo ("&nbsp;&nbsp;&nbsp;A state name is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$state");
									}
								echo ("</i>");
							?>
                        </div>
                        <div class="sidebar-fields">
                           <label>
 	                          Zip    
                           </label>
                           <?php
								echo ("<i>");
								if (empty($zip)) {
									echo ("&nbsp;&nbsp;&nbsp;A zip code is required");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$zip");
									}
								echo ("</i>");
							?>
                        </div>
                        <div class="sidebar-fields">
                           <label>
	                           Subscriber Type    
                           </label>
                           
                           <?php
								echo ("<i>");
								if (empty($subscriber_type)) {
									echo ("&nbsp;&nbsp;&nbsp;A subscriber type is required (student, parent or other)");
									echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
	                     		    $_ErrorVariable = 1;
									}else {
										echo ("&nbsp;&nbsp;&nbsp;$subscriber_type");
										echo ("<br />");
										echo ("<br />");
									}
								echo ("</i>");
							?>
                        </div>
                        
                        <div id="thePrintSection" style="display:none">
  			                      
							<?php
								echo ("<br />");
							    echo ("<p align=\"center\">");
 								echo ("SUBSCRIPTION FORM FOR STUDENTS, PARENTS, AND INDIVIDUALS");
								echo ("<br />");
								echo ("Print out and mail this Subscription Form along with your check or money order to:"); 
								echo ("<br />");
								echo ("<br />");
								echo ("COLLEGE BOUND<br />");
								echo ("P.O. Box 6526<br />");
								echo ("Evanston, Illinois 60204<br /><br />");
								echo ("<br />");
								echo ("<br />");
							    echo ("</p>");
							    
							    echo ("<p align=\"center\">");

	                       		echo ("<table align=\"center\" cellpadding=\"5\" cellspacing=\"5\">");
									echo ("<tr>");
										echo ("<td width=\"200\">");
											echo ("<label>");
											echo ("Subscription Type");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $subscription_type ");
											if ('Check or Money Order' === $subscription_type) {
				                               $price = 59;
											}
 											if ('Check or Money Order 2 years' === $subscription_type) {
												$price = 100;
											}
											echo ("&nbsp; $$price");
											// echo ("&nbsp; per year </i>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td width=\"200\">");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
										echo ("<td>");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("First Name");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $firstname </i>");
										echo ("</td>");
									echo ("</tr>");
									
									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("Last Name");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $lastname </i>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("Telephone");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $phone </i>");
										echo ("</td>");
									echo ("</tr>");

									if (!empty($fax)) {
										echo ("<tr>");
											echo ("<td>");
												echo ("<label>");
													echo ("Fax Number");
												echo ("</label>");
											echo ("</td>");
											echo ("<td>");
												echo ("&nbsp;&nbsp;&nbsp; <i> $fax </i>");
											echo ("</td>");
										echo ("</tr>");
									}

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("Email Address");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $email </i>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("School Name");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $school_name </i>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td width=\"200\">");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
										echo ("<td>");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("Street");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $street </i>");
										echo ("</td>");
									echo ("</tr>");

									if (!empty($street2)) {
										echo ("<tr>");
											echo ("<td>");
												echo ("<label>");
													echo ("Apt or Unit number");
												echo ("</label>");
											echo ("</td>");
											echo ("<td>");
												echo ("&nbsp;&nbsp;&nbsp; <i> $street2 </i>");
											echo ("</td>");
										echo ("</tr>");
									}

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("City");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $city </i>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("State");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $state </i>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td width=\"200\">");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
										echo ("<td>");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td>");
											echo ("<label>");
												echo ("Subscriber Type");
											echo ("</label>");
										echo ("</td>");
										echo ("<td>");
											echo ("&nbsp;&nbsp;&nbsp; <i> $subscriber_type </i>");
										echo ("</td>");
									echo ("</tr>");
									
									echo ("<tr>");
										echo ("<td width=\"200\">");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
										echo ("<td>");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
									echo ("</tr>");

									echo ("<tr>");
										echo ("<td width=\"200\">");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
										echo ("<td>");
											echo ("<p>");
											echo ("&nbsp;");
											echo ("</p>");
										echo ("</td>");
									echo ("</tr>");

								echo ("</table>");
                       
							    echo ("</p>");

							?>
                        
	                        <p>
  								<br />
		                        As an individual subscriber, I pledge not to share the collegeboundnews.com access code with anyone outside my immediate family. I understand that to share the code is a copyright violation subject to stiff penalties.
								<br />
								<br />
								(signature)_______________________________________________________________________________
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
								As soon as we receive your payment, we will immediately send your collegeboundnews.com access code.
	                        </p>
                        </div>
                     </div>
					<br />
                  </div>
               </div>
               
               <div class="col-md-8 col-sm-8 col-xs-12 main_content">
                  <div class="maincontentColumn col-md-12 col-sm-12 col-xs-12">
 					<?php
//						if($_ErrorVariable == 1) {
//							echo ("Error");
//						}
//						else {
//							echo '<h3>';
//							echo ("2) Make a payment");
//							echo '</h3>';
//
//						}


						$credit_card_bool = 0;
						if ('Credit Card' === $subscription_type) {
							$credit_card_bool = 1;
							$price = 59;
						}

						if ('Credit Card, 2 years' === $subscription_type) {
							$credit_card_bool = 1;
							$price = 100;
						}


//  					if ('Credit Card' === $subscription_type) {
						if ($credit_card_bool == 1) {

							if($_ErrorVariable == 0) {
								echo '<h3>';
								echo ("2) Make a payment");
								echo '</h3>';
							} else {
								echo '<h3>';
								echo ("Error");
								echo '</h3>';
							}

							echo '<div class="sidebarColumn">';
							echo '<div class="sidebar-fields">';

							if($_ErrorVariable == 0) {
								echo '<label>';
								echo ("<br>Individual Subscription");
								echo ("&nbsp;$");
								
								if ('Credit Card' === $subscription_type) {
									$price = 59;

								}
								if ('Credit Card, 2 years' === $subscription_type) {
									$price = 100;
								}

								echo ("$price");
								
								if ('Credit Card' === $subscription_type) {
									echo ("&nbsp; - one year");
								}
								
								if ('Credit Card, 2 years' === $subscription_type) {
									echo ("&nbsp; - two years");
								}

								echo ("<br>");
								echo ("<br>");
								echo '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >';
									echo '<input src="https://www.paypal.com/images/x-click-but22.gif" type="image" border="0" name="submit6" align="bottom" />';
									echo '<input type="hidden" name="cmd" value="_cart" />';
									echo '<input type="hidden" name="business" value="user906928@aol.com" />';
									
									if ($price == 59) {
										echo '<input type="hidden" name="item_name" value="COLLEGE BOUND - collegeboundnews.com access - one year individual subscription" />';
										echo '<input type="hidden" name="item_number" value="COLLEGE BOUND -  1 year" />';
										echo '<input type="hidden" name="amount" value="59.00" />';
									}
									if ($price == 100) {
										echo '<input type="hidden" name="item_name" value="COLLEGE BOUND - collegeboundnews.com access - two year individual subscription" />';
										echo '<input type="hidden" name="item_number" value="COLLEGE BOUND -  2 year" />';
										echo '<input type="hidden" name="amount" value="100.00" />';
									}
									echo '<input type="hidden" name="currency_code" value="USD" />';
									echo '<input type="hidden" name="add" value="1" />';
								echo '</form>';
            
								echo '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" enctype="x-www-form-urlencoded">';
									echo '<input src="https://www.paypal.com/images/view_cart_02.gif" type="image" border="0" name="submit" align="bottom" />';
									echo '<input type="hidden" name="cmd" value="_cart" />';
									echo '<input type="hidden" name="business" value="user906928@aol.com" />';
									echo '<input type="hidden" name="display" value="1" />';
								echo '</form>';

	                           echo '</label>';                               
							}	
                        } else {
   							if($_ErrorVariable == 0) {
								echo '<h3>';
								echo ("2) Finalize your order");
								echo '</h3>';
							

								echo '<label>';

								echo ("<br>Individual Subscription");
								echo ("&nbsp;$");
								echo ("$price");
								echo ("&nbsp; per year");
								echo '</label>';

								echo '<div class="sidebarColumn">';
								echo '<div class="sidebar-fields">';
								echo '<br />';

								echo 'Either&nbsp;&nbsp;';
								echo '<button onclick="printDiv(\'thePrintSection\')">Print out the subscription form</button>';
	
								echo '&nbsp;&nbsp;and mail it to us (the address is on the form).'; 
								echo '<br />';
								echo '<br />';
							}
							else {
								echo '<h3>';
								echo ("Error");
								echo '</h3>';
							
								echo '<div class="sidebarColumn">';
								echo '<div class="sidebar-fields">';
							}


//							echo 'Or  '; 
//							echo '<button onclick="printDiv(\'thePrintSection\')">Submit</button>';
//							echo ' your information to us and we will bill you.'; 

//							comment this in to see print fields on screen: echo '<button onclick="toggleDisplayFields()">Toggle the fields</button>';
                        }
						echo '</div>';
						echo '</div>';

                     ?>  
                     
                     <div class="error-fields">
						<?php
						
							if($_ErrorVariable == 1) {
								echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\"><blink>Error - Missing Field(s)</blink></font><font color=\"f8eeee\">---------------------</font>");
								echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
								echo ("<p><font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font><font size=\"-1\" face=\"vernada,Arial,Helvetica\" color=\"blue\">Means that the value is required</font>");
							}
							else {      // No error
								if ('Credit Card' === $subscription_type) {
									echo '<h3>';
									echo '3) Send your info to us';
									echo '</h3>';
									
								}
// Should indent this stuff:
							$queryString = "?firstname=:" . urlencode($firstname) .
								"&lastname=:" . urlencode($lastname).
								"&subscription_type=:" . urlencode($subscription_type).
			                    "&school_name=:" . urlencode($school_name).
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
								"thankyoudoc=:#";
								// "&thankyoudoc=:" . urlencode($thankurl);
								$url = "send_cbnews_subscription_form_individual.php".$queryString;
								// if we need to see the paramaters: echo ($url);
								
								echo ("<form METHOD=\"post\" ACTION=");
								echo($url);
								echo ("\">");
								
								
								foreach ($_POST as $key => $value) {
									echo "<INPUT TYPE='HIDDEN' NAME='" . $key . "' VALUE='" . $value . "'/>" . "\n";
								}
					            // No error 	
								if($_ErrorVariable == 0) {
									if ('Check or Money Order' === $subscription_type) {
										echo ("Or&nbsp;&nbsp;");
									}	
									echo ("<input name=\"submit\" type=\"submit\" value=\"Submit\"><font color=\"white\"></font>");
			        				if ('Check or Money Order' === $subscription_type) {
				        				echo ("&nbsp;&nbsp; your information to us and we will bill you. ");
				        				echo ("<br />");	
				        				echo ("<br />");	
				        				echo ("<br />");
				        				echo ("<hr>");	
									}
										
									if ('Check or Money Order' === $subscription_type) {
										echo ("<label>");
				        				echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
										echo ("</label>");
									}
									else {
										echo ("&nbsp;&nbsp;&nbsp;&nbsp;");
			        					echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
									}
					                // Error 	
								}
								echo ("<br />");
								echo ("<br />");
								echo ("<br />");
								
									echo ("<table cellpadding=\"4\" cellspacing=\"4\" style=\"width: 95%; border-style: solid; border-width: 1px\">");
									echo ("<tr>");
										echo ("<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>");
										echo ("<td>&nbsp;</td>");
										echo ("<td>&nbsp;</td>");
									echo ("</tr>");
									echo ("<tr>");
										echo ("<td>&nbsp;</td>");
										echo ("<td>");
			
											echo ("<font size=\"-1\" face=\"Arial,Helvetica\" color=\"black\">");

			
											echo ("To receive each new monthly issue of <strong><i>College Bound: Issues & Trends for the College Admissions Advisor</i></strong>, "); 
											echo ("log into <b>www.collegeboundnews.com</b> during the first week of the month and click on the <i>'Current Issues'</i> menu choice."); 
				        					echo ("<br />");
				        					echo ("<br />");
											echo ("There are 10 issues per year - September through June. You will receive log in instructions as soon we process your payment.");
				        					echo ("<br />");
				        					echo ("<br />");
											echo ("And for the latest <i><b> College Admissions Story-of-the-Day</b> </i> see our front page!");
											echo ("</font>");
										
										echo ("</td>");
										
										echo ("<td>&nbsp;</td>");
									echo ("</tr>");
									echo ("<tr>");
										echo ("<td>&nbsp;</td>");
										echo ("<td>&nbsp;</td>");
										echo ("<td>&nbsp;</td>");
									echo ("</tr>");
								echo ("</table>");
								
								echo ("</form>");
								}
							?>
						</div>
					</div>
                  
                  
                  <!-- Footer Links-->
                  <div class="col-md-12 col-sm-12 col-xs-12 footerColumn">
                     <center>
                        <a href="../aboutus/aboutus.html">About
                        Us</a>
                        | <a href="../subscribe.html">Subscribe</a> | <a href="../contactus/contact.html">Contact Us</a> <!-- | <a href="../articles.php">2003-2004
                        Issues</a> --> | <a href="../visitors/index.html">Visitors</a><br>
                        <a href="../backissues/index.html">Back
                        Issues</a> | <a href="../links/links.html">Links </a>| <a href="../cbhome.html">Home</a>
                     </center>
                     <br/>
                     <center>
                        <a href="../privacypolicy.html">Privacy
                        Policy/Terms of Service</a><br>
                        <br/>
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
                        <br>All Rights Reserved.<br><br/>
                        <a href="mailto:collegeboundnews@gmail.com">collegeboundnews@gmail.com</a>
                     </center>
                  </div>
                  <!-- FOoter Links End-->
               </div>
            </div>
         </div>
      </section>
   </BODY>
</HTML>