<?php $tr = htmlspecialchars($_GET["tr"]); 

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

 document.getElementById("<?php echo $tr ?>").style.display = "block";

}
</script>
<style>

 
</style>
  </head>



  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-info bg-primary text-white p-4" id="navbar">
      <div class="container-fluid">
      
        <a class="navbar-brand text-white" href="index.php"><h3 class="title"><b>IFTTT LIKE APP</b></h3></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
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

     
          <h1 class="font-weight-bold text-center"><i class="icon fa fa-rss bg-rss" style="font-size: 7vmin"></i>&nbsp&nbspComplete trigger fields</h1> 
          <p class=" text-center text-secondary">Step 3 of 6</p>
        

       

<div class="container ct" id="0">

  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-6 col-sm-8 text-left font-weight-bold text-white">
      <div class="w3-panel bg-rss p-4 w3-round-large">
      <h3 class="">New feed item</h3>
      <h5 class>This Trigger fires every time a new item is added to the feed you specify.</p>

      <h4>Feed</h4>
    <form class="form-group" action="conf.html">  
      <input id="rss-url" type="url" class="form-control center thickBorder w3-opacity" required></input>
      <small class="text-muted">for feed URL requirements, visit the help page</small>  
      
        <div class="row justify-content-center mt-3">
          <button class="btn btn-lg center"  style="border-radius: 24px" type="submit" require>&nbspCreate trigger&nbsp</button>
        </div> 
    </from>
      </div>
  </div>
</div>
</div>

<div class="container ct" id="rss">

  <div class="row justify-content-center">
    <div class="row text-left font-weight-bold text-white">
      <div class="w3-panel bg-rss p-4 w3-round-large">
      <h3 class="">New </h3>
      <h5 class>This Trigger fires every time a new item is added to the feed you specify.</p>

      <h4>Feed</h4>
    <form class="form-group ">  
      <input id="rss-url" type="url" placeholder="enter valid url" class="form-control center thickBorder w3-opacity" autofocus style=""></input>
      <div class="row justify-content-center mt-3">
          <button class="btn btn-lg center text-white"  style="border-radius: 24px" type="submit" require>&nbspCreate trigger&nbsp</button>
       </div> 


    </form>
      </div>
  </div>
</div>
</div>

<div class="container ct" id="1">

  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-6 col-sm-8 text-left font-weight-bold text-white">
      <div class="w3-panel bg-rss p-4 w3-round-large">
      <h3 class="h-3">New feed item matches</h3>
      <h5 class>This Trigger fires every time a new item in the feed you specify contains a particular keyword or simple phrase.</p>

      <h4>Keyword or simple phrase</h4>
     <form class="form-group ">  
      <input id="rss-url" type="text" class="form-control center thickBorder w3-opacity"></input>
        <small class="text-secondary">Search operators are not supported</small>
    
         <h4>Feed URL</h4>
    
      <input id="rss-url" type="url" class="form-control center thickBorder w3-opacity" required></input>
       <small class="text-secondary">for feed URL requirements, visit the help page</small>

        <div class="row justify-content-center mt-3">
          <button class="btn btn-lg center"  style="border-radius: 24px" type="submit" require>&nbspCreate trigger&nbsp</button>
       </div> 
</form>
      </div>
  </div>
</div>
</div>

   
      
  
<?php  
switch ($tr){

case 0:
?>

<script type="text/javascript">

showSection();

</script>


<?php

break;

case 1:


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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
