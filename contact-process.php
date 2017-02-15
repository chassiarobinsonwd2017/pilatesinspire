<?
$name = trim(stripslashes($_POST['your-name']));
$email = trim(stripslashes($_POST['your-email']));
$message = trim(stripslashes($_POST['your-message']));

$recipient = "chazfromer@gmail.com";
$email_from = $name." <".$email.">";

$body = "Name: ".$name;
$body .= "\nEmail: ".$email;
$body .= "\nMessage: ".$message;

$success = mail($recipient, "message from pilatesinspire", $body, "From: ".$email_from);

if ($success){
    echo"message sent!";
}else{
    echo "didnt work";
}

?>
