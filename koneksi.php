<?php
// menyambungkan website dengan database
$host = "localhost";
$username = "root";
$password = "";
$databasename = "db_akademik";

//apabila error, maka akan muncul error di bagian mana
$con = @mysqli_connect($host, $username, $password, $databasename);
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
