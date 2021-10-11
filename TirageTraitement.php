<?php

if(isset($_POST['score1']) && isset($_POST['score2']) && isset($_GET['id']) && isset($_GET['eq1']) && isset($_GET['eq2'])){
    $idmatch= $_GET['id'];
    $eq1= $_POST['score1'];
    $eq2=$_POST['score2'];
    $Equipe1= $_GET['eq1'];
    $Equipe2=$_GET['eq2'];

    $c=mysqli_connect('localhost','root','','tournois');
    //declaration des variables
    // $numero= $_POST['c'];
    // $nom=$_POST['n'];
    // $prenom=$_POST['p'];
    // $adresse=$_POST['a'];
    // $codepostal=$_POST['cp'];
    // $ville=$_POST['v'];
    // $pays=$_POST['pa'];
    // $telephone=$_POST['t'];
    ;
    
    ;
    
    //on cree la requete
    $req= "insert into matchs values('$idmatch','$eq1','$eq2','$Equipe1','$Equipe2')";
    
    //on envoie la requete
    $ex=$c->query($req);
    if($ex){
        echo"Score Ajoute";
    }
    else{
        echo"Ajout echoue";
    }



} else{
    echo "Erreur d\'envoie de donnee";
}
// function afficher()
// {
//     if(require("TirageClassement.php")){
//         $req=$conn->prepare("SELECT * FROM matchs ORDER BY idmatch  DESC");
//         $req->execute();
//         $data = $req->dba_fetchALL(PDO::FETCH_OBJ);
//         return $data;
//         $req->closeCursor();
//     }
// }

?>