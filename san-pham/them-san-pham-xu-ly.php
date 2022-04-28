<?php
    $name = $_POST['name'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $id_loai_san_pham = $_POST['id_loai_san_pham'];
    include_once "../connect/open-connect.php";
    $sql = "INSERT INTO san_pham(name, price, amount, id_loai_san_pham) VALUES ('$name', '$price', '$amount', '$id_loai_san_pham')";
    mysqli_query($connect, $sql);
    include_once "../connect/close-connect.php";
    header('location:danh-sach-san-pham.php');
?>