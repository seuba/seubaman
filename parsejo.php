<?php
$doc = new DomDocument();
$doc->loadHTMLFile('https://www.worldometers.info/coronavirus/country/spain/');
$thediv = $doc->getElementById('maincounter-wrap');
echo $thediv->textContent;

?>
