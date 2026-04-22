<?php
$kasa = 20;

function praca(){
    echo "pracu,pracu .. .. ";
    return 20;
}

function piwotaranjasne($kase){
    echo "hahahahhah dobre piwo..";
    return $kasa -5;
}

$kasa += praca()
$kasa += praca()
$kasa += praca()
$kasa += praca()
$kasa += praca()

$kasa = piwotaranjasne($kasa);
$kasa = piwotaranjasne($kasa);
$kasa = piwotaranjasne($kasa);
$kasa = piwotaranjasne($kasa);
$kasa = piwotaranjasne($kasa);

echo "stan kopnta $kasa zl";
?>