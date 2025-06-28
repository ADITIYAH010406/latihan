<!DOCTYPE html>
<html>
    <head>
        <title>daftar negara dan ibu kota asean</title>
</head>
<body>

<?php

$ibukota_asean=array(
    "indonesia"=>"DKI jakarta",
    "singapura"=>"singapura",
    "malaysia"=>"kuala lumpur",
    "brunei"=>"bandar seri bagawan",
    "thailand"=>"bangkok",
    "laos"=>"vientiane",
    "filipina"=>"manila",
    "myanmar"=>"naypyidaw",
);

echo"<h3>daftar nama asean dan ibu kota:</h3>";
echo"<ul>";
foreach($ibukota_asean as $negara=>$ibukota){
    echo"<li>$negara:$ibukota</li>";
}
echo"</ul>";
?>

</body>
</html>