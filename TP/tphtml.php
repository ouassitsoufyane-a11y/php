<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp</title>
</head>
<body>
    <form action="tp1.php" method="post">
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom" placeholder="nom">
            <label for="age">age</label>
            <input type="nombre" id="age" name="age" placeholder="age">
            <label for="niveau">niveau</label>
            <select name="niveau[]" id="niveau" multiple>
                <option value="1er">1er</option>
                <option value="2er">2er</option>
            </select> 
            <button type="submit">envoyer</button>
    </form>
    
</body>
</html>