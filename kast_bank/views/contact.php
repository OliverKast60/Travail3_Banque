<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <?php include("/xamppa/htdocs/kast_bank/assets/b.php") ?>
  </head>
  <body>
    <?php include("/xamppa/htdocs/kast_bank/includes/header_user.php"); ?>
    <main class="contenair-fluid my-3">
        <section class="row p-4">
            <nav class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                    <li class="breadcrumb-item active">Nous contacter</li>
                </ol>
            </nav>
            <section class="col12 col-md-6 mb3">
                <div class="alert alert-info alert-dismissible show fade">
                    <p class="h4">Vous vous adressez à nous.</p>
                    <p>Pour toutes vos commandes, suggéstions et question, notre équipe des développeurs vous prêtera oreille.</p>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="alert"></button>
                </div>
                <h1 class="h2">Nous contacter</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet omnis saepe nostrum, deserunt dolorem odit fugit dolore ducimus debitis dolorum in quaerat voluptatem quasi sed earum, error vero similique sit.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, vitae qui laudantium accusamus veritatis incidunt unde hic est nisi ipsa? Modi odio praesentium omnis, aut et distinctio illum laborum eius.Corporis dolorem cupiditate quidem vitae accusantium nostrum culpa minima, labore quo illo.
                </p>
            </section>
            <section class="col-12 col-md-6">
                <form action="">
                    <h2 class="h3">
                        Formulaire de contact
                    </h2>
                    <fieldset>
                        <legend>Informations personnelles</legend>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control" placeholder="Votre prenom">
                                    <label for="prenom">Votre prenom</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control" placeholder="Votre nom">
                                    <label for="nom">Votre nom</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3 form-floating">
                                    <input type="email" class="form-control" placeholder="Votre adresse mail">
                                    <label for="email">Votre adresse mail</label>
                                    <small class="form-text">Nous ne divulguerons pas votre adresse mail</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3 form-floating">
                                    <select name="country" id="country" class="form-select">
                                        <option selected>---Choisissez votre pays---</option>
                                        <option value="RDC">RD Congo</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="BU">Burundi</option>
                                    </select>
                                    <label for="country">Votre pays</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Vos préférences</legend>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input type="checkbox" name="newsletter" value="true" class="form-check-input">
                                <label for="newsletter" class="form-check-label">Voulez-vous un appartement ?</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="h6">Comment tu avais entendu parler de nous ?</p>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="hox" value="social" class="form-check-input">Réseaux sociaux
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="how" value="social" class="form-check-input">Publicités
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Votre message</legend>
                        <div class="mb-3 form-floating">
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Votre message"></textarea>
                            <label for="message">Votre message</label>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </section>
        </section>
    </main>
    <?php include("/xamppa/htdocs/kast_bank/includes/footer.php"); ?>
  </body>
</html>
