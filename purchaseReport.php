<?php include('includes/header.php'); ?>
<div class="container">

<div id="wrap">

<h3>Purchase Repport</h3>
    
      <form method="post">
       
          <div id="textBox"> 
        From <input type="date" name="dateFrom"  class="form-control"  value="<?php echo date('Y-m-d'); ?>"/>
          
          To  
              <input type="date" name="dateTo" class="form-control"  value="<?php echo date('Y-m-d'); ?>" /></br>
       <input type = "submit" class="btn btn-default" id="search" value="SEARCH"  /></div>
   
    
  <?php  
  
     $dateFrom = $_POST['dateFrom'];
     $dateTo = $_POST['dateTo'];

  ?> 
       
    
      
  <table data-toggle="table" class="table">
    <thead>
      <!-- <td>ID</td>-->
      <td>Date</td>
      <td>Department</td>
      <td >Amount</td>
     

      </thead>

<?php


  $sqlIncome = "SELECT * FROM `exp` WHERE Date BETWEEN '$dateFrom' AND '$dateTo'";


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
     
</div></div>

<?php include('includes/footer.php'); ?>
    
 