<?php
/********************************************************/
/*			Coronavirus V1.0					*/  
/*			By Albert Seuba	- 041320					*/
/********************************************************/

/* parseamos in arguments del journey */
$infectats = $_GET['infected'];
if(isset($infectats)){
  echo $infectats;
  $myfile = fopen("corona.txt", "w") or die("Unable to open file!");
$txt = $infectats;
fwrite($myfile, $txt);
fclose($myfile);
}
else{

/* consultamos codigo ciudad */ 
$curl2 = curl_init();
curl_setopt_array($curl2, array(
  CURLOPT_URL => "https://www.worldometers.info/coronavirus/country/spain/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
));

$response2 = curl_exec($curl2);

$err2 = curl_error($curl2);
echo ($err2);
curl_close($curl2);

 function get_html_title($html){
    preg_match("/\<span.*\>(.*)\<\/span\>/isU", $html, $matches);
    return $matches[1];
}
$html = get_html_title($response2);
echo $html;


  
  ?>
<?php } ?>

