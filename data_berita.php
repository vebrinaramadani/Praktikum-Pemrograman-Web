<?php
session_start();
echo "<h3>Data Berita</h3>";
   if(isset($_SESSION["username"])){
    echo "Berhasil ";
    echo "<a href='logout.php'>Logout</a>";
    }else{
        echo header("location:main_login.php");
    }
include "koneksi_berita.php";
    $tampil=mysql_query("select from berita order by no_kategori desc");
    while($data =  mysql_fetch_array($tampil))
    {
        echo "<p>No Berita : $data[no_berita]<br>";
        echo "No Kategori : $data[no_kategori]<br>";
        echo "Username : $data[username]<br>";
        echo "Judul Berita : $data[judul_berita]<br>";
        echo "Headline Berita : $data[headline_berita]<br>";
        echo "Isi Berita : $data[isi_berita]<br>";
        echo "Hari : $data[hari]<br>";
        echo "Tanggal Berita : $data[tanggal_berita]<br>";
        echo "Jam Berita : $data[jam_berita]<br>";?>
<?php
    }
    ?>
<?php
mysql_close();
?>