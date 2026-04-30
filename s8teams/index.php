<form method="POST">
    <h3>Choisir 3 languages au maximum:</h3>

    <input type="checkbox" name="lang[]" value="PHP"> PHP <br>
    <input type="checkbox" name="lang[]" value="HTML5"> HTML5 <br>
    <input type="checkbox" name="lang[]" value="CSS3"> CSS3 <br>
    <input type="checkbox" name="lang[]" value="PYTHON"> PYTHON <br>
    <input type="checkbox" name="lang[]" value="C#"> C# <br>

    <button type="submit" name="submit">tester</button>
</form>

<?php

function Affichage(array $tab){
    echo "<ul>";
    foreach($tab as $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";
}

function validation($lang){
    if(count($lang) > 3){
        echo "❌ Choisir 3 languages au maximum";
    } else {
        echo "✅ OK";
        Affichage($lang); 
    }

}

if(isset($_POST["submit"])){
    if(isset($_POST['lang'])){

    $languages = $_POST['lang'];
    validation($languages);

    } else {
    echo "❌ Choisir  languages  ";
}
}


?>