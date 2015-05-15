$(document).ready(function(){

  $("#go").click(function(){ getTaxRate(); });

});


function getTaxRate(){
  
    $(".taxData").html("");
    var url = "https://taxrates.api.avalara.com/postal?country=usa&postal="+($('#tax').val())+"&apikey=%2FlufGDlUKZwV1tfS4Jfgl0RX4VCFoVhbuoIepl18%2BeHs0OdixWDURIZQkxgYJwZcPtKD7UKMLv%2FOToDZxSdSgw%3D%3D";

  console.log(url);
  $.ajax({
    url: url,
    context: document.body,

  })
  .done(function(data){

    console.log('Got Tax Data');
    console.log(data);
     
    var totalRate= data.totalRate;
      
    var taxInfo =data.rates;
      console.log("here's the data");
      console.log(taxInfo);
   
     $.each(taxInfo, function() {
       $(".taxData").append("<li>" + this.name +" " +this.type+": "+this.rate+"% </li>");
    
        });
    
$("#totalTax").html("<strong> Total Sales Tax: </strong>"+ totalRate +"% </p>");

 
    
                 
  });
}


