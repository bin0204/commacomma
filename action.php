

<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $message = $_POST['message'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $formcontent = "From: $name \n 내용: $message \n 전화번호: $telephone";
  $recipient = "seobin1026@gmail.com";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  //echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
  // header('Location: /contact.html');
  echo $_SERVER['PHP_SELF'];
  ?>
}

?>
