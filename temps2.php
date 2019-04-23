<?php
$json4 = '{
        "inArguments":[ 
                {
                    "message": "pum"
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


	$temps = $object['inArguments'][0]['message'] . '<br>' ;


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://pub.s1.exacttarget.com/ttddvbbzxv4?temps=".$temps,
  CURLOPT_POST => true,
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
}
else{
	 echo "ok";
	  echo $temps ;
}


?>
