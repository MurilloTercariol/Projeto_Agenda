<?php
    include_once("./templates/header.php");
    include_once("./config/process.php");
?>
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope ="row"><?= $contact["id"] ?></td>
                            <td scope ="row"><?= $contact["name"] ?></td>
                            <td scope ="row"><?= $contact["phone"] ?></td>
                            <td class="actions">
                                <a href="#"><i class="fas fa-eye check-icon"></i></a>
                                <a href="#"><i class="far fa-edit edit-icon"></i></a>
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique Aqui para adicionar</a>.</p>
        <?php endif; ?>
    </div>
<?php
    include_once("templates/footer.php");
    /*teste*/
?>