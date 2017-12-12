<?php
if(isset($_POST['hapus']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
 
$id_karyawan = $_POST['id_user'];
 
$sql = "DELETE FROM users ".
       "WHERE id_user = $id_karyawan" ;
 
mysql_select_db('test_db');
$hapusdata = mysql_query( $sql, $koneksi );
if(! $hapusdata )
{
  die('Gagal hapus data: ' . mysql_error());
}
echo "Berhasil hapus data\n";
mysql_close($koneksi);
}
?>