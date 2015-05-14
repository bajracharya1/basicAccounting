<?php include('includes/header.php'); ?>

<form method="post" action="user_submit.php" class="form-inline">

  <?php
    $isEditing = false;
    if (isset($_GET['id'])){
      $isEditing = true;
        
      $sqlIncome = "SELECT * FROM `income` WHERE id =".$_GET['id']." LIMIT 1;";
      
      $sqlDept="SELECT * FROM `dept`";

      $result = $conn->query($sql);

      $row = $result->fetch_assoc();
        
        print "<input type=\"hidden\" name=\"id\" value=\"". $_GET['id']. "\"/>";

     }
  ?>
<div class ="container-fluid">
<select name="acc" class="form-control"<?php if ($isEditing) { ?> value="<?php print $row['Acc']?>"<?php } ?>  />
    <option value="Candy" >Candy</option>
    <option value="Soda" >Soda</option>
    <option value="Grocery" >Gorcery</option>
    <option value="Gas" >Gas</option>
    <option value="Beer" >Beer</option>
    <option value="Tobacco" >Tobacco</option>
  </select>
  
<input name="amt"  class="form-control" placeholder="Amount"<?php if ($isEditing) { ?>  value="<?php print $row['Amt']?>" <?php } ?>/>

  <input type = "submit" class="btn btn-default"  value="ADD"  />
</form>
 </div>


<?php include('includes/footer.php'); ?>
