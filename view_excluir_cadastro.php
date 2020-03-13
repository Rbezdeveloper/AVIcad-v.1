<?php require_once "includes/header_menu.php"; ?>
<?php require_once "includes/database.php"; ?>


<?php
 $id = $_GET['id'];
 
  $sql = "DELETE FROM alunos WHERE id_cadastro = $id ";
  $excluir_cadastro = mysqli_query($conexao, $sql);

  if($excluir_cadastro){
      echo "cadastro excluido";
  }else{
      echo " erro ao tentar excluir" . mysqli_error($conexao);
  }

?>

<div class="col-md-9">



</div>