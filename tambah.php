<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("Form.php");
    $frm1 = new Form("simpan.php","menambah data Roti");
    $rasa = array("coklat", "vanilla", "strawberry");
    $diameter = array("10cm", "15cm", "20cm", "25cm");
    $toping = array("strawberry", "lilin", "kartu ucapan","bunga");

    $frm1 -> addTextBox("nama",12);
    $frm1 -> addCombo("rasa",$rasa,"coklat");
    $frm1 -> addRadio("diameter",$diameter, "10cm");
    $frm1 -> addSpinner("tinggi",5);
    $frm1 -> addCheckBox("toping", $toping, "strawberry");
    $frm1 -> addTextBox("harga",12);
    $frm1 -> addFile("gambar",12);
    $frm1 ->show();
    ?>
</body>
</html>