
<?php
//sesi akan dijalankan kemudian akan dihapus (destroy), pengguna tidak akan bisa masuk lagi kedalam website tersebut kecuali login kembali
session_start();
session_destroy();
echo "Anda telah sukses keluar sistem <b>LOGOUT</b>";
?>