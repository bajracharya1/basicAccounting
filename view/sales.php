<?php include('../includes/header.php'); ?>


<div id="wrap">
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
         
      </tr>
             
        
        
    <?php
 
  }

?>
  </table>
 </div>     


<?php include('includes/footer.php'); ?>
    
 