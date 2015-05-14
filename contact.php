<?php include('includes/header.php'); ?>
<div id ="wrap">
<h3>Contact Us!</h3>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
  $(document).ready(function(event){

    $("#contact").submit(function(){
      if ($('#name').val().length < 2){
      
        alert("you didn't provide a name");


      }

    })

  })

</script>

<form id="contact" method="GET" action="send.php">
    
        <div class="input-group">
             
             <input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-describedby="basic-addon1">
        </div>

    <div class="input-group">
       
       <textarea  class="form-control" id="id" name="comment"  rows="6" cols="50" placeholder="Comments" aria-describedby="basic-addon1"></textarea>
    </div>

           
   <input type="submit" class="btn btn-default"   />
       
</form>
 


</div>
<?php include('includes/footer.php'); ?>