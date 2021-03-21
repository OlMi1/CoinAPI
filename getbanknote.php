<?php
if($_GET['origin'] or $_GET['series'] or $_GET['isvalid'] or $_GET['getiso']){
  if($_GET['origin']){ //Return origin
    echo GetBanknoteOrigin($_GET['origin']);
  }
  if($_GET['series']){ //Return series
    echo GetSeries($_GET['series']);
  }
  if($_GET['isvalid']){ //Is valid?
    echo isValid($_GET['isvalid']);
  }
  if($_GET['getiso']){ //Return flag
    echo GetBanknoteISO($_GET['getiso']);
  }
}
else{
  echo "Invalid arguments!";
}

function GetBanknoteOrigin($Note){
  $Note = strtoupper($Note);
  $code = $Note[0];

  if($code == "B"){
    return "Lithuania";
  }
  if($code == "C"){
    return "Latvia";
  }
  if($code == "D"){
    return "Estonia";
  }
  if($code == "E"){
    return "Slovakia";
  }
  if($code == "F"){
    return "Malta";
  }
  if($code == "G"){
    return "Cyprus";
  }
  if($code == "H"){
    return "Slovenia";
  }
  if($code == "K"){
    return "Sweden";
  }
  if($code == "L"){
    return "Finland";
  }
  if($code == "M"){
    return "Portugal";
  }
  if($code == "N"){
    return "Austria";
  }
  if($code == "P"){
    return "Netherlands";
  }
  if($code == "R"){
    return "Luxembourg";
  }
  if($code == "S"){
    return "Italy";
  }
  if($code == "T"){
    return "Ireland";
  }
  if($code == "U"){
    return "France";
  }
  if($code == "V"){
    return "Spain";
  }
  if($code == "W"){
    return "Denmark";
  }
  if($code == "X"){
    return "Germany";
  }
  if($code == "Y"){
    return "Greece";
  }
  if($code == "Z"){
    return "Belgium";
  }
  else{
    return "FAKE";
  }
}

function GetSeries($note){
  if(in_array(strtoupper($note[1]), range('A', 'Z'))){
    return "2";
  }
  else{
    return "1";
  }
}

function isValid($note){
  foreach (range(0, 9) as $number) { //Letters 0-9
    $totalnumbers = $totalnumbers+substr_count($note, $number);
  }

  if($totalnumbers == 11 or $totalnumbers == 10){
    return "true";
  }
  else{
    return "false";
  }
}

function GetBanknoteISO($Note){
  $Note = strtoupper($Note);
  $code = $Note[0];

  if($code == "B"){
    return "LT";
  }
  if($code == "C"){
    return "LV";
  }
  if($code == "D"){
    return "EE";
  }
  if($code == "E"){
    return "SK";
  }
  if($code == "F"){
    return "MT";
  }
  if($code == "G"){
    return "CY";
  }
  if($code == "H"){
    return "SI";
  }
  if($code == "K"){
    return "SE";
  }
  if($code == "L"){
    return "FI";
  }
  if($code == "M"){
    return "PT";
  }
  if($code == "N"){
    return "AT";
  }
  if($code == "P"){
    return "NL";
  }
  if($code == "R"){
    return "LU";
  }
  if($code == "S"){
    return "IT";
  }
  if($code == "T"){
    return "IE";
  }
  if($code == "U"){
    return "FR";
  }
  if($code == "V"){
    return "ES";
  }
  if($code == "W"){
    return "DK";
  }
  if($code == "X"){
    return "DE";
  }
  if($code == "Y"){
    return "GR";
  }
  if($code == "Z"){
    return "BE";
  }
  else{
    return "FAKE";
  }
}
?>
