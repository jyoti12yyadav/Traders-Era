<?php
header('Access-Control-Allow-Origin: https://tradersera.com/');
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "support@tradersera.com";
    $email_subject = "TradersEra contact form";
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['countries']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['introducing-broker']) ||
        !isset($_POST['monthly-traders']) ||
        !isset($_POST['average-deposit-per-client']) ||
        !isset($_POST['client-average-volume']) ||
        !isset($_POST['legacyfx']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $fname = $_POST['fname']; // required
    $lname = $_POST['lname']; // required
    $email = $_POST['email']; // required
    $countries = $_POST['countries']; // required
    $phone = $_POST['phone']; // required
    $introducing_broker = $_POST['introducing-broker']; // required
    $monthly_traders = $_POST['monthly-traders']; // required
    $average_deposit_per_client = $_POST['average-deposit-per-client']; // required
    $client_average_volume = $_POST['client-average-volume']; // required
    $legacyfx = $_POST['legacyfx']; // required
    $message = $_POST['message']; // required
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
    $email_message .= "Which countries will most of your clients come from?: ".clean_string($countries)."\n";
    $email_message .= "Are you an Introducing Broker with any other brokers?: ".clean_string($introducing_broker)."\n";
    $email_message .= "Average deposit per client: ".clean_string($average_deposit_per_client)."\n";
    $email_message .= "client average volume: ".clean_string($client_average_volume)."\n";
    $email_message .= "How do you intend to promote legacyfx?: ".clean_string($legacyfx)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    // create email headers
    $headers = 'From: noreply@tradersera.com'."\r\n" .
               'Reply-To: '.$email."\r\n" .
               'X-Mailer: PHP/' . phpversion();
    if (@mail($email_to, $email_subject, $email_message, $headers)) { ?>
        <script language="javascript" type="text/javascript">
            alert('Thank you for the message. We will contact you shortly.');
            window.location = history.back();
        </script>
    <?php } else { ?>
        <script language="javascript" type="text/javascript">
            alert('Message failed. Please, send an email to support@tradersera.com');
            window.location = history.back();;
        </script>
    <?php }
}
?>