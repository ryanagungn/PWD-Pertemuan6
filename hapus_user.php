<?php
include "koneksi.php"; //menghubungkan ke database

//menghapus user berdasarkan id
$sql = "delete from users where id_user= '$_GET[id]'";
mysqli_query($con, $sql);

//memutus koneksi database
mysqli_close($con);

//setelah itu, arahkan ke tampil_user.php
header('location:tampil_user.php');
