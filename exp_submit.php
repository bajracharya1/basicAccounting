<?php

include('includes/db.php');
$conn = db_connect();

$acc = $_POST['acc'];
$amt = $_POST['amt'];
$date = $_POST['date'];


if (isset($_POST['id'])){

  // editing

  //UPDATE table_name SET field1=new-value1, field2=new-value2 [WHERE Clause]
  
  $sqlIncome = "UPDATE off_exp
  SET Acc = '$acc', Amt = '$amt'
  WHERE id=".$_POST['id'].";";
   
  }
else {
    //adding into tables
    
 $sql = "INSERT INTO off_exp (Date, Acc, Amt) VALUES ('$date','$acc', '$amt')";
  


}

$conn->query($sql) or die('there was an error!');

header("Location: exp.php?message=add_success");



 