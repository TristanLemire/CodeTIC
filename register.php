<?php

    if(isset($_POST["nom"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["password2"])){
        if($_POST["nom"] != null && $_POST["last_name"] != null && $_POST["email"] != null && $_POST["password"] != null && $_POST["password2"] != null){
            $pass = $_POST['password'] . PHP_EOL;
            $pass2 = $_POST['password2'] . PHP_EOL;
            $nom = $_POST['nom'] . PHP_EOL;
            $prenom = $_POST['last_name'] . PHP_EOL;
            $email = $_POST['email'] . PHP_EOL;


            try {
                $PDO = new PDO('mysql:host=localhost;dbname=codetic;charset=utf8', 'root', 'root');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            $stmt = $PDO->prepare("SELECT * FROM users WHERE mail_user = :mail;" );
            $stmt->execute(['mail' => $email]);
            $user = $stmt->fetch();

            if ($user == []) {

                //On vérifie que password et password2 sont identiques
                if ($pass == $pass2) {
                    $hash = password_hash($pass, PASSWORD_DEFAULT);
                    $req = $PDO->prepare("INSERT INTO users (first_name_user, last_name_user, mail_user, mdp_user,is_connect) VALUES (:lastName, :firstName, :email, :mdp, :connect )");
                    $req->execute(array(
                        "lastName" => $nom,
                        "firstName" => $prenom,
                        "email" => $email,
                        "mdp" => $hash,
                        "connect" => 0

                    ));

                    header('Location: index.php');
                    exit();
                }
            } else {
                header('Location: inscription.php');
                exit();
            }
        }else {
            header('Location: inscription.php');
            exit();
        }
    }
