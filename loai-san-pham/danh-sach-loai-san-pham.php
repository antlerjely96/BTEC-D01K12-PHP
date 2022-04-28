<a href="them-loai-san-pham.php">Thêm</a>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td>id</td>
        <td>name</td>
        <td></td>
        <td></td>
    </tr>
    <?php
        include_once "../connect/open-connect.php";
        $sql = "SELECT * FROM loai_san_pham";
        $loai_san_pham = mysqli_query($connect,$sql);
        foreach ($loai_san_pham as $each){
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
                    <a href="sua-loai-san-pham.php?id=<?php echo $each['id'];?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="xoa-loai-san-pham.php?id=<?php echo $each['id'];?>">
                        Xóa
                    </a>
                </td>
            </tr>
    <?php
        }
        include_once "../connect/close-connect.php";
    ?>
</table>