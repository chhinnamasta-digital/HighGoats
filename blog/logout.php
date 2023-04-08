<?php
    session_start();
    session_destroy();
    unset($_SESSION['passcode']);
    header("Location: login.php");
?>