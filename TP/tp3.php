<?php 

    $callDataBase = new PDO("mysql:host=localhost;dbname=test_db","root","");

    if(!empty($_POST["nom"]) && !empty($_POST["age"])){

        $nom = $_POST["nom"];
        $age = $_POST["age"];

        $sql = "INSERT INTO etudiants(nom , age) VALUES (?,?)";
        $stmt = $callDataBase->prepare($sql);
        $stmt->execute([$nom, $age]);

        $result = $callDataBase->query("SELECT * FROM etudiants");

        foreach($result as $row){
            echo $row['nom'] . " - " . $row['age'] . "<br>";
        }
    }

    // && !empty($_POST["niveau"])

?>