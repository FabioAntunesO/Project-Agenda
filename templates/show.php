<?php
include_once("../templates/header.php");
?>
<div class="container d-flex justify-content-center align-items-center vh-50">
    <div class="w-50" style="border-top-width: 100px; padding-top: 50px;">
        <a href="<?= $BASE_URL ?>" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
        <h1 id="main-title" class="text-center mb-4"><?= $contact["name"] ?></h1>
        <div class="mb-3">
            <p class="fw-bold">Telefone:</p>
            <p class="text-muted"><?= $contact["phone"] ?></p>
        </div>
        <div>
            <p class="fw-bold">Observações:</p>
            <p class="text-muted"><?= $contact["observations"] ?></p>
        </div>
    </div>
</div>
<?php
include_once("../templates/footer.php");
?>
