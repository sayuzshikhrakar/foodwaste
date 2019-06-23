<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Food Waste- Utilize & Reduce Food Waste</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="dashboard.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>


</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
       <h2 style="margin: 10px; color: #a7cd3a;"> FOOD WASTE </h2>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li>
  <p class="navbar-text">Welcome to Dashboard </p>
  </li>
        <li class="line">
          <a href="logout.php">Log Out</a>
        </li>
      </ul>
  </div><!-- /.container-fluid -->
</nav>

<?php 
session_start();
include('../connect.php');

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
    $check=mysqli_query($con,"SELECT type FROM signup WHERE id='$id'");   
    $data = mysqli_fetch_array($check);
    $type = $data['type'];

}
?>