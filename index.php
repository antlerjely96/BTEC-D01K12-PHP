<?php 
    session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
?>
<a href="danh_sach.php">Danh sách user</a><br>
<a href="loai-san-pham/danh-sach-loai-san-pham.php">Danh sách loại sản phẩm</a><br>
<a href="san-pham/danh-sach-san-pham.php">Danh sách sản phẩm</a><br>
<a href="logout.php">Đăng xuất</a>