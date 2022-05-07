<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header("location:index.php");
    }
?>
<form method="post" action="login-xu-ly.php">
    uid: <input type="text" name="uid"><br>
    pwd: <input type="password" name="pwd"><br>
    <button>Đăng nhập</button>
</form>