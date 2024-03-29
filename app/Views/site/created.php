<?php
use App\Models\Cards;
?>
<div style="overflow-x:auto;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="retourAccueil">
                    <a href="<?= base_url('dashboard') ?>">
                        <div id="triangle"></div>
                        <div class="triangleBis">Accueil</div>
                    </a>
                </div>
            </div>
        </div>
        <pre>
            <?php
            /*if (isset($test)){
                var_dump($test);

            }
            */
            ?>
        </pre>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <?php
                    if (session()->get('successMail')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->get('successMail') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Cartes créées</h3>
            </div>
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
                <?php
                foreach ($users as $row) {
                    ?>
                <form action="<?= base_url('created') ?>" method="post">
                    <tr>
                        <th scope="row">
                            <?= $row['id'] ?>
                        </th>
                        <td>
                            <?= $row['giftedFirstname'] ?>
                            <input type="hidden" name="giftedFirstname" value="<?= $row['giftedFirstname'] ?>">
                        </td>
                        <td>
                            <?= $row['giftedLastname'] ?>
                            <input type="hidden" name="giftedLastname" value="<?= $row['giftedLastname'] ?>">
                        </td>
                        <td>
                            <?= number_to_currency($row['value'], 'EUR', 'fr', 2) ?>
                            <input type="hidden" name="value"
                                   value="<?= number_to_currency($row['value'], 'EUR', 'fr', 2) ?>">
                            <input type="hidden" name="gifted_email"
                                   value="<?= $row['gifted_email'] ?>">
                            <input type="hidden" name="client_email"
                                   value="<?= $row['client_email'] ?>">
                            <input type="hidden" name="id"
                                   value="<?= $row['id'] ?>">
                        </td>
                        <td>
                            <?php
                            $bdd = new Cards();
                            $sentStatus = $bdd->isSentInfo($row['id']);
                            //var_dump($bdd->isSentInfo($row['id']));
                            if($sentStatus == false ){
                            ?>
                                <button type="submit" class="btn btn-primary btn-sm" value="<?= $row['id'] ?>"
                                    name="personnalId">Send
                                </button>
                            <?php } elseif ($sentStatus == true){ ?>
                                <button type="submit" class="btn btn-primary btn-sm" value="<?= $row['id'] ?>"
                                        name="personnalId" disabled="disabled">Done
                                </button>
                                <!--<button type="submit" class="btn btn-primary btn-sm" value=""
                                        name="personnalId">@
                                </button>-->
                            <?php } ?>
                        </td>
                        <td>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal<?= $row['id'] ?>">
                                +
                            </button>
                            <!-- Modal -->
                            <div class="modal" id="modal<?= $row['id'] ?>" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="Modal">Informations supplémentaires</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-10 offset-2">
                                                        <p class="text-dark"><?= $row['giftedPhone'] ?></p>
                                                        <p class="text-dark">Carte achetée par:</p>
                                                        <p class="text-dark">Mr ou Mme <?= $row['clientLastname'] ?></p>
                                                        <p class="text-dark"><?= $row['clientAddress'] ?> </p>
                                                        <p class="text-dark">
                                                            <a href="tel:<?= $row['clientPhone'] ?>"><?= $row['clientPhone'] ?></a>
                                                        </p>
                                                        <p>
                                                            <a href="mailto:<?= $row['client_email'] ?>"> <?= $row['client_email'] ?> </a>
                                                        </p>
                                                        <img src="<?= $row['card_url'] ?>" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </form>
            </table>
            <?= $pager->links() ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="btn-group dropup mb-2">
                    <button type="button" class="btn btn-outline-dark btn-outline-secondary dropdown-toggle paginationButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Résultats/Page
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('created/5')?>">5</a>
                        <a class="dropdown-item" href="<?= base_url('created/10')?>">10</a>
                        <a class="dropdown-item" href="<?= base_url('created/15')?>">15</a>
                        <a class="dropdown-item" href="<?= base_url('created/20')?>">20</a>
                        <a class="dropdown-item" href="<?= base_url('created/100')?>">100</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


