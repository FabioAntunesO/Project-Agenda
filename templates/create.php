<?php
include_once("../templates/header.php");
?>
<div class="container d-flex justify-content-center align-items-center vh-50">
    <div class="w-50" style="border-top-width: 100px; padding-top: 50px;">
        <a href="<?= $BASE_URL ?>" class="btn btn-secondary mb-30">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
        <h1 class="text-center mb-4">Criar Contato</h1>
        <form action="<?= $BASE_URL ?>../config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group mb-3">
                <label for="name">Nome do Contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group mb-3">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>
            <div class="form-group mb-4">
                <label for="observations">Observações:</label>
                <textarea class="form-control" id="observations" name="observations" placeholder="Digite aqui as observações"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
<?php
include_once("../templates/footer.php");
?>
