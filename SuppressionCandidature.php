<?php
    session_start();
    $etudiantExistant=array();
    $etudiantExistant = $_SESSION['CandidatureExistante'];
    unset ( $_SESSION['CandidatureExistante'] );

    $serveur="localhost";
    $login="root";
    $pass="";

    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlDelete="DELETE 
                FROM etudiant
                WHERE Prenom='" .$etudiantExistant['Prenom'] ."'
                AND Nom='" .$etudiantExistant['Nom'] ."'
                AND DateNaissance ='" .$etudiantExistant['DateNaissance'] ."'";
    $connexion->exec($sqlDelete);

    header("location: http://projetwebmaster/Accueil.php");
    exit;
?>