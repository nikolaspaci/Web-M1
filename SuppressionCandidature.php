<?php
    session_start();
    $etudiantExistant=array();
    $etudiantExistant = $_SESSION['NouvelleCandidature'];
    unset ( $_SESSION['NouvelleCandidature'] );

    $serveur="localhost";
    $login="root";
    $pass="";

    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlDelete="DELETE 
                FROM etudiant
                WHERE Prenom='" .$etudiantExistant['InputPrenom'] ."'
                AND Nom='" .$etudiantExistant['InputNom'] ."'
                AND DateNaissance ='" .$etudiantExistant['DateNaissanceInput'] ."'";
    $connexion->exec($sqlDelete);
    echo $sqlDelete;
    header("location: Accueil.php");
    exit;
?>