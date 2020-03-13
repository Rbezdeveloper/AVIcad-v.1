<?php require_once "includes/header_menu.php"; ?>
<?php require_once "includes/database.php"; ?>

<div class="col-md-9 border">
    <p class=" lead mt-2">Consultar Cadastro de Aluno <i class="fas fa-user-friends"></i></p>

    <form action="" method="POST" class="border rounded p-2" style="background:#f3f3f3;"> <!-- formulario cadastro -->
    <div class="row d-flex justify-content-center">
        <div class="col-10">
                <div class="input-group mt-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Pesquisar por nome</span>
                    </div>
                    <input type="text" name="nome" class="form-control"  aria-label="Exemplo do tamanho do input" autocomplete="off" aria-describedby="inputGroup-sizing-default">
                </div>
                <input class="btn btn-success mt-3
                " name="pesquisarAluno" type="submit" value="PESQUISAR"></input>
            </div>
        </div>
    </form>

    <table class="table table-striped my-3">
  <thead>
    <tr>
        <!-- criando tabela e colunas para armazenar os valores do banco -->
      <th scope="col">ID</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Data de inscrição</th>
      <th scope="col">Responsável pela inscrição</th>
      <th scope="col">Curso Cadastrado</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>

    <?php
        //criando uma variavel para fazer filter para pegar os dados POST do formulário
        $consulta_cadastro = filter_input(INPUT_POST, 'pesquisarAluno', FILTER_SANITIZE_STRIPPED);
        //verificando se aconteceu o clique
        if($consulta_cadastro){
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRIPPED);
            //criando uma consulta com o nome especifico da variavel
            $sql = "SELECT * FROM `alunos` WHERE nome LIKE '%$nome%' ORDER BY data_cadastro DESC ";
            $resultado = mysqli_query($conexao, $sql);
            //percorrendo a tabela
            while($linha_pesquisa = mysqli_fetch_assoc($resultado)){

                //registrando os valores da tabela em variaveis
                $id_cadastro = $linha_pesquisa['id_cadastro'];
                $nome = $linha_pesquisa['nome'];
                $data_cadastro = $linha_pesquisa['data_cadastro'];
                $resp_cadastro = $linha_pesquisa['resp_cadastro'];
                $curso = $linha_pesquisa['curso'];
                $telefone = $linha_pesquisa['telefone'];
            ?>
            <tr>
                <!-- criando uma Linha e adicionado colunas com os resultados da tabela percorrida-->
                <td><?php echo $id_cadastro ?></td>
                <td><?php echo $nome ?></td>
                <td><?php echo $data_cadastro ?></td>
                <td><?php echo $resp_cadastro ?></td>
                <td><?php echo $curso ?></td>
                <td><?php echo $telefone ?></td>
                <!-- pegando o id do aluno e enviando para o a pagina  editar cadastro  -->
                <td><a class="btn btn-warning btn-sm" href="alterar_cadastro_aluno.php?id_cadastro=<?php echo $id_cadastro ?>">Ver e Editar</a></td>
            <?php } ?>
            </tr>
        </table>
<?php
      }

?>


