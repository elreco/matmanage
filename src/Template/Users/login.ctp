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
                        <strong>Connexion</strong>
                    </h4>
                    <br>
                    <?= $this->Form->create($user); ?>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input id="email" class="form-control" placeholder="Email" name="email" type="email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mot de passe</label>
                            <div class="input-append input-group">
                                <input id="password" class="form-control password" name="password" type="password" placeholder="Mot de passe" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'forgotPassword']); ?>" class="utils__link--blue utils__link--underlined">Mot de passe oublié ?</a>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary mr-3">Connexion</button>
                        </div>
                    <?= $this->Form->end();  ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->start("script");?>
<script>
  (function($) {
    "use strict";
    $(function () {
      // Show/Hide Password
      $('.password').password({
        eyeClass: '',
        eyeOpenClass: 'icmn-eye',
        eyeCloseClass: 'icmn-eye-blocked'
      });
    });
  })(jQuery)
</script>
<?php $this->end();?>
