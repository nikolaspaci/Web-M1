<?php
    session_start();
    $candidat=array();
    $candidat = $_SESSION['GestionCandidat'];
    unset ( $_SESSION['GestionCandidat'] );

    $serveur="localhost";
    $login="root";
    $pass="";

    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlDelete="DELETE 
                FROM etudiant
                WHERE Prenom='" .$candidat['Prenom'] ."'
                AND Nom='" .$candidat['Nom'] ."'
                AND DateNaissance ='" .$candidat['DateNaissance'] ."'";
    $connexion->exec($sqlDelete);

    header("location: http://projetwebmaster/Accueil.php");
    exit;
?>