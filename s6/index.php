<?php


    $list2 = [1 => 21 ,2 => 24, 3 => 45, 4 => 65];
    // echo $list2[3];


     $list1 = ["nom" => "ouassit" ,"prenom" => "soufiane", "age" => 21];
    // echo $list1["nom"];
    // $list1["niveau"] = "1A";
    // foreach($list1 as $cle => $lis ){
    //     // echo $cle , ":",$lis," ";
    // }

    $stagiaires = [["nom " => " ouassit" ,"prenom " => " soufiane", "age " => 21],
                    ["nom " => " kadioui" ,"prenom " => " mostapha", "age " => 20],
                    ["nom " => " ouassit" ,"prenom " => " hamza", "age " => 26]];

    array_push($stagiaires,["nom" => " ouassit" ,"prenom" => " roudouan", "age " => 21]);


    foreach($stagiaires as $st ){
        foreach($st as $tag => $pr){
            echo $tag , ":",$pr," ";
        }
        echo "\n";
    }



?>
