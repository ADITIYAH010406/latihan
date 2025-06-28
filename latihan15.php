<!DOCTYPE html>
<html>
    <head>
        <title>latihan 3d-fungsi faktorial</title>
</head>
<body>

<?php
function faktorial ($a){
    $hasil = 1;
    for($i=1;$i<=$a;$a++){
        $hasil*=$i;
    }
    return $hasil;
}

$angka=5;
$hasil=faktorial($angka);
echo"faktorial dari $angka=$hasil;
?>

</body>
</html>
