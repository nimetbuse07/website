<?php

$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "yazlab";

$conn = new mysqli("localhost", "root", "", "yazlab");

if(!$conn)
{
    die("işlem başarısız".mysqli_connect_error());
}
else{
    #echo "başarılı";

}

?>