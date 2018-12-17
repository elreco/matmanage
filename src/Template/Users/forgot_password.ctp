<div class="login__block">
    <div class="row">
        <div class="col-xl-12">
            <div class="login__block__promo text-white text-center">
                <h1 class="mb-3">
                    <strong>BIENVENUE SUR AEMA</strong>
                </h1>
            </div>
            <div class="login__block__inner">
                <div class="login__block__form">
                    <h4 class="text-uppercase">
                        <strong>Récupération de mot de passe</strong>
                    </h4>
                    <br>
                    <?= $this->Form->create($user); ?>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input id="email" class="form-control" placeholder="Email" name="email" type="email" required>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary mr-3">Récupérer</button>
                        </div>
                    <?= $this->Form->end();  ?>
                </div>
            </div>
        </div>
    </div>
</div>
