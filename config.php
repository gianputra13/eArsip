<?php

echo "Hello from the docker yooooo container";


 
 $koneksi = mysqli_connect("db","root","","arsip_kita");
  
 // Check connection
 if (mysqli_connect_errno()){
     echo "Koneksi database gagal : " . mysqli_connect_error();
 }
  
 ?>

