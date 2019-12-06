<?php

  $invoer = ($argv[1]);
  $geldeenheden = array(50,20,10,5,2,1);
  $centen = array(50,20,10,5);
  if (!is_numeric($invoer)) {
  exit ($invoer . " Je hebt geen geldig bedrag meegegeven ");
}
  if ($invoer < 0) {
exit ($invoer . " is negatief Ik kan geen negatief bedrag wisselen");
}

  $geld = intval($invoer);
  $cent = ($invoer) - $geld;
  $cent = floatval(round($cent * 100));
  $cent = round($cent / 5) *5;



  euro($geldeenheden, $geld);
function euro($geldeenheden, $geld)
{

  foreach ($geldeenheden as $value) {

  $restgeld = floor($geld / $value);
    if ($restgeld >= 1) {
      $geld = $geld - ($value * $restgeld);
      echo $restgeldGeld . " X €" . $value . " euro" . PHP_EOL;
   }
  }
}

centen($centen, $cent);

function centen($centen, $cent)
{
  foreach ($centen as $value) {
  $restcent = floor($cent / $value);
    if ($restcent >= 1) {
      $cent = $cent - ($value * $restcent);
      echo $restcent . " X €" . $value . " cent" . PHP_EOL;
        }
      }
    }
