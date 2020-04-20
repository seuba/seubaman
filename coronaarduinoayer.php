<?php
/********************************************************/
/*			Coronavirus V1.0					*/  
/*			By Albert Seuba	- 041320					*/
/********************************************************/



$curl2 = curl_init();
curl_setopt_array($curl2, array(
  CURLOPT_URL => "http://cloud.avis-comms.international/cor",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
));

$response2 = curl_exec($curl2);
echo $response2;
?>
