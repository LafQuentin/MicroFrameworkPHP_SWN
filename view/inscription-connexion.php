<div class="container content-data">


    <?php
        if($Mail == FALSE)
            System\Notification::show('Il y a déja un compte associé à cette adresse email.', 'danger');
        elseif($Mdp == FALSE)
            System\Notification::show('Les deux mots de passe sont différents.', 'warning');
        elseif($Inscription == TRUE)
            System\Notification::show('Vous venez de creer un compte sur Pet Story vous pouvez vous connecter dès à présent!', 'success');
        elseif($MailCo == FALSE)
            System\Notification::show('Aucun compte associé à cette adresse email', 'danger');
        elseif($MdpCo == FALSE)
            System\Notification::show('Mauvais mot de passe', 'warning');
        elseif($Input == FALSE)
            System\Notification::show('Vous devez remplir tout les champs', 'warning');

        if(isset($_SESSION['deco'])) {
            session_unset($_SESSION['deco']);
            System\Notification::show('Vous êtes bien déconnecté du Story Pet.', 'success');
        }

        if(isset($_SESSION['pageCo'])) {
            if($_SESSION['pageCo'] = TRUE) {
                session_unset($_SESSION['pageCo']);
                System\Notification::show('Vous devez vous connecter pour accèder à cette page.', 'warning');
            }
        }
        if(isset($_SESSION['reloadToken'])) {
            if($_SESSION['reloadToken'] = TRUE) {
                session_unset($_SESSION['reloadToken']);
                System\Notification::show('Votre connexion à expiré, vous devez vous reconnecter.', 'warning');
            }
        }

    ?>

    <div class="panel panel-default ">
        <div class="panel-heading"><i class="fa fa-user fa-fw"></i> Inscription / Connexion </div>
        <div class="panel-body">
            <div class="col-xs 12 col-sm-6 col-md-6 col-border">
                <h4><span class="label label-pet-story"><i class="fa fa-user fa-fw"></i> Connexion</span></h4>

                <form method="post" action="<?= System\Router::goodUrl(); ?>accueil/inscription-connexion/">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mail">Email</label>
                        <div class="col-md-8">
                            <input id="mail" name="mail" type="email" placeholder="Votre adresse email" class="form-control input-md" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="password">Mot de passe</label>
                        <div class="col-md-8">
                            <input id="password" name="password" type="password" placeholder="Mot de passe" class="form-control input-md" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button id="submitCo" name="submitCo" class="btn menu-button btn-block">Connexion</button>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="col-md-12">
                        <a class="btn btn-block btn-social btn-facebook">
                            <i class="fa fa-facebook"></i> Se connecter avec Facebook
                        </a>
                        <a class="btn btn-block btn-social btn-google-plus">
                            <i class="fa fa-google-plus"></i> Se connecter avec Google
                        </a>
                        <a class="btn btn-block btn-social btn-twitter">
                            <i class="fa fa-twitter"></i> Se connecter avec Twitter
                        </a>
                    </div>
                </div>
            </div>
            <!--/.column -->
            <div class="col-xs 12 col-sm-6 col-md-6">
                <h4><span class="label label-pet-story"><i class="fa fa-user-plus fa-fw"></i> Inscription</span></h4>

                <form method="post" action="<?= System\Router::goodUrl(); ?>accueil/inscription-connexion/">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="pseudo">Identifiant</label>
                        <div class="col-md-9">
                            <input id="pseudo" name="pseudo" type="text" placeholder="Identifiant" class="form-control input-md" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mail">Email</label>
                        <div class="col-md-9">
                            <input id="mail" name="mail" type="email" placeholder="Votre adresse email" class="form-control input-md" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Mot de passe</label>
                        <div class="col-md-8">
                            <input id="password" name="password" type="password" placeholder="Mot de passe" class="form-control input-md" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="checkPassword">Vérification du mot de passe</label>
                        <div class="col-md-8">
                            <input id="checkPassword" name="checkPassword" type="password" placeholder="Mot de passe" class="form-control input-md" required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button id="submitIns" name="submitIns" class="btn menu-button btn-block">S'inscrire</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
