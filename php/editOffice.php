<?php

    include 'conexao.php';

    if(!$con){
        echo   'Desconectado';
    }else{
        $cmd = $con -> prepare('UPDATE cargo SET descricao=:n,atividades=:s WHERE id=:id');

        $cmd -> bindValue(":id",$_POST['id']);
        $cmd -> bindValue(":n",$_POST['descricao']);
        $cmd -> bindValue(":s",$_POST['atividades']);
        $cmd -> execute(); 
        header('Location:../index.php');
    }
?>