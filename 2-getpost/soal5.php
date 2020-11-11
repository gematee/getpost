<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" actions="#">
    <table>
        <tr>
            <td>Nama Lengkap </td>
            <td>= <input type="text"name="nama"></td>
        </tr>
        <tr>
            <td>Tempat Lahir </td>
            <td>= <input type="text"name="tempat"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir </td>
            <td>=
                <select name="tgl" value="Tanggal">
                    <option value="1">1</option><option value="2">2</option><optionvalue="3">3</option>
                    <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                    <optionvalue="7">7</option><option value="8">8</option><option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option><option value="12">12</option><option value="13">13</option>
                    <option value="14">14</option><option value="15">15</option><option value="16">16</option>
                    <option value="17">17</option><option value="18">18</option><option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option><option value="22">22</option><option value="23">23</option>
                    <option value="24">24</option><option value="25">25</option><option value="26">26</option>
                    <option value="27">27</option><option value="28">28</option><option value="29">29</option>
                    <option value="30">30</option><option value="31">31</option>
                </select>
                <select name="bln" value="Bulan">
                    <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                    <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                    <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option><option value="12">12</option>
                </select>
                <select name="thn" value="Tahun">
                    <option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option>
                    <option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option>
                    <option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option>
                    <option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option>
                    <option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option>
                    <option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option>
                    <option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat Rumah </td>
            <td>= <input type="text"name="alamat"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td>= <input type="radio"name="kelamin"value="Laki-Laki">Laki-Laki<input type="radio"name="kelamin"value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td>Asal Kampus</td>
            <td>= <input type="text"name="Kampus"></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td>= <input type="text"name="nilai"></td>
        </tr>
    </table>
    <input type="submit"value="kirim" name="kirim">
</form>

<?php
if (isset($_POST['kirim'])){

    echo "Nama:$_POST[nama]<br>";
    echo "Tempat Lahir:$_POST[tempat]<br>";
    echo "Tanggal Lahir:$_POST[tgl] - $_POST[bln] - $_POST[thn]<br>";
    echo "Alamat Rumah:$_POST[alamat]<br>";
    echo "Jenis Kelamin:$_POST[kelamin]<br>";
    echo "Asal Kampus:$_POST[Kampus]<br>";
    echo "Nilai:$_POST[nilai]<br>";
}
?>
</body>
</html>