<?php
    session_start();

    session_destroy();

    header("Location: ../frontEnd/signup.php");
?>