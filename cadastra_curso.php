<?php require_once 'includes/header_menu.php' ?>

<div class="col-md-9">
<p class="mt-2">CADASTRAR NOVO CURSO<i class="fas fa-user-friends"></i></p>

<form action="crud_cadastrar_curso.php" method="POST" class="border rounded p-2" style="background:#f3f3f3;"> <!-- formulario cadastro -->
  <div class="row d-flex justify-content-center">
       <!-- row form -->
       <div class="col-3 text-center mb-5">
            <label>Id do curso:</label>
            <input type="number" class="form-control" name="id_curso" disabled>
            <small class="form-text text-muted">
            ID automático
            </small>
        </div>

        <div class="col-9 text-center mb-5">
            <label>Nome do Curso:</label>
            <input type="text" class="form-control" name="nome_curso">
            <small class="form-text text-muted">
            ID automático
            </small>
        </div>

  
    <button class="btn btn-primary " type="submit">CADASTRAR</button>

</form> <!-- fim formulario -->

</div>


<?php include_once 'includes/footer.php' ?>