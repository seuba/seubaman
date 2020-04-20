<?php
$doc = new DomDocument();
$doc->loadHTMLFile('https://www.worldometers.info/coronavirus/country/spain/');
$thediv = $doc->getElementById('maincounter-wrap');
echo $thediv->textContent;

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
echo $innerHTML;
?>
