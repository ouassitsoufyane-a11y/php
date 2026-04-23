<?php

    $calldata = new PDO("mysql:host=localhost;dbname:test_db;", "root", "");

    if (isset($_POST["nom"]) && $_POST["nom"]!=""){
        $nom = $_POST["nom"];
        $age = $_POST["age"];

        $codesql = "INSERT INTO etudiants (nom, age) values (?,?);";
        $stmt = $calldata->prepare($codesql);
        $stmt->execute([$nom,$age]);

        $stmt = $calldata->query("SELECT * FROM etudiants ;");
        echo "<table border='1' cellpadding='10'>";
        echo "<tr>";
        echo "<th>Nom</th>";
        echo "<th>Age</th>";
        echo "</tr>";

        foreach ($stmt as $row) {
            echo "<tr>";
            echo "<td> {$row["nom"]} </td>";
            echo "<td> {$row["age"]} </td>";
            echo "</tr>";
        }

        echo "</table>";
            }

?>