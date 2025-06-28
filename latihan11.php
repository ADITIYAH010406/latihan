<!DOCTYPE html>
<html>
    <head>
        <title>latihan3c-fungsi pangkat</title>
</head>
<body>

<?php
function pangkat($angka,$pangkat){
    return ppow($angka,$pangkat);
}

$angka=10;
$pangkatnya=4;
$hasil=pangkat($angka,$pangkatnya);

echo"$angka pangkat $pangkatnya=$hasilnya=$hasil";
?>

</body>
</html>
