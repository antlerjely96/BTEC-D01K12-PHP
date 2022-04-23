<?php
//Mở kết nối đến db
$connect = mysqli_connect("localhost","root","","d01k12");
//Cho phép hiển thị tiếng Việt
mysqli_set_charset($connect,"utf8");
//Lấy dữ liệu từ form
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$sql = "UPDATE user SET name = '$name', phone = '$phone', email = '$email', password = '$password', address = '$address', date_of_birth = '$date_of_birth', gender = '$gender' WHERE id = $id";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('Location:danh_sach.php');
?>