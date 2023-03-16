<?php

//  $conn = mysqli_connect("localhost","root","","artostudy");
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "artostudy");
mysqli_set_charset($conn, "utf8");
if (!$conn) {

    die('Baza ilə əlaqə qırılmışdır' . mysqli_error());

}



?>