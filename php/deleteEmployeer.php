<?php
    
    include 'conexao.php';
    $id = $_GET['id'];

    if(!$con){
        echo 'Desconectado!';
    }else{
            $cmd = $con -> prepare("DELETE FROM dados WHERE id=:id");
            $cmd -> bindValue(":id", $id);
            $cmd -> execute();
            header('Location:../index.php');
    }
?>