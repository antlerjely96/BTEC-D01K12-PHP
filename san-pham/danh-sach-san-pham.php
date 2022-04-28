<a href="them-san-pham.php">Thêm</a>
<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>Price</td>
        <td>Amount</td>
        <td>Tên loại sản phẩm</td>
    </tr>
    <?php
        include_once "../connect/open-connect.php";
        $sql = "SELECT san_pham.*, loai_san_pham.name AS name_loai_san_pham FROM san_pham INNER JOIN loai_san_pham ON san_pham.id_loai_san_pham = loai_san_pham.id";
        $san_pham = mysqli_query($connect,$sql);
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