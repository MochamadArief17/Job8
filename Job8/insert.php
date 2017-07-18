<html>
<body>
<?php
include_once("mysql_connect.php");
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
        VALUES (' 1','Sekolah tingggi elektronika dan komputer',
        'Jl. majapahit 605 semarang','info@stekom.ac.id','test.. ')");

if($insert)
{echo"barhasil menyisipkan data pada tabel tamu";}
else
{echo"gagal pengisipan data";}
?>
</body>
</html>