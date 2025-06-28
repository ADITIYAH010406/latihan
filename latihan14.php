<!DOCTYPE html>
<htm>
    <head>
        <title> daftar negara asean </title>
</head>
<body>

<?php

$negara_asean = array("indonesia", "singapura", "malaysia", "brunei", "thailand",);

echo"<h3>daftar negara asean awal:</h3>";
echo"<ul>";
foreach($negara_asean as $negara){
    echo"<li>$negara</li>";
}
echo "</ul>";


$negara_asean[] ="laos";
$negara_asean[] ="filipina";
$negara_asean[] ="myanmar":

echo"<h3>daftar negara asean baru:</h3>";
echo"<ul>";
foreach($negara_asean as $negara){
    echo"<li>$negara</li>";
}
echo"</ul>";
?>

</body>
</html>