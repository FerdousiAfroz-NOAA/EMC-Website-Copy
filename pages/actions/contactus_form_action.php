// <?php 

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     if (empty($_POST["firstname"])) {
//         $nameErr = "First Name is required";
//     } else {
//         //$firstname = $_POST['firstname'];
//         $firstname = test_input($_POST["firstname"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//             $nameErr = "Only letters and white space allowed";
//         }
//     }
    
//     if (empty($_POST["lastname"])) {
//         $lastnameErr = "First Name is required";
//     } else {
//         //$lastname = $_POST['lastname'];
//         $lastname = test_input($_POST["lastname"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//             $nameErr = "Only letters and white space allowed";
//         }
//     }
    
    
//     if (empty($_POST["email"])) {
//         $emailErr = "Email is required";
//     } else {
//         //$email = $_POST['email'];
//         $email = test_input($_POST["email"]);
//         // check if e-mail address is well-formed
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $emailErr = "Invalid email format";
//         }
//     }
    
    
//     $message = $_POST['message'];
    
//     $formcontent="From: $name \n Message: $message";
    
//     $recipient = "emc.ncep.noaa@gmail.com";
    
//     $subject = "Contact Form";
    
//     $mailheader = "From: $email \r\n";
    
//     mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    
//     echo "Thank You!";
// }
// ?>


<?php
$email = ($_POST['email']);
$fullname = ($_POST['fullname']);
$comments = ($_POST['comments']);
$headers = "From: <".$email.">\n";
$headers .= "Return-Path: <".$email.">\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/HTML; charset=ISO-8859-1\n";

$to  = 'ncep.webmaster@noaa.gov';
//$to  = 'emc.webmasters@noaa.gov';
//$to = "kerem.ovezberdyev@noaa.gov";
$from = ($_POST['fullname']);
$subject = "EMC Web Question/Comment";
$msg = "Sent From: $from". "<br /><br />" . ($_POST['comments']);

if (isset($_POST['submit']))
{
$errostring = "";

//Validation
if (!$fullname)
$errostring = $errostring."*Full Name<br />";
if (!$email)
$errostring = $errostring."*Email Address<br />";
if (!$comments)
$errostring = $errostring."*Comments<br />";
if ($errostring!="")
echo "<center><b><font size=2 color=#0024ad>Please fill all required fields: <br/> </font><font size=1 color=#0024ad> $errostring</font></b></center><br /> <br />";
}

if ($email)
if ($fullname)
if ($comments)
{
mail($to, $subject, $msg, $headers);

     echo("<center><b><font size=2 color=#0024ad>Your email message successfully sent<br/>
         Click <a href='http://www.emc.ncep.noaa.gov/'>here</a> to return back to EMC website.</font></b></center><br /> <br />");
}
else
{
     echo("<center><b><font size=2 color=#0024ad>Sorry, message delivery failed. Check that you have included a valid email address, name, and comments.</font></b></center><br /> <br />");
}
?>

