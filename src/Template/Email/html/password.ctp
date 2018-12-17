<?php $root = $this->Url->build([
    'controller' => 'Users',
    'action' => 'recoverPassword',
    $token,
    $email
], true);?>
<p>
Bonjour <?= $username ?>, 
</p>
<p>
merci de cliquer sur ce lien pour récupérer votre mot de passe : 
<br>
<a href="<?= $root ?>"><?= $root ?></a> 
</p>
<p>
Cordialement, 
Le Cercle digital
</p>