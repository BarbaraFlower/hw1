<?php

include 'dbconfig.php';
include 'auth.php';

if (!$email_utente=checkAuth()) {
    exit;
}
//File php da cui selezioni tutti gli elementi della tabella prodotti e 
//li passo tramite JSON encode. 

    //connessione al database
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    //Inizializzazione array dei prodotti
    $preferiti = array();

    //Lettura prodotti
    $query = "SELECT * FROM favorites join products
     WHERE id_prodotto=id AND email_utente='".$email_utente."'";;
    $result=mysqli_query($conn, $query);

    while( $row = mysqli_fetch_assoc($result) ) {
            $preferiti[] = $row;
    }

    mysqli_free_result($result);
    mysqli_close($conn);

    echo json_encode($preferiti);

?>
