<?php
$sql = "SELECT * FROM user where userid='$user' and passw='$pass'";
$res = mysqli_query($konek, $sql);
$num = mysqli_num_rows($res);
if ($num == 0) {
    echo "<script language='javascript'>
            (window.alert('Login Dulu Bangsat!'))
            window.location.href = 'index.php'
        </script>";
}
