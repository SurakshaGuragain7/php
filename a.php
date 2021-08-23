<?php
$a = ['3', '1', '5', '13', '18', '2', '4'];
$num = count($a);
for($i=0; $i < $num; $i++){
    for ($j = $i + 1; $j < $num; $j++) 
    {
        if ($a[$i] > $a[$j])
        {
            $temp = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $temp;
        }
    }    
}
print_r($a);
?>