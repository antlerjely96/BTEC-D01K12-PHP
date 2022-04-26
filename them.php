<?php include_once "header.php";?>
<form action="them-xu-ly.php" method="post">
    Name: <input type="text" name="name"><br>
    Phone: <input type="text" name="phone"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    Address: <input type="text" name="address"><br>
    Birth: <input type="date" name="date_of_birth"><br>
    Gender: <input type="radio" name="gender" value="0" checked> Male <input type="radio" name="gender" value="1"> Female <br>
    <button>Add</button>
</form>
<?php include_once "footer.php";?>