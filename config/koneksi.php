<?php

$conn = mysqli_connect('localhost','root','','db_parkiran_uly');

if(!$conn){
    die("koneksi gagal".mysqli_connect_error());
}