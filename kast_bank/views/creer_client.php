<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter un client</title>
        <?php include("../assets/b.php") ?>
    </head>
    <body>
        <?php include("../includes/header_admin.php"); ?>
        <main class="contenair-fluid my-3">
            <section>
                <form action="../controllers/enregistrer_client.php" method="post" enctype="multipart/form-data">
                    <div class="p-3 m-auto text-center mb-3 mt-3">
                        <h2>Enregistrer un nouveau client</h2>
                    </div>
                    <fieldset>
                        <legend>Informations importantes sur le client</legend>
                        <div class="row p-4">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <small class="form-text">Choisir la photo ici!</small>
                                    <input type="file" name="image_client" id="image_client" value="" class="form-control" style="height: 40px;" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="number" name="num_client" id="" class="form-control" placeholder="Numero du client" required autocomplete="off">
                                <label for="num_client">Numero du client</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="text" name="nom" id="" class="form-control" placeholder="Nom du client" required autocomplete="off">
                                <label for="nom">Nom du client</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="text" name="prenom" id="" class="form-control" placeholder="Prenom du client" required autocomplete="off">
                                <label for="prenom">Prenom du client</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <select class="form-select" name="sexe">
                                    <option value="">---Choisir son sexe---</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                                <label for="nom">Sexe du client</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="text" name="adresse" class="form-control" required placeholder="adresse du client" autocomplete="off">
                                <label for="adresse">adresse du client</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="number" name="code_poste" class="form-control" required placeholder="Code postal du client" autocomplete="off">
                                <label for="code_poste">Code postal du client</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="telephone" name="telephone" class="form-control" required placeholder="Numéro de téléphone" autocomplete="off">
                                <label for="telephone">Numéro de téléphone</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="date" name="datenaiss" class="form-control" required placeholder="Date de naissance du client" autocomplete="off">
                                <label for="datenaiss">Date de naissance du client</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 form-floating">
                                <input type="email" name="e_mail_client" class="form-control" required placeholder="Adresse mail du client" autocomplete="off">
                                <label for="e_mail_client">Adresse mail du client</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="m-auto text-center">
                    <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-image: linear-gradient(to right, #34A0A4, #557BAF);height:40px; text-align: center; align-items: center;">Enregistrer</button>
                    <button type="reset" name="reset" class="btn btn-primary border-0 py-2 px-3" style="background-color: red;height:40px; text-align: center;">Annuler</button>
                    <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-image: linear-gradient(to right, #34A0A4, #557BAF);height:40px; text-align: center; align-items: center;">
                        <a href="./les_clients.php" style="color: #fff;">clients</a>
                    </button>
                </div>
            </form>
        </section>
    </main>
    <?php include("../includes/footer.php"); ?>
</body>
</html>
