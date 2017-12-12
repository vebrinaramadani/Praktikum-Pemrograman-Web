<?php
include("koneksi.php");
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysql_query("update users set id_user='$id_user', nama='$nama', username='$username',password='$password' where nim='$id_user'");
echo "Data Telah diupdate<br>
<a href=\"index.php\">Kembali</a>";
?>