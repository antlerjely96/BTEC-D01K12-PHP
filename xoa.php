<?php
    $id = $_GET['id'];
    //Mở kết nối đến db
    $connect = mysqli_connect("localhost","root","","d01k12");
    //Cho phép hiển thị tiếng Việt
    mysqli_set_charset($connect,"utf8");
    $sql = "DELETE FROM user WHERE id = $id";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    header('Location:danh_sach.php');
?>