<?php
    
    $con = new PDO("mysql:host=localhost; dbname=funcionarios", "root","");
    
    if(!$con){
        echo 'Desconectado';
    }

?>