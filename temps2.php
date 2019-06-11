<?php
/********************************************************/
/*			Control the weather V1.0					*/
/*			By Albert Seuba	- 042319					*/
/********************************************************/

/* parseamos in arguments del journey */
$json4 = file_get_contents('php://input'); 
$object = json_decode($json4, true);
$temps = $object['inArguments'][0]['message'];
$ciudad = $object['inArguments'][1]['ciudad'];

/* consultamos codigo ciudad */
$curl2 = curl_init();
curl_setopt_array($curl2, array(
  CURLOPT_URL => "http://dataservice.accuweather.com/locations/v1/cities/search?apikey=aE0Mu6wczdfgTIZacsEksP0KBDAUYZjr&q=".$ciudad,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
));

$response2 = curl_exec($curl2);
$err2 = curl_error($curl2);
curl_close($curl2);

if ($err) {
  echo "cURL2 Error #:" . $err2;
} else {

	$code = json_decode($response2);
	$codigo = $code[0]->{'Key'};
};
/* Consultamos el tiempo actual (ciudad=Barcelona), 
podemos variar la url pasando una variable desde inArguments y transformando country a su código */
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://dataservice.accuweather.com/currentconditions/v1/".$codigo."?apikey=aE0Mu6wczdfgTIZacsEksP0KBDAUYZjr",
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

	$tempsbarcelona = json_decode($response);
	$accuweather_temps = $tempsbarcelona[0]->{'WeatherText'};
};
// parseamos el json por cada user que entra en el journey

	if ($temps == $accuweather_temps){
		$temps = 'true';      
	} 
	else{
		$temps = 'false';             
	}
	// cuando paramos el journey, a utilizar si queremos resetear una data extension guardando el valor anterior 
    if (isset($_GET['ready'])){
		$temps = '';       
	}
//devolvemos el outArgument al config.json para utilizar en la split activity (true | false)
echo '{"weather":"'.$temps.'"}';
?>
