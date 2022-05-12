<?php
    $id = $_GET['id'];
    include "../connect/open-connect.php";
    $sql = "SELECT san_pham.*, loai_san_pham.name AS name_loai_san_pham 
            FROM san_pham INNER JOIN loai_san_pham 
            ON san_pham.id_loai_san_pham = loai_san_pham.id
            WHERE san_pham.id = '$id'";
    $result = mysqli_query($connect, $sql);
    foreach ($result as $each){
?>
    <p>
        <img src="../image/<?php echo $each['anh']?>" width="50px" height="50px">
    </p>
    <p>
        <?php echo $each['id'];?>
    </p>
    <p>
        <?php echo $each['name'];?>
    </p>
    <p>
        <?php echo $each['price'];?>
    </p>
    <p>
        <?php echo $each['amount'];?>
    </p>
    <p>
        <a href="them-vao-gio-hang.php?id=<?php echo $each['id'];?>">Thêm vào giỏ hàng</a>
    </p>
<?php
    }
    include "../connect/close-connect.php";
?>