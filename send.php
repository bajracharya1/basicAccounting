<?php
include('includes/header.php');

if ((!$_GET['name']) || (!$_GET['comment'])){
  print "You failed to provide your name or comment";
}
else{
  $to = "info@khumbuadventuregear.com";
  $subject = "New Comment From " . $_GET['name'];
  $message = $_GET['comment'];

  mail($to, $subject, $message);

    echo '<div class= "container">';
    echo '<div id= "wrap">';
    
    print "<h3>Thank you,</h3></br>"; echo '<div class = "wrapper">';  print "Thank you, " . $_GET['name']." for your email </br> Someone will contact your shortly!";
echo '</div> </div></div>';
}

 include('includes/footer.php'); ?>