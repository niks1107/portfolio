<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
$name = $_GET['name'];
 echo $name;
    // $to = $_POST["to"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];
    // $headers = "From: your_email@example.com"; // Replace with your own email address

    // if (mail($to, $subject, $message, $headers)) {
    //     echo "Email sent successfully.";
    // } else {
    //     echo "Email sending failed.";
    // }
}
?>
