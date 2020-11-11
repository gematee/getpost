<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <label for="beli">Harga Beli</label>
    <input type="text" name="beli" id="beli"> <br>
    <label for="jual">Harga Jual</label>
    <input type="text" name="jual" id="jual"><br>
    <label for="pajak">Pajak</label>
    <input type="text" name="pajak" id="pajak"><br>
    <label for="jumlah">Jumlah</label>
    <input type="text" name="jumlah" id="jumlah"><br>
    <input type="submit" value="proses" name="proses">
</form>
<?php
if(isset($_POST['proses'])){
    $beli = $_POST['beli'];
    $jual = $_POST['jual'];
    $pajak = $_POST['pajak'];
    $pajakhitung = $_POST['pajak']/100;
    $jumlah = $_POST['jumlah'];
    $total_beli = $beli*$jumlah;
    $total_jual = $jual*$jumlah;
    $untung_kotor = ($jual-$beli)*$jumlah;
    $untung_bersih = ($untung_kotor*$pajakhitung)*$jumlah;

    echo "total harga beli?".$total_beli."<br>";
    echo "total harga jual?".$total_jual."<br>";
    echo "keuntungan kotor?".$untung_kotor."<br>";
    echo "keuntungan bersih?".$untung_bersih."<br>";      
}
?>
</body>
</html>