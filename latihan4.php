<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style> 
body {
    background-image:url(bc.jpg);
    background-size: 100%;
    }</style>
<body>
    <center>
        <h2>Form Cetak Nilai Siswa</h2>
        <h1>SMK ASSALAAM BANDUNG</h1>
        <h3>Tahun Ajaran 2021-2022</h3>
    <form action="latihan4part2.php" method="POST">
    <table border="2" bgcolor="white" cellpadding="2">
        <tr>
            <th align="left" colspan="4">
            Nama :<br>
            <input type="text" name="nama[]"></br>
            NIS :<br>
            <input type="number" name="nis[]"></br>
            <br>
            </th>
        </tr>
        <tr>
            <td>No</td>
            <td>Mata Pelajaran</td>
            <td>Nilai</td>
        </tr>

        <tr>
            <td>1</td>
            <td align="left">Pendidikan  Agama Islam</td>
            <td><input type="number" name="pai[]"></td>
        </tr>

        <tr>
            <td>2</td>
            <td align="left">Pendidikan Kewarganegaraan</td>
            <td><input type="number" name="pkn[]"></td>
        </tr>

        <tr>
            <td>3</td>
            <td align="left">Matematika</td>
            <td><input type="number" name="mtk[]"></td>
        </tr>

        <tr>
            <td>4</td>
            <td align="left">Bahasa Indonesia</td>
            <td><input type="number" name="indo[]"></td>
        </tr>

        <tr>
            <td>5</td>
            <td align="left">Bahasa Inggris</td>
            <td><input type="number" name="ingg[]"></td>
        </tr>

        <tr>
            <td>6</td>
            <td align="left">Produk Kreatif dan Kewirausahaan</td>
            <td><input type="number" name="kwu[]"></td>
        </tr>

        <tr>
            <td>7</td>
            <td align="left">Al-Quran</td>
            <td><input type="number" name="alquran[]"></td>
        </tr>

        <tr>
            <td>8</td>
            <td align="left">Bimbingan Konseling</td>
            <td><input type="number" name="bk[]"></td>
        </tr>

        <tr>
            <td>9</td>
            <td align="left">Produktif RPL</td>
            <td><input type="number" name="rpl[]"></td>
        </tr>

        <tr>
            <td>10</td>
            <td align="left">Produktif TKJ</td>
            <td><input type="number" name="tkj[]"></td>
        </tr>

        <tr>
            <td colspan="3" align="center" cellpadding="4">
                <input type="submit" name="cetak" value="Cetak Nilai">
            </td>
        </tr>
</table>
</form>
</center>
</body>
</html>
</table>