
<?php
$errorMSG = "";
// NAME
if (empty($_POST["cf_name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["cf-name"];
}
// EMAIL
if (empty($_POST["cf_email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["cf_email"];
}
// MESSAGE
if (empty($_POST["cf_message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["cf_message"];
}
$EmailTo = "emailaddress@test.com";
$Subject = "New Message Received";
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>