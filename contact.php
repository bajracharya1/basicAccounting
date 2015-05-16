<?php include('includes/header.php'); ?>
<div class="container">
    <div id="wrap">
<h3>Contact Us!</h3>

<!--<script>
  $(document).ready(function(event){

    $("#contact").submit(function(){
      if ($('#name').val().length < 2){
      
        
          alert("you didn't provide a name");


      }

    })

  })

</script>-->
<div class="wrapper">
<form id="contact" method="GET" action="send.php">
    
        <div class="input-group">
             
             <input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="basic-addon1">
        </div>

    <div class="input-group">
       
       <textarea  class="form-control" id="id" name="comment"  rows="6" cols="100" placeholder="Comments" aria-describedby="basic-addon1"></textarea>
    </div>

           
   <input type="submit" class="btn btn-default"  />
       
</form>
 


    </div></div></div>
<?php include('includes/footer.php'); ?>