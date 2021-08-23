<?php
$arr=['Trapper Wolf','Cara Dune','Bo-catan Cryze','Paul Sun-Hyung Lee','Dee Bradle Baker'];
$num= count($arr);
for($i=0; $i<$num; $i++){
    $fullname[]=explode(' ', $arr[$i]);
    $firstName = array_shift($fullname[$i]);
    $lastName = array_pop($fullname[$i]);
    $middleName = trim(implode(' ', $fullname[$i]));

echo '<br/>First: ' . $firstName . '<br/> ';
echo 'Middle: ' . $middleName . ' <br/>';
echo 'Last: ' . $lastName . ''; 
}
?>