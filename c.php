<?php
$a = array("a" =>'a', 'c', 'd', 'g','i');
$b = array("b" => 'x','z','n','k','d','l','a','m','n');
$result = array_intersect($a, $b);
print_r($result);
?>