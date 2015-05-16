<?php include('includes/header.php'); ?>


<div class="wrapper">
<div class="col-md-4">
<h3>Income</h3>
  <?php
  if (isset($_GET['message'])){
    if ($_GET['message'] == "add_success"){
      print "<h1>Transaction added successfully</h1>";
    }
    if($_GET['message']== 'delete_success'){
      print "<h1>Transaction ".$_GET['id']. " has been deleted</h1>";
    }
  }
  ?>
  <table data-toggle="table" class="table">
    <thead>
      <!-- <td>ID</td>-->
        <td>Date</td>
      <td>Department</td>
      <td >Amount</td>
     
    </thead>

<?php
 
  $sqlIncome = "SELECT * FROM `income`;";


  $resultIncome = $conn->query($sqlIncome);
 
  

  while($row = $resultIncome->fetch_assoc()) {
    ?>
      <tr>
        <!-- <td><?php print $row['ID']?></td>-->
          <td align= 'left' width='100'><?php print $row['Date']?></td>
         <td align= 'left' width='150'><?php print $row['Acc']?></td>
        <td align= 'right' width='80'><?php print $row['Amt']?></td>
          <td width ='100px'></td>
        <td><a href="sales.php?id=<?php print $row['ID']?>">edit</a></td> 
        <td><a href="delete.php?id=<?php print $row['ID']?>">delete</a></td> 
      </tr>
             
        
        
    <?php
 
  }

?>
  </table>
 </div>   

<?Php //PURCHASES ?>
    
     <div class="col-md-4">
<h3>Purchases</h3>
  <?php
  if (isset($_GET['message'])){
    if ($_GET['message'] == "add_success"){
      print "<h1>Transaction added successfully</h1>";
    }
    if($_GET['message']== 'delete_success'){
      print "<h1>Transaction ".$_GET['id']. " has been deleted</h1>";
    }
  }
  ?>
  <table data-toggle="table" class="table">
    <thead>
      <!-- <td>ID</td>-->
        <td>Date</td>
      <td>Department</td>
      <td >Amount</td>
     
    </thead>

<?php
 
  $sqlExp = "SELECT * FROM `exp`;";

  $resultExp = $conn->query($sqlExp);
  

  while($row = $resultExp->fetch_assoc()) {
    ?>
      <tr>
       <!-- <td><?php print $row['ID']?></td> -->
          <td align= 'left' width='100'><?php print $row['Date']?></td>
         <td align= 'left' width='150'><?php print $row['Acc']?></td>
        <td align= 'right' width='80'><?php print $row['Amt']?></td>
          <td width ='100px'></td>
        <td><a href="purchase.php?id=<?php print $row['ID']?>">edit</a></td> 
        <td><a href="delete.php?id=<?php print $row['ID']?>">delete</a></td> 
      </tr>
             
        
        
    <?php
 
  }

?>
  </table>
 </div>    

    
    <?Php //OFFICE EXPENSES ?>
    
     <div class="col-md-4">
<h3>Office Expenses</h3>
  <?php
  if (isset($_GET['message'])){
    if ($_GET['message'] == "add_success"){
      print "<h1>Transaction added successfully</h1>";
    }
    if($_GET['message']== 'delete_success'){
      print "<h1>Transaction ".$_GET['id']. " has been deleted</h1>";
    }
  }
  ?>
  <table data-toggle="table" class="table">
    <thead>
      <!-- <td>ID</td>-->
        <td>Date</td>
      <td>Department</td>
      <td >Amount</td>
     
    </thead>

<?php
 
  $sql = "SELECT * FROM `off_exp`;";
 

  $result = $conn->query($sql);
 
  

  while($row = $result->fetch_assoc()) {
    ?>
      <tr>
       <!-- <td><?php print $row['ID']?></td> -->
         <td align= 'left' width='100'><?php print $row['Date']?></td>
         <td align= 'left' width='150'><?php print $row['Acc']?></td>
        <td align= 'right' width='80'><?php print $row['Amt']?></td>
          <td width ='100px'></td>
        <td><a href="exp.php?id=<?php print $row['ID']?>">edit</a></td> 
        <td><a href="delete.php?id=<?php print $row['ID']?>">delete</a></td> 
      </tr>
             
        
        
    <?php
 
  }

?>
  </table>
 </div> 
    
    
</div>


<?php include('includes/footer.php'); ?>
    
 