<?php
    $id = $_GET['id'];
    //Mở kết nối đến db
    $connect = mysqli_connect("localhost","root","","d01k12");
    //Cho phép hiển thị tiếng Việt
    mysqli_set_charset($connect,"utf8");
    //Lấy dữ liệu từ DB
    $sql = "SELECT * FROM user WHERE id = $id";
    $user = mysqli_query($connect,$sql);
    foreach ($user as $each){
?>
    <form action="sua-xu-ly.php" method="post">
        <input type="hidden" value="<?php echo $each['id'];?>" name="id">
        Name: <input type="text" name="name" value="<?php echo $each['name'];?>"><br>
        Phone: <input type="text" name="phone" value="<?php echo $each['phone']?>"><br>
        Email: <input type="email" name="email" value="<?php echo $each['email']?>"><br>
        Password: <input type="password" name="password" value="<?php echo $each['password']?>"><br>
        Address: <input type="text" name="address" value="<?php echo $each['address']?>"><br>
        Birth: <input type="date" name="date_of_birth" value="<?php echo $each['date_of_birth']?>"><br>
        Gender: <input type="radio" name="gender" value="0" checked> Female
                <input type="radio" name="gender" value="1"
                    <?php
                        if($each['gender'] == 1){
                    ?>
                            checked
                    <?php
                        }
                    ?>
                > Male <br>
        <button>Edit</button>
    </form>
<?php
    }
    mysqli_close($connect);
?>
