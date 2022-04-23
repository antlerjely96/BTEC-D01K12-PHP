<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    //Mở kết nối đến db
    $connect = mysqli_connect("localhost","root","","d01k12");
    //Cho phép hiển thị tiếng Việt
    mysqli_set_charset($connect,"utf8");
    $sql = "INSERT INTO user(name, phone, email, password, address, date_of_birth, gender) VALUES ('$name','$phone','$email','$password','$address','$date_of_birth','$gender')";
//    die($sql);
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    header("Location: danh_sach.php");
?>