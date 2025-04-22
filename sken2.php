<?php
$jam = "15:00";

if ($jam >= "00:00" && $jam < "04:00") { $waktu = "Dini hari";
} elseif ($jam >= "04:00" && $jam < "10:00") { $waktu = "Pagi Hari";
} elseif ($jam >= "10:00" && $jam < "15:00") { $waktu = "Siang Hari";
} elseif ($jam >= "15:00" && $jam < "17:30") { $waktu = "Sore Hari";
} elseif ($jam >= "17:30" && $jam < "18:30") { $waktu = "Petang Hari";
} elseif ($jam >= "18:30" && $jam <= "24:00") { $waktu = "Malam Hari";
} else { $waktu = "Dunia lain";
}

echo "Jam $jam = $waktu";
?>
