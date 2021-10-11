<?php
    $conn= new PDO"mysql:host=localhost; dbname=footballv1", "root","");
     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo"CONNECT> OK!";
     } 
    catch (PDOException $e) {
        echo $e;
    /}

    ?>