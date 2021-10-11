<?php
require('TirageTraitement.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./Style/Tirage.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupe Median</title>
</head>
<body>
<header>
        <a href="#">Coupe Median</a>
        <ul class="Menu">
          <li><a href="Acceuil.php">Accueil</a></li>
          <li><a href="tirage.php">Tirage</a></li>
          <li><a href="Classement.php">Classement</a></li>
          <li><a href="#">Stades</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="index.php">Login</a></li>
</ul>
</header>

<?php

    $tirage=[
        "Bresil","Argentine","France","Italie","Espagne","Allemagne","Haiti","Portugal"
    ];
    $groupeA=[];
    $groupeB=[];

    $incremente=0;
    $ajouter=0;

    

    for($i=0;$i<4;$i++){
        $indice=rand(0,1);
        $indice=$indice+$ajouter;
        if($indice%2==0){
            $groupeA[$incremente]=$tirage[$indice];
            $groupeB[$incremente]=$tirage[$indice+1];
            $incremente++;

        }
        else{
            $groupeA[$incremente]=$tirage[$indice];
            $groupeB[$incremente]=$tirage[$indice-1];
            $incremente++;
        }
        $ajouter=$ajouter+2;
    }
    
?>



<div class="table-1">
                    <table border="2px" class="serie">
                    <thead>
                    <tr>
                    <th class="head">1er tete de serie</th>    
                    </tr>    
                    </thead>
                    <tbody>
                            <tr>
                                <td class="tirage"> <img src="./Pictures/Brasil.png" alt="" width="30px" height="40px">

                                      <?php echo"$tirage[0]"?>
                                
                            </td>
                                </tr>
                                <tr>
                                <td class="tirage"> <img src="./Pictures/France.png" alt="" width="30px" height="40px">
                                    <?php echo"$tirage[2]"?></td>
                                </tr>
                     </tbody>
                     </table> 

                     <table border="2px">
                    <thead>
                    <tr>
                    <th class="head"> 2e tete de serie</th>    
                    </tr>    
                    </thead>
                    <tbody>
                            <tr>
                                <td class="tirage"> <img src="./Pictures/rfef.png" alt="" width="30px" height="40px">
                                    <?php echo"$tirage[4]"?></td>
                            </tr>
                            <tr>
                                <td class="tirage"> <img src="./Pictures/Haiti.png" alt="" width="30px" height="40px">
                                    <?php echo"$tirage[6]"?></td>
                           </tr>

                        </tbody>
                       </table >  
                            
                       <table border="2px">
                    <thead>
                    <tr>
                    <th  class="head"> 3e tete de serie</th>    
                    </tr>    
                    </thead>
                    <tbody>
                            <tr>
                          
                                <td class="tirage"> <img src="./Pictures/Argentine.png" alt="" width="30px" height="40px">
                                    <?php echo"$tirage[1]"?></td>
                           </tr>
                                <tr>
                                <td class="tirage"> <img src="./Pictures/Italie.png" alt="" width="30px" height="40px">
                                    <?php echo"$tirage[3]"?></td>
                                </tr>
                         </tbody>
                          </table>
                          
                          <table border="2px">
                    <thead>
                    <tr>
                    <th class="head"> 4e tete de serie</th>    
                    </tr>    
                    </thead>
                    <tbody>
                           <tr>
                                <td class="tirage"> <img src="./Pictures/dfb.png" alt="" width="30px" height="40px">
                                    <?php echo"$tirage[5]"?></td>
                                </tr>
                                <tr>
                                <td class="tirage"> <img src="./Pictures/fpf.png" alt="" width="30px" height="40px">
                                    <?php echo"$tirage[7]"?></td>
                           </tr>
</tbody>
</table>
            <!-- </tbody> -->
    <!-- </table> -->
    </div>
    <div class="button-1">
<form action="" method="post">
<input type="submit" value="Tirage" name="tirage">
</form>
</div>
<?php
    if(isset($_POST['tirage'])){
?>
<div class="table-2">
   <table border="1px">
             <thead>
                           <tr>
                                 <!-- <th></th> -->
                                 <th> Groupe A</th>
                                 <th> Groupe B</th>
                           </tr>
            </thead>
             <tbody>  
                            <tr>
                                <!-- <td>1e tete de serie(TDS)</td> -->
                                <td><?php echo"$groupeA[0]" ?></td>
                                <td><?php echo"$groupeB[0]" ?></td>
                            </tr>
                           <tr>
                                <!-- <td>2e tete de serie(TDS)</td> -->
                                <td><?php echo"$groupeA[1]" ?></td>
                                <td><?php echo"$groupeB[1]" ?></td>
                           </tr>
                           <tr>
                                <!-- <td>3e tete de serie(TDS)</td> -->
                                <td><?php echo"$groupeA[2]" ?></td>
                                <td><?php echo"$groupeB[2]" ?></td>
                           </tr>
                           <tr>
                                <!-- <td>4e tete de serie(TDS)</td> -->
                                <td><?php echo"$groupeA[3]" ?></td>
                                <td><?php echo"$groupeB[3]" ?></td>
                           </tr>
            </tbody>
    </table>
    </div>
    </br></br></br>
    <div class="matchA"><h2>Matchs du groupe A</h2></div>
    <div class="table-3">
    <table border="1px">
<thead>
<tr>
  <th>Groupe A</th>
<th> Affiche</th>
 <th> Score</th>
                           </tr>
 </thead>

<tbody>
<tr>
 <td>Match 1</td>
<td><?php echo"$groupeA[0] vs $groupeA[1]"  ?></td>
<td> 
 <form action="TirageTraitement.php?id=1&eq1=<?php echo $groupeA[0]?>&eq2=<?php echo $groupeA[1];?>" method="post"><input type="number" name="score1" min=0 max=14 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form>
  </td>
            
</tr>

<?php
    // $_GET['id'];
    // $_GET['eq1'];
    // $_GET['eq2'];
?>

<tr>
 <td>Match 2</td>
<td><?php echo"$groupeA[2] vs $groupeA[3] " ?></td>
<td>  <form action="TirageTraitement.php?id=2&eq1=<?php echo $groupeA[2]?>&eq2=<?php echo $groupeA[3];?>" method="post"><input type="number" name="score1" min=0 max=14 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
<tr>
 <td>Match 3</td>
<td><?php echo"$groupeA[0]vs $groupeA[2]" ?></td>
<td>  <form action="TirageTraitement.php?id=3&eq1=<?php echo $groupeA[0]?>&eq2=<?php echo $groupeA[2];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td> Match 4</td>
<td><?php echo"$groupeA[1] vs $groupeA[3]" ?></td>
<td>  <form action="TirageTraitement.php?id=4&eq1=<?php echo $groupeA[1]?>&eq2=<?php echo $groupeA[3];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td>Match 5</td>
<td><?php echo"$groupeA[0] vs $groupeA[3]" ?></td>
<td>  <form action="TirageTraitement.php?id=5&eq1=<?php echo $groupeA[0]?>&eq2=<?php echo $groupeA[3];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td>Match 6</td>
<td><?php echo"$groupeA[1] vs $groupeA[2]" ?></td>
<td>  <form action="TirageTraitement.php?id=6&eq1=<?php echo $groupeA[1]?>&eq2=<?php echo $groupeA[2];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

</tbody>

    </table>
    </div>
    </br></br>
    <div class="matchA"><h2>Matchs du groupe B</h2></div>
    <table border="1px">
<thead>
<tr>
  <th>Groupe B</th>
<th> Affiche</th>
 <th> Score</th>
                           </tr>
 </thead>

<tbody>
<tr>
 <td>Match 7</td>
<td><?php echo"$groupeB[0] vs $groupeA[1]"  ?></td>
<td>  <form action="TirageTraitement.php?id=7&eq1=<?php echo $groupeB[0]?>&eq2=<?php echo $groupeA[1];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td>Match 8</td>
<td><?php echo"$groupeB[2] vs $groupeA[3] " ?></td>
<td>  <form action="TirageTraitement.php?id=8&eq1=<?php echo $groupeB[2]?>&eq2=<?php echo $groupeA[3];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td>Match 9</td>
<td><?php echo"$groupeB[0]vs $groupeA[2]" ?></td>
<td>  <form action="TirageTraitement.php?id=9&eq1=<?php echo $groupeB[0]?>&eq2=<?php echo $groupeA[2];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td> Match 10</td>
<td><?php echo"$groupeB[1] vs $groupeA[3]" ?></td>
<td>  <form action="TirageTraitement.php id=10&eq1=<?php echo $groupeB[1]?>&eq2=<?php echo $groupeA[3];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td>Match 11</td>
<td><?php echo"$groupeB[0] vs $groupeA[3]" ?></td>
<td>  <form action="TirageTraitement.php?id=11&eq1=<?php echo $groupeB[0]?>&eq2=<?php echo $groupeA[3];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

<tr>
 <td>Matc 12</td>
<td><?php echo"$groupeB[1] vs $groupeA[2]" ?></td>
<td>  <form action="TirageTraitement.php?id=12&eq1=<?php echo $groupeB[1]?>&eq2=<?php echo $groupeA[2];?>" method="post"><input type="number" name="score1" min=0 max=4 class="but"> vs
 <input type="number" name="score2" min=0 max=15 class="but">   <button type="submit">valider</button></form> </td>
</tr>

</tbody>
</table>
</br></br>
<?php
    }
?>
    




    <footer>
    <div class="one">
        <div class="two">
          <h3>Suivez nous sur</h3>
        </div>
        <div class="tree">
         <img src="./Pictures/011-instagram.png">
         <p>instagram</p>
        </div>
        <div class="for">
            <img src="./Pictures/008-youtube.png">
            <p>youtube</p>
        </div>
        <div class="six">
            <img src="./Pictures/013-twitter.png">
            <p>Twitter</p>
        </div>
         <div class="seven"> <input type="text" name="search" placeholder="Rechercher...">
            <button type="submit">rechercher</button></div>
    </div>
</footer>

</body>
    </body>
</html>