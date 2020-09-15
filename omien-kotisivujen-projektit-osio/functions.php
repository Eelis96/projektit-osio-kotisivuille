<?php

function saveToXML($projektiNimi, $projektiPaivamaara, $projektiKuvaus, $projektiTekijat){
    $xml = simplexml_load_file('projektit.xml');
    
    $uusi_projekti = $xml->addChild('projektintiedot');
    $uusi_projekti->addChild('nimi', $projektiNimi);
    $uusi_projekti->addChild('paivamaara', $projektiPaivamaara);
    $uusi_projekti->addChild('kuvaus', $projektiKuvaus);
    $uusi_projekti->addChild('tekijat', $projektiTekijat);

    // Muotoilu ja tallennus
    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('projektit.xml');
}