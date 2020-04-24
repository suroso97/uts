<?php
include("koneksi.php");
?>
<html>

<head>
    <title>
    </title>
    <style>
        body p {
            text-align: center;
        }

        table {
            margin-left: 30%;
            width: 20px;
        }

        table tr td {
            text-align: center
        }
    </style>

</head>

<body>







    <br>
    <br>
    <p align="center">Data Pemantauan Covid19 wilayah <?php echo 'Banten'; ?> <br> 18 April 2020 21:38:16
        (<?php
            date_default_timezone_set('Asia/Jakarta');
            $time = time();
            echo date('l, d-m-y H:i:s a');  ?>)<br>
        suroso Mon/<?php echo '2015141123'; ?></p>


    <table border="1" cellspacing="10" cellpadding="20">

        <thead>
            <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1;
            $sql = "SELECT * FROM covid";
            $query = mysqli_query($koneksi, $sql);
            while ($pasien = mysqli_fetch_array($query)) {

                echo "<tr>";
                echo "<td>" . $pasien['jumlah_positif'] . "</td>";
                echo "<td>" . $pasien['jumlah_dirawat'] . "</td>";
                echo "<td>" . $pasien['jumlah_sembuh'] . "</td>";
                echo "<td>" . $pasien['jumlah_meninggal'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>



</body>

</html>