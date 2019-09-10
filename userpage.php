<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/546d8880f2.js"></script>
    <link rel = "stylesheet" href = "css/userpage.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  ">
            <img src="images/logo.png" class="jimg" height="100px"><a class="navbar-brand logo_font " href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link fonts_style" style = "font-size:1.5em;" href="#"><i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fonts_style" style = "font-size:1.5em;" href="#"><i class="fas fa-envelope"> </i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fonts_style" style = "font-size:1.5em;" href="#"><i class="far fa-bell"> </i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link fonts_style" style = "font-size:1.5em;" href="#"><i class="fas fa-users"> </i></a>
      </li>
<!-- 
      <li class="nav-item">
        <a class="nav-link fonts_style" style = "font-size:1.5em;" href="#"><i class="fas fa-user-cog"></i> </i></a>
      </li> -->

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
        <i class="fas fa-user-cog"></i> </i>
        </a>
     
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
 
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>