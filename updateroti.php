<?php
require_once("Tabel.php");
extract($_POST);
$toping = implode(",", $toping);
$namaFile = $_FILES['gambar']['name']; //MENGAMBIL NAMA FILENYA
$tmpName = $_FILES['gambar']['tmp_name']; // UNTUK DIUPLOAD
move_uploaded_file($tmpName, $namaFile);
$sql = "UPDATE roti SET namaRoti='$nama', rasaRoti='$rasa', diameter='$diameter', tinggi='$tinggi', topping='$toping', harga='$harga', gambar='$namaFile' WHERE idRoti ='$idRoti'";
$roti = new Tabel ("127.0.0.1","root","","bakery","roti");
$roti -> eksekusiSql($sql);
$roti->showTable();
?>