<?php
$json4 = '{
        "inArguments":[ 
                {
                    "message": "pumba"
                }]
            ,
        "outArguments": [
                 
                ],
        "activityObjectID": "1234abcd-56ef-78gh-90ij-9876klmn5432",
        "journeyId": "1234abcd-56ef-78gh-90ij-9876klmn5432",
        "activityId": "1234abcd-56ef-78gh-90ij-9876klmn5432",
        "definitionInstanceId": "1234abcd-56ef-78gh-90ij-9876klmn5432",
        "activityInstanceId": "1234abcd-56ef-78gh-90ij-9876klmn5432",
        "keyValue": "someContactKeyHere",
        "mode": 0
}';


/* $json4 = file_get_contents('php://input'); */
$object = json_decode($json4, true);


	$temps = $object['inArguments'][0]['message'];

$params = ['temps' => $temps];

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://pub.s1.exacttarget.com/ttddvbbzxv4",
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $params,
));
$curl = curl_init();
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
}
else{
	 echo "ok";
	  echo $temps ;
}


?>
