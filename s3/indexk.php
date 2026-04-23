<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Liste des stagiaires</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="container">
    <div class="card">
      
      <h2>Formulaire </h2>
      <form action="index.php" method="get">
        <div class="form-row">
          <div class="field">
            <label for="nom">Nom</label>
            <input type="text" id="txtnom" name="nom" placeholder="nom" />
          </div>

          <div class="field">
            <label for="prenom">Prénom</label>
            <input type="text" id="txtprenom" name="prenom" placeholder="prénom" />
          </div>

          <div class="field">
            <label for="genre">genre</label>
            <select name="genre" id="genre">
                <option value="homme">homme</option>
                <option value="femme">femme</option>
            </select>
          </div>

          <div class="field">
            <label for="niveau">niveau</label>
            <select name="niveau[]" id="niveau" multiple>
                <option value="1er" selected>1er annee</option>
                <option value="2er" selected>2er annee</option>
                <option value="3er" selected>3er annee</option>
            </select>
          </div>
        </div>

        <div class="actions">
          <button type="submit" id="envoyer" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
</div>
</div>


</body>
</html>













