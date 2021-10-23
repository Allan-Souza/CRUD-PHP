<?php
    include 'conexao.php';

    if(!$con){
        echo   'Desconectado';
    }else{
        $cmd = $con -> prepare('INSERT INTO cargo (descricao,atividades) VALUES(:d,:a)');
        $cmd -> bindValue(":d",$_POST['descricao']);
        $cmd -> bindValue(":a",$_POST['atividades']);
        $cmd -> execute(); 
        header('Location:../index.php');
    }
?>