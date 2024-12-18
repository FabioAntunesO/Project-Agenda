<?php
include_once("../templates/header.php");
?>
<div class="container d-flex justify-content-center align-items-center flex-column vh-50">
    <?php if (isset($printMsg) && $printMsg != ''): ?>
        <p id="msg" class="alert alert-info"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title" class="mb-4">Minha Agenda</h1>
    <?php if (count($contacts) > 0): ?>
        <table class="table table-striped table-bordered text-center" id="contacts-table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contact["id"] ?></td>
                        <td><?= $contact["name"] ?></td>
                        <td><?= $contact["phone"] ?></td>
                        <td class="">
                            <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>" class="btn btn-sm btn-info me-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>" class="btn btn-sm btn-warning me-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form class="delete-form" action="<?= $BASE_URL ?>../config/process.php" method="POST" style="display:inline;">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text" class="text-center">Ainda não há contatos na sua agenda, 
            <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.
        </p>
    <?php endif; ?>
</div>
<?php
include_once("../templates/footer.php");
?>
