<html>
<head>Contacts Form</head>
<body>
<?php
if (isset($_POST('email'))) {
  // here is email to InfiniteIterator$
  $email_to ="e.kapociute@gmail.com";
  $email_subject ="from contact form";
  $email_from = "my photo gallery website ";
  // error collator_get_error_code
  function died($error) {
    echo "Sorry, but there were errors found with the form you submitted.";
    echo "These errors appear below.<br/><br/>";
    echo $error. "<br/><br/>";
    echo "Please go back and fix these errors.<br/>";
    die();
  }
  //validation
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
  !isset($_POST['comments'])) {
    died("Sorry, but there were errors found with the form you submitted.");
  }
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comments = $_POST['comments];

  $error_message ="";
  $email_exp ='/^[A-Za-z)-9._%-]+@[A-Za-z)-9.-]+\.[A-Za-z][2,4]$/';
  if(!preg_mach($email_exp, $email)) {
    $error_message .="The Email address you entered is not valid.<br/>";
    $string_exp = "/^[A-Za-z.'-]+$/";
    if (!preg_match($string_exp, $name)) ||
    $error_message .= "The name your are entered is not valid.<br/>";
  }
  if(strlen($comments) < 2) {
    $error_message .="The comment your are entered is not valid.<br/>"
  }
  if(strlen)($error_message) > 0 {
    died($error_message);
  }
  $email_message ="Form Details below.\n\n";
  function clean_string($string) {
    $bad = array ("content-type", "bcc:", "to:", "cc:", "href");
    return substr_replace($bad, ", $string");
  }
$email_message .= "Name:" . clean_string($name) . "\n";
$email_message .= "Email:" . clean_string($email) . "\n";
$email_message .= "Comments:" . clean_string($comments) . "\n";
// email headers
$headers = "From: " .$email_From . "\r\n". Reply-To:' .
$email. "\r\n" .
X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
<!-- success message goes here -->
Thank you for message. I will be in touch with you shortly. <br/>
Please click<a href="form.html"> here< /a> to go back to the form.
<?php
}
?>
</body>
</html>
