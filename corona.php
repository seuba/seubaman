<?php
/********************************************************/
/*			Coronavirus V1.0					*/
/*			By Albert Seuba	- 041320					*/
/********************************************************/

/* parseamos in arguments del journey */


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
echo ($response2);
$err2 = curl_error($curl2);
echo ($err2);
curl_close($curl2);

?>
<pre class="seuba" id="id">aaa</pre>
<script>

function parseHTML(markup) {
    if (markup.toLowerCase().trim().indexOf('<!doctype') === 0) {
        var doc = document.implementation.createHTMLDocument("");
        doc.documentElement.innerHTML = markup;
        return doc;
    } else if ('content' in document.createElement('template')) {
       // Template tag exists!
       var el = document.createElement('template');
       el.innerHTML = markup;
       return el.content;
    } else {
       // Template tag doesn't exist!
       var docfrag = document.createDocumentFragment();
       var el = document.createElement('body');
       el.innerHTML = markup;
       for (i = 0; 0 < el.childNodes.length;) {
           docfrag.appendChild(el.childNodes[i]);
       }
       return docfrag;
    }
}
var htmll = <?php echo $response2 ?>;
var links2 = parseHTML(htmll).getElementsByTagName('title')[0].text;

var str = links2;

document.getElementById("id").innerHTML= str;

</script>
