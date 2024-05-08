<?php
header('Access-Control-Allow-Origin: https://tradersera.com/');
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "support@tradersera.com";
    $email_subject = "TradersEra contact form";

    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['refer_a_friend'])) 
        {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $refer_a_friend = $_POST['refer_a_friend'];
   
    $ip = $_SERVER['REMOTE_ADDR']; 
 
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Senders IP: ".clean_string($ip)."\n\n"; 
    $email_message .= "Name: " . clean_string($fname) . " " . clean_string($lname) . "\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "How Many friends do you plan to refer to Traders?: ".clean_string($refer_a_friend)."\n";
  
    $headers = 'From: noreply@tradersera.com'."\r\n" .
               'Reply-To: '.$email."\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (@mail($email_to, $email_subject, $email_message, $headers)) { ?>
        <script language="javascript" type="text/javascript">
            alert('Thank you for the message. We will contact you shortly.');
            window.location = 'index.php'; // Redirect to thank you page
        </script>
    <?php } else { ?>
        <script language="javascript" type="text/javascript">
            alert('Message failed. Please, send an email to support@tradersera.com');
            window.location = 'error.php'; // Redirect to error page
        </script>
    <?php }
}
?>