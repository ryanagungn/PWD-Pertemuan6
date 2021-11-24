<?php
include "koneksi.php"; //menghubungkan ke database

//deklarasi variabel sebagai penampung dari data didalam database
$id_user = $_POST['id_user'];
 $nama = $_POST['nama'];
 $email = $_POST['email'];
$pass = md5($_POST['password']);

//sql untuk input
$sql = "INSERT INTO users(id_user, password, nama, email) VALUES ('$id_user', '$pass', '$nama','$email')";
$query=mysqli_query($con, $sql);

//memutuskan koneksi
mysqli_close($con);

//apabila sudah menginput, maka akan diarahkan ke tampil_user.php
header('location:tampil_user.php');
