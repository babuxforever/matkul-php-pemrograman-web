<?php

include 'conf/koneksi.php';
session_start();
$user = $_POST['user'];
$pass = md5($_POST['password']);

// Password
$sql = "SELECT * FROM user where userid='$user' and passw='$pass'";
$res = mysqli_query($konek, $sql);
$num = mysqli_num_rows($res);
$row = mysqli_fetch_array($res);
if ($num > 0) {
    $_SESSION['userid'] = $user;
    $_SESSION['pin'] = $pass;
    $_SESSION['uname'] = $row[2];
    echo "<script language='javascript'>
            window.location.href = 'main.php'
        </script>";
} else {
    echo "<script language='javascript'>
            (window.alert('Userid/Password anda salah')) 
            window.location.href = 'index.php'
        </script>";
}
