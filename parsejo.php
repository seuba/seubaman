<?php
$doc = new DomDocument();
$doc->loadHTMLFile('https://www.worldometers.info/coronavirus/country/spain/');
$thediv = $doc->getElementsByClassName('maincounter-number');
echo $thediv->textContent;

?>
