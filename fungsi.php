<?php 
function hello(){
    //kode yang akan dijalankan pada saat fungsi dipanggil
    echo "Hello, ini fungsi... <br>";
}

$hit = 0;
while($hit < 10){
    hello();
    $hit++;
}

echo "<h2>Parameter Function</h2>";
function sapa($nama, $alamat){
    echo "Hai... nama saya " . $nama . " Saya berasal dari " . $alamat . "<br>";
}

sapa("Amelia", "Joben"); //argumen
sapa("Heri", "Kotaraja");
sapa("Asson", "Lendang Bedurik");

echo "<h2>Ruang lingkup variabel / Variable Scope </h2>";
//variabel global
$harga = 200000;

function diskon($qty){
    //variabel lokal
    $harga = 150000;
    $hargaTotal = $harga * $qty;
    if($hargaTotal > 500000):
        $diskon = 0.01 * $hargaTotal;
    else : 
        $diskon = 0.005 * $hargaTotal;
    endif;

    $totalBayar = $hargaTotal - $diskon;
    echo "Harga Satuan (Jumlah): Rp. " . number_format($harga,2,',','.') . " (". $qty . ") <br>";
    Echo "Total Harga : Rp. " . number_format($hargaTotal,2,',','.') . "<br>";
    echo "Diskon : Rp. " . number_format($diskon,2,',','.') . "<br>";
    echo "<strong>Total Bayar : Rp. " . number_format($totalBayar,2,',','.') . "</strong><hr>";
}

diskon(3);
diskon(5);
?>