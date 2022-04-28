<?php
    $id = $_GET['id'];
    include_once "../connect/open-connect.php";
    $sql = "SELECT * FROM loai_san_pham WHERE id = $id";
    $loai_san_pham = mysqli_query($connect,$sql);
    foreach ($loai_san_pham as $each){
?>
<form method="post" action="sua-loai-san-pham-xu-ly.php">
    <input type="hidden" name="id" value="<?php echo $each['id']; ?>">
    name: <input type="text" name="name" value="<?php echo $each['name']; ?>"><br>
    <button>Sửa</button>
</form>
<?php
    }
    include_once "../connect/close-connect.php";
?>