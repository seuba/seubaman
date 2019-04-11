<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://dataservice.accuweather.com/currentconditions/v1/307297?apikey=aE0Mu6wczdfgTIZacsEksP0KBDAUYZjr",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 // echo $response;
	
	$tempsbarcelona = json_decode($response);
	$plou2 = $tempsbarcelona[0]->{'HasPrecipitation'};
	$baseicon = 'https://vortex.accuweather.com/adc2010/images/slate/icons/';
	$icon = $tempsbarcelona[0]->{'WeatherIcon'};
	$plou3 = $tempsbarcelona[0]->{'WeatherText'};
	
	
	
	
	echo $plou3;
		
	};


?>