<?php
$doc = new DomDocument();
$doc->loadHTMLFile('https://www.worldometers.info/coronavirus/country/spain/');
$thediv = $doc->getElementById('maincounter-wrap');
echo $thediv->textContent;
foreach($thediv AS $thedivs)
    {
  
   
        echo $thedivs -> textContent;


   


}
?>
