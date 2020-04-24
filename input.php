<html>

<head>
    <title>UTS - Pemrograman Web 02</title>
</head>

<body>
    <h2 align="Center">UTS - Pemrograman Web 02</h2>
    <h3 align="Center">suroso</h3>
    <h4 align="Center">(( 2015141123 ))</h4>
    <hr />
    <form action="" method="post">
        <table border="0" cellspacing="10">
            <tr>
                <td>Wilayah</td>
                <td>
                    <select name="wilayah">
                        <option>DKI Jakarta </option>
                        <option>Jawa Barat </option>
                        <option>Banten </option>
                        <option>Jawa Tengah </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Positif</td>
                <td><input type="text" name="positif" /></td>
            </tr>
            <tr>
                <td>Jumlah Dirawat</td>
                <td><input type="text" name="rawat" /></td>
            </tr>
            <tr>
                <td>Jumlah Sembuh</td>
                <td><input type="text" name="sembuh" /></td>
            </tr>
            <tr>
                <td>Jumlah Meninggal</td>
                <td><input type="text" name="mati" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Simpan" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['positif']) || empty($_POST['rawat'])) {
        print "Lengkapi form";
    } else {
        $namasaya = "suroso";
        $nimsaya = "2015141123";
        $date = date('d-m-Y H:i:s');
        $area = $_POST['wilayah'];
        $positif = $_POST['positif'];
        $rawat = $_POST['rawat'];
        $sembuh = $_POST['sembuh'];
        $mati = $_POST['mati'];

        $buka = fopen("hasil.html", 'a');
        fwrite($buka, "<p align=center>Data Pemantauan Covid19 wilayah " . $area . "</p>");
        fwrite($buka, "<p align=center>Per " . $date . "</p>");
        fwrite($buka, "<p align=center>Nama : " . $namasaya . " / Nim : " . $nimsaya . "</p>");
        fwrite($buka, "<br>");
        fwrite($buka, "<br>");
        fwrite($buka, "<table border='1' align=center width='600' height='100'>;
        <tr>
    	        <td align=center>Jumlah Positif</td>
                <td align=center>Jumlah Dirawat</td>
                <td align=center>Jumlah Sembuh</td>
                <td align=center>Jumlah Meninggal</td>
            </tr>
	        <tr>
		        <td align=center> $positif</td>
		        <td align=center> $rawat</td>
		        <td align=center> $sembuh</td>
		        <td align=center> $mati</td>
	        </tr>");
        fclose($buka);
    }
} ?>