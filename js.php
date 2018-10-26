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
       /* try{
            // Connexion a la base de donnée MySQL.
	        $bdd = new PDO('mysql:host=localhost;dbname=codetic;charset=utf8', 'root', ''); 
        }
            // Si erreur, affiche un message et on arrête tout
            catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query('SELECT L.name_langage, P.* from Langage L inner join Post P on L.id_langage = P.id_langega where L.id_langage = 3;');

        $donnees = $reponse->fetch();

        // Je termine le traitement de la requête
        $reponse->closeCursor(); */
    ?>
    <?php include "header.html"; ?>
    <ul class="s">
        <li><a href="html5.php" class="html5-bouton"><i class="fab fa-html5"></i></a></li>
        <li><a href="css3.php" class="css3-bouton"><i class="fab fa-css3-alt"></i></a></li>
        <li><a href="js.php" class="js-bouton2"><i class="fab fa-js-square"></i></a></li>
        <li><a href="php5.php" class="php5-bouton"><i class="fab fa-php"></i></a></li>
        <li><a href="mysql.php" class="mysql-bouton"><i class="icon-mysql-alt"></i></a></li>
    </ul>
    <section class="main-content">
            <div class="html-content">
                    <h2>JS</h2>
                    <div class="content-of">
                        <h3>div</h3>
                        <p class="p-of">
                            La balise <em>&lt;div&gt;</em> définit une division ou une section, appelé aussi calque, dans un document HTML.
                            La balise <em>&lt;div&gt;</em> est utilisée pour regrouper des éléments sous forme de bloc et ainsi pouvoir les formater en CSS.
                            Remarque : Les navigateurs placent toujours un saut de ligne avant et après un élément <em>&lt;div&gt;</em>
                        </p>
                        <h4><em>Exemple de balise &lt;div&gt; en HTML5</em></h4>
                        <p class="code-of">&lt;div id="calque"&gt;<br>
                                &lt;h3>Titre ou en-tête&lt;/h3&gt;<br>
                                &lt;p&gt;Ceci est un paragraphe.&lt;/p&gt;<br>
                            &lt;div/&gt;
                        </p>
                        <br>
                    </div>
        
                    <div class="content-of">
                            <h3>div</h3>
                            <p class="p-of">
                                La balise <em>&lt;div&gt;</em> définit une division ou une section, appelé aussi calque, dans un document HTML.
                                La balise <em>&lt;div&gt;</em> est utilisée pour regrouper des éléments sous forme de bloc et ainsi pouvoir les formater en CSS.
                                Remarque : Les navigateurs placent toujours un saut de ligne avant et après un élément <em>&lt;div&gt;</em>
                            </p>
                            <h4><em>Exemple de balise &lt;div&gt; en HTML5</em></h4>
                            <p class="code-of">&lt;div id="calque"&gt;<br>
                                    &lt;h3>Titre ou en-tête&lt;/h3&gt;<br>
                                    &lt;p&gt;Ceci est un paragraphe.&lt;/p&gt;<br>
                                &lt;div/&gt;
                            </p>
                            <br>
                        </div>
        
                        <div class="content-of">
                                <h3>div</h3>
                                <p class="p-of">
                                    La balise <em>&lt;div&gt;</em> définit une division ou une section, appelé aussi calque, dans un document HTML.
                                    La balise <em>&lt;div&gt;</em> est utilisée pour regrouper des éléments sous forme de bloc et ainsi pouvoir les formater en CSS.
                                    Remarque : Les navigateurs placent toujours un saut de ligne avant et après un élément <em>&lt;div&gt;</em>
                                </p>
                                <h4><em>Exemple de balise &lt;div&gt; en HTML5</em></h4>
                                <p class="code-of">&lt;div id="calque"&gt;<br>
                                        &lt;h3>Titre ou en-tête&lt;/h3&gt;<br>
                                        &lt;p&gt;Ceci est un paragraphe.&lt;/p&gt;<br>
                                    &lt;div/&gt;
                                </p>
                                <br>
                            </div>
                </div>
       
    </section>

</body>
</html>