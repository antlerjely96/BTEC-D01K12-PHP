<table border="1" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td>ID</td>
        <td>Ten san pham</td>
        <td>So luong</td>
        <td>Gia</td>
        <td>Thanh tien</td>
    </tr>
    <?php
        $id_hoa_don = $_GET['id'];
        $email_user = $_GET['uid'];
        $tong_tien = 0;
        include_once "../connect/open-connect.php";
        $sql = "SELECT hoa_don.id, san_pham.name, hoa_don_chi_tiet.so_luong, hoa_don_chi_tiet.gia FROM hoa_don
                INNER JOIN hoa_don_chi_tiet ON hoa_don.id = hoa_don_chi_tiet.id_hoa_don
                INNER JOIN san_pham ON hoa_don_chi_tiet.id_san_pham = san_pham.id
                WHERE hoa_don.id = $id_hoa_don AND hoa_don.email_user = '$email_user'";
        $result = mysqli_query($connect, $sql);
        foreach ($result as $each){
            $thanh_tien = $each['gia'] * $each['so_luong'];
            $tong_tien += $thanh_tien;
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
                    echo $each['so_luong'];
                ?>
            </td>
            <td>
                <?php
                    echo $each['gia'];
                ?>
            </td>
            <td>
                <?php
                    echo $thanh_tien;
                ?>
            </td>
        </tr>
    <?php
        }
    ?>
    <tr>
        <td colspan="5">
            Tong tien: <?php echo $tong_tien;?>
        </td>
    </tr>
</table>
<?php

?>