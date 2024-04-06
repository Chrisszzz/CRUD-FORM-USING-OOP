<?php
    require_once("Tabel.php");
    extract ($_POST);
    $namaFile = $_FILES['gambar']['name']; //MENGAMBIL NAMA FILENYA
    $tmpName = $_FILES['gambar']['tmp_name']; // UNTUK DIUPLOAD
    move_uploaded_file($tmpName, $namaFile);
    $toping = implode(",", $toping);
    $sql = "INSERT INTO roti (namaRoti, rasaRoti, diameter, tinggi, topping, harga, gambar)VALUES ('$nama','$rasa','$diameter','$tinggi','$toping','$harga','$namaFile')";
    $roti = new Tabel("127.0.0.1","root", "","bakery","roti");
    $roti->eksekusiSql($sql);
    $roti->showTable();
?>