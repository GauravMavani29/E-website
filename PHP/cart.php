<?php
    session_start();
    if(!$_SESSION['user'])
    {   
        header("location: ./login.php");
    }
    else{
        include "./cart_main.php";
    }
?>