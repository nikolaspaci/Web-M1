<?php
if( isset($_POST['semestre']) )
{
    $semestre=$_POST['semestre'];
    echo showMatiere($semestre);
}else{
    echo showEtudiant();
}

function connectDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $port="3307";
    $db="masterapp";
    try {
        $db =  new PDO("mysql:host=$servername;port=$port;dbname=$db;charset=UTF8", $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
    return $db;
}

function showMatiere($semestre){
    $table="matiere";
    $db = connectDB();
    $sql = "SELECT Nom,NbHeures,Semestre,DescMat FROM $table where Semestre=$semestre";
    $stmt= $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    return $json;
 }

 function showEtudiant(){
    $db = connectDB();
    $sql = "SELECT e.Nom,e.Prenom,e.AdresseEmail,e.StatusEtudiant,e.LinkPagePerso,s.NomSpecialite FROM etudiant e,stage s where e.IdStage=s.IdStage";
    $stmt= $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    return $json;
 }
 ?>