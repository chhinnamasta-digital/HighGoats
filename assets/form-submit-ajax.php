<?php
	include("variables.php");
// echo"<h2>Form Submit</h2>";
    // if(isset($_POST['Submit']))
    // {
    	$url = "https://www.google.com/recaptcha/api/siteverify";
    	$secret_key = '6LfUeK8jAAAAAKsxSN73NCk5tNv6b342OpcpsPP0';
    	$response = $_POST['token_generate'];
    	$remoteip = $_SERVER['REMOTE_ADDR'];
    	$request = file_get_contents($url."?secret=".$secret_key."&response=".$response);
    	$result = json_decode($request);
    	
		

        if($_POST['fname'] != '' || $_POST['email'] != '' || $_POST['mesage'] != '')
        {
			
        	if($result->success == 1){
                echo 1; 

	            $to = 'vikram.engg539@gmail.com';
	            $subject = $name;
	            $from = $_POST['email'];
	             
	            // To send HTML mail, the Content-type header must be set
	            $headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	             
	            // Create email headers
	            $headers .= 'From: '.$from."\r\n".
	                'Reply-To: '.$from."\r\n" .
	                'X-Mailer: PHP/' . phpversion();
	             
	            // Compose a simple HTML email message
	            $message = '<html><body>';
	            $message .= '<h1 style="color:#f40;">'.$subject.'</h1>';
	            $message .= '<p style="color:#080;font-size:18px;"><strong>Name:&nbsp;'.$_POST['fname'].'</strong></p>';
	            $message .= '<p style="color:#080;font-size:18px;"><strong>Email:&nbsp;'.$_POST['email'].'</strong></p>';
	            $message .= '<p style="color:#080;font-size:18px;"><strong>Message:&nbsp;'.$_POST['message'].'</strong></p>';
	            $message .= '</body></html>';
	             
	            // Sending email
	            if(mail($to, $subject, $message, $headers)){
	                //echo '<script> alert("Your Message has been sent successfully.") </script>
	                //<meta http-equiv="refresh" content="1">';
	            } else{
	                //echo '<script> alert("Unable to send Message. Please try again.") </script>
	                //<meta http-equiv="refresh" content="1">';
	            }
	        }
			else{
				echo 0;
			}
        }
		
    // }
?>