<?php 
//PHP if statmen
$cuaca = "cerah"; //operand 1
$transport = false; //operand 2

if($cuaca == "cerah" and $transport == true){ //salah
    echo "Asyikk.... kita jadi nGopi :)"; //kode jika benar
    }else{
        echo "Duh... cuaca mendung, gagal MoveOn <br>"; //kode jika salah
    }

$hasil = $cuaca == "cerah" ? "Asyik...kita ngopi" : "Duh... gagal MoveOn";
echo $hasil;

echo "<h2>if...elseif ... else</h2>";
/*if(kondisi){kode yang dilanakn}
    if else(kondisi){kode yang dijalankan}
    else{kode yang dijalankan}
*/

$nilai = 2;
if($nilai == 4){
    echo "Nilai Pemerograman Web : A";
}elseif($nilai == 3){
    echo "Nilai Pemerograman Web : B";
}elseif($nilai == 2){
    echo "Nilai Pemerograman Web : C";
}elseif($nilai == 1){
    echo "Nilai Pemerograman Web : D";
}else{
    echo "Nilai Pemerograman Web : E";
}

//Nested IF
$angka = 21;

if($angka > 20){
    echo "Angka lebih dari 20";
    if($angka > 15 OR $angka < 21){
        echo "Angka lebih dari 15 atau kurang dari 21";
    }
}

echo "<br>";
//SWITCH
$hari = date("l");

switch($hari){
    case "Monday" :
        echo "Hari ini, hari SENIN";
        break;
    case "Tuesday" : 
        echo "Hari ini, hari SELASA";
        break;
    case "Wednesday" : 
        echo "Hari ini, hari RABU";
        break;
    case "Thursday" : 
        echo "Hari ini, hari KAMIS";
        break;
    case "Friday" : 
        echo "Hari ini, hari JUM'AT";
        break;
    case "Saturday" : 
        echo "Hari ini, hari SABTU";
        break;
    case "Sunday" : 
        echo "Hari ini, hari MINGGU";
        break;
}
?>