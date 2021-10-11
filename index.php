<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./Style/Loggin.css">
    <title>Document</title>
</head>
<body>
    <div class="logg">
           <form action="Acceuil.php" method="POST">
              <h1>Connexion</h1>
                 <label >Nom d'utilisateur</label>
</br>
                    <input type="text" name="username"  required>
                    </br>
                    </br>
                 <label >Mot de passe</label>
</br>
</br>
                     <input type="password" name="pass1"  required>
</br></br>
                     <label >Confirm Password</label>
</br>
</br>
                     <input type="password" name="pass2"  required>

                    </br>
                    <button type="submit" class="Calculer" >Connecter</button>

                <?php 
                 $pass=$_POST['pass1'];
                 $confirm=$_POST['pass2'];
                    // if(isset ($_GET['erreur'])){
                    //      $err=$_GET['erreur'];
                    //      if($err==1 || $err==2) 
                    //          echo("<p style='color:bisque'>utilisateur ou mot de passe incorrect </p>");
                    if(isset ($_POST['pass']) AND isset ($_POST['confirm'])) {
                    if ($pass<> $confirm){
                        echo"Erreur de confirmation de mot passe";
                        
                    }  
                    else{
                        echo"Connexion";  
                    }  
                         
                    }

                ?>   
           </form>
    </div>
</body>
</html>