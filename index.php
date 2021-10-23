<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados dos funcionários</title>
    <script type="text/javascript" src="func.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="./js/functions.js"></script>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="newEmployeer.php" class="nav-link px-2 text-white">Novo Funcionário</a></li>
              <li><a href="newOffice.html" class="nav-link px-2 text-white">Novo Cargo</a></li>
            </ul>
    
          </div>
        </div>
      </header>

        
      <!--tabela-->
      
      <div class="painel-employee">
        <section> 
            <h1>Funcionários</h1>
            
            <button class="btn btn-primary" id="btn-employee">Novo funcionário</button>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Sobrenome</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Nascimento</th>
                  <th scope="col">Admissão</th>
                  <th scope="col">Salário</th>
                  <th scope="col">Opções</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                  include ('php/conexao.php');

                  $query = ("SELECT * FROM dados");

                  foreach($con -> query(($query)) as $linha){
                      echo"<tr>";
                      echo"<th>".htmlspecialchars( $linha['id'])."</th>";
                      echo"<td>".htmlspecialchars( $linha['nome'])."</td>";
                      echo"<td>".htmlspecialchars( $linha['sobrenome'])."</td>";
                      echo"<td>".htmlspecialchars( $linha['cargo'])."</td>";
                      echo"<td>".htmlspecialchars( $linha['nascimento'])."</td>";
                      echo"<td>".htmlspecialchars( $linha['admissao'])."</td>";
                      echo"<td>".htmlspecialchars( $linha['salario'])."</td>";
                      echo'<td><a href="editEmployeer.php?id='.$linha['id'].'">Editar</a></td>';
                      echo'<td><a href="php/deleteEmployeer.php?id='.$linha['id'].'">Remover</a></td>';
                      echo"</tr>";
                  }
                ?>
              </tbody>
            </table>
        </section>
      </div>

      <div class="painel-office">
        <section> 
            <h1>Cargos</h1>

            <button class="btn btn-primary" id="btn-office">Cargo</button>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Atividades</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  include ('php/conexao.php');

                  $query = ("SELECT * FROM cargo");

                  foreach($con -> query(($query)) as $linha){
                      echo"<tr>";
                      echo"<th>".htmlspecialchars( $linha['id'])."</th>";
                      echo"<td>".htmlspecialchars( $linha['descricao'])."</td>";
                      echo"<td>".htmlspecialchars( $linha['atividades'])."</td>";
                      echo'<td><a href="editOffice.php?id='.$linha['id'].'">Editar</a></td>';
                      echo'<td><a href="php/deleteOffice.php?id='.$linha['id'].'">Remover</a></td>';
                      echo"</tr>";
                  }
                ?>
              </tbody>
            </table>
        </section>
      </div>
      
</body>
<script>
    $('#btn-employee').click(function(){
    window.location.href="newEmployeer.php";
});

$('#btn-office').click(function(){
    window.location.href="newOffice.html";
});
</script>
</html>
