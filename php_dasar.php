<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
    <br>
    <!--variable php-->
    <h2>Menggunakan Variabel</h2>
    <?php
        $nim = "312110362";
        $nama = 'Raihan Syahwal';
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
    <h2>Predefine Variabel</h2>
    <?php
        echo 'Selamat Datang ' . $_GET['nama'];
    ?>
    <h2>Forn Input</h2>
    <form method:="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>
    <h2>Operator</h2>
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
    <h2>Kondisi IF</h2>
    <?php
    $nama_hari = date("1");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
    <h2>Kondisi SWITCH</h2>
    <?php
        $nama_hari = date("l");
        switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
        }
    ?>
    <h2>Perulangan FOR</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }
        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
        }
    ?>
    <h2>Perulangan WHILE</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
    ?>
    <h2>Perulangan DOWHILE</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        do {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        } while ($i<=10);
    ?>
        <fieldset>
        <legend><h1>JAWABAN_TUGAS</h1></legend>
            <form method="post">
                    <label>Nama: </label>
                    <input type="text" name="nama">
                    <br>
                    <label>Tanggal Lahir: </label>
                    <input type="text" name="tgl_lahir">
                    <br>
                    <label>jabatan: 
                    <select name='pekerjaan'>
                        <option value='kepala_sekolah'>kepala sekolah</option>
                        <option value='guru_swasta'>guru swasta</option>
                        <option value='guru_honorer'>guru honorer</option>
                        <option value='OB'>Ob</option>
                    </select>
                    </label>
                    <br>
                    <input type="submit" value="Kirim">
            </form>
            <br>
            <?php
                # Memanggil Nama
                echo 'Nama: ' . $_POST['nama'];

                #menghitung umur
                $tanggal_lahir = new DateTime("1990-05-26");
                $sekarang = new DateTime("today");
                if ($tanggal_lahir > $sekarang) { 
                $thn = "0";
                $bln = "0";
                $tgl = "0";
                }
                #memanggil umur
                $thn = $sekarang->diff($tanggal_lahir)->y;
                $bln = $sekarang->diff($tanggal_lahir)->m;
                $tgl = $sekarang->diff($tanggal_lahir)->d;
                echo "<br> umur:". $thn." tahun ".$bln." bulan ".$tgl." hari";

                # Memanggil pekerjaan
                echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

                # Kondisi if pekerjaan untuk menentukan gaji
                $pekerjaan = @$_POST['pekerjaan'];

                if($pekerjaan == "kepala_sekolah"){
                    echo '<br> Gaji: Rp. 10.000.000,-';
                }elseif($pekerjaan == "guru_swasta"){
                    echo '<br> Gaji: Rp. 8.000.000,-';
                }elseif($pekerjaan == "guru_honorer"){
                    echo '<br> Gaji: Rp. 5.000.000,-';
                }elseif($pekerjaan == "OB"){
                    echo '<br> Gaji: Rp. 4.000.000,-';
                }
            ?>
        </fieldset>
</body>
</html>