<?php

    $a = 1 ;
    while($a < 10){
        $a += 1;
        // echo "ok bro is work \n";
    }


    // declaration un tableau
    // first method
    $list  = array(12,12,13,234,35);
    //2nd method
    $list2 = [1,21,24,45,65,57];

    // echo $list[1],"  \n";
    $list[1] = 20;
    // echo $list[1] , "  \n";

    $lengthtab =  count($list2);

    foreach ($list as $i ) {
        // echo $i," " ;
    }

    for($i = 0 ; $i < $lengthtab;$i++){
        // echo $list2[$i] , " ";
    }

    

    $note = [16,19,18];
    $lenghttab = count($note);
    

    function moyenne($note){
        
        $moy = 0;
        foreach($note as $n ){
            $moy += $n ;
        }
        $moyenne = round($moy/3,2);
        return $moyenne ;
    }

    function maximum($note){
        $lenghttab = count($note);
        $max = $note[0];

        for ($i=0; $i < $lenghttab ; $i++) { 
            if ($max < $note[$i]){
                $max = $note[$i];
            }
        }
        return $max;
    }

    echo moyenne($note);
    echo "\n la meilleure note est :",maximum($note);

    


?>