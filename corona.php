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
$response3 = str_replace("CiZsdDshRE9DVFlQRSBodG1sJmd0OwombHQ7IS0tW2lmIElFIDhdJmd0OyAmbHQ7aHRtbCBsYW5nPSZxdW90O2VuJnF1b3Q7IGNsYXNzPSZxdW90O2llOCZxdW90OyZndDsgJmx0OyFbZW5kaWZdLS0mZ3Q7CiZsdDshLS1baWYgSUUgOV0mZ3Q7ICZsdDtodG1sIGxhbmc9JnF1b3Q7ZW4mcXVvdDsgY2xhc3M9JnF1b3Q7aWU5JnF1b3Q7Jmd0OyAmbHQ7IVtlbmRpZl0tLSZndDsKJmx0OyEtLVtpZiAhSUVdJmd0OyZsdDshLS0mZ3Q7ICZsdDtodG1sIGxhbmc9JnF1b3Q7ZW4mcXVvdDsmZ3Q7ICZsdDshLS0mbHQ7IVtlbmRpZl0tLSZndDsKJmx0O2hlYWQmZ3Q7CiZsdDttZXRhIGNoYXJzZXQ9JnF1b3Q7dXRmLTgmcXVvdDsmZ3Q7CiZsdDttZXRhIGh0dHAtZXF1aXY9JnF1b3Q7WC1VQS1Db21wYXRpYmxlJnF1b3Q7IGNvbnRlbnQ9JnF1b3Q7SUU9ZWRnZSZxdW90OyZndDsKJmx0O21ldGEgbmFtZT0mcXVvdDt2aWV3cG9ydCZxdW90OyBjb250ZW50PSZxdW90O3dpZHRoPWRldmljZS13aWR0aCwgaW5pdGlhbC1zY2FsZT0xJnF1b3Q7Jmd0OwombHQ7dGl0bGUmZ3Q7","",$response3);
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
alert(decodedString); // Outputs: "Hello World!"
var links2 = parseHTML(decodedString ).getElementsByTagName('title')[0].text;
console.log(linsk2);


document.getElementById("id").innerHTML= links2;

</script>
