<form method="post" action="them-san-pham-xu-ly.php">
    Name: <input type="text" name="name"><br>
    Price: <input type="text" name="price"><br>
    Amount <input type="number" name="amount"><br>
    Loại sản phẩm:
    <select name="id_loai_san_pham">
        <?php
            include_once "../connect/open-connect.php";
            $sql = "SELECT * FROM loai_san_pham";
            $loai_san_pham = mysqli_query($connect, $sql);
            foreach ($loai_san_pham as $each){
        ?>
            <option value="<?php echo $each['id']?>"><?php echo $each['name']?></option>
        <?php
            }
            include_once "../connect/close-connect.php";
        ?>
    </select>
    <br>
    <button>Thêm</button>
</form>