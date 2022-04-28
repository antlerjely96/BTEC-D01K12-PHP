<?php
    $name = $_POST['name'];
    include_once "../connect/open-connect.php";
    $sql = "INSERT INTO loai_san_pham(name) VALUES ('$name')";
    mysqli_query($connect,$sql);
    include_once "../connect/close-connect.php";
    header('location:danh-sach-loai-san-pham.php');
?>
