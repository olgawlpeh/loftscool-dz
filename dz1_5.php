<?php
$bmw["model"] = "X5";
$bmw["speed"] = 120;
$bmw["doors"] = 5;
$bmw["year"] = "2015";


$toyota = array('model'=>'RAV4','speed'=>'190','doors'=>'3','year'=>'2010');

$opel = array(
    'model' => 'Astra',
    'speed' => 180,
    'doors' => 5,
    'year' => '2009'
);

$car["bmw"] = array("model" => "X5", "speed" =>
    "120", "doors" => "5","year" => "2015" );
$car["toyota"] = array("model" => "RAV4", "speed" =>
    "190", "doors" => "3","year" => "2010" );
$car["opel"] = array("model" => "Astra", "speed" =>
    "180", "doors" => "5","year" => "2009" );


echo 'CAR bmw '.'<br>';
echo $car["bmw"]["model"].' ';
echo $car["bmw"]["speed"].' ';
echo $car["bmw"]["doors"].' ';
echo $car["bmw"]["year"].'<br>';

echo 'CAR toyota '.'<br>';

foreach($toyota as $k => $v) {
    echo ' '.$v;
}
echo '<br>';

echo 'CAR opel '.'<br>';
foreach($opel as $k => $v) {
    echo ' '.$v;
}
