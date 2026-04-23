<?php 

    global $filiere ;
    function moyenne($note1 , $note2 , $note3){
        $filiere = "DD";
        return round(($note1+$note2+$note3)/3 , 2);
    }

    echo moyenne(12,12,14);

?>