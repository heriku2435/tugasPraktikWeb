<?php 
//operator aritmatika
$a = 10;
$b = 5;

//operator penjumlahan
$opJumlah = $a + $b;
echo "Hasil Penjumlahan " . $a ." + " . $b . " = ". $opJumlah . "<br>";

$opMod = $a % 3;
echo "Sisa bagi " . $a . " % 3 = ". $opMod . "<br>";

//operator assignment a+=b sama artinya dengan a = a + b
$a += $b; // $a = a + b = 15
$a += $a; // $a = a + a = 30
$b += $a; // $b = b + a = 5 + 30 = 35
$b += 10; // $b = 35 + 10 = 45
echo $a;
echo $b;
?>
<br>
<?php
//operator perbandingan
$x = 10;
$y = "10";

$perbandingan = $x === $y;  //hasilanya berupa boolean true
var_dump ($perbandingan);

//operator increment dan decrement
$hitungIncrement = 0;
$hitungDecrement = 0;

++$hitungIncrement; 
$hitungDecrement--; // $hitung = $hitung - 1 = 0 

echo $hitungIncrement;
echo $hitungDecrement;

//operator logika
$logika = $x > 5 and $y === 10; //hasilnya true
var_dump($logika);


?>