<?php
function add($eq1, $eq2){
    if(require("bdd.php")){
        $req=$conn->prepare("INSER INTO matchs(eq1,eq2)  VALUES ($eq1,$eq2)");
        $req->execute(array($eq1,$eq2));
        $req->closeCursor();
    }
}
function afficher()
{
    if(require("bdd.php")){
        $req=$conn->prepare("SELECT * FROM matchs ORDER BY idmatch  DESC");
        $req->execute();
        $data = $req->dba_fetchALL(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
function delete($idmatch)
{
    if(require("bdd.php"))
    {
        $req=$conn->prepare("DELETE* FROM matchs WHERE id=?");
        $req->execute( array($idmatch));   
    }  
}

?>