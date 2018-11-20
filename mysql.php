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
        session_start();
        try
        {
            $PDO = new PDO('mysql:host=localhost;dbname=codetic;charset=utf8', 'root', 'root');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        $stmt = $PDO->prepare("SELECT * FROM post WHERE id_user = :userid and langage_post = :langage;" );
        $stmt->execute(['userid' => $_SESSION['id'], 'langage' => 'MySQL']);
        $post = $stmt->fetchAll();

    ?>
    <ul class="s">
        <li><a href="html5.php" class="html5-bouton"><i class="fab fa-html5"></i></a></li>
        <li><a href="css3.php" class="css3-bouton"><i class="fab fa-css3-alt"></i></a></li>
        <li><a href="js.php" class="js-bouton"><i class="fab fa-js-square"></i></a></li>
        <li><a href="php5.php" class="php5-bouton"><i class="fab fa-php"></i></a></li>
        <li><a href="mysql.php" class="mysql-bouton2"><i class="icon-mysql-alt"></i></a></li>
        <li><a href="new_post.php" class="add-bouton"><i class="fas fa-plus"></i></a></li>
    </ul>

    <section class="main-content">
        <div class="html-content">
            <h2>MySQl</h2>
            <?php
            if ($post == []){
                ?>
                <h2><a href="new_post.php" class="createpostbouton">Creé un post</a></h2>
                <?php
            }
            for ($count = 0; $count < sizeof($post); $count++) {
                ?>
                <div class="content-of">
                    <h3><?php echo $post[$count]['name_post'];  ?></h3>
                    <p class="p-of">
                        <?php echo $post[$count]['describe_post'];  ?>
                    </p>
                    <h4><em>Exemple de balise <?php echo $post[$count]['name_post'];  ?> en HTML5</em></h4>
                    <p class="code-of">
                        <a href="<?php echo $post[$count]['lien_post']; ?>"><?php echo $post[$count]['lien_post']; ?></a>
                    </p>
                    <br>
                </div>
            <?php } ?>
        </div>
    </section>
    <ul class="s2">
        <li><a href="html5.php" class="html5-bouton"><i class="fab fa-html5"></i></a></li>
        <li><a href="css3.php" class="css3-bouton"><i class="fab fa-css3-alt"></i></a></li>
        <li><a href="js.php" class="js-bouton"><i class="fab fa-js-square"></i></a></li>
        <li><a href="php5.php" class="php5-bouton"><i class="fab fa-php"></i></a></li>
        <li><a href="mysql.php" class="mysql-bouton2"><i class="icon-mysql-alt"></i></a></li>
        <li><a href="new_post.php" class="add-bouton"><i class="fas fa-plus"></i></a></li>
    </ul>
</body>
</html>