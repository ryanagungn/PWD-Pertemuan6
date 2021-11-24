<?php
//form yang berisi input untuk menambahkan user yang terhubung dengan input_user.php
echo "<h2>Tambah User</h2>
<form method=post action=input_user.php> //menghubungkan dengan input_user.php
<table>
<tr><td>Username</td><td> : <input name='id_user' type='text'></td></tr>
<tr><td>Password</td><td> : <input name='password' type='password'></td></tr>
<tr><td>Nama Lengkap</td><td> : <input name='nama' type='text'></td></tr>
<tr><td>Email </td><td> : <input name='email' type='text'></td></tr>
<tr><td colspan=2><input type='submit' value='SIMPAN'></td></tr>
</table>
</form>";
?>