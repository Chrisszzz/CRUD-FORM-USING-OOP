<?php
require_once("Tabel.php");
$id= $_GET["hapus"];
extract($_POST);
$sql = "DELETE FROM roti WHERE idRoti = '$id'";
$roti = new Tabel ("127.0.0.1","root","","bakery","roti");
$roti -> eksekusiSql($sql);
$roti->showTable();
?>