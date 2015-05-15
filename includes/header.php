<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Prakash Weblab Project</title>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
 <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
     <link rel="stylesheet" href="stylesheet/stylesheet.css">
   
    <script src="script/zipTax.js"></script>
</head>

<body>
  <?php

    include('includes/db.php');
    $conn = db_connect();
    error_reporting(0);
  ?>
  
      <h1>Prakash Weblab Project</h1>
      <div id="header">
      <ul class="nav nav-tabs navbar-default">
         

        <li role="presentation"><a href="index.php">Home</a></li>
    
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Add Transaction <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li ><a href="purchase.php">Add Purchases</a> </li> 
            <li ><a href="sales.php">Add sales</a> </li> 
            <li class="divider"></li>
            <li ><a href="exp.php">Add Office Expenses</a> </li>
            <li class="divider"></li>
            
          </ul>
    

   <li class="dropdown">
          <a href="sum.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
         <li> <a href="sum.php">Total Purchases</a></li>
         <li> <a href="sum.php">Total Sales</a></li>
         <li> <a href="sum.php">Total Expenses</a></li>
         <li class="divider"></li>
         <li> <a href="sum.php">Summary</a></li>
         <li class="divider"></li>
         <li> <a href="sum.php">Inventory Valuation</a></li>
    </ul>
       
         <li role="presentation"><a href="about.php">About Us</a></li>
  <li role="presentation"><a href="contact.php">Contact Us</a></li>
</div>
