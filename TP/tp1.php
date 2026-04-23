<?php

$pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");

if (!empty($_POST["nom"]) && !empty($_POST["age"]) && !empty($_POST["niveau"])) {

    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $niveau = implode(",", $_POST["niveau"]);

    $sql = "INSERT INTO etudiants (nom, age , niveau) VALUES (?, ? , ?)"; 
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $age , $niveau]);

    // $pdo->exec("DELETE FROM etudiants WHERE id=4");
    

    

    $stmt = $pdo->query("SELECT * FROM etudiants");

echo "<table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Age</th>";
echo "<th>niveau</th>";
echo "</tr>";

foreach ($stmt as $row) {
    echo "<tr>";
    echo "<td> {$row["nom"]} </td>";
    echo "<td> {$row["age"]} </td>";
    echo "<td>{$row["niveau"]}</td>";
    echo "</tr>";
}

echo "</table>";
}



?>