<?php
$i = 0;
$n = 0;
$a = [];
$s= 0;
for ($i= 0 ; $i<10 ; $i++) {
    $n = ($i +1) *3;
    array_push($a,$n); // $a[] = ($i + 1) * 3;
    echo $n . "<br>";
};
for($i=0; $i<10; $i++){
    $s += $a[$i];

}
echo "<br> somma = " . $s;
?>  