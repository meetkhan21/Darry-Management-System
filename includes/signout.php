<?php
    session_start();
    session_destroy();
    $_SESSION['exists'] = false;
    header("Location: ../index.php"); 
?>