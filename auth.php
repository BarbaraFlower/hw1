<?php
    require_once 'dbconfig.php';
    session_start();

    function checkAuth() {
        // Se esiste già una sessione, la ritorno, altrimenti ritorno 0
        if(isset($_SESSION['email'])) {
            return $_SESSION['email'];
        } else 
            return 0;
    }
?>