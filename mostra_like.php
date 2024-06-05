<?php

include 'auth.php';
if (!($email_utente=checkAuth())) {
    header('Location: login.php');
    exit;
}

if (isset($_GET["id_prodotto"])){
    
    header('Content-Type: application/json');

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    $result = array();
    $id_prodotto = mysqli_real_escape_string($conn, $_GET["id_prodotto"]);


    //se sono loggata controlla se ho messo like, se l'ho messo mi da il cuore pieno
        $query_check = "SELECT * FROM favorites WHERE id_prodotto=".$id_prodotto." AND email_utente='".$email_utente."'";
        $res = mysqli_query($conn, $query_check) or die(mysqli_error($conn));
        //se trova risultati vuol dire che l'utente aveva gia messo like
        if(mysqli_num_rows($res) > 0){
            $img = "like";
        } else {
            $img = "unlike";
        }
        
    

    $result[] = array ('id' => $id_prodotto, 'img' => $img);
    echo json_encode($result);
    mysqli_free_result($res);
    mysqli_close($conn);
    exit; 
}

?>
