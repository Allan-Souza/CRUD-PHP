<?php
    $id = $_GET['id'];
    $descricao;
    $atividades;
    

    include 'php/conexao.php';

    if(!$con){
        echo 'Desconectado!';
    }else{
        $query = ("SELECT * FROM cargo WHERE id=".$id);

        foreach($con -> query(($query)) as $linha){
          $descricao = $linha['descricao'];
          $atividades = $linha['atividades'];
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="painel-employee">
        <h2>Editar funcionário</h2>
        <section>
            <form action="php/editOffice.php" method="post">
            <input type="hidden" name="id" value="<?php echo$id;?>">
                <div class="mb-3">
                  <label class="form-label">Descrição</label>
                  <input value="<?php echo$descricao;?>" name ="descricao" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Atividades</label>
                    <input value="<?php echo$atividades;?>" name ="atividades" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Salvar Edição</button>

                <button type="button" class="btn btn-danger" id="btn-cancel">Cancelar</button>
              </form>
        </section>
    </div>
    
</body>
<script>
    $('#btn-cancel').click(function(){
    window.location.href="index.php";
});


</script>
</html>