<?php
//pengulangan while
$hitung = 1;
while($hitung < 10){
    if($hitung == 6) break;
    echo "Angka - " . $hitung;
    echo "<br>";
    $hitung++;
}

?>

<br><h2> Alternatif Syntax </h2>
<?php
$hit = 1;
while($hit < 6):
    $hit++;
    if($hit == 4) continue;
    echo "Helo dunia ke - " . $hit ."<hr>";
    echo "<br>";
    
    
endwhile;
?>