<div width="100%" style="background:red ; height:200px">
    <?php
        include "../connect/open-connect.php";
        $sql = "SELECT san_pham.*, loai_san_pham.name AS name_loai_san_pham FROM san_pham INNER JOIN loai_san_pham ON san_pham.id_loai_san_pham = loai_san_pham.id";
        $san_pham = mysqli_query($connect,$sql);
        $dem = 0;
        foreach ($san_pham as $each){
    ?>
        <div style="text-align: center; float: left">
            <p><?php echo $each['id'];?></p>
            <p><?php echo $each['name'];?></p>
            <p><?php echo $each['price'];?></p>
            <p><?php echo $each['amount'];?></p>
        </div>
    <?php 
            $dem++;
            if($dem % 4 == 0){
                echo ("</div><div width='50%'>");
            }
        }
        include "../connect/close-connect.php";
    ?>
</div>

<div width="100%">
    <table width="100%">
        <tr>
            <?php
                include "../connect/open-connect.php";
                $sql = "SELECT san_pham.*, loai_san_pham.name AS name_loai_san_pham FROM san_pham INNER JOIN loai_san_pham ON san_pham.id_loai_san_pham = loai_san_pham.id";
                $san_pham = mysqli_query($connect,$sql);
                $dem = 0;
                foreach ($san_pham as $each){
            ?>
            <td>
                <p>
                    <img src="../image/<?php echo $each['anh']?>" width="50px" height="50px">
                </p>
                <p>
                    <?php echo $each['id'];?>
                </p>
                <p>
                    <a href="chi-tiet-san-pham.php?id=<?php echo $each['id'];?>">
                        <?php echo $each['name'];?>
                    </a>
                </p>
                <p>
                    <?php echo $each['price'];?>
                </p>
                <p>
                    <?php echo $each['amount'];?>
                </p>
            </td>
            <?php 
                    $dem++;
                    if($dem % 4 == 0){
                        echo ("<tr></tr>");
                    }
                }
            ?>
        </tr>
    </table>
    <?php include "../connect/close-connect.php"; ?>

    