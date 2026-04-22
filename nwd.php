<?php
$a = 12;
$b = 8;
while ($a !=$b) {
    ifg ($a > $b){
        $a = $a - $b;
    } else {
        $b = $b - $a;
    }
}
echo "NWD= " . $a;
?>