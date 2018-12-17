<section class="card">
    <div class="card-header">
        <span class="utils__title">
            <strong>Ajouter un élève</strong>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                <?= $this->Form->create($user); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" placeholder="Email" name="email" type="text" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Téléphone</label>
                                    <input id="email" class="form-control" placeholder="Téléphone" name="phone" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="firstname">Prénom</label>
                                    <input type="text" class="form-control" placeholder="Prénom" id="firstname" name="firstname" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="lastname">Nom de famille</label>
                                    <input type="text" class="form-control" placeholder="Nom de famille" id="lastname" name="lastname" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </div>
                    <?= $this->Form->end();  ?>
                    <!-- End Vertical Form -->
                </div>
            </div>
        </div>
    </div>
</section>