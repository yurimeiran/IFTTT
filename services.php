<?php $serv = htmlspecialchars($_GET["serv"]); 

$bg=$serv;

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IFTT-ALIKE-PAGE</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style/style1.css">
    <link rel="stylesheet" href="style/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Font Awesome library -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script>

function showSection(){

 document.getElementById("<?php echo $serv ?>").style.display = "block";

}

function test(){
document.getElementById("head_e").style.display = "block";
document.getElementById("heading").style.display = "none";
}

//get service name from the url
function getVar(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

//get trigger name
var trig = getVar('trig');
//get servisce name
var serv = getVar('serv')
//get the id
var id = getVar('id');
</script>
<style>

 
</style>
  </head>



  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-info bg-primary text-white p-4" id="navbar">
      <div class="container-fluid  text-white">
      
        <a class="navbar-brand text-white" href="index.php"><h3 class="title"><b>IFTTT LIKE APP</b></h3></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars "></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link font-weight-bold text-white" href="index.html">Sign In</a>
            </li>
           
          </ul>
        </div>
      </div>
    
    </nav>

    

    <!-- Page Header -->
    <header class="">
      
        <button class="btn btn-outline-secondary m-4 font-weight-bold p-1" onclick=window.history.back() style="border-radius: 24px; border: 4px solid lightgrey; font-size: 20px">&nbsp&nbsp<i class="fa fa-angle-left font-weight-bold"></i> Back&nbsp&nbsp</button>
       
      </header>
    
     <main>

     
          <h1 class="font-weight-bold text-center" id="heading"><i class="icon fa fa-<?php echo $bg; ?> bg-<?php echo $bg; ?>" style="font-size: 7vmin"></i>&nbsp&nbspChoose a trigger</h1>
          <h1 class="font-weight-bold text-center" id="head_e"><i class="icon fa fa-envelope ?> bg-primary" style="font-size: 7vmin"></i>&nbsp&nbspConnect Email</h1> 
          <p id="step_no" class="text-center text-secondary">Step 2 of 6</p>

       

<div class="container ct" id="rss-conf">

  <div class="row justify-content-center">
    <div class="row text-left font-weight-bold text-white">
      <div class="w3-panel bg-<?php echo $serv; ?> p-4 w3-round-large">
      <h3 class="">New feed item</h3>
      <h5 class>This Trigger fires every time a new item is added to the feed you specify.</p>

      <h4>Feed</h4>
    <div class="form-group ">  
      <input id="rss-url" type="url" placeholder="enter valid url" class="form-control center thickBorder w3-opacity" autofocus style=""></input>
    </div>
      </div>
  </div>
</div>
</div>

<div class="container ct" id="email">

  <div class="row justify-content-center">
    <div class="col-6 text-left font-weight-bold text-secondary">
      
     
      <h5 class>Send and receive important information when you need it, automatically, with this service. The "send me an email" action has a daily limit of 750 messages per day, at which point Applets will be paused until the limit resets at 12:00 AM GMT.</p>

      <div class="row justify-content-center mt-3">
      <button class="btn btn-lg center bg-info text-white"  style="border-radius: 40px;font-weight: bolder; font-size:40px" onclick=window.location="email.html?trig=rss&" >&nbsp&nbspConnect&nbsp&nbsp</button>
    </div> 
      
  </div>
</div>
</div>

<section class="card ct m-5" id="rss">

  <div class="row text-left font-weight-bold text-white">
    
      <div class="col-lg-3 col-md-4 col-sm-8">
      <div class="card tr bg-rss p-4 w3-round-large" onclick=window.location='rss.php?tr=0'>
      <h3 class="">New Feed Item</h3>
      <h5 class>This Trigger fires every time a new item is added to the feed you specify.</h5>
</div>
</div>

      <div class="col-lg-3 col-md-4 col-sm-8">
      <div class="card tr bg-rss p-4 w3-round-large" onclick=window.location='rss.php?tr=1'>
      <h3 class="">New Feed Item Matches</h3>
      <h5 class>This Trigger fires every time a new item in the feed you specify contains a particular keyword or simple phrase.</h5>
      </div>
      </div>
 
  
</section>

   
      
  
<?php  
switch ($serv){

case 'facebook':
?>

<script type="text/javascript">

showSection();

</script>


<?php
break;

case 'email':

$bg = "primary";
?>

<script type="text/javascript">

showSection();
test();

</script>


<?php

break;

case 'rss':


?>

<script type="text/javascript">

showSection();

</script>


<?php
break;


      }
      ?> 



</div>
    <!-- Main Content -->
   
  </main>
    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        
             
      </div>
    </footer>
    <script>

switch (id){

case "1":
document.getElementById('step_no').innerHTML = "Step 5 of 6";
document.getElementById('email').href = "services.php?serv=email&id=1";
break;

}


</script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

   

  </body>

</html>
