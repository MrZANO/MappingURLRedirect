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
	
	//fare Curl con url_nuova_ricerca
}