 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width =device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <form action="#" method="GET">
    <label for="saldoawal">Saldo Awal</label>
    <input type="text" name="saldoawal" id="saldoawal"><br>
    <label for="bunga">Bunga</label>
    <input type="text" name="bunga" id="bunga"><br>
    <label for="bulan">Bulan</label>
    <input type="text" name="bulan" id="bulan"><br>
    <input type="submit" value="kirim" name="kirim">
    <input type="reset" value="batal"> <br>
 
    <?php
    if (isset($_GET['kirim'])){
         $saldoawal = $_GET ['saldoawal'];
         $bunga = $_GET ['bunga'];
         $bungahitung = $bunga/100;
         $bulan = $_GET ['bulan'];

         $saldoakhir = $saldoawal+($saldoawal*$bulan*$bungahitung);
     
         echo "Saldo awal = $saldoawal<br>";
         echo "Bunga = $bunga<br>";
         echo "Saldo akhir adalah ".$bulan." bulan adalah : Rp." .$saldoakhir.",-";
        }
    ?>
 </form>
 </body>
 </html>