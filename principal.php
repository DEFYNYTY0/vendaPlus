<?php
include "validacao.php";
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>system venda + </title>
  <link rel="stylesheet" href="./recursos/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
</head>

<body>

 <?php include 'menusuperior.php'?>


  <div class="row">
    <div class="col-md-3 menu">
     <?php include 'menulateral.php'?> 
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md card">
          <h3>Cadastro</h3>
          <form action="./usuario/inserir.php" method="post">
            <div class="form-group">
              <label>Nome</label>
              <input name="nome" type="text" class="form-control" placeholder="Seu nome">
            </div>
            <div class="form-group">
              <label>Seu CPF</label>
              <input name="cpf" type="text" class="form-control cpf" placeholder="Seu CPF">

            </div>
            <div class="form-group">
              <label>Senha</label>
              <input name="senha" type="password" class="form-control" placeholder="Senha">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
          </form>
        </div>
        <div class="col-md card">

          <h3>Listagem</h3>

          <table class="table" id="tabela">
            <thead>
              <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Nome </th>
                <th scope="col"> CPF </th>
                <th scope="col"> Opções </th>
              </tr>
            </thead>
            <tbody>


              <?php
              $sql = "select * from usuario";
              $resultado = mysqli_query($conexao, $sql);

              while ($coluna = mysqli_fetch_assoc($resultado)) {

              


              ?>
              <tr>
                
                <td><?php echo $coluna['id']?></td>
                <td><?php echo $coluna['nome']?></td>
                <td><?php echo $coluna['cpf']?></td>
          <td>
            <a href=""><i class="fa-solid fa-pen mr-3 " style="color:green"></i></a>
            <a href="<?php echo'./usuario/excluir.php?id='.$coluna['id'] ?>"><i class="fa-solid fa-trash-can" style="color:red"></i></a>
          </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>











  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="./recursos/script.js"></script>
</body>

</html>