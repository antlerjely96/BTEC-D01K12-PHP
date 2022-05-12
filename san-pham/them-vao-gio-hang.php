<?php
    session_start();
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        if(isset($_SESSION['gio_hang'])){
            if(isset($_SESSION['gio_hang'][$id])){
                $_SESSION['gio_hang'][$id]++;
            }
            else {
                $_SESSION['gio_hang'][$id] = 1;
            }
        }
        else {
            $_SESSION['gio_hang'] = array();
            $_SESSION['gio_hang'][$id] = 1;
        }
        header('location:gio-hang.php');
    }
    else {
        header('location:chi-tiet-san-pham.php');
    }
?>
