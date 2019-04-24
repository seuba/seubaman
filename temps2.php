<?php
$json4 = '{
        "inArguments":[ 
                {
                    "message": "a"
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



      //  $json4 = file_get_contents('php://input'); 
$object = json_decode($json4, true);
   $temps = $object['inArguments'][0]['message'];



$ch = curl_init();
 
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,"https://pub.s1.exacttarget.com/ttddvbbzxv4");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "temps=$temps");
 
// recibimos la respuesta y la guardamos en una variable
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);
 
// cerramos la sesión cURL
curl_close ($ch);
 
// hacemos lo que queramos con los datos recibidos
// por ejemplo, los mostramos


echo '{"foundSignupDate": "2016-03-10"};


?>

