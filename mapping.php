<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$valorexpath = $_POST['valorexpath'];
$url =$_POST['url'];
$urlricerca = $_POST['urlricerca'];

//$data['entry'] = isset($data['entry'][0]) ? $data['entry'] : array($data['entry']);
foreach ($valorexpath as $key => $value) {
	$url_nuova_ricerca = $urlricerca.$value;
	echo $url_nuova_ricerca;
	//test
	echo "</br>";
	///url prova
	$url_nuova_ricerca ="https://www.carpisa.it/it_it/BSA49201442?_q=BSA49201442&map=ft&page=1";
	//fare Curl con url_nuova_ricerca
$ch = curl_init($url_nuova_ricerca);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
$result = curl_exec($ch);

echo htmlentities($result);

//estrarre tutti gli URL


//$ch = curl_init($url_nuova_ricerca);
//curl_setopt($ch, CURLOPT_HEADER, 1);
//$response = curl_exec($ch);
//$response = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
//     $start = stripos($response, "<body");
//     $end = stripos($response, "</body");
//
//     $body = substr($response,$start,$end-$start);
//	 
//echo ($body);
}
