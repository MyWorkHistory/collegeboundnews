<?php
  extract($_POST); 
    
	function check_email ($str) {

		if(ereg("^.+@.+\\..+$", $str)) {

			return 1;

		} else {

			return 0;

		} // end if

			

	} // end function check_email


    function strip1stColon($theStr){
        $pos = strpos($theStr, ":");
        if ($pos === 0) {
            $theStr = substr($theStr, $pos + 1);
            return ($theStr);
        }                       
    }

	function mail_it($body, $subject, $email, $recipient) {
    $recipient = strip1stColon($recipient);
    $subject = strip1stColon($subject) ;
    $email = strip1stColon($email) ;
	
		//mail($recipient, $subject, $body, "From: $email\r\nReply-To: $email\r\nX-Mailer: DT_formmail");
		mail($recipient, $subject, $body, "From: $email\r\nReply-To: $email");

	}



	// check phone for validity

	function check_phone($phone_no){

	   $phone_no = trim($phone_no);

	   if (!ereg("(^(-*)[0-9]{3})(-*)([0-9]{3})(-*)([0-9]{4}$)", $phone_no)) {

	      return 0;

	   }else{

		return 1;

		}

	}

?>
