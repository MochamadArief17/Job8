<html>
<body>
<?php
include_once("mysql_connect.php");
$tabel=mysql_query("CREATE TABLE tamu (
id INT NOT NULL,
nama VARCHAR(30) NOT NULL ,
alamat VARCHAR(50) NOT NULL ,
email VARCHAR(30) NOT NULL,
komentar varchar(225) NOT NULL,
PRIMARY KEY(id))");

if($tabel)
{echo"berhasil membuat tabel tamu melalui scipt php";}
else
{echo"Gagal membuat tabel";}
?>
</body>
</html>
  