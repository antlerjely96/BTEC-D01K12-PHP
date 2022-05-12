<?php
    session_start();
    $gio_hang = $_POST['amount'];
    foreach ($gio_hang as $id => $amount){
        $_SESSION['gio_hang'][$id] = $amount;
    }
    header('location:gio-hang.php');
?>