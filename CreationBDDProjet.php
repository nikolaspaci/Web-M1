<!Doctype html>
<html lang="fr">
    <head>
    </head>    
    <body>
        <div>
            <form method = "POST" action="">
                <input type="submit" name="submitCreationBDD"/>
            </form>
        </div>
        <?php
            if(isset($_POST['submitCreationBDD'])){
                $serveur="localhost";
                $login="root";
                $pass="";

                //Création de la base de données MasterAPP
                try{
                    $connexion=new PDO("mysql:host=$serveur;port=3307",$login,$pass);
                    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sqlCreationDataBase="CREATE DATABASE MasterApp";
                    $connexion->exec($sqlCreationDataBase);
                    echo '<p>Creation de la BDD MasterApp effectuee avec succes</p>';                
                    $connexion=null;
                }catch(PDOException $e){
                    echo '<p>Echec de la connexion</p>';
                }

                //Création de la table Matiere
                try{
                    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;port=3307",$login,$pass);
                    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sqlCreationTable="CREATE TABLE Matiere(IdMatiere INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                        Nom VARCHAR(50),
                                        NomCourt VARCHAR(10),
                                        NbHeures INT UNSIGNED,
                                        DescMat MEDIUMTEXT)";
                    $connexion->exec($sqlCreationTable);
                    echo '<p>Creation de la table Matiere effectuee avec succes</p>';
                }
                catch(PDOException $e){
                    echo '<p>Echec de la creation de la table Matiere</p>';
                }

                //Création de la table Etudiant
                try{
                    $sqlCreationTable="CREATE TABLE Etudiant(IdEtudiant INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                        Nom VARCHAR(20),
                                        Prenom VARCHAR(20),
                                        AdresseEmail VARCHAR(50),
                                        DateNaissance DATE,
                                        Parcours VARCHAR (50),
                                        NoteMath INT UNSIGNED,
                                        NoteInformatique INT UNSIGNED,
                                        Moyenne INT UNSIGNED,
                                        StatusEtudiant VARCHAR(15))";
                    $connexion->exec($sqlCreationTable);
                    echo '<p>Creation de la table Etudiant effectuee avec succes</p>';
                }
                catch(PDOException $e){
                    echo '<p>Echec de la creation de la table Etudiant</p>';
                }

                //Création de la table Stage
                try{
                    $sqlCreationTable="CREATE TABLE Stage(IdStage INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                        IdEtudiant INT UNSIGNED,
                                        NomSpecialite VARCHAR(30),
                                        UNIQUE (IdEtudiant),
                                        CONSTRAINT FK_IdEtudiant FOREIGN KEY (IdEtudiant) REFERENCES Etudiant(IdEtudiant))";
                    $connexion->exec($sqlCreationTable);
                    echo '<p>Creation de la table Stage effectuee avec succes</p>';
                }
                catch(PDOException $e){
                    echo '<p>Echec de la creation de la table Stage</p>';
                }
            }
        ?>
    </body>
</html>