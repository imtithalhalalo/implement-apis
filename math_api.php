<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$calculations = pow($a,3) + $b * $c - $a / $b; 

$result = [
    "a" => $a,
    "b" => $b,
    "c" => $c,
    "calculations" => $calculations
];
echo json_encode($result)
?>
