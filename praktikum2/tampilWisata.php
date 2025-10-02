<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

//check

$send = curl("http://localhost/rekayasaweb/praktikum2/getWisata.php");

$data = json_decode($send, TRUE);

foreach($data as $row){
    echo $row["id_wisata"],"<br/>";
    echo $row["Kota"],"<br/>";
    echo $row["Landmark"],"<br/>";
    echo $row["Tarif"],"<br/><hr/>";
}
?>