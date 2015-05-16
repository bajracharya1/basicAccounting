
<?php 
include('includes/header.php'); ?>

<div class="container">
    <div id="wrap">
       <h3>Profit and Loss</h3>
    <div class="pnl">

     
        <!--SALES SUMMARY-->
        
        
 <strong>Income</strong>
        
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
echo "Total Income :". "<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)'] . "</td>";  
echo "</tr>";  
    
        $GLOBALS['income'] =   $row['SUM(Amt)'];
        $GLOBALS['cog'] =   $row['SUM(Amt)']*.5;
        $GLOBALS['revenue']= $GLOBALS['income']-$GLOBALS['cog'];
        $GLOBALS['inventory']=$GLOBALS['expenses']-$GLOBALS['cog'];
}  

echo "</table>"; ?>    
    </br>
        
        
  
          
      <!--Cost of Good-->
    
<strong>Cost of Good</strong></br><h6>Assuming 50% Margin</h6>

    <?php
 
$sqlIncome = "SELECT Acc, SUM(Amt) FROM income GROUP BY Acc"; 
 $resultIncome = $conn->query($sqlIncome); ?>

<div class="table"> <?php
// Print out result
    while($row = mysqli_fetch_array($resultIncome)){
	echo "<table>";
        echo "<tr>";
    echo "<td >";
        echo "<td align='left' width='150'> Total ".$row['Acc']." :"."<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)']*.5."</td>";
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
echo "Total CoG :". "<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)']*.5 . "</td>";  
echo "</tr>";  

}  
echo "<tr class='border'>";  
echo "<td align='left' width='150'><strong><i><br> Gross Revenue:"."<td align= 'right' width='80'> </strong></i>"."<strong><br>$".$revenue."</strong></td>";
echo "</tr>";

echo "</table>";

?>
</br>

  
     
    
<!--Other Expenses-->
    <strong>Other Expenses</strong>
        
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
    echo "Total Expenses :". "<td align= 'right' width='80'>"."$ ". $row['SUM(Amt)'] . "</td>";  
echo "</tr>";  
    
        $GLOBALS['off_exp'] =  $row['SUM(Amt)'];
        $GLOBALS['PnL'] =  $GLOBALS['revenue']-$GLOBALS['off_exp'];

}  
echo "<tr class='border'>";  
echo "<td align='left' width='150'><i><br><strong> Profit / Loss:</strong>"."<td align= 'right' width='80'>"."<strong><br>$ ". $PnL."</strong></td>";


echo "</table>"; ?>    
        
        
    </div> </div></div></div></div>

  

<?php include ('includes/footer.php'); ?>

