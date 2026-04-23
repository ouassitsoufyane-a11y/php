<?php 

    $nom = 'ahmed';
    $prenom = 'sfrioui';
    $age = 21;
    $admis = true ; 
    $note = 18.5 ;
    $nb1 = 12;
    $nb2 = 13;
    $nb3 = 15;
    $somme = $nb1 + $nb2 + $nb3 ;
    $moyenne = round((($nb1 + $nb2 + $nb3)/3),2) ; 


    echo "je suis {$nom} {$prenom}  j'ai {$age}ans    ";
    echo "\nla somme est :  {$somme}  \n";

    var_dump($prenom);
    var_dump($age);
    var_dump($admis);
    $age = (string)$age;
    var_dump($age);

    // constant
    // const Departement = "DD" ;
    // or 
    define("departement","DD");
    // affichez 

    if ($moyenne >= 10) {
    echo "✔️ Admis  \n- Moyenne: $moyenne";
    } else {
    echo "❌ Non admis  \n - Moyenne: $moyenne";
    }

?>