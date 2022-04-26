<?php include_once "header.php";?>
<?php
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    else {
        $search = "";
    }
?>
<a href="them.php">Add</a>
<form method="get" action="">
    Tìm kiếm: <input type="text" name="search" value="<?php echo $search;?>"><br>
    <button>Tìm kiếm</button>
</form>
<table border="1px" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>password</td>
        <td>address</td>
        <td>Date of birth</td>
        <td>Gender</td>
        <td></td>
        <td></td>
    </tr>
    <?php

        //Mở kết nối đến db
        $connect = mysqli_connect("localhost","root","","d01k12");
        //Cho phép hiển thị tiếng Việt
        mysqli_set_charset($connect,"utf8");
        //Lấy dữ liệu từ DB
        $sql = "SELECT * FROM user WHERE name LIKE '%$search%'";
        $user = mysqli_query($connect,$sql);
        foreach ($user as $each){

        ?>
            <tr>
                <td><?php echo $each['id']?></td>
                <td><?php echo $each['name']?></td>
                <td><?php echo $each['phone']?></td>
                <td><?php echo $each['email']?></td>
                <td><?php echo $each['password']?></td>
                <td><?php echo $each['address']?></td>
                <td><?php echo $each['date_of_birth']?></td>
                <td>
                    <?php
                        if($each['gender'] == 0){
                    ?>
                            Female
                    <?php
                        }
                        else {
                    ?>
                            Male
                    <?php
                        }
                    ?>
                </td>
                <td>
                    <a href="sua.php?id=<?php echo $each['id']?>">Sửa</a>
                </td>
                <td>
                    <a href="xoa.php?id=<?php echo $each['id']?>">Xóa</a>
                </td>
            </tr>
        <?php
            }
            mysqli_close($connect);
        ?>

</table>

<?php include_once "footer.php";?>