<h2>1. Encode Array ke Json</h2>
<?php
$Motorcycle = array(
    "Ambagus"=>"Vario",
    "Aryak"=>"Beat",
    "Vian"=>"CBR",
    "Zaki"=>"Scoopy");

echo json_encode($Motorcycle);
?>

<h2>2. Decode Json ke PHP</h2>

<p>a. Mengakses Sebagai Object : </p>

<?php
$jsonobj = '{
    "Brand":"Honda",
    "Type":"Scoopy",
    "CC":"110 cc",
    "Speed": false
    }';

$obj=json_decode($jsonobj);

echo "Brand : " . $obj->Brand . "<br>";
echo "Type : " . $obj->Type . "<br>";
echo "CC : " . $obj->CC . "<br>"; 
echo "Speed : " . ($obj->Speed ? "Fast" : "Slow") . "<br>"; 
?>

<p>b. Mengakses Sebagai Array</p>

<?php
$jsonobj = '{
    "Brand":"Honda",
    "Type":"Vario",
    "CC":"125 cc",
    "Speed": true
    }';

$arr=json_decode($jsonobj, true);

echo "Brand : " . $arr["Brand"] . "<br>";
echo "Type : " . $arr["Type"] . "<br>";
echo "CC : " . $arr["CC"] . "<br>";
echo "Speed : " . ($arr["Speed"]? "Fast" : "Slow"). "<br>";
?>