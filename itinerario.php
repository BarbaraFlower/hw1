<?php


header('Content-Type: application/json');

numeroRicette();

function numeroRicette(){
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://ai-vacation-planner.p.rapidapi.com/vacationplan/city/4/sightseeing,shopping",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "X-RapidAPI-Host: ai-vacation-planner.p.rapidapi.com",
            "X-RapidAPI-Key: 14ae468d93mshb60fcc0c719c9bfp11665fjsnb541a35c05be"
        ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}
?>