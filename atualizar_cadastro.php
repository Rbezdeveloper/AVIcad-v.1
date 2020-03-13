<?php require_once "includes/header_menu.php"; ?>
<?php require_once "includes/database.php"; ?>
<div class="col-md-9">
<p class="mt-2">CONFIRMAÇÃO DE ALTERAÇÃO DE CADASTRO <i class="fas fa-user-friends"></i></p>
<?php

    $id = $_POST['id'];
    //recebendo os dados via post
    //$data_cadastro = $_POST['data_cadastro'];
    //$resp_cadastro = $_POST['resp_cadastro'];
    $curso = $_POST['curso'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $naturalidade = $_POST['naturalidade'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $telefone_recado = $_POST['telefone_recado'];
    $escolaridade = $_POST['escolaridade'];
    $situacao = $_POST['situacao'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $nis = $_POST['nis'];
    $pis = $_POST['pis'];

    //criando query de atualizacao
    $sql = "UPDATE alunos SET  curso='$curso',nome='$nome',data_nascimento='$data_nascimento',
   sexo='$sexo',naturalidade='$naturalidade',rg='$rg',cpf='$cpf',telefone='$telefone',
   telefone_recado='$telefone_recado',escolaridade='$escolaridade',
   situacao='$situacao',endereco='$endereco',cep='$cep',nis='$nis',pis ='$pis' WHERE id_cadastro = $id ";
    
    $atualizar_cadastro = mysqli_query($conexao, $sql);
    if($atualizar_cadastro){
        echo '<li class="list-group-item text-white bg-success my-5 mx-5" style="height:40px;"> Dados Atualizados com sucesso!</li>';
    } else{
         die ("<h5> Erro ao tentar atualizar cadastro </br>") . mysqli_connect_error($conexao);
    }
    

?>

</div>


<?php require_once "includes/footer.php"; ?>