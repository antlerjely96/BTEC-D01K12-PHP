<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    include_once "../connect/open-connect.php";
    $sql = "UPDATE loai_san_pham SET name = '$name' WHERE id = $id";
    mysqli_query($connect,$sql);
    include_once "../connect/close-connect.php";
    header('location:danh-sach-loai-san-pham.php');
?>
