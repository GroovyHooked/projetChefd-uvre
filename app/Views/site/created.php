
        <div style="overflow-x:auto;">
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Cartes créées</h3>
        </div>
    </div>
    <div class="retourAccueil">
        <a href="<?= base_url('dashboard') ?>">
            <div id="triangle"></div>
            <div class="triangleBis">Accueil</div>
        </a>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Montant</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $row){?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['giftedFirstname'] ?></td>
                    <td><?= $row['giftedLastname'] ?></td>
                    <td><?= number_to_currency($row['value'], 'EUR', 'fr', 2) ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?= $row['id'] ?>">
                            +
                        </button>

                        <!-- Modal -->
                        <div class="modal" id="modal<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="Modal">Informations supplémentaires</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-10 offset-2">
                                                    <p><?= $row['giftedPhone'] ?></p>
                                                    <p>Carte achetée par:</p>
                                                    <p>Mr ou Mme <?= $row['clientLastname'] ?></p>
                                                    <p><?= $row['clientAddress'] ?> </p>
                                                    <p><a href="tel:<?= $row['clientPhone'] ?>"><?= $row['clientPhone'] ?></a> </p>
                                                    <p><a href="mailto:<?= $row['client_email'] ?>"> <?= $row['client_email'] ?> </a></p>
                                                    <img src="<?= $row['card_url'] ?>" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $pager->links() ?>
    </div>
</div>
        </div>

