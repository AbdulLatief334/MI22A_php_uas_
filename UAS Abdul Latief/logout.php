<?php
     /**
     * NIM : 2257401075
     * NAMA : ABDUL LATIEF
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>
