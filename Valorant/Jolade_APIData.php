<?php

require 'database.php';

$url = 'https://na.api.riotgames.com/val/content/v1/contents?api_key=RGAPI-d23ad927-7c30-49d9-9a2a-11892cc62067';
  
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$response = json_decode($response, true);
curl_close($curl);

//var_dump($response);

//$dsn = 'mysql:host=localhost;dbname=valorant';
//$username = 'root';
//$password = '';

$getAgent = $response['characters'];
$agent = [];

$getMap = $response['maps'];
$map = [];

$getSkin = $response['chromas'];
$skin = [];

$getSpray = $response['sprays'];
$spray = [];

foreach($getAgent as $names){
	array_push($agent, $names['name']);
}

foreach($getMap as $maps){
	array_push($map, $maps['name']);
}

foreach($getSkin as $skins){
	array_push($skin, $skins['name']);
}

foreach($getSpray as $sprays){
	array_push($spray, $sprays['name']);
}

for($i =0;$i<11; $i++){
	$insertAgent = $agent[$i];
	$insertMap = $map[$i];
	$insertSkin = $skin[$i];
	$insertSpray = $spray[$i];
	//$query = "INSERT INTO valorant (agents, maps, skins, sprays) VALUES ('$insertAgent', '$insertMap', '$insertSkin', '$insertSpray')";
	
	//$db->exec($query);
}