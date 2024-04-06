<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="padding-left: 50px; padding-top:20px;">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
    class Form{
        private $action;
        private $judul;
        private $kontrol = array();

        public function __construct($act, $judul){
            $this ->action = $act;
            $this ->judul = $judul;
        }

        public function show(){
            echo "<form action=\"$this->action\"method=\"post\"enctype=\"multipart/form-data\">\n";
            echo "<caption><font size=\"5px\" color=\"#007bff\">$this->judul</font></caption>\n";
            echo "<table>\n";
            foreach($this->kontrol as $field=>$kontrol_form){ //<- membaca array
                echo"<tr><td>".ucwords($field)."</td><td>$kontrol_form</td></tr>\n";
            }
            echo "<tr><td colspan =\"2\"> <br> <input type=\"submit\" class=\"btn btn-primary\">&nbsp&nbsp&nbsp<input type=\"reset\" class=\"btn btn-primary\"></td></tr>\n";
            echo "</table>\n";
            echo "</form>\n";
        }
        //RADIO BUTTON
        public function addRadio($name, $data, $aktif){
            $this ->kontrol[$name] = $this -> radio($name, $data, $aktif);
        }

        private function radio ($name, $elemen, $aktif){
            $hasil="";
            foreach($elemen as $lst)
                if($lst==$aktif)
                    $hasil .= "<INPUT TYPE=\"radio\" NAME=\"$name\" VALUE=\"$lst\" checked> $lst \n";
                else
                    $hasil .= "<INPUT TYPE=\"radio\" NAME=\"$name\" VALUE=\"$lst\"> $lst \n";
            return $hasil;
        }
        //COMBO BOX
        public function addCombo($name, $elemen, $aktif){
            $this ->kontrol[$name] = $this -> comboBox($name, $elemen, $aktif);
        }

        private function comboBox ($name, $elemen, $aktif){
            $cb = "<select name=\"$name\" class=\"form-control\">\n";
            foreach($elemen as $elm){
                if($elm==$aktif)
                    $cb = $cb . "<option selected>$elm</option>\n";
                else
                    $cb = $cb . "<option>$elm</option>\n";
            }
            $cb = $cb."</select>";
            return $cb;
        }
        //TEXT BOX
        public function addTextBox($name, $lebar="30", $nilai=""){
            $this->kontrol[$name] = $this->textBox($name,$lebar,$nilai);
        }

        private function textBox($name, $lebar="30", $nilai=""){
            "<div class=\"form-group\">";
            $tb = "<input type = \"text\" name=\"$name\" size =\"$lebar\" value =\"$nilai\" class=\"form-control\">";
            return $tb;
            "</div>";
            
        }

        //NUMBER SPINNER
        public function addSpinner($name, $lebar="30", $nilai="",$min="0",$max="10"){
            $this->kontrol[$name] = $this->spinBox($name,$lebar,$nilai,$min,$max);
        }

        private function spinBox($name, $lebar="30", $nilai="",$min="0",$max="10"){
            "<div class=\"form-group\">";
            $tb = "<input type = \"number\" name=\"$name\" size =\"$lebar\" value =\"$nilai\" min=\"$min\" max=\"$max\" class=\"form-control\" placeholder=\"masukkan data tinggi\">";
            return $tb;
            "<div>";
        }

        //CHECK BOX
        public function addCheckBox($name, $data, $aktif){
            $this->kontrol[$name] = $this->checkBox($name, $data, $aktif);
        }

        private function checkBox($name, $elemen, $aktif){
            $hasil = "";
            foreach($elemen as $lst)
            if(strpos($aktif,$lst)===FALSE)
                $hasil .= "<INPUT TYPE=\"checkbox\" NAME=\"$name"."[]\"
                    VALUE=\"$lst\"> $lst\n";
            else 
                $hasil.="<INPUT TYPE=\"checkbox\" NAME=\"$name"."[]\"
                VALUE=\"$lst\"checked> $lst\n";
            return $hasil;
        }

        //FILE UPLOAD
        public function addFile($name, $lebar="30"){
            $this->kontrol[$name] = $this->fileBox($name,$lebar);
        }

        private function fileBox($name, $lebar="30"){
            $tb = "<input type = \"file\" name=\"$name\" size =\"$lebar\">";
            return $tb;
        }



    }
    ?>
</body>
</html>

