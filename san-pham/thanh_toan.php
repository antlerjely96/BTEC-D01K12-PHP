<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header('location:gio-hang.php');
    }
    else {
        $id_user = $_SESSION['uid'];
        $ngay_dat_hang = date('Y-m-d');
        $tinh_trang = 0;
        include_once "../connect/open-connect.php";
        $sql = "INSERT INTO hoa_don(email_user, ngay_dat_hang,tinh_trang) VALUES ('$id_user','$ngay_dat_hang', '$tinh_trang')";
        mysqli_query($connect, $sql);
        $sql_id_hoa_don = "SELECT MAX(id) AS id_hoa_don FROM hoa_don";
        $hoa_don = mysqli_query($connect, $sql_id_hoa_don);
        foreach ($hoa_don as $each){
            $id_hoa_don = $each['id_hoa_don'];
        }
        $hoa_don_chi_tiet = $_SESSION['gio_hang'];
        foreach ($hoa_don_chi_tiet as $id_san_pham => $so_luong){
            $sql_gia = "SELECT * FROM san_pham WHERE id = '$id_san_pham'";
            $result_gia = mysqli_query($connect, $sql_gia);
            foreach ($result_gia as $each_gia){
                $gia = $each_gia['price'];
            }
            $sql_ins_hdct = "INSERT INTO hoa_don_chi_tiet VALUES ('$id_hoa_don','$id_san_pham','$so_luong','$gia')";
            mysqli_query($connect, $sql_ins_hdct);
        }
        unset($_SESSION['gio_hang']);
        include_once "../connect/close-connect.php";
        header('location:lich-su-don-hang.php');
    }
?>