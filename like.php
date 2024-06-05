<?php
    include 'auth.php';
    if (!$email_utente=checkAuth()) {
        exit;
    }

    $conn = mysqli_connect('localhost', 'root', '', 'utenti');
    
    if (isset($_GET["id_prodotto"])) {   
        header('Content-Type: application/json');    
        $result = array();
        $id_prodotto = mysqli_real_escape_string($conn, $_GET["id_prodotto"]);
        $query_check = "SELECT * FROM favorites WHERE id_prodotto=".$id_prodotto." AND email_utente='".$email_utente."' ";
        $res = mysqli_query($conn, $query_check) or die(mysqli_error($conn));
        //se trova risultati vuol dire che l'utente aveva gia messo like, quindi lo rimuove
        //se non trova risultati aggiunge il like
        if(mysqli_num_rows($res) > 0){
            $query_unlike = "DELETE FROM favorites WHERE id_prodotto=".$id_prodotto." AND email_utente='".$email_utente."'";
            $res = mysqli_query($conn, $query_unlike) or die(mysqli_error($conn));
            $img = 'unlike';
        } else {
            $query_like = "INSERT INTO favorites( email_utente, id_prodotto) VALUES( '".$email_utente."', '".$id_prodotto."')";
            $res = mysqli_query($conn, $query_like) or die(mysqli_error($conn));
            $img = 'like';
        }
        
        //gli faccio ritornare l'immagine del cuore 
        $result[] = array ('res' => true, 'id' => $id_prodotto, 'img' => $img);
        echo json_encode($result);
        mysqli_close($conn);
    }
    exit;    
    ?>
