<a href="them.php">Add</a>
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
    </tr>
    <?php
        //Mở kết nối đến db
        $connect = mysqli_connect("localhost","root","","d01k12");
        //Cho phép hiển thị tiếng Việt
        mysqli_set_charset($connect,"utf8");
        //Lấy dữ liệu từ DB
        $sql = "SELECT * FROM user";
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
            </tr>
        <?php
            }
            mysqli_close($connect);
        ?>

</table>