
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project</title>
  <link rel="stylesheet" href="../css/bar.css" />
</head>

<body>
<nav class="header">
    <div class="brand-title">The Mountains</div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>

      <?php
      if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
      ?>
        <a href="../views/dashboard.php">
          <li>Dashboard</li>
        </a>
      <?php
      }
      ?>
       
        <li><a href="home.php">Home</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="About-Us.php">About us</a></li>
        <li><a href="Places.php">Places</a></li>
        <li><a href="more.php">More</a></li>
       <li><a href="index.php">Sign up</a></li>

      <?php
      if (isset($_SESSION["role"])) {
      ?>
        <a href="../businessLogic/logout.php">
          <li>Logout</li>
        </a>
      <?php
      }
      ?> 
      </ul>
    </div>
   </nav>
