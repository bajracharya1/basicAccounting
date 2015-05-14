
<?php 
include('includes/header.php'); ?>

<div id="container">
   
      <!--PURCHASE SUMMARY-->
    
    <div class="col-md-3"> <h3>Purchase Summary</h3>

    <?php
 
$sqlExp = "SELECT Acc, SUM(Amt) FROM exp GROUP BY Acc"; 
 $resultExp = $conn->query($sqlExp); ?>
<div class="table"> <?php
// Print out result
    while($row = mysqli_fetch_array($resultExp)){
	echo "<table>";
        echo "<tr>";
    echo "<td >";
        echo "<td align='left' width='300'> Total ".$row['Acc']." :"."<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)']."</td>";
	echo "</tr>";  
     
}
?>
<div>
    <?php
$sumExp = "SELECT SUM(Amt) FROM exp ";  
$totalExp = $conn->query($sumExp);         
while($row=mysqli_fetch_array($totalExp)) {  

echo "<table>";
echo "<tr class='border'>";  
echo "<td align='left' width='300'>" ;
    echo "Grand Total :". "<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)'] . "</td>";  
echo "</tr>";  
 $GLOBALS['expenses'] =$row['SUM(Amt)']; 
}  

echo "</table>"; ?>
    </div> </div></div>
     
        
        <!--SALES SUMMARY-->
        
        
    <div class="col-md-2"> <h3>Sales Summary</h3> 
        
        <?php
 
$sqlIncome = "SELECT Acc, SUM(Amt) FROM income GROUP BY Acc"; 
 $resultIncome = $conn->query($sqlIncome); ?>

<div class="table"> <?php
// Print out result
    while($row = mysqli_fetch_array($resultIncome)){
	echo "<table>";
        echo "<tr>";
    echo "<td >";
        echo "<td align='left' width='150'> Total ".$row['Acc']." :"."<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)']."</td>";
	echo "</tr>";  
      

}
?>
<div>
    <?php
$sumIncome = "SELECT SUM(Amt) FROM income ";  
$totalIncome = $conn->query($sumIncome);         
while($row=mysqli_fetch_array($totalIncome)) {  

echo "<table>";
echo "<tr class='border'>";  
echo "<td align='left' width='150'>" ;
    echo "Grand Total :". "<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)'] . "</td>";  
echo "</tr>";  
    
        $GLOBALS['income'] =   $row['SUM(Amt)'];
        $GLOBALS['cog'] =   $row['SUM(Amt)']*.5;
        $GLOBALS['revenue']= $GLOBALS['income']-$GLOBALS['cog'];
        $GLOBALS['inventory']=$GLOBALS['expenses']-$GLOBALS['cog'];
}  

echo "</table>"; ?>    
        
        
        
    </div></div></div>
        
      <!--OFFICE EXPENSES SUMMARY-->
    <div class="col-md-2"><h3>Other Expenes</h3>
        
         <?php
 
$sql = "SELECT Acc, SUM(Amt) FROM off_exp GROUP BY Acc"; 
 $result = $conn->query($sql); ?>

<div class="table"> <?php
// Print out result
    while($row = mysqli_fetch_array($result)){
	echo "<table>";
        echo "<tr>";
    echo "<td >";
        echo "<td align='left' width='150'> Total ".$row['Acc']." :"."<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)']."</td>";
	echo "</tr>";  
      

}
?>
<div>
    <?php
$sum = "SELECT SUM(Amt) FROM off_exp ";  
$total = $conn->query($sum);         
while($row=mysqli_fetch_array($total)) {  

echo "<table>";
echo "<tr class='border'>";  
echo "<td align='left' width='150'>" ;
    echo "Grand Total :". "<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)'] . "</td>";  
echo "</tr>";  
    
        $GLOBALS['off_exp'] =  $row['SUM(Amt)'];
        $GLOBALS['PnL'] =  $GLOBALS['revenue']-$GLOBALS['off_exp'];

}  

echo "</table>"; ?>    
        
        
    </div> </div></div>

  <!--P N L  SUMMARY-->
<div class="col-md-2">
<h3>Summary</h3>
  <div class="table">
      <h6>CoG calucated assuming 50% margin on Sales</h6>
<?php 
echo "<table>";
echo "<td align='left' width='150'> Total Income:"."<td align= 'right' width='80'>"."$ ". $income."</td>";
echo "</tr>";  
echo "<td align='left' width='150'> Cost of Good:"."<td align= 'right' width='80'>"."-"."$ ". $cog."</td>"; 
echo "</tr>";  
echo "<tr class='border'>";  
echo "<td align='left' width='150'> Total Revenue:"."<td align= 'right' width='80'>"."$ ".$revenue."</td>";
echo "</tr>"; 
echo "<td align='left' width='150'> Other Expenses:"."<td align= 'right' width='80'>"."-"."$ ".$off_exp."</td>";
echo "</tr>";
echo "<tr class='border'>";  
echo "<td align='left' width='150'> Profit / Loss:"."<td align= 'right' width='80'>"."$ ". $PnL."</td>";
echo "</table>";?>
          </div></div>
    
    <!--INVENTORY VALUATION -->
        
<div class="col-md-3"> 
<h3>Inventory Valuation</h3>
    <div class="table">
<?php
echo "<table>";
echo "<td align='left' width='300'> Total Inventory:"."<td align= 'right' width='80'>"."$ ". $expenses."</td>";
echo "</tr>";  
echo "<td align='left' width='300'>Gost of Good:"."<td align= 'right' width='80'>"."$ ". $cog."</td>";
echo "</tr>";
echo "<tr class='border'>";  
echo "<td align='left' width='300'> Inventory Bal:"."<td align= 'right' width='80'>"."$ ". $inventory."</td>";  
echo "</tr>"; 
            
        ?>

</div>
</div>
</div>


<?php include ('includes/footer.php'); ?>

