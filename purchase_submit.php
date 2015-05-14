<?php

include('includes/db.php');
$conn = db_connect();

$acc = $_POST['acc'];
$amt = $_POST['amt'];
$date = $_POST['date'];


if (isset($_POST['id'])){

  // editing

  //UPDATE table_name SET field1=new-value1, field2=new-value2 [WHERE Clause]

  $sqlExp = "UPDATE exp
  SET Acc = '$acc', Amt = '$amt'
  WHERE id=".$_POST['id'].";";


}
else {
    //adding into tables
    
  $sqlExp = "INSERT INTO exp (Date, Acc, Amt) VALUES ('$date', '$acc', '$amt')";
 


}
$conn->query($sqlExp) or die('there was an error!');


header("Location: purchase.php?message=add_success");

