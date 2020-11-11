<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <label for="jumlah">Nominal Uang</label>
    <input type="text" name="jumlah" id="jumlah"><br>
    <input type="submit" value="kirim" name="'kirim">
    <input type="reset" value="batal">
</form>
<?php
if (isset($_POST['kirim'])) {
        $uang = $_POST['jumlah'];
        $div1 = floor($uang/100000);
        $mod1 = $uang%100000;

        $div2 = floor($mod1/50000);
        $mod2 = $mod1%50000;

        $div3 = floor($mod2/20000);
        $mod3 = $mod2%20000;

        $div4 = floor($mod3/10000);
        $mod4 = $mod3%10000;

        $div5 = floor($mod4/5000);
        $mod5 = $mod4%5000;

        $div6 = floor($mod5/2000);
        $mod6 = $mod5%2000;

        $div7 = floor($mod6/1000);
        $mod7 = $mod6%1000;

        $div8 = floor($mod7/500);
        $mod8 = $mod7%500;

        $div9 = floor($mod8/200);
        $mod9 = $mod8%200;

        $div10 = floor($mod9/100);
        $mod10 = $mod9%100;

        $div11 = floor($mod10/50);
        $mod11 = $mod10%50;

        echo "Nominal uangnya adalah<br>";
        echo "Pecahan Rp.100.000 sebanyak ".$div1."  lembar<br>";
        echo "Pecahan Rp.50.000 sebanyak ".$div2."  lembar<br>";
        echo "Pecahan Rp.20.000 sebanyak ".$div3."  lembar<br>";
        echo "Pecahan Rp.10.000 sebanyak ".$div4."  lembar<br>";
        echo "Pecahan Rp.5.000 sebanyak ".$div5."  lembar<br>";
        echo "Pecahan Rp.2.000 sebanyak ".$div6."  lembar<br>";
        echo "Pecahan Rp.1.000 sebanyak ".$div7."  lembar<br>";
        echo "Pecahan Rp.500 sebanyak ".$div8."  lembar<br>";
        echo "Pecahan Rp.200 sebanyak ".$div9."  lembar<br>";
        echo "Pecahan Rp.100 sebanyak ".$div10." lembar<br>";
        echo "Pecahan Rp.50 sebanyak ".$div11." lembar<br>";
    }
?>
</body>
</html>