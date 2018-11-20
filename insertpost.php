<?php
    session_start();
    if(isset($_POST["nom"]) && isset($_POST["description"]) && isset($_POST["exemple"]) && isset($_POST["langue"])) {
        if ($_POST["nom"] != null && $_POST["description"] != null && $_POST["exemple"] != null && $_POST["langue"] != null) {
            $langue = $_POST['langue'];
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $exemple = $_POST['exemple'];

            try {
                $PDO = new PDO('mysql:host=localhost;dbname=codetic;charset=utf8', 'root', 'root');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }


            $req = $PDO->prepare("INSERT INTO post (name_post, describe_post, lien_post, langage_post,id_user) VALUES (:namepost, :describepost, :lienpost, :langagepost, :iduser )");
            $req->execute(array(
                "namepost" => $nom,
                "describepost" => $description,
                "lienpost" => $exemple,
                "langagepost" => $langue,
                "iduser" => $_SESSION['id']
            ));

           header('Location: accueil.php');
           exit();
        }
    }

