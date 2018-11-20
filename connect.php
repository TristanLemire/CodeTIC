<?php

    if(isset($_POST["mail"]) && isset($_POST["mdp"])){
        if ($_POST["mail"] != null and $_POST["mdp"] != null){

            $mail = $_POST['mail'].PHP_EOL;
            $pass = $_POST['mdp'].PHP_EOL;

            try
            {
                $PDO = new PDO('mysql:host=localhost;dbname=codetic;charset=utf8', 'root', 'root');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
            $stmt = $PDO->prepare("SELECT * FROM users WHERE mail_user = :mail;" );
            $stmt->execute(['mail' => $mail]);
            $user = $stmt->fetch();
            $correctPassword = password_verify($pass, $user['mdp_user']);
            if($correctPassword){

                $stmt2 = $PDO->prepare("UPDATE users SET is_connect = 1 where id_user = :id;" );
                $stmt2->execute(['id' => $user['id_user']]);

                session_start();
                $_SESSION['mail'] = $user['mail_user'];
                $_SESSION['mdp'] = $user['mdp_user'];
                $_SESSION['nom'] = $user['first_name_user'];
                $_SESSION['prenom'] = $user['last_name_user'];
                $_SESSION['id'] = $user['id_user'];
                $_SESSION['connect'] = $user['is_connect'];

                header('Location: accueil.php');
                exit();
            } else {
                header('Location: index.php');
                exit();
            }
        } else {
            header('Location: index.php');
            exit();
            }
    }
