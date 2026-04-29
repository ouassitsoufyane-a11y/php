<?php 
              
    $table = [["nom"=>"bmw","stock"=>  "22","sold"=>" 18"],[ "nom"=>" golf","stock"=>  "22","sold"=>" 18"],[ "hilux"=>" volvo","stock"=>  "22","sold"=>" 18"]];

    
    function afficher($table){
        echo "<table border='1' cellpadding='10'>";
        echo "<tr>";
        echo "<th>Nom</th>";
        echo "<th>stock</th>";
        echo "<th>sold</th>";
        echo "</tr>";

        foreach($table as $table1){
            echo "<tr>";
            foreach ($table1 as $key => $row) {
            echo "<td> {$row} </td>";   
        }
        
        echo "</tr>";
        }
        

        echo "</table>";
    };

    function supprimer(&$table ,$name , $value){
        foreach($table as $table1){
            foreach ($table1 as $key => $row) {
                if($key == $name && $row == $value ){
                    unset($table1[$key]);
                    echo "okkkk";
                    return;
                }
                    
            }
        }
    }

    
    supprimer($table,"nom","bmw");
    afficher($table);
    
    


    

?>