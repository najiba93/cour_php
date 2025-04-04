<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET</title>
</head>
<body>
    <style>


form {
  /* On centre le formulaire */
  margin: 0 auto;
  width: 400px;
  /* Le contour du formulaire */
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 1em;
  background-color: #00008B;
  color: #ccc;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Taille et alignement uniformes */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  /* On s'assure que les champs texte ont la même police
     Par défaut, les zones de texte ont une police à chasse
     fixe. */
  font: 1em sans-serif;

  /* Taille uniforme pour des champs */
  width: 300px;
  box-sizing: border-box;

  /* On utilise la même bordure que pour le formulaire */
  border: 1px solid #999;
}

input:focus,
textarea:focus {
  /* On rajoute une mise en avant pour les éléments avec
     le focus. */
  border-color: #000;
}

textarea {
  /* On aligne les textes sur plusieurs lignes avec leur
     libellé. */
  vertical-align: top;

  /* On fournit un peut d'espace pour saisir du texte. */
  height: 5em;

  /* On permet de redimensionner verticalement. */
  resize: vertical;
}

.button {
   
  /* On aligne les boutons avec les champs texte. */
  padding-left: 90px; /* La même taille que les libellés */
}

button {
    margin-top: 20px;
    background-color: #000;
    color: #ccc;
  /* Une marge supplémentaire représentant approximativement
     le même espace qu'entre les libellés et les champs. */
  margin-left: 0.5em;
}
    </style>
    <h2>Formulaire (méthode GET)</h2>
    <form action="page2.php" method="get">
    <form action="/ma-page-de-traitement" method="post">
  <ul>
    <li>
      <label for="name">Nom&nbsp;:</label>
      <input type="text" id="name" name="user_name" />
    </li>
    <li>
      <label for="prenom">prenom&nbsp;:</label>
      <input type="text" id="prenom" name="prenom" />
    </li>
    <li>
      <label for="mail">E-mail&nbsp;:</label>
      <input type="email" id="mail" name="user_email" />
    </li>
    <li>
      <label for="msg">Message&nbsp;:</label>
      <textarea id="msg" name="user_message"></textarea>
    </li>
<form action="search.php" method="GET">
<div class="form-item">
<label for="keyword">Recherche :</label>
<input type="search" id="keyword" name="keyword">
</div>
<div class="form-item">
<p>Catégorie :</p>
<input type="radio" name="category" id="dev" value="dev">
<label for="dev">Développement</label>
<input type="radio" name="category" id="hardware" value="hardware">
<label for="hardware">Hardware</label>
</div>
<div class="form-item">
<label for="sort">Trier par :</label>
<select name="sort" id="sort">
<option value="title_asc">Titre (A-Z)</option>
<option value="title_desc">Titre (Z-A)</option>
<option value="likes_asc">Nombre de likes (croissant)</option>
<option value="likes_desc">Nombre de likes (décroissant)</option>
</select>
</div>
<div class="form-item">
<input type="submit" value="ok">
</div>
</form>

  </ul>

<div class="button">
  <button type="submit">Envoyer le message</button>
</div>
    </form>
</body>
</html>