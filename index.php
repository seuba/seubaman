<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Weather activity</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.js"></script> 
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/postmonger@0.0.16/postmonger.js"></script>
    <script type="text/javascript">
        (function() {
            var config = {
                baseUrl: ''
            };

            var dependencies = [
                'customActivity'
            ];

            require(config, dependencies);
        })();
    </script>

    <!--Styles-->
    <style type="text/css">
        body {
            padding: 20px;
            margin: 0;
        }
        .step {
            display: none;
        }
        #step1 {
            display: block;
        }
    </style>

</head>
<body>
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
	
	
	
	}
	?>
<div id="step1" class="step" style="width:100%">

    Select the weather:
    <select id="select1" style="width:100%;padding:10px">
        
        <option value="pluja"><?php echo $plou3;?></option>

    </select>

    <button id="toggleLastStep">Toggle Last Step</button>
</div>
<div id="step2" class="step">
    Here's a second page with some info on it.
</div>
<div id="step3" class="step">
    You chose the weather: <div id="message"></div>
</div>
<div id="step4" class="step">
    Hey, here's a fourth step, just for you.  Toggle this on or off from step 1.
</div>
</body>
</html>