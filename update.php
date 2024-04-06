<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("Tabel.php");
    require_once("Form.php");
    $idRoti= $_GET["ubah"];
    $roti = new Tabel("127.0.0.1","root","","bakery","roti");
    $data_lama = $roti->getRow("SELECT * FROM roti WHERE idRoti='$idRoti'");
    extract($data_lama);

    $frm1 = new Form("updateroti.php","mengubah data Roti");
    $rs = array("coklat", "vanilla", "strawberry");
    $dm = array("10cm", "15cm", "20cm", "25cm");
    $tp = array("strawberry", "lilin", "kartu ucapan","bunga");
    $frm1 -> addTextBox("idRoti",12,$idRoti);
    $frm1 -> addTextBox("nama",12, $namaRoti);
    $frm1 -> addCombo("rasa",$rs, $rasaRoti);
    $frm1 -> addRadio("diameter",$dm,$diameter);
    //
    $frm1 -> addSpinner("tinggi",5,$tinggi);
    //
    $frm1 -> addCheckBox("toping", $tp,$topping);
    $frm1 -> addTextBox("harga",12,$harga);
    $frm1 -> addFile("gambar",12);
    $frm1 ->show();
    ?>
</body>
</html>