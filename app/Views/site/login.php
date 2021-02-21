<div class="container">
    <div class="row">
        <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pb-3 form-wrapper pt-4">
            <div class="container">
                <h3 class="text-center">Connexion</h3>
                <hr>
                <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <?= form_open('index');?>
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="text" class="form-control" name="password" id="password" value="">
                    </div>
                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-outline-secondary">Connexion</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/CI4/public/register">Pas encore de compte ?</a>
                        </div>
                    </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-12 text-center">
                <a href="/CI4/public/forgotPass">Mot de passe oublié</a>
            </div>
        </div>
    </div>
</div>