<?php
    session_start();

    try {
        $PDO = new PDO('mysql:host=localhost;dbname=codetic;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $stmt2 = $PDO->prepare("UPDATE users SET is_connect = 0 where id_user = :id ;" );
    $stmt2->execute(['id' => $_SESSION['id']]);

    session_destroy();

    header('Location: index.php');
    exit();