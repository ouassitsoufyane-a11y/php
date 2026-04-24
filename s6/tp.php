<?php
    $glist = [["nom" => "ouassit" ,"prenom" => "hamza", "age" => 26]];
    $list = ["nom" => "ouassit" ,"prenom" => "soufiane", "age" => 21];

    function insertion($list,$glist){
        if(!empty($list)){
            array_push($glist,$list);
            foreach($glist as $plist){
                foreach($plist as $key => $value){
                    echo $key . " : " . $value ."\n";
                }
            }
            
             
        } else {
            echo "not found hh";
        }
}

    insertion($list,$glist);

    

?>