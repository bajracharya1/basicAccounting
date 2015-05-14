<?php
include('includes/header.php');

if ((!$_GET['name']) || (!$_GET['comment'])){
  print "You failed to provide your name or comment";
}
else{
  $to = "bajracharya@hotmail.com";
  $subject = "New Comment From " . $_GET['name'];
  $message = $_GET['comment'];

  mail($to, $subject, $message);
  print "<h1> Thank you," . $_GET['name']. ". Your email has been sent!</h1>";

}

include('includes/footer.php'); ?>