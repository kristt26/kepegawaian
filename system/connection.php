<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kepegawaian";

$conn = mysql_connect($host,$user,$pass);

if($conn)
{
    $open_Db = mysql_select_db($db);
    if(!$open_Db)
    {
        echo "Database Tidak Terbuka";
    }
}else{
    echo "Koneksi Gagal";
}
?>