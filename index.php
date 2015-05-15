<?php include('includes/header.php'); ?>
<div class="container">
    
<div class="indexBG"> <a href="sum.php"> <center><img src="images/dashboard.png" height="300px"></center></a></div>
 

     <div class="taxRow">
      <h3>Sales Tax Update</h3>
         <div class="col-md-4">
 
    <h6>Enter your Zip Code</h6>
   
  
  <div class="form-inline">
    <input id="tax" class="form-control"  width ="50%" placeholder="Zip Code">
      <button type="submit" class="btn btn-info" id="go" >GO! </button>
    </div></div>
         <div class="taxInfo">
  <div class="col-md-8"> 
  <div id="totalTax"></div>
  <div class="taxData"</div>
    
             </div>  </div></div></div>
   
    
    <div id="indexRow">

 <div class="col-md-4"> 
<div class="thumbnail">
<a href="dashboard.php"><img class="bottom" src="images/transaction.jpg" />
  <img class="top" src="images/BWtransaction.jpg" /></a></div>
                 
</div>
       
<div class="col-md-4"> 
<div class="thumbnail">
<a href ="sum.php"><img class="bottom" src="images/reports.jpg" />
  <img class="top" src="images/BWreports.jpg" /> </a></div>
                
</div>
        
 <div class="col-md-4"> 
<div class="thumbnail">
    <a href ="sum.php"><img class="bottom" src="images/inventory.jpg" />
  <img class="top" src="images/BWinventory.jpg" /></a> </div>
                 
</div>
        </div> 

</div>

 

<?php include('includes/footer.php'); ?>
