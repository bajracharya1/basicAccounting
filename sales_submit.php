<?php

include('includes/db.php');
$conn = db_connect();

$acc = $_POST['acc'];
$amt = $_POST['amt'];
$date = $_POST['date'];


if (isset($_POST['id'])){

  // editing

  //UPDATE table_name SET field1=new-value1, field2=new-value2 [WHERE Clause]
  
  $sqlIncome = "UPDATE income
  SET Acc = '$acc', Amt = '$amt', Date = '$date'
  WHERE id=".$_POST['id'].";";
    

}
else {
    //adding into tables
    
 $sqlIncome = "INSERT INTO income (Date, Acc, Amt) VALUES ('$date', '$acc', '$amt')";
 


}

$conn->query($sqlIncome) or die('there was an error!');

header("Location: sales.php?message=add_success");



 