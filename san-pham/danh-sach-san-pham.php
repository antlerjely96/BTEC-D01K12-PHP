<?php 
    include_once "../connect/open-connect.php";
    $search = "";
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    $p = 1;
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }
    $so_san_pham_1_trang = 3;
    $tong_san_pham = mysqli_query($connect,"SELECT COUNT(id) AS tong_san_pham FROM san_pham WHERE name LIKE '%$search%'");
    foreach($tong_san_pham as $value){
        $tong_so_san_pham = $value['tong_san_pham'];
    }
    $so_trang = ceil($tong_so_san_pham/$so_san_pham_1_trang);
    $start = ($p - 1) * $so_san_pham_1_trang;
    $sql = "SELECT san_pham.*, loai_san_pham.name AS name_loai_san_pham FROM san_pham 
            INNER JOIN loai_san_pham 
            ON san_pham.id_loai_san_pham = loai_san_pham.id
            WHERE san_pham.name LIKE '%$search%'
            ORDER BY id DESC 
            LIMIT $start,$so_san_pham_1_trang";
    $san_pham = mysqli_query($connect,$sql);
?>
<a href="them-san-pham.php">Thêm</a>
<form action="" method="get">
    Tìm kiếm: <input type="text" name="search" value="<?php echo $search; ?>"/><br>
    <button>Tìm kiếm</button>
</form>
<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>Price</td>
        <td>Amount</td>
        <td>Tên loại sản phẩm</td>
    </tr>
    <?php
        foreach ($san_pham as $each){
    ?>
        <tr>
            <td>
                <?php
                    echo $each['id'];
                ?>
            </td>
            <td>
                <?php
                    echo $each['name'];
                ?>
            </td>
            <td>
                <?php
                    echo $each['price'];
                ?>
            </td>
            <td>
                <?php
                    echo $each['amount'];
                ?>
            </td>
            <td>
                <?php
                    echo $each['name_loai_san_pham'];
                ?>
            </td>
        </tr>
    <?php
        }
        include_once "../connect/close-connect.php";
    ?>
</table>
<?php 
    for($i = 1; $i <= $so_trang; $i++){
        echo "<a href='?p=$i&search=$search'>$i</a>";
    }
?>