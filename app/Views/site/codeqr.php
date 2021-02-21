                                                                                                            <?php
foreach ($codeqr as $row) {
?>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-1 offset-sm-3 offset-lg-4">
                <form method="post" action="/CI4/public/codeqr/<?= $row->card_uniqid ?>">
                    <div class="card" style="width: 18rem;">
                        <img src="/CI4/public/<?= $row->card_url ?>" class="card-img-top" alt="code qr">
                        <div class="card-body">
                            <h5 class="card-title">Card de Mr ou Mme <?= $row->giftedLastname ?></h5>
                            <div class="card-body">
                                <p class="card-text">Valeur de la carte: <?= $row->value ?></p>
                                <p class="card-text">ID de la carte: <?= $row->card_uniqid ?></p>
                            </div>
                            <input type="hidden" name="hidden" value="<?= $row->card_uniqid ?>">
                            <button class="btn btn-primary m-auto d-block w-50" name="button">Valider</button>
                            <div class="mt-3">
                            <a href="<?= site_url('dashboard')?>" ><button type="button" class="btn btn-outline-info m-auto d-block">Tableau de bord</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <?php
                    if (session()->get('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->get('success') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php
}