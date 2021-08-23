<?php
    function addNumbers($x, $y){
        $sum = 0;
        for($i=1; $i<=$y; $i++){
            if($i % $x == 0){
                $sum = $sum + $i ;
            }
        }
        if($sum!= 0){
            return $sum;
        }
    }
?>