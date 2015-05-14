<?php include('includes/header.php'); ?>

<form method="post" action="exp_submit.php" class="form-inline">

  <?php
    $isEditing = false;
    if (isset($_GET['id'])){
      $isEditing = true;

      $sql = "SELECT * FROM `off_exp` WHERE id =".$_GET['id']." LIMIT 1;";
       
        $result = $conn->query($sql);
         
        $row = $result->fetch_assoc();
               
        print "<input type=\"hidden\" name=\"id\" value=\"". $_GET['id']. "\"/>";

     }
  ?>
    
<div class ="container-fluid">
  <input type="date" name="date" class="form-control"  value="<?php echo date('Y-m-d'); ?>" />  
<select name="acc" class="form-control"<?php if ($isEditing) { ?> value="<?php print $row['Acc']?>"<?php } ?>  />
    <option value="Office Supplies" >Office Supplies</option>
    <option value="Meals and Entertainment" >Meals & Entertainment</option>
    <option value="Auto Expenses" >Auto Expenses</option>
    <option value="Adverstisement" >Advertisement</option>
    <option value="Printing and Reproductino" >Printing and Reproductino</option>
    <option value="Salary and Wages" >Salary & wages</option>
  </select>
  
<input name="amt"  class="form-control" placeholder="Amount"<?php if ($isEditing) { ?>  value="<?php print $row['Amt']?>" <?php } ?>/>
<input type = "submit" class="btn btn-default"  value="ADD"  />
</form>
 </div>


<?php include('includes/footer.php'); ?>
