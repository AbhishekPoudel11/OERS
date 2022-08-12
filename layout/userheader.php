<?php
session_start();

?>
<html>
<head>

  
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <title>my web</title>
    </head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <a class="navbar-brand">
    <img src="img/k.png" width="30" height="30" alt="logo">
    Welcome To Your OERS Account!!
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <ul></ul>
  <?php
if(isset($_SESSION['email']))
{
  echo "<p>" .$_SESSION['email']."</p>";
  
}

?>
 
  <div class="collapse navbar-collapse" id="navbar-list-4">
          <ul class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="upload/a.jpg" width="50" height="50" class="rounded-circle"></a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="dashboard.php">Home</a>
          <a class="dropdown-item" href="update.php">update profile</a>
          <a class="dropdown-item" href="form.php">Log out</a>
          </div>
          
      </ul>
</nav>