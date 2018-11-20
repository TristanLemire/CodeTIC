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
        <div>
            <form action="register.php" method="POST" class="connexion">
                <h2>Inscription</h2>
                <label>Nom :</label><br>
                <input type="text" name="nom"/><br>
                <label>Prenom :</label><br>
                <input type="text" name="last_name"/><br>
                <label>Email :</label><br>
                <input type="email" name="email" required /><br>
                <label>Mot de passe :</label><br>
                <input type="password" name="password" required /><br>
                <label>Retapez mot de passe :</label><br>
                <input type="password" name="password2" required /><br>
                <input type="submit" class="submit"/>
            </form>
        </div>
    </div>
    </section>
    <!-- scripts -->
    <script src="../particles.js"></script>
    <script src="js/app.js"></script>
</body>
</html>