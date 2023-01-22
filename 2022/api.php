<?php
ini_set('display_errors', 0);


header('Content-Type: application/json');

if (empty($_POST["ad"])) {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'ad eksik!'
    ));
    exit;
} else if (empty($_POST["soyad"])) {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'soyad eksik!'
    ));
    exit;
}

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://91.151.94.142/isimsorgu/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'isim='.$ad.'&soyisim='.$soyad,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);
		$fuck4 = json_decode($response, true);
        for ($row = 0; $row <= count($fuck4); $row++) {
            $fucktc = $fuck4[$row]['TC'];
            $fuckad = $fuck4[$row]['ADI'];
            $fucksoyad = $fuck4[$row]['SOYADI'];
            $fuckanne = $fuck4[$row]['ANAADI'];
            $fuckbaba = $fuck4[$row]['BABAADI'];
            $cuu = $fuck4[$row]['DOGUMYERI'];
            $cuu2 = substr($fuck4[$row]['DOGUMTARIHI'], 0, 10);
            $cuu3 = $fuck4[$row]['ADRESIL'] . " " . $fuck4[$row]['ADRESILCE']. " " . $fuck4[$row]['MAHALLE']. " " . $fuck4[$row]['CADDE']. " " . $fuck4[$row]['KAPINO']. " " . $fuck4[$row]['DAIRENO'];
            echo "<tr><td>".$fucktc."</td>"; echo "<td>".$fuckad." ".$fucksoyad."</td>"; echo "<td>".$fuckanne."</td>"; echo "<td>".$fuckbaba."</td>";echo "<td>".$cuu."</td>";echo "<td>".$cuu2."</td>";echo "<td>".$cuu3."</td>";

        }
curl_close($curl);