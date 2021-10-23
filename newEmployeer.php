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
        <h2>Cadastro de funcionário</h2>
        <section>
            <form action="php/insert_new_employeer.php" method="post" onsubmit="return validar()">
                <div class="mb-3">
                  <label class="form-label">Nome</label>
                  <input id="nome" name ="nome" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sobrenome</label>
                    <input id="sobrenome" name ="sobrenome" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cargo</label>
                    <br>
                    <select name="cargo" class="form-select"> 
                    <?php
                      include ('php/conexao.php');

                      $query = ("SELECT * FROM cargo");

                      foreach($con -> query(($query)) as $linha){
                        echo'<option value="'.$linha['descricao'].'">'.$linha['descricao'].'</option>';
                      }
                    ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Data de Nascimento</label>
                    <input od="nascimento" name ="nascimento" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Data de Admissão</label>
                    <input id="admissao" name ="admissao"  type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Salário</label>
                    <input id="salario" name ="salario" type="text" class="form-control">
                  </div>
                <button type="submit" class="btn btn-primary">Cadastrar Funcionário</button>

                <button type="button" class="btn btn-danger" id="btn-cancel">Cancelar</button>
              </form>
        </section>
    </div>
    
</body>
<script>
    $('#btn-cancel').click(function(){
    window.location.href="index.php";
});
 function validar(){
  var nome = $('#nome').val();
  var sobrenome = $('#sobrenome').val();
  var cargo = $('#cargo').val();
  var nascimento = $('#nascimento').val();
  var admissao = $('#admissao').val();
  var salario = $('#salario').val();
   if(nome===""){
     alert('preencha o campo Nome')
     return false;
   }else if(sobrenome===""){
     alert('preencha o campo Sobrenome')
     return false;
   }else if(cargo===""){
     alert('preencha o campo Cargo')
     return false;
   }else if(nascimento===""){
     alert('preencha o campo Nascimento')
     return false;
   }else if(admissao===""){
     alert('preencha o campo Admissao')
     return false;
   }else if(salario===""){
     alert('preencha o campo Salário')
     return false;
   }else{
    return true
   }
   
 }

</script>
</html>