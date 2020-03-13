<?php require_once "includes/header_menu.php"; ?>
<?php require_once "includes/database.php"; ?>

<div class="col-md-9 border">

<p class="mt-2">Atualizar Cadastro <i class="fas fa-user-friends"></i></p>
<?php $id = $_GET['id']; ?>
<form action="atualizar_cadastro.php" method="POST" class="border rounded p-2" style="background:#f3f3f3;"> <!-- formulario cadastro -->
  
<?php

    $sql = "SELECT * FROM alunos WHERE id_cadastro = $id";
    $buscar_dados = mysqli_query($conexao, $sql);
    
    while($dados_aluno = mysqli_fetch_array($buscar_dados)){
        
        ?>

  <div class="row d-flex justify-content-center">
       <!-- row form -->
       <div class="col-3 text-center mb-5">
            <label>Id do cadastro:</label>
            <input type="number" class="form-control" name="id_cadastro" value="<?php echo $dados_aluno['id_cadastro'] ?>" disabled>
        </div>

        <div class="col-3 text-center mb-5">
            <label>Data do cadastro:</label>
            <input type="date" class="form-control" name="data_cadastro" value="<?php echo $dados_aluno['data_cadastro'] ?>" disabled>
        </div>

        <div class="col-3 text-center mb-5">
            <label>Responsável Pela Inscrição:</label>
            <input type="text" class="form-control" name="resp_cadastro" value="<?php echo $dados_aluno['resp_cadastro'] ?>" disabled>
        </div>

        <div class="form-group mx-2">
            <label for="exampleFormControlFile1">Foto de Identificação:</label>
            <input type="file" class="form-control-file mt-1" id="foto_cadastro">
            <small class="form-text text-muted">
            Clique para procurar
            </small>
        </div>

    </div>

    <div class="input-group mb-3"> <!-- radio group cursos-->
        <div class="input-group-prepend">
         <label class="input-group-text" for="inputGroupSelect01">Selecione o Curso</label>
        </div>

        <select class="custom-select" id="inputGroupSelect01" name="curso" value="<?php echo $dados_aluno['curso'] ?>">
            <option></option>
            <option>CABELEIREIRO - MATUTINO - SEGUNDA E QUARTA - 8H ÀS 11H</option>
            <option>CABELEIREIRO - NOTURNO - SEGUNDA E QUARTA - 19H ÀS 22H</option>
            <option>CABELEIREIRO - MATUTINO - TERÇA E QUINTA - 8H ÀS 11H</option>
            <option>CABELEIREIRO - NOTURNO - TERÇA E QUINTA - 19H ÀS 22H</option>
            <option></option>
            <option>INFORMÁTICA BÁSICA - MATUTINO - SEGUNDA E QUARTA - 8H ÀS 9:30H</option>
            <option>INFORMÁTICA BÁSICA - VESPERTINO - SEGUNDA E QUARTA - 13H ÀS 14:30H</option>
            <option>INFORMÁTICA BÁSICA - MATUTINO - TERÇA E QUINTA - 8H ÀS 9:30H</option>
            <option>INFORMÁTICA BÁSICA - VESPERTINO - TERÇA E QUINTA - 13H ÀS 14:30H</option>
            <option>INFORMÁTICA BÁSICA - NOTURNO - TERÇA E QUINTA - 19H ÀS 22H</option>
        </select>

    </div> <!-- fim radio-->

    <div class="row"><!--row dados pessoas -->
        <div class="col-7 my-1">
            <label>&nbsp; Nome Completo:</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $dados_aluno['nome'] ?>" autocomplete="off">
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" disabled>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Data de Nascimento:</label>
            <input type="date" class="form-control" name="data_nascimento"value="<?php echo $dados_aluno['data_nascimento'] ?>">
        </div>

        <div class="col-2 my-1">
            <label for="sexo">&nbsp; Sexo:</label>
            <input type="text" class="form-control" name="sexo"value="<?php echo $dados_aluno['sexo'] ?>">
            <small class="form-text text-muted text-center">
            Masculino | Feminino
            </small>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Naturalidade:</label>
            <input type="text" class="form-control" name="naturalidade"value="<?php echo $dados_aluno['naturalidade'] ?>">
            <small class="form-text text-muted">
            Cidade de Nascimento
            </small>
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; RG:</label>
            <input type="text" class="form-control" name="rg"value="<?php echo $dados_aluno['rg'] ?>">
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; CPF:</label>
            <input type="text" class="form-control" name="cpf" value="<?php echo $dados_aluno['cpf'] ?>">
            <small class="form-text text-muted">
            Somente números
            </small>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Celular:</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo $dados_aluno['telefone'] ?>">
            <small class="form-text text-muted">
            insira o DDD
            </small>
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; Tel Recado:</label>
            <input type="text" class="form-control" name="telefone_recado" value="<?php echo $dados_aluno['telefone_recado'] ?>">
        </div>

        <div class="col-5 my-1">
            <label>&nbsp; Escolaridade:</label>
            <input type="text" class="form-control" name="escolaridade" value="<?php echo $dados_aluno['escolaridade'] ?>">
            <small class="form-text text-muted">
            Ensino Fundamental | Ensino Médio | Ensino Superior
            </small>
        </div>

        <div class="col-5 my-1">
            <label>&nbsp; Situação:</label>
            <input type="text" class="form-control" name="situacao" value="<?php echo $dados_aluno['situacao'] ?>">
            <small class="form-text text-muted">
            Trabalhando | Desempregado | Estudante
            </small>
        </div>

        <div class="col-7 my-1">
            <label>&nbsp; Endereço:</label>
            <input type="text" class="form-control" name="endereco" value="<?php echo $dados_aluno['endereco'] ?>">
            <small class="form-text text-muted">
            Endereço completo com quadra, lote, casa e bairro
            </small>
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; CEP:</label>
            <input type="text" class="form-control" name="cep" value="<?php echo $dados_aluno['cep'] ?>">
            <small class="form-text text-muted">
            <a href="#">Não sei meu CEP</a>
            </small>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Cidade:</label>
            <input type="text" class="form-control" placeholder="Senador Canedo - Goiás" name="cidade" disabled>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Nº NIS:</label>
            <input type="text" class="form-control" name="nis" value="<?php echo $dados_aluno['nis'] ?>">
            <small class="form-text text-muted">
            Número do Bolsa Família
            </small>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Nº PIS/PASEP:</label>
            <input type="text" class="form-control" name="pis"value="<?php echo $dados_aluno['pis'] ?>">
            <small class="form-text text-muted">
            Número PIS/PASEP
            </small>
        </div>

        <div class="col-12 my-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Anotações sobre o cadastro</span>
                </div>
                <textarea class="form-control" aria-label="Com textarea" name="observacao" value="<?php echo $dados_aluno['observacao'] ?>"></textarea>
            </div>
                <small class="form-text text-muted">
                    coloque apenas observações relevantes, caso houver necessidade.
                </small>
        </div>

    </div><!-- fim row dados pessoais -->
  
    <button class="btn btn-success btn-sm my-5" type="submit">Atualizar</button>
  
    <?php } ?>
</form> <!-- fim formulario -->

</div>


<!-- colocando o footer -->
<?php require_once "includes/footer.php"; ?>

