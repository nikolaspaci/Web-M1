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
                    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
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
                    ('Anglais', 'Anglais', 2, 1,'Fournir aux étudiants les outils linguistiques nécessaires pour fonctionner efficacement dans l’entreprise et avec leurs partenaires européens. Préparation au TOEIC. Familiariser les étudiants avec la terminologie économique à partir de thèmes d’actualité.'),
                    ('Analyse financière', 'AF', 3, 2,'Introduction de notions de comptabilités générales et de mathématiques financières nécessaires à l’analyse financière et présentation de l’analyse du compte de résultat et du bilan financier.'),
                    ('Systèmes d’information avancés 2', 'SIA2', 3, 2,'Application sous forme d’un projet qui s’effectue dans les conditions semblables à un projet informatique avec l’utilisation de la méthodologie SCRUM.'),
                    ('Éthique en informatique et protection des données', 'EIPD', 1, 2,'Objectif de ce cours est de sensibiliser les étudiants au regard de techniques de manipulation et d’introduire à la problématique de la protection et traitement des données et à ses conséquences sur les individus.'),
                    ('Jeu d’entreprise', 'JE', 1, 2,'Application des concepts de l’analyse financière sur un logiciel de simulation.'),
                    ('Organisation et communication', 'ORGACOM', 3, 2,'Ce cours comporte : 1) Une partie sociologie qui développe différents aspects du processus de changement dans l’organisation et du processus 2) Une partie communication qui présente et analyse différents types d’interactions liés au processus de changement (conduite de réunion, négociation, gestion de conflit, etc...)'),
                    ('Programmation Web', 'PWeb', 3, 2,'Le sujet principal de ce cours est la construction d’applications web modernes. Programmation côté client en HTML CSS JS. Programmation côté serveur en PHP.'),
                    ('Marchés Financiers', 'Marchés Fi', 3, 2,'Connaissance générale des marchés de capitaux (fonctionnement et raison d’être). Mathématiques des calculs financiers. Initiation à la modélisation stochastique des marchés et principaux résultats de la théorie classique. Financement, risques et marchés de capitaux (actions, obligations, option, marché monétaire, ...)'),
                    ('Décision collective, décision multicritère', 'DCDM', 3, 2,'Présenter les principales familles de méthodes d’agrégation multicritère existantes et mise en œuvre de telles méthodes dans des situations réelles de décision.'),
                    ('Ordonnancement et Gestion de production', 'OGP', 3, 2,'Cet enseignement a pour objet de sensibiliser les étudiants aux problématiques de gestion de la production de biens et de services, en mettant en évidence la très grande complexité des problèmes à résoudre et la difficulté qui en découle de piloter efficacement une chaîne logistique.'),
                    ('Sécurité et réseaux', 'Réseaux', 3, 2,'Le cours porte sur les protocoles réseaux utilisés dans les couches hautes du modèle OSI, ainsi que sur les algorithmes de cryptographie qui permettent de les sécuriser.');";
                    $connexion->exec($sqlInsert);
                    $sqlinsertStage="INSERT INTO stage (IdStage, NomSpecialite) VALUES
                    (1, 'Développeur Java'),
                    (2, 'Consultant SI'),
                    (3, 'Développeur C++'),
                    (4, 'Assistant Chef de Projet'),
                    (5, 'Développeur Python'),
                    (6, 'Consultant BA'),
                    (7, 'Développeur Full Stack'),
                    (8, 'Data Analyst');";
                    $connexion->exec($sqlinsertStage);
                    $sqlinsertEtudiant="INSERT INTO etudiant (IdEtudiant, Nom, Prenom, AdresseEmail, DateNaissance, Parcours, NoteMath, NoteInformatique, NoteAnglais, Moyenne, StatusEtudiant, IdStage, LinkPagePerso) VALUES
                    (1, 'Spaci', 'Nikola', 'nikolaspaci@gmail.com', '1998-11-03', 'BTS', 15, 15, 15, 15, 'Inscrit', 1, './ptfNikola/index.html'),
                    (2, 'Moore', 'Tom', 'tommoore@gmail.com', '1998-01-01', 'BTS', 15, 15, 15, 15, 'Inscrit', 2, ''),
                    (3, 'Koudossou', 'Alison', 'alisonSudoku@gmail.com', '1998-09-16', 'BTS', 16, 17, 15, 18, 'Inscrit', 3, ''),
                    (4, 'Vitas', 'Felix', 'FelixVitas@gmail.com', '1998-11-03', 'DUT', 15, 15, 15, 15, 'Inscrit', 6, ''),
                    (5, 'Charlon', 'Cyril', 'CyrilCharlon@gmail.com', '1998-01-07', 'DUT', 15, 15, 15, 15, 'Inscrit', 5, ''),
                    (6, 'Tang', 'Eric', 'EricTang@gmail.com', '1998-09-19', 'Licence', 16, 17, 15, 18, 'Inscrit', 5, ''),
                    (7, 'Desgrange', 'Henry-Julien', 'HJDDesgrange@gmail.com', '1998-11-09', 'Licence', 18, 19, 15, 17, 'Inscrit', 3, ''),
                    (8, 'Ledoux', 'Louis', 'LouisLedoux@gmail.com', '1998-03-03', 'DUT', 15, 15, 15, 15, 'Inscrit', 5, ''),
                    (9, 'Bendib', 'Yakine', 'YakineBendib@gmail.com', '1998-06-16', 'DUT', 16, 17, 15, 18, 'Inscrit', 4, ''),
                    (10, 'Karim', 'Douha', 'DouhaKarim@gmail.com', '1998-02-03', 'Licence', 15, 15, 15, 15, 'Inscrit', 3, ''),
                    (11, 'Leguen', 'Yannis', 'YannisLeguen@gmail.com', '1998-08-07', 'DUT', 15, 15, 15, 15, 'Inscrit', 4, ''),
                    (12, 'Peynet', 'Emilie', 'EmiliePeynet@gmail.com', '1998-11-06', 'Licence', 16, 17, 15, 18, 'Inscrit', 6, ''),
                    (13, 'Piganeau', 'Thais', 'ThaisPiganeau@gmail.com', '1998-10-03', 'Licence', 14, 16, 15, 15, 'Inscrit', 1, ''),
                    (14, 'Sakho', 'Aissatou', 'AissatouSakho@gmail.com', '1998-01-04', 'BTS', 15, 15, 15, 15, 'Inscrit', 2, ''),
                    (15, 'Facquet', 'jeremie', 'JeremieFacquet@gmail.com', '1998-09-16', 'Licence', 16, 17, 15, 18, 'Inscrit', 3, ''),
                    (16, 'Lachi', 'Yamina', 'YaminaLachi@gmail.com', '1998-10-03', 'BTS', 15, 15, 15, 15, 'Inscrit', 6, ''),
                    (17, 'Sok', 'Sam David', 'SamDavidSok@gmail.com', '1998-01-05', 'DUT', 15, 15, 15, 15, 'Inscrit', 5, ''),
                    (18, 'Ahdjoudj', 'Ines', 'InesAhdjoudj@gmail.com', '1998-02-19', 'DUT', 16, 17, 15, 18, 'Inscrit', 5, ''),
                    (19, 'Bahlel', 'Arslane', 'ArslaneBahlel@gmail.com', '1998-04-09', 'Licence', 18, 19, 15, 17, 'Inscrit', 3, ''),
                    (20, 'Nadjem', 'Nadir', 'NadirNadjem@gmail.com', '1998-05-03', 'BTS', 15, 15, 15, 15, 'Inscrit', 5, '');";
                    $connexion->exec($sqlinsertEtudiant);
                    echo '<p>Les nouvelles lignes ont été ajouté avec succès</p>';
                }
                catch(PDOException $e){
                    echo "<p>Echec de l'insertion des nouvelles lignes</p>";
                }
            }
        ?>
    </body>
</html>