
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
    <?php
        include "header.html";
    ?>
    <ul class="s">
        <li><a href="html5.php" class="html5-bouton"><i class="fab fa-html5"></i></a></li>
        <li><a href="css3.php" class="css3-bouton"><i class="fab fa-css3-alt"></i></a></li>
        <li><a href="js.php" class="js-bouton"><i class="fab fa-js-square"></i></a></li>
        <li><a href="php5.php" class="php5-bouton"><i class="fab fa-php"></i></a></li>
        <li><a href="mysql.php" class="mysql-bouton"><i class="icon-mysql-alt"></i></a></li>
        <li><a href="new_post.php" class="add-bouton"><i class="fas fa-plus"></i></a></li>
    </ul>
    <?php
        session_start();
        if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {

    ?>
    <section class="main-content">
        <div class="home-pres">
            <h2>Bienvenue <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ; ?></h2>
            <p>CodeTic est un site conçu par Tristan Lemire. Il a pour but des références les langages,
                les outils, les fonctions et les paramètres appris lors de son bachelor web à HÉTIC.
            </p>
            <h3>A propos de Tristan Lemire</h3>
            <p>Bonjour ! Je suis développeur web sur Paris. Je viens d'avoir mon BTS SIO (Service Informatique aux Organisations)
                option SLAM qui m'a permis d'apprendre les bases du développement web. Je viens de rejoindre HETIC pour un bachelor
                 web en 3 ans et je suis actuellement à la recherche d'un contrat de professionnalisation.</p>
        </div>
    </section>
    <?php
    }
    ?>
    <ul class="s2">
        <li><a href="html5.php" class="html5-bouton"><i class="fab fa-html5"></i></a></li>
        <li><a href="css3.php" class="css3-bouton"><i class="fab fa-css3-alt"></i></a></li>
        <li><a href="js.php" class="js-bouton"><i class="fab fa-js-square"></i></a></li>
        <li><a href="php5.php" class="php5-bouton"><i class="fab fa-php"></i></a></li>
        <li><a href="mysql.php" class="mysql-bouton"><i class="icon-mysql-alt"></i></a></li>
        <li><a href="new_post.php" class="add-bouton"><i class="fas fa-plus"></i></a></li>
    </ul>
    <!-- scripts -->
  <script src="../particles.js"></script>
  <script src="js/app.js"></script>
</body>
</html>