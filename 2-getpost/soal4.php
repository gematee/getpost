<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="pokok">Gaji Pokok</label>
        <input type="text" name="pokok" id="pokok"><br>
        <label for="tunjangan">Tunjangan</label>
        <input type="text" name="tunjangan" id="tunjangan"> <br>
        <input type="submit" value="proses" name="proses">
    </form>
<?php
if (isset($_POST['proses'])) {
    $pokok = $_POST['pokok'];
    $tunjangan = $_POST['tunjangan'];
    $kotor = $pokok+$tunjangan;
    $pajak = (15/100)*$kotor;
    $bersih = $pokok+$tunjangan-$pajak;
    
    echo "Gaji Pokok = " .$pokok. "<br>";
    echo "Tunjangan = " .$tunjangan. "<br>";
    echo "Gaji bersih = " .$bersih. "<br>";
}
?>
</body>
</html>