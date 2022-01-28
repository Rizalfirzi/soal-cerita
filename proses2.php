<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Proses</legend>
    <center>
    <h1>Pengulangan</h1>
</center>
<?php

if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];
    $angka = $_POST ['input'];


    if ($pilih == 1) {
        
        echo "<h3>segitiga siku siku<h3/>";
        for ($i = 1; $i <= $angka; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "&nbsp";
                echo "$j";
            }
            echo "<br>";
        }
        
        echo "</center>";
    }elseif ($pilih == 2) {
        echo "<center>";
        echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
        for ($x = $angka; $x >= 1; $x--){
            for ($v = $angka; $v > $x; $v--){
                echo " ";
            }for ($c = 1; $c <= $x; $c++){
                echo "$c ";
            }
            echo "<br>";
        }
        echo "</center>";
    }elseif ($pilih == 3){
        echo "<h3>Segitiga siku siku (angka kebalikan dari no 1)</h3>";
        for ($i = $angka; $i >= 1; --$i) {
            for ($j = $angka; $j >= $i; --$j) {
                echo "$j &nbsp";
            }
            echo '<br>';
        }
    }
}
?>
      
    </fieldset>
</body>
</html>