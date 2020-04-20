<?php

$dom = new DomDocument();
$dom->loadHTMLFile('https://www.worldometers.info/coronavirus/country/spain/');
$classname = 'maincounter-number';
$finder = new DomXPath($dom);
$nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
$tmp_dom = new DOMDocument(); 
foreach ($nodes as $node) 
    {
    $tmp_dom->appendChild($tmp_dom->importNode($node,true));
    }
$innerHTML.=trim($tmp_dom->saveHTML()); 
 $innerHTML =  str_replace('<div class="maincounter-number">
<span style="color:#aaa">',"",$innerHTML);
  $innerHTML =  str_replace(' </span>',"",$innerHTML);

 $innerHTML =  str_replace('
</div><div class="maincounter-number">
<span>',"",$innerHTML);

 $innerHTML =  str_replace('</span>
</div><div class="maincounter-number" style="color:#8ACA2B ">
<span>',"",$innerHTML);
$innerHTML =  str_replace('</span>
</div>',"",$innerHTML);
$innerHTML =  str_replace(',',"",$innerHTML);

  $innerHTML1 =  substr( $innerHTML, 0,6); 
 $innerHTML2 =  substr( $innerHTML, 6,5); 
 $innerHTML3 =  substr( $innerHTML, 11,6);
$suma = $innerHTML2 + $innerHTML3;
$restant = $innerHTML1 - $suma;

echo $restant;


$post = [
    'number' => $restant,
    
];
  
$curl4 = curl_init();
curl_setopt_array($curl4, array(
  CURLOPT_URL => "http://cloud.avis-comms.international/cor",
  CURLOPT_POSTFIELDS => $post,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
));

$response4 = curl_exec($curl4);


  ?>


