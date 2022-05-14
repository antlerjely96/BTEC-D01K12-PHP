<?php
    session_start();
?>
<form method="post" action="cap-nhat-gio-hang.php">
    <table border="1" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Image</td>
            <td>Price</td>
            <td>Amount</td>
            <td>Thành tiền</td>
            <td></td>
        </tr>
        <?php
            include "../connect/open-connect.php";
            $tong_tien = 0;
            if(isset($_SESSION['gio_hang'])){
                $gio_hang = $_SESSION['gio_hang'];
                foreach ($gio_hang as $id => $amount){
                    $sql = "SELECT name, price, anh FROM san_pham WHERE id = '$id'";
                    $san_pham = mysqli_query($connect, $sql);
                    foreach ($san_pham as $each){
        ?>
            <tr>
                <td>
                    <?php echo $id;?>
                </td>
                <td>
                    <?php echo $each['name'];?>
                </td>
                <td>
                    <img src="../image/<?php echo $each['anh'];?>" width="50px" height="50px">
                </td>
                <td>
                    <?php echo $each['price'];?>
                </td>
                <td>
                    <input type="number" value="<?php echo $amount;?>" name="amount[<?php echo $id;?>]">
                </td>
                <td>
                    <?php
                        $thanh_tien = $each['price'] * $amount;
                        $tong_tien += $thanh_tien;
                        echo $thanh_tien;
                    ?>
                </td>
                <td>
                    <a href="xoa-san-pham-gio-hang.php?id=<?php echo $id;?>">Xóa</a>
                </td>
            </tr>
        <?php
                    }
                }
            }
            include "../connect/close-connect.php";
        ?>
        <tr>
            <td colspan="7">
                Tổng tiền: <?php echo $tong_tien;?>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <button>Cập nhật giỏ hàng</button>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <a href="thanh_toan.php">Thanh toán</a>
            </td>
        </tr>
    </table>
    <a href="danh-sach-san-pham-khach-hang.php">Tiếp tục mua hàng</a>
</form>