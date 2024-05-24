<?php
$email = ($_POST['email']);
$fullname = ($_POST['fullname']);
$comments = ($_POST['comments']);
$headers = "From: <".$email.">\n";
$headers .= "Return-Path: <".$email.">\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/HTML; charset=ISO-8859-1\n";

$to  = 'ncep.list.bufrlib-support@noaa.gov';

$from = ($_POST['fullname']);
$subject = ($_POST['subject']);
$msg = "Sent From: $from". "<br />email:".$email."<br />" . ($_POST['comments']);

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

<table cellpadding="0" cellspacing="0" border="0" width="100%"
       summary="Table is for layout only.">
  <tbody>
<!-- Begin Body Content -->
  <tr valign="top">
  <td>
    <a href="http://www.ncep.noaa.gov/">NCEP Home</a> &gt; <a href="/">EMC Home</a> &gt; <a href="/BUFRLIB/">BUFRLIB</a> &gt; E-Mail BUFRLIB Support
    <h2 align="center">E-Mail BUFRLIB Support</h2>
    <script language="javascript" type="text/javascript" src="/javascripts/validateMailForm.js"></script>
    <form method="post">
      <table border="0" cellpadding="0" cellspacing="0" width="100%"
             summary="Table is for layout only.">
        <tr>
          <td colspan="2">
            Please enter any comments you might have in the space below, and
            press the "Send comments" button when you are finished.
            <p>
            <small><i>NOTE: Submission of name and/or email address is optional. However, without your complete e-mail address we cannot provide a reply.</i></small>
            <p>
          </td>
        </tr>
        <tr>
          <td>
            Your Full Name:
          </td>
          <td>
            <input type="text" name="fullname" size="40">
          </td>
        </tr>
        <tr>
          <td>
            Your E-mail Address:
          </td>
          <td>
            <input type="text" name="email" size="40">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="hidden" name="recipient" value="ncep.list.bufrlib-support">
            <input type="hidden" name="author" value="NCO Web Team">
            <input type="hidden" name="subject" value="BUFRLIB Support Comments">
            <input type="hidden" name="nav"
                   value='<a href="http://www.ncep.noaa.gov/">NCEP Home</a> &gt; <a href="/">NCO Home</a> &gt; <a href="/sib/">Systems Integration Branch</a> &gt; <a href="/sib/decoders/">Decoders</a> &gt; <a href="/sib/decoders/mail_bufrlib/">E-Mail BUFRLIB Support</a>'>
            <hr width="60%">
            Please enter any comments you might have in the space below, making sure to
            include any web addresses you are referring to in your message:<br>
            <textarea name="comments" rows="10" cols="60"></textarea>
            <p>
            <input type="reset" value="Erase Comments">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Send Comments">
          </td>
        </tr>
      </table>
    </form>
<!-- End Body Content -->
  </td>
  </tr>
  </tbody>
</table>
