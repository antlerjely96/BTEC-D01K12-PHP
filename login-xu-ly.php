<?php
    session_start();
    include 'connect/open-connect.php';
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM user WHERE email = '$uid' AND password = '$pwd'";
    $result = mysqli_query($connect, $sql);
    $sql_check = "SELECT COUNT(id) AS so_account FROM user WHERE email = '$uid' AND password = '$pwd'";
    $result_check = mysqli_query($connect, $sql_check);
    foreach($result_check as $each){
        $so_account = $each['so_account'];
    }
    if($so_account > 0){
        $_SESSION['uid'] = $uid;
        header("location:index.php");
    }
    else {
        header("location:login.php");
    }
    include 'connect/close-connect.php';
?>