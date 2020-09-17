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
            <a class="nav-link" href="https://www.youtube.com/channel/UCLqiVhDT4QvHbKpaDCbokfw">Youtube</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com/channel/UCLqiVhDT4QvHbKpaDCbokfw">Youtube</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com/channel/UCLqiVhDT4QvHbKpaDCbokfw">Youtube</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com/channel/UCLqiVhDT4QvHbKpaDCbokfw">Youtube</a>
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

    <?php
    if(isset($_GET['error?empty'])){
        echo'<div class="alert alert-dismissible alert-danger">
             <strong>Täytä Kaikki Tyhjät Kentät!</strong>
            </div>';
    }

    if(isset($_GET['success'])){
        echo'<div class="alert alert-dismissible alert-success">
             <strong>Projektin Lisääminen Onnistui!</strong>
            </div>';
    }
    ?>

    <div class="float-right card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header">Tietoa</div>
        <div class="card-body">
            <h4 class="card-title">Tietoa Minusta</h4>
            <p class="card-text">Opiskelen datanomitutkintoa toista vuotta Esedulla.</p>
        </div>
    </div>

    <?php

        if(isset($_SESSION['logged_in'])){
            echo'<div class="float-right">
                        <form action="tallennus.php" method="post">
                        <label for="projektinimi">Projektin Nimi:</label>
                        <input type="text" id="projektinimi" name="projektinimi"><br>

                        <label for="projektikuvaus">Projektin Kuvaus:</label>
                        <input type="text" id="projektikuvaus" name="projektikuvaus"><br>

                        <label for="projektitekijat">Projektin Tekijät:</label>
                        <input type="text" id="projektitekijat" name="projektitekijat"><br>

                        <label for="projektipaivamaara">Projektin Valmistumispäivämäärä:</label>
                        <input type="date" id="projektipaivamaara" name="projektipaivamaara"><br>
                        <input type="submit" name="submit" value="Tallenna" class="btn btn-primary">
                </div>';
            }

        $xml = simplexml_load_file('projektit.xml');

        foreach($xml->projektintiedot as $projektintiedot){
            echo'<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">' .$projektintiedot->paivamaara. '</div>
                    <div class="card-body">
                        <h4 class="card-title">' .htmlspecialchars($projektintiedot->nimi). '</h4>
                        <p class="card-text">' .htmlspecialchars($projektintiedot->kuvaus). '</p>
                        <p class="card-text">' .htmlspecialchars($projektintiedot->tekijat). '</p>
                    </div>
                </div>';
            }
    ?>
    
</html>
