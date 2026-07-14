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
         function myFunction() {
         	window.print();
         	}
      </script>
      <script>
         function printDiv(divName) {
              var printContents = document.getElementById(divName).innerHTML;
              var originalContents = document.body.innerHTML;
         
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
      <section class="container-section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 topbar">
                  <h3>
                     <span>
                     1) Verify your information
                     </span>
                     <span>
                     2) Make a payment
                     </span>
                     <span>
                     3) click "submit" to send it to us or Go Back if their is a mistake.
                     </span>
                  </h3>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12 sidebar">
                  <div class="sidebar_content col-md-12 col-sm-12 col-xs-12">
                     <h3>
                        1) Verify Your Information
                     </h3>
                     
                        <?php
                          echo ("<div class="sidebarColumn">");

                           require("common.php");
                           
                           extract($_POST);
                           $_ErrorVariable = 0;
                           
							echo ("<br />");
							echo ("<h4>");
							echo ("Subscription");
							echo ("</h4>");
							echo ("<div class=\"sidebar-fields\">");
							echo ("<label>");
							echo ("Subscription Type");
							echo ("</label>");
							echo ("</div>");
                           if (empty($subscription_type)) {
                               echo ("<br>Subscription type is required");
                               echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
                               $_ErrorVariable = 1;
                           } else {
								echo ("&nbsp;&nbsp; <i> $subscription_type </i>");
                           }
                           echo ("</div>");
                           
							echo ("<div class="sidebarColumn">");
							echo ("<h4>");
                      		echo ("Name");
							echo ("</h4>");

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




                           
                           
                           
                           ?>
                        <!-- first past in below -->
                        <?php
                           //		require("common.php");
                           
                           //		extract($_POST);
                           //		$_ErrorVariable = 0;
                           		
                           //		if (empty($subscription_type)) {
                           //		    echo ("<br>Subscription type is required");
                           //		    echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
                           //		    $_ErrorVariable = 1;
                           //		} else {
                           //			if($subscription_type == 'Credit Card')
                           //			{
                           //    			echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$subscription_type </font>");
                           //	            echo '<hr />';
                           //	 
                           //				} else {
                           //	    			echo ("<br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"maroon\">$subscription_type </font>");
                           //			}
                           //		}
                           		
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
                     </div>
                     <div class="sidebarColumn">
                        <h4>
                           Name
                        </h4>
                        <div class="sidebar-fields">
                           <label>
                           First Name
                           </label>
                           <input type="text" name="" class="form-control" placeholder="First Name is required*" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           Last Name 
                           </label>
                           <input type="text" name="" class="form-control" placeholder="Last Name is required*" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           Telephone 
                           </label>
                           <input type="text" name="" class="form-control" placeholder="Telephone is required*" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           Fax 
                           </label>
                           <input type="text" name="" class="form-control" placeholder="Fax" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           Email Address
                           </label>
                           <input type="text" name="" class="form-control" placeholder="A Valid Email Address is required*" required="required">
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
                           <input type="text" name="" class="form-control" placeholder="School name is required*" required="required">
                        </div>
                     </div>
                     <div class="sidebarColumn">
                        <h4>
                           Address
                        </h4>
                        <div class="sidebar-fields">
                           <label>
                           Street 
                           </label>
                           <input type="text" name="" class="form-control" placeholder="Street is required*" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           City  
                           </label>
                           <input type="text" name="" class="form-control" placeholder="City is required*" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           State   
                           </label>
                           <input type="text" name="" class="form-control" placeholder="State is required*" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           Zip    
                           </label>
                           <input type="tel" name="" class="form-control" placeholder="Zip is required*" required="required">
                        </div>
                        <div class="sidebar-fields">
                           <label>
                           Subscriber Type    
                           </label>
                           <input type="tel" name="" class="form-control" placeholder="Subscriber Type is required*" required="required">
                        </div>
                     </div>
                     <div class="error-fields">
                        <h5>
                           Error - Missing Field(s)
                        </h5>
                     </div>
                     <a href="javascript:viod(0);" class="btn btn-back"> Go back </a>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12 main_content">
                  <div class="maincontentColumn col-md-12 col-sm-12 col-xs-12">
                     <h3>
                        2) Subscription type
                     </h3>
                     <div class="sidebarColumn">
                        <div class="sidebar-fields">
                           <label>
                           Subscription type
                           </label>
                           <input type="text" name="" class="form-control" placeholder="Subscription type is required*" required="required">
                        </div>
                     </div>
                     <h3>
                        3) Send your info to us
                     </h3>
                     <div class="error-fields">
                        <h5>
                           Error - Missing Field(s)
                        </h5>
                     </div>
                     <a href="javascript:viod(0);" class="btn btn-back2"> Go back </a>
                  </div>
                  <!-- Footer Links-->
                  <div class="col-md-12 col-sm-12 col-xs-12 footerColumn">
                     <center>
                        <a href="../aboutus/aboutus.html">About
                        Us</a>
                        | <a href="../subscribe.html">Subscribe</a> | <a href="../contactus/contact.html">Contact Us</a> | <a href="../articles.php">2003-2004
                        Issues</a> | <a href="../visitors/index.html">Visitors</a><br>
                        <a href="../backissues/index.html">Back
                        Issues</a> | <a href="../whogotin/index.html">Who Got In?</a> | <a href="../links/links.html">Links </a>| <a href="../cbhome.html">Home</a>
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
                           	
                        </script>© 2018 COLLEGE BOUND Publications Inc. 
                        <br>All Rights Reserved.<br><br/>
                        <a href="mailto:s.sautter@sbcglobal.net">s.sautter@sbcglobal.net</a>
                     </center>
                  </div>
                  <!-- FOoter Links End-->
               </div>
            </div>
         </div>
      </section>
   </BODY>
</HTML>