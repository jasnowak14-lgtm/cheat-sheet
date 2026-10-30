<?php 
require_once 'dane-start.php';
 
$suma = 0;
foreach ($produkty as $product) {
    $suma += ($product['cena'] * $product['ilosc']);
}

foreach ($produkty as $product) {
    $wartosc_produktu = $product['cena'] * $product['ilosc'];
    $procent_wartosci = ($wartosc_produktu / $suma) * 100;
    echo "Produkt: " . $product['nazwa'] . "<br>";
    echo "Wartość produktu: " . number_format($wartosc_produktu, 2, ',', ' ') . " zł<br>";
    echo "Procent wartości w stosunku do sumy: " . number_format($procent_wartosci, 2, ',', ' ') . "%<br><br>";
}

?>