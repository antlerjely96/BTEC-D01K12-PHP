<?php
    $id = $_GET['id'];
    include_once "../connect/open-connect.php";
    $sql = "DELETE FROM loai_san_pham WHERE id = $id";
    mysqli_query($connect,$sql);
    include_once "../connect/close-connect.php";
    header('location:danh-sach-loai-san-pham.php');
?>