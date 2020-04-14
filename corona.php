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
$response2 = htmlentities($response2);
$response3 = '"'.base64_encode($response2).'"';
echo $response3 ;
$err2 = curl_error($curl2);
echo ($err2);
curl_close($curl2);

?>
<div class="seuba" id="id">aaa</div>
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
var htmll = <?php echo $response3 ?>;
var decodedString = atob(htmll);
var decodedString = decodedString.replace("&lt;title&gt;", "<!doctype html><html><head><title>");
var decodedString = decodedString.replace("&lt;/title&gt;", "</title></head><body><a>Link 1</a><a>Link 2</a></body></html>");
var decodedString = decodedString.replace("&lt;!DOCTYPE html&gt;", "");
var decodedString = decodedString.replace("&lt;!--[if IE 8]&gt; &lt;html lang=&quot;en&quot; class=&quot;ie8&quot;&gt; &lt;![endif]--&gt;", "");
var decodedString = decodedString.replace("&lt;!--[if IE 9]&gt; &lt;html lang=&quot;en&quot; class=&quot;ie9&quot;&gt; &lt;![endif]--&gt;", "");
var decodedString = decodedString.replace("&lt;!--[if !IE]&gt;&lt;!--&gt; &lt;html lang=&quot;en&quot;&gt; &lt;!--&lt;![endif]--&gt;", "");
var decodedString = decodedString.replace("&lt;head&gt;", "");
var decodedString = decodedString.replace("&lt;meta charset=&quot;utf-8&quot;&gt;", "");
var decodedString = decodedString.replace("&lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;", "");
var decodedString = decodedString.replace("&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;", "");
console.log(decodedString);
var links2 = parseHTML(decodedString ).getElementsByTagName('title')[0].text;
console.log(links2);
document.getElementById("id").innerHTML= links2;
</script>
