<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top:0px;
  opacity: 0.1;
    filter: alpha(opacity=50); 
}
</style>
</head>
<body>

<p id="demo" style="font-size:40px"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("aug 22, 2018 15:37:25").getTime();//set this time when you want to start test
//document.write(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
 

    // Output the result in an element with id="demo"
    var flag=1;//when you want to start timer update it flag=1;
    if(flag==1)
{
    document.getElementById("demo").innerHTML =  hours + "h "
    + minutes + "m " + seconds + "s ";
}
    
    // If the count down is over, write some text 
    if (distance < 0) {
         function Fun() { 
        var javascriptVariable = "John";
      // window.location.href = "refer.php?name=" + javascriptVariable; 
       }
       //Fun();
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Contest is started.Join now";
    }
}, 1000);
</script>


</body>
</html>
