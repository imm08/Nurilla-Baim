<html>
<head>
    <title>Jadwal Harian andi</title>
</head>
<body>
    <h2>Jadwal Harian andi</h2>

    <form method="post">
        <label for="jam">Masukkan Jam (HH:MM): </label>
        <input type="time" id="jam" name="jam" step="1">
        <input type="submit" value="Cek Jadwal">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];
        list($hour, $minute) = explode(":", $jam);
        $jamTotal = ($hour * 60) + $minute;

        // 15:30 - 15:45 (Pulang sekolah dan tiba di rumah)
        if ($jamTotal >= 930 && $jamTotal < 945) {
            echo "$jam = Andi pulang sekolah dan tiba di rumah.";  }
        // 15:45 - 16:00 (Andi mandi sebelum mengaji)
        elseif ($jamTotal >= 945 && $jamTotal < 960) {echo "$jam = Andi mandi sebelum mengaji.";  }
        // 16:00 - 16:30 (Andi mengaji)
        elseif ($jamTotal >= 960 && $jamTotal < 990) {echo "$jam = Andi mengaji.";  }
        // 16:30 - 18:30 (Andi mengerjakan tugas sekolah)
        elseif ($jamTotal >= 990 && $jamTotal < 1140) {echo "$jam = Andi mengerjakan tugas sekolah.";  }
        // 18:30 - 18:35 (Sholat Maghrib)
        elseif ($jamTotal >= 1080 && $jamTotal < 1085) {echo "$jam = Andi sholat Maghrib.";  }
        // 18:35 - 18:40 (Andi membeli bumbu masakan)
        elseif ($jamTotal >= 1085 && $jamTotal < 1090) {echo "$jam = Andi membeli bumbu masakan.";  }
        // 18:40 - 19:10 (Andi makan malam)
        elseif ($jamTotal >= 1090 && $jamTotal < 1150) {echo "$jam = Andi makan malam.";  }
        // 19:10 - 19:15 (Sholat Isya)
        elseif ($jamTotal >= 1150 && $jamTotal < 1155) {echo "$jam = Andi sholat Isya.";  }
        // 19:15 - 19:45 (Andi menghafalkan dialog)
        elseif ($jamTotal >= 1155 && $jamTotal < 1195) {echo "$jam = Andi menghafalkan dialog.";  }
        // 19:45 - 20:20 (Andi chatting dengan Raya mengenai persiapan festival)
        elseif ($jamTotal >= 1195 && $jamTotal < 1220) {echo "$jam = Andi chatting dengan Raya mengenai persiapan festival.";  }
        // 20:20 - 20:50 (Andi mengobrol bersama keluarga)
        elseif ($jamTotal >= 1220 && $jamTotal < 1250) {echo "$jam = Andi mengobrol bersama keluarga.";  }
        // 20:50 - 22:00 (Andi bersiap tidur)
        elseif ($jamTotal >= 1250 && $jamTotal < 1380) {echo "$jam = Andi bersiap tidur.";  }
        // 22:00 (Andi tidur)
        elseif ($jamTotal >= 1380 && $jamTotal < 1440) {echo "$jam = Andi tidur.";  }
        // Waktu selain yang disebutkan
        else {echo "$jam = Tidak ada kegiatan pada jam ini.";}
    }
?>

    <hr>
    <h3>Nama-Nama Diskusi:</h3>
    <p>Nama: andi</p>
    <p>Tim Diskusi: [krisna dan malka]</p>
<p></p>
<p></p>
<table border="1">
    <thead>
        <tr>
            <th>Kegiatan</th>
            <th>Waktu</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Andi pulang sekolah dan tiba di rumah</td>
            <td>15:30 - 15:45</td>
        </tr>
        <tr>
            <td>Andi mandi sebelum mengaji</td>
            <td>15:45 - 16:00</td>
        </tr>
        <tr>
            <td>Andi mengaji</td>
            <td>16:00 - 16:30</td>
        </tr>
        <tr>
            <td>Andi mengerjakan tugas sekolah</td>
            <td>16:30 - 18:30</td>
        </tr>
        <tr>
            <td>Andi sholat Maghrib</td>
            <td>18:30 - 18:35</td>
        </tr>
        <tr>
            <td>Andi membeli bumbu masakan</td>
            <td>18:35 - 18:40</td>
        </tr>
        <tr>
            <td>Andi makan malam</td>
            <td>18:40 - 19:10</td>
        </tr>
        <tr>
            <td>Andi sholat Isya</td>
            <td>19:10 - 19:15</td>
        </tr>
        <tr>
            <td>Andi menghafalkan dialog</td>
            <td>19:15 - 19:45</td>
        </tr>
        <tr>
            <td>Andi chatting dengan Raya mengenai persiapan festival</td>
            <td>19:45 - 20:20</td>
        </tr>
        <tr>
            <td>Andi mengobrol bersama keluarga</td>
            <td>20:20 - 20:50</td>
        </tr>
        <tr>
            <td>Andi bersiap tidur</td>
            <td>20:50 - 22:00</td>
        </tr>
        <tr>
            <td>Andi tidur</td>
            <td>22:00</td>
        </tr>
    </tbody>
</table>

</body>
</html>
