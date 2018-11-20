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
    <?php include "header2.html"; ?>
    <section class="main-content2">
        <div id="particles-js">
            <form action="connect.php" method="POST" class="connexion">
                <h2>Connexion</h2>
                <label class="connexion-label">E-mail :</label><br>
                <input type="email" name="mail"/><br>
                <label>Mot de passe :</label><br>
                <input type="password" name="mdp"/><br>
                <input type="submit" class="submit"/>
                <a href="inscription.php">inscription</a>
            </form>
        </div>  
    </section>
    <!-- scripts -->
  <script src="../particles.js"></script>
  <script src="js/app.js"></script>

</body>
</html>