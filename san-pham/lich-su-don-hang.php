<?php
    session_start();
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>Ngay Dat Hang</td>
        <td>Tinh trang</td>
        <td></td>
    </tr>
    <?php
        $uid = $_SESSION['uid'];
        include_once "../connect/open-connect.php";
        $sql = "SELECT * FROM hoa_don WHERE email_user = '$uid'";
        $result = mysqli_query($connect, $sql);
        foreach ($result as $each){
    ?>
        <tr>
            <td>
                <?php echo $each['id'];?>
            </td>
            <td>
                <?php echo $each['ngay_dat_hang'];?>
            </td>
            <td>
                <?php
                    if($each['tinh_trang'] == 0){
                        echo "Chua duyet";
                    }
                    elseif ($each['tinh_trang'] == 1){
                        echo "Dang van chuyen";
                    }
                    else {
                        echo "Da giao";
                    }
                ?>
            </td>
            <td>
                <a href="chi-tiet-don-hang.php?id=<?php echo $each['id']?>&uid=<?php echo $uid; ?>">
                    Chi tiet
                </a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
<?php

?>