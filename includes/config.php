<?php
define('DB_SERVER','sql107.infinityfree.com');
define('DB_USER','if0_37034713');
define('DB_PASS' ,'WG7yQdojRH5uT');
define('DB_NAME','if0_37034713_newstapdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>