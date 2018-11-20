<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-mfizz-2.4.1/font-mfizz.css">
    <script src="js/custom.js"></script>
    <title>CodeTIC</title>
</head>
<body>
<?php include "header.html"; ?>
<ul class="s">
    <li><a href="html5.php" class="html5-bouton"><i class="fab fa-html5"></i></a></li>
    <li><a href="css3.php" class="css3-bouton"><i class="fab fa-css3-alt"></i></a></li>
    <li><a href="js.php" class="js-bouton"><i class="fab fa-js-square"></i></a></li>
    <li><a href="php5.php" class="php5-bouton"><i class="fab fa-php"></i></a></li>
    <li><a href="mysql.php" class="mysql-bouton"><i class="icon-mysql-alt"></i></a></li>
    <li><a href="new_post.php" class="add-bouton2"><i class="fas fa-plus"></i></a></li>
</ul>
<section class="main-content2">
    <div id="particles-js">
        <div>
        <form action="insertpost.php" method="POST" class="connexion">
            <h2>Création d'un Post</h2>
            <label>Nom :</label><br>
            <input type="text" name="nom"/><br>
            <label>Description :</label><br>
            <TEXTAREA name="description" rows=4 cols=40 class="describe"></TEXTAREA>
            <label>Exemple:</label><br>
            <input type="text" name="exemple"/><br>
            <label>langue:</label><br>
            <input list="browsers" name="langue"><br>
            <datalist id="browsers">
                <option value="HTML">
                <option value="CSS">
                <option value="JS">
                <option value="PHP">
                <option value="MySQL">
            </datalist><br>
            <input type="submit" class="submit"/>
        </form>
        </div>
    </div>
    </section>
<ul class="s2">
    <li><a href="html5.php" class="html5-bouton"><i class="fab fa-html5"></i></a></li>
    <li><a href="css3.php" class="css3-bouton"><i class="fab fa-css3-alt"></i></a></li>
    <li><a href="js.php" class="js-bouton"><i class="fab fa-js-square"></i></a></li>
    <li><a href="php5.php" class="php5-bouton"><i class="fab fa-php"></i></a></li>
    <li><a href="mysql.php" class="mysql-bouton"><i class="icon-mysql-alt"></i></a></li>
    <li><a href="new_post.php" class="add-bouton2"><i class="fas fa-plus"></i></a></li>
</ul>
<!-- scripts -->
<script src="../particles.js"></script>
  <script src="js/app.js"></script>
</body>
</html>