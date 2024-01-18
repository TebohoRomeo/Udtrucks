<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$phone = $_POST{'phone'};
$subject = $_POST{'subject'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Phone: ".$phone."
Subject: ".$subject."
Message: ".$message."

";

mail ("ldhlamini@motustoyota.co.za" , "New Message", $email_message);
header("location: ../mail-success.html");
?>


