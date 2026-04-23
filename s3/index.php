<?php 
    $nom = $_GET['nom'];
    $prenom  = $_GET['prenom'];
    $genre = $_GET['genre'];
    $niveau = $_GET['niveau'];

    
    echo "nom :".$nom . "<br>";
    echo "prenom :".$prenom . "<br>";
    echo "genre :".$genre . "<br>";
    foreach($_GET['niveau'] as $n) {
    echo $n . "<br>";}
?>