<?php
include_once("../templates/header.php")
?>
<div class="container">
<?php include_once("../templates/backbtn.html");?>
<h1>Criar Contato</h1>
<form action="<?= $BASE_URL ?>../config/process.php" method="POST">
<input type="hidden" name="type" value="create">
<div class="form-group" >
    <label for="name">Nome do Contato: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
</div>
<div class="form-group" >
    <label for="phone">Telefone: </label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
</div>
<div class="form-group" >
    <label for="observations">Observações: </label>
    <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Digite aqui as observações"></textarea>
</div>
<button type="submit" class="btn-primary">Cadastrar</button>
</form>
</div>    
<?php
include_once("../templates/footer.php")
?>