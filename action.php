<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];
  $telephone = $_POST['telephone'];

  $mailTo = "seobin1026@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message.".\n\n".$telephone;
  mail($mailTo, $subject, $txt, $headers);
  // echo '<p>SEND</p>';
} else {
  echo '<p>Something went wrong, go back and try again!</p>';
}
  // header("Location: index.php?mailsend");

?>
