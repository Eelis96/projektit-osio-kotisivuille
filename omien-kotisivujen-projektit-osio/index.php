<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eeliksen Nettisivu</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Youtube</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Youtube</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Youtube</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Youtube</a>
        </li>
        </ul>
        <?php
            if(!isset($_SESSION['logged_in'])){
                echo '<a class="btn btn-outline-info" href="loginform.php">Kirjaudu Sisään</a>';
            }else{
                echo'<a class="btn btn-outline-danger" href="logout.php">Kirjaudu Ulos</a>';
            }
        ?>
    </div>
    </nav>

    <div class="jumbotron">
        <span class="badge badge-primary">Amatimees</span><h1>Eeliksen Nettisivu</h1>
    </div>

    <div class="float-right card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header">Tietoa</div>
        <div class="card-body">
            <h4 class="card-title">Tietoa Minusta</h4>
            <p class="card-text">Opiskelen datanomitutkintoa toista vuotta Esedulla.</p>
        </div>
    </div>         
</html>