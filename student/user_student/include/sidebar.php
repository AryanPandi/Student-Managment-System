<?php 
session_start();
include('include/db.php'); 

?>
  <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

<nav>
      <ul>
        <li>
            <a href="#" class="logo">
          <!-- <img src="./pic/logo.jpg"> -->
          <span class="nav-item"><?php  echo $_SESSION['username']."<br>"; ?> <?php  echo $_SESSION['email']."<br>"; ?>
        </span>
<br>
        <span><?php  echo $_SESSION['name']."<br>"; ?></span>
        </a></li>
        <li><a href="dashboard.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        
        
        <li>
        <a href="#">
          <i class="fas fa-bars"></i>
          <span class="nav-item">Class</span>
        </a>
        <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="manage-class.php">View Class</a></li>
                </ul>
              </div>
    </li>
        <li>
            <a href="#">
          <i class="fas fa-users"></i>
          <span class="nav-item">Students</span>
        </a>
        <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="manage-students.php">View Students</a></li>
                </ul>
              </div>
    </li>
        
        <li><a href="#">
          <i class="fas fa-money-bill"></i>
          <span class="nav-item">Fee</span>
        </a>
        <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="manage-fee.php">View Payment</a></li>
                </ul>
              </div>
      </li>
        
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>