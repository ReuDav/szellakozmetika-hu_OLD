<?php
//$AdatBazis = mysqli_connect("mysql.rackhost.hu", "c35761reucov", "@3#hZ1A9", "c35761szellaStat"); //adatbázis helye, adatbázis tulaj neve, jelszó, az adatbázis neve
$AdatBazis = mysqli_connect("localhost", "root", "", "statisztika"); //adatbázis helye, adatbázis tulaj neve, jelszó, az adatbázis neve
$Url = $_SERVER['REQUEST_URI']; //Url lekérése, melyik oldalon van a felhazsnálónk
$IP_Cim = $_SERVER['REMOTE_ADDR']; //A felhasználó IP címét kéri le
//mysqli_set_charset($AdatBazis, "utf8");

// if($$AdatBazis === false){
//     die("Hiba: nem tudott kapcsolódni " . mysqli_connect_error());
// }

// echo "Sikeres kapcsolódás. Host infója: " . mysqli_get_host_info($link);
?>