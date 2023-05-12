<style>
  /* Dropdown Button */

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
  </style>
<?php

include('links/dashboard_link.php');?>
<!-- Navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top d-flex justify-content-between">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      
    </ul>
    <?php $session=session();
    // echo $session->get('userid');
    
      if($session->has('username')){ ?>
      <div class="dropdown">
        <a href="#" class="dropbtn"><p class='okcl mr-3'>Hello, 
      <?php if(strlen($session->get('username'))>15){
        echo substr(ucfirst($session->get('username')),0,15).'...';
      }
      else{
       echo ucfirst($session->get('username'));
      }
       ?></p></a>
    <?php } ?>
        <div class="dropdown-content">
          <a href="<?php echo base_url('user_profile');?>">My Profile</a>
          <a href="<?php echo base_url('logout');?>">Log out</a>
          <!-- <a href="#">Link 3</a> -->
        </div>
      </div>
    
    
  </nav>
  
  <!-- /.navbar -->
  