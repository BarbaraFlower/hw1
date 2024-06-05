<?php


header('Content-Type: application/json');

numeroRicette();

function numeroRicette(){
    // QUERY EFFETTIVA
    $url = 'https://the-vegan-recipes-db.p.rapidapi.com/';

    $headers = array (
        "X-RapidAPI-Key: 14ae468d93mshb60fcc0c719c9bfp11665fjsnb541a35c05be",
        "X-RapidAPI-Host: the-vegan-recipes-db.p.rapidapi.com"
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
    $res=curl_exec($ch);
    curl_close($ch);

    echo $res;
}
?>