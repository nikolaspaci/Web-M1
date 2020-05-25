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
                
                try{
                    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;port=3307",$login,$pass);
                    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $connexion->exec('SET NAMES utf8');

                    $sqlInsert="INSERT INTO Matiere (Nom, NomCourt, NbECTS, Semestre, DescMat)
                    VALUES
                    ('Programmation Objet avancée', 'POA', 4, 1,'Introduction. Rappels des concepts : classes, héritage, interface, énumérations, exceptions. Définition et utilisations des classes internes et anonymes. Types paramétrés et wildcards. Traitement des processus (thread).'),
                    ('Intelligence artificielle', 'IA', 3, 1,'1) Apprentissage d’un langage fonctionnel LISP ou Scheme. 2) Méthodes de résolution de problèmes : algorithmes de recherche dans un graphe d’états. 3) Jeux à deux joueurs : mini-max et alpha-béta. 4) Systèmes Experts. Utilisation d’un générateur de systèmes experts.'),
                    ('Introduction au Machine Learning', 'ML', 4, 1,'Ce cours constitue une introduction à l’apprentissage artificiel. Nous ferons des rappels de statistiques élémentaires et y aborderons les algorithmes fondamentaux d’apprentissage supervisé et non supervisé.'),
                    ('Systèmes de gestion de bases de données', 'SGBD', 4, 1,'L’objectif de ce cours est de couvrir les techniques internes des systèmes de gestion de base de données (SGBD) qui sont responsables de l’optimisation de l’evaluation de requêtes SQL.'),
                    ('Systèmes d’information avancés 1', 'SIA1', 3, 1,'Introduction aux systèmes d’information avancés. Gestion de projet (3 séances de 3 heures). Gestion des exigences (une séance). Design Patterns (6 Séances).'),
                    ('Systèmes et algorithmiques répartis', 'SAR', 4, 1,'Ce cours vise à présenter les concepts élémentaires des systèmes et les algorithmes associés aux environnements répartis. Les applications réparties s’exécutent sur un ensemble de machines connectées en réseau. Elles représentent un ensemble de composants qui coopèrent pour réaliser un objectif commun en utilisant le réseau comme un moyen d’échanger des données.'),
                    ('Notions générales de Droit', 'Droit', 3, 1,'Permettre aux étudiants de découvrir les fondements du droit français et de se familiariser avec les principaux concepts ainsi qu’avec les grandes classifications du droit positif afin de prendre conscience des spécificités du droit de l’entreprise.'),
                    ('Marketing', 'Marketing', 3, 1,'Familiariser les étudiants avec les concepts de marketing et leur permettre d’avoir une vision critique sur le fonctionnement des marchés, des entreprises et de leurs actions.'),
                    ('Anglais', 'Anglais', 2, 1,'Fournir aux étudiants les outils linguistiques nécessaires pour fonctionner efficacement dans l’entreprise et avec leurs partenaires européens. Préparation au TOEIC. Familiariser les étudiants avec la terminologie économique à partir de thèmes d’actualité.');";
                    $connexion->exec($sqlInsert);
                    echo '<p>Les nouvelles lignes ont été ajouté avec succès</p>';
                }
                catch(PDOException $e){
                    echo "<p>Echec de l'insertion des nouvelles lignes</p>";
                }
            }
        ?>
    </body>
</html>