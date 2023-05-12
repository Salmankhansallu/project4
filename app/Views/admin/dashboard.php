<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    body{
      background:rgb(236, 236, 236);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .dashboard_index{
        
        margin-left:10px;
        padding:30px 10px;
        border-radius: 20px;
    }
    .card{
        height:130px;
        width:45%;
        margin-left:20px;
    }
    .number{
        font-size:1.7rem;
        text-align: center;
    }
    .card-text{
        font-size:0.7rem;
        text-align: center;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
<?php include('header.php');?>
<?php include('header2.php');?>
<?php include('sidebar.php');?>
<nav class="main-header mt-3 ">
<div class="card-deck d-flex justify-content-between flex-wrap bg-white dashboard_index">
  <div class="card bg-danger">
    <div class="card-body">
      <p class="number">54,332</p>
      <p class="card-text">Govt./Govt. aided schools</p>
    </div>
  </div>
  <div class="card bg-primary">
    <div class="card-body">
      <p class="number">10,000</p>
      <p class="card-text">Resource Persons</p>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body">
      <p class="number">2,28,432</p>
      <p class="card-text">Teachers</p>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-body">
      <p class="number">3,28,432</p>
      <p class="card-text">Students</p>
    </div>
  </div>
</div>
    
  </nav>
<?php include('footer.php');?>
  </div>
</body>
</html>
