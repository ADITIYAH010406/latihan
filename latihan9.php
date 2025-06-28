<!DOCTYPE html>
<hmtl>
    <head>
        <title>latihan 5d</title>
</head>
<body>

<h3>masukan angka:</h3>
<form action=""method="post">
    <input type="number"name="angka"required>
    <button type="submit">tamppilkan!</button>
</form>

<?phpif($_SERVER["REQUEST_METHOD"]=="POST"){
    $angka=$_POST["angka"];

    echo"<h4>output:</h4>";
    for($i=1;$i<=$angka;$i++){
        for($j=1;$i;$j++){
            echo $j;
        }
        echo"<br>";
    }
}
?>

</body>
</html>