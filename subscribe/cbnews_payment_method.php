<html>
   <head>
      <title>Choosing College Bound News Membership Type</title>
      <link rel="stylesheet" type="text/css" href="../CSS/csshorizontalmenu.css" />
      <script language="javascript" type="text/javascript" src="../Scripts/csshorizontalmenu.js"></script>
      <link href="../CSS/GradientShadow.css" rel="stylesheet" type="text/css" />
      <script language="javascript" type="text/javascript" src="../Scripts/GradientShadow.js"></script>
      <script language="javascript" type="text/javascript">
         gradientshadow.depth=6;
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
   </head>
   <body>
      <br>
      <p align="center"><b><font face="Times New Roman" size="+2">Verify Subscription Type</font></b></p>
      <p align="center">
      <table width="1000" border="5" cellpadding="5" cellspacing="5" class="tblMain" >
         <!-- <table align="center" border="1" bordercolor="#ffcc66" width="484"> -->
         <tr>
            <td valign="top">
               <?php	
                  // subscription_typerequire ("common.php");
                  extract($_POST); 
                  $_ErrorVariable = 0;
                  
                  echo("<center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"teal\"></center>");
                  
                  if(empty($subscription_type)) {
                  	echo("<br>Please Select Your Payment Method");
                  	echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font>");
                  	$_ErrorVariable = 1;
                  }else {
                  	if($subscription_type == "Individual") 
                           {
                            echo ("<br><center><font size=\"-1\" face=\"Arial,Helvetica\" color=\"black\">You have chosen the $subscription_type Subscription type, if this is correct click Submit to proceed.</font></center>");
                  	$queryString = "?subscription_type=:" . urlencode($subscription_type);
                  	$url = "indsubscribe.html".$queryString;
                                                                   }
                  	if($subscription_type == "Institutional")
                               {
                  		echo ("<center><br><font size=\"-1\" face=\"Arial,Helvetica\" color=\"black\">You have chosen the $subscription_type Subscription type, if this is correct click Submit to proceed.</font></center><br>");
                  		$queryString = "?subscription_type=:" . urlencode($subscription_type);
                  		$url = "instsubscribe.html".$queryString;
                                             }
                  		}
                  						
                  	?>
               <center>
                  <p></p>
                  <form action="<?php echo($url);?>" method="post">
                     <center>
                        <?php
                           if($_ErrorVariable == 0) {
                           	echo ("<input name=\"submit\" type=\"submit\" value=\"Submit\"><font color=\"white\">&nbsp;&nbsp;&nbsp;</font>");
                           	echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
                           }else {
                           	echo ("<font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\"><blink>Error - Missing Field(s)</blink></font><font color=\"f8eeee\">---------------------</font>");
                           	echo ("<input type=\"button\" value=\"Go Back\" ONCLICK=\"self.history.back();\">");
                           	echo ("<p><font size=\"+1\" face=\"Arial,Helvetica\" color=\"red\">*</font><font size=\"-1\" face=\"vernada,Arial,Helvetica\" color=\"blue\">The value is required</font>");
                           }
                           ?>
                     </center>
                  </form>
               </center>
            </td>
         </tr>
      </table>
      </p>
      <hr>
      <p></p>
      <center>
      	<font face="Arial" size="-1">
         <a href="../aboutus/aboutus.html">About Us</a> | <a href="../subscribe.html">Subscribe</a> | <a href="../contactus/contact.html">Contact Us</a> | <a href="../visitors/index.html">Visitors</a>
         <br>
         <a href="../backissues/index.html">Back Issues</a> | <a href="../links/links.html">Links </a>| <a href="../cbhome.html">Home</a>
         </font>
      </center>
      <p></p>
      <blockquote>
         <p></p>
         <center>
            <a href="../privacypolicy.html"><font face="Arial" size="-1">Privacy 
            Policy/Terms of Service</font></a>
            <font face="Arial" size="-1">
               <br>
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
               <a href="mailto:collegeboundnews@gmail.com">collegeboundnews@gmail.com</a>
            </font>
         </center>
      </blockquote>
   </body>
</html>