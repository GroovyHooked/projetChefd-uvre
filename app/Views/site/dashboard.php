<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 border mt-4 ml-2 mr-2">
            <div class="container mt-5">
                <div class="row ">
                    <div class="col-12">
                        <h2 class="text-center mt-3 mb-3">Tableau de bord</h2>
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
            <div class="container mb-5">
                <div class="row">
                    <div class="col-6 text-center">
                        <a href="<?= base_url('create') ?>">
                            <button type="button" class="btn btn-outline-secondary w-100">Générer</button>
                        </a>
                    </div>
                    <div class="col-6 text-center">
                        <a href="<?= base_url('read') ?>">
                            <button type="button" class="btn btn-outline-secondary w-100">Scanner</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12 mb-3 mb-lg-0 col-lg-6 text-center">
                        <a href="<?= base_url('created') ?>">
                            <button type="button" class="btn btn-outline-secondary w-100">Cartes émises</button>
                        </a>
                    </div>
                    <div class="col-12 mt-3 mt-lg-0 col-lg-6 text-center">
                        <a href="<?= base_url('used') ?>">
                            <button type="button" class="btn btn-outline-secondary w-100">cartes utilisées</button>
                        </a>
                    </div>
                </div>
                <div class="row mt-5 mb-5 justify-content-center">
                    <div class="col-12 col-lg-6">
                        <a href="<?= base_url('pending') ?>">
                            <button type="button" class="btn btn-outline-secondary w-100">Cartes en circulation</button>
                        </a>
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-6">
                        <a href="<?= base_url('giftedclients') ?>">
                            <button type="button" class="btn btn-outline-secondary w-100">Bénéficiaires</button>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="<?= base_url('clients') ?>">
                            <button type="button" class="btn btn-outline-secondary w-100">Acquéreurs</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>