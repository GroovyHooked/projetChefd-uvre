<div class="container">
    <div class="row">
        <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pb-3 bg-white form-wrapper pt-4">
            <div class="container">
            <h3 class="text-center"></h3>
                <?=form_open('test')?>
                    <div class="form-group">
                        <label for="email">Saisissez votre message :</label>
                        <input type="text" class="form-control" name="test" id="email" value="">
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                        </div>
                    </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>