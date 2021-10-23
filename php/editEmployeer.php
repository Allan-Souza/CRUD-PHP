<?php

    include 'conexao.php';

    if(!$con){
        echo   'Desconectado';
    }else{
        $cmd = $con -> prepare('UPDATE dados SET nome=:n,sobrenome=:s,cargo=:c,nascimento=:nasci,admissao=:a,salario=:sal WHERE id=:id');

        $cmd -> bindValue(":id",$_POST['id']);
        $cmd -> bindValue(":n",$_POST['nome']);
        $cmd -> bindValue(":s",$_POST['sobrenome']);
        $cmd -> bindValue(":c",$_POST['cargo']);
        $cmd -> bindValue(":nasci",$_POST['nascimento']);
        $cmd -> bindValue(":a",$_POST['admissao']);
        $cmd -> bindValue(":sal",$_POST['salario']);
        $cmd -> execute(); 
        header('Location:../index.php');
    }
?>