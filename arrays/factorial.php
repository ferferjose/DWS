<?php
    
    function factorial($i){
        $num = 1;
        if($i==0){
            return 1;
        }else{
            for ($j=1; $j<=$i ; $j++){
                $num=$num*$j;
            }
            return $num;
        }
    }
?>