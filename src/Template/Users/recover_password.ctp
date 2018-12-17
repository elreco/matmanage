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
                        <strong>Créer un nouveau mot de passe</strong>
                    </h4>
                    <br>
					<?= $this->Form->create($user, ['url' => ['action' => 'password']]); ?>
						<?= $this->Form->hidden('token'); ?>
						<div class="form-group">
							<label class="password">Nouveau mot de passe</label>
							<?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Entrez votre nouveau mot de passe', 'label' => false, 'id' => 'password', 'minLenght' => '8', 'value' => ""]); ?>
						</div>
						<div class="form-group">
							<?= $this->Form->control('new_password', ['class' => 'form-control', 'placeholder' => 'Répétez votre nouveau mot de passe', 'label' => false, 'type' => 'password']); ?>
						</div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary mr-3">Enregistrer</button>
                        </div>
                    <?= $this->Form->end();  ?>
                </div>
            </div>
        </div>
    </div>
</div>
