<?php require_once "includes/header_menu.php"; ?>
<?php require_once "includes/database.php"; ?>

<div class="col-md-9 border bg-white">

<p class="mt-2">CADASTRAR NOVO ALUNO <i class="fas fa-user-friends"></i></p>

<form action="crud_cadastrar_aluno.php" method="POST" class="border rounded p-2" style="background:#f3f3f3;"> <!-- formulario cadastro -->
  <div class="row d-flex justify-content-center">
       <!-- row form -->
       <div class="col-3 text-center mb-5">
            <label>Id do cadastro:</label>
            <input type="number" class="form-control" name="id_cadastro" value="<?php echo $id ?>" disabled>
            <small class="form-text text-muted">
            ID automático
            </small>
        </div>

        <div class="col-3 text-center mb-5">
            <label>Data do cadastro:</label>
            <input type="date" class="form-control" name="data_cadastro">
        </div>

        <div class="col-4 text-center mb-5">
            <label>Responsável Pelo cadastro:</label>
            <input type="text" class="form-control" name="resp_cadastro">
        </div>

        <div class="form-group mx-2">
            <label for="exampleFormControlFile1">Foto de Identificação:</label>
            <input type="file" class="form-control-file mt-1" id="foto_cadastro">
            <small class="form-text text-muted">
            Clique para procurar
            </small>
        </div>

    </div>

    <div class="col-10">
    <div class="input-group mb-3"> <!-- radio group cursos-->
        <div class="input-group-prepend">
         <label class="input-group-text" for="inputGroupSelect01">Selecione o Curso</label>
        </div>

        <select class="custom-select" id="inputGroupSelect01" name="curso">
        <!-- script php para pegar os valores do banco de dados -->
        <?php
            require_once "includes/database.php";
            $sql = "SELECT nome_curso FROM cursos";
            $result = mysqli_query($conexao, $sql);

            while($cursos = mysqli_fetch_assoc($result)){

            ?>

            <option><?php echo $cursos['nome_curso'] ?></option>

            <?php } ?>
        </select>

           
        
    </div> <!-- fim radio-->
    </div>

    <div class="row"><!--row dados pessoas -->
        <div class="col-7 my-1">
            <label>&nbsp; Nome Completo:</label>
            <input type="text" class="form-control" name="nome" autocomplete="off">
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Data de Nascimento:</label>
            <input type="date" class="form-control" name="data_nascimento">
        </div>

        <div class="col-2 my-1">
            <label for="sexo">&nbsp; Sexo:</label>
            <input type="text" class="form-control" name="sexo">
            <small class="form-text text-muted text-center">
            Masculino | Feminino
            </small>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Naturalidade:</label>
            <input type="text" class="form-control" name="naturalidade">
            <small class="form-text text-muted">
            Cidade de Nascimento
            </small>
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; RG:</label>
            <input type="text" class="form-control" name="rg">
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; CPF:</label>
            <input type="text" class="form-control" name="cpf">
            <small class="form-text text-muted">
            Somente números
            </small>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Telefone:</label>
            <input type="text" class="form-control" placeholder="(DDD)" name="telefone">
            <small class="form-text text-muted">
            insira o DDD
            </small>
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; Tel Recado:</label>
            <input type="text" class="form-control" name="tel_recado">
        </div>

        <div class="col-5 my-1">
            <label>&nbsp; Escolaridade:</label>
            <input type="text" class="form-control" name="escolaridade">
            <small class="form-text text-muted">
            Ensino Fundamental | Ensino Médio | Ensino Superior
            </small>
        </div>

        <div class="col-5 my-1">
            <label>&nbsp; Situação:</label>
            <input type="text" class="form-control" name="situacao">
            <small class="form-text text-muted">
            Trabalhando | Desempregado | Estudante
            </small>
        </div>

        <div class="col-7 my-1">
            <label>&nbsp; Endereço:</label>
            <input type="text" class="form-control" name="endereco">
            <small class="form-text text-muted">
            Endereço completo com quadra, lote, casa e bairro
            </small>
        </div>

        <div class="col-2 my-1">
            <label>&nbsp; CEP:</label>
            <input type="text" class="form-control" name="cep">
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
            <input type="text" class="form-control" name="nis">
            <small class="form-text text-muted">
            Número do Bolsa Família
            </small>
        </div>

        <div class="col-3 my-1">
            <label>&nbsp; Nº PIS/PASEP:</label>
            <input type="text" class="form-control" name="pis">
            <small class="form-text text-muted">
            Número PIS/PASEP
            </small>
        </div>

        <div class="col-12 my-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Anotações sobre o cadastro</span>
                </div>
                <textarea class="form-control" aria-label="Com textarea" name="observacao"></textarea>
            </div>
                <small class="form-text text-muted">
                    coloque apenas observações relevantes, caso houver necessidade.
                </small>
        </div>

    </div><!-- fim row dados pessoais -->
  
    <button class="btn btn-primary my-5" type="submit">CADASTRAR</button>
    <p class="lead text-danger" style="font-size:14px;"><strong><i class="fas fa-exclamation-circle"></i> Revise os dados preenchidos no formulário antes de cadastrar!</strong></p>
</form> <!-- fim formulario -->

</div>

<?php require_once "includes/footer.php"; ?>

