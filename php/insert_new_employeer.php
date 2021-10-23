<?php
    include 'conexao.php';

    if(!$con){
        echo   'Desconectado';
    }else{
        $cmd = $con -> prepare('INSERT INTO dados (nome,sobrenome,cargo,nascimento,admissao,salario) VALUES(:n,:s,:c,:nasci,:a,:sal)');
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