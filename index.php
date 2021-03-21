<?php
$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$origin = "http://www.mc-netcraft.de/banknoteapi/getbanknote.php?origin=YA4592330054";
$series = "http://www.mc-netcraft.de/banknoteapi/getbanknote.php?series=YA4592330054";
$isvalid = "http://www.mc-netcraft.de/banknoteapi/getbanknote.php?isvalid=YA4592330054";
?>
<center>
<title>CoinAPI</title>
<p><h1>CoinApi</h1></p>
<p><h2>The free Euro-Banknote-API</h2></p>
<p><?=$url?>getbanknote.php?[Argument]=[BanknoteID]</p>
<table>
  <tr>
    <th>[Argument] value</th>
    <th>Returned value</th>
  </tr>
  <tr>
    <td>origin</td>
    <td>Returns Banknote Origin</td>
  </tr>
  <tr>
    <td>series</td>
    <td>Returns if it is series 1 or 2</td>
  </tr>
  <tr>
    <td>isvalid</td>
    <td>Returns if the banknote is valid</td>
  </tr>
</table>
<p>Examples with "YA4592330054":</p>
<p>Origin: <?=file_get_contents($origin)?></p>
<p>Series: <?=file_get_contents($series)?></p>
<p>isvalid: <?=file_get_contents($isvalid)?></p>
<p><h2>Code examples</h2></p>
<p>Shows how to make an API call.</p>
<p>Variable "url" is http://www.mc-netcraft.de/banknoteapi/getbanknote.php?origin=YA4592330054</p>
<table>
  <tr>
    <th>Programming language</th>
    <th>Usage</th>
    <th>Response</th>
  </tr>
  <tr>
    <td>PHP</td>
    <td>echo file_get_contents($url);</td>
    <th>Greece</th>
  </tr>
  <tr>
    <td>Python</td>
    <td>import urllib.request<br>response = urllib.request.urlopen(url)<br>print(response.read())</td>
    <td>'Greece'</td>
  </tr>
</table>
