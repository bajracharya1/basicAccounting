$(document).ready(function(){

  $("#go").click(function(){ getTaxRate(); });

});


function getTaxRate(){
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
      
    var city = data.rates[0].name;
    var cityRate=data.rates[0].rate;
      
    var county = data.rates[1].name;
    var countyRate=data.rates[1].rate;
      
    var state = data.rates[2].name;
    var stateRate=data.rates[2].rate;

      
$("#cityTax").html("<strong> "+city+" Sales Tax: </strong>"+ cityRate +"% </br>");
$("#countyTax").html("<strong> "+county+" County Sales Tax: </strong>"+ countyRate +"% </br>");
$("#stateTax").html("<strong> "+state+" State Sales Tax: </strong>"+ stateRate +"% </br>");
$("#bd").html("<i> BREAK DOWN OF TAX</i></p>");
$("#totalTax").html("<strong> Total Sales Tax: </strong>"+ totalRate +"% </p>");

console.log(totalRate);
 
    

  });
}
