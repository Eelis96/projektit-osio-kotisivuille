<?php

if(isset($_POST['submit'])){
    $projektiNimi = $_POST['projektinimi'];
    $projektiPaivamaara = $_POST['projektipaivamaara'];
    $projektiKuvaus = $_POST['projektikuvaus'];
    $projektiTekijat = $_POST['projektitekijat'];

    if(empty($projektiNimi) || empty($projektiKuvaus) || empty($projektiPaivamaara) || empty($projektiTekijat)){
        header('location:index.php?error?empty');
    }else{
        include_once('functions.php');

        saveToXml($projektiNimi, $projektiPaivamaara, $projektiKuvaus, $projektiTekijat);

        header('location:index.php?success');
    }
}