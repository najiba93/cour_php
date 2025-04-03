

<?php 

var_dump($_GET);

?>

<h1>Superglobal $_GET</h1>
<h2>page 1</h2>

<p> en PHP , une variable superGlobel est une variable integree qui est toujour disponible, mem a linterieur d'une fonction </p>
<p>Les superGlobales sont predefinies par PHP</p>

<p>$_GET est utilise pour : </p>

<ul>
    <li>Passer des informations entre pages</li>
    <li>filtrer ou rechercher un contenue</li>

</ul>
<p>avantage de $_GET : </p>
<ul>
    <li>Simple a utiliser</li>
    <li>Donnees visibles dans l'URL</li>
</ul>

<a href="PAGE2.php?article=jean&couleur=rouge&prix=123">jean rouge</a>
<a href="PAGE2.php?article=chemise&couleur=vert&prix=50">chemise vert</a>
<p> "?" : ce caractère indique le debut des paramètres GET qui sont envoyé au fichier PHP
</p>
<P>$_GET est utiliser ^pir envoyer des informations via l'URL</P>
 
<p>ici "article=chemise" est un parametre GET, article est la clé et chemise estg la valeur</p>
 
<p>& : ce caractère est utilisé pour séparer lels paramatres dans un URL</p>
 
<p>limite de longeur d'URL :</p>
 
<p>les navigateurs et sereveurs limitent la tailles des URL</p>
<p>En général : 2083 carractères MAX </p>


