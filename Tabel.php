<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">
    <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
    <script defer src="script.js"></script>
</head>
<body style="padding : 20px;">
<?php
class Tabel{
    private $nama_tabel;
    private $conn;
    private $hapus;
    private $ubah;

    function __construct($host, $user, $pwd, $db, $tbl, $hapus="hapus.php", $ubah="update.php"){
        $this -> conn = new mysqli($host, $user, $pwd, $db);
        $this -> nama_tabel = $tbl;
        $this -> hapus = $hapus;
        $this -> ubah = $ubah;

    }
    function getRow($sql){
        $tabel = $this->conn->query($sql);
        return $tabel->fetch_assoc();
    }

    function eksekusiSql($query){
        $this->conn->query($query);
    }

    function showTable(){
        $result = $this->conn->query("SELECT * FROM $this->nama_tabel");
        echo "<table id=\"example\" class=\"table table-striped\"style=\"width:100%\" border=\"1\">";
        echo "<thead>";
        $fields = $result->fetch_fields();
        foreach($fields as $field){
            echo "<th>".$field->name."</th>";
        }
        echo "<th>Manipulasi</th>";
        echo "</thead>";
        echo "<tbody>";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            foreach($row as $key => $value){
                if ($key == 'gambar') {
                    echo "<td><img src=\"{$value}\" alt=\"{$row['namaRoti']}\" style=\"max-width: 100px;\"></td>";
                } else {
                    echo "<td>$value</td>";
                }
            }
            echo "<td>";
            echo "<a href=\"$this->hapus?hapus={$row[$fields[0]->name]}\">Hapus / </a>"; 
            echo "<a href=\"$this->ubah?ubah={$row[$fields[0]->name]}\">Ubah </a>";
            echo "</td>";
            echo "</tr>\n";
        }
        echo "<tbody>";
        echo "</table>";
        echo "<a href=\"tambah.php\">Tambah Data</a>";
    }
    }

?>
</body>
</html>
