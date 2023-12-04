<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creer un compte</title>
    <?php include("../assets/b.php") ?>
</head>
<body>
    <?php include("../includes/header_admin.php"); ?>
    <?php include_once "../controllers/getListeClients.php"?>
    <main class="min-vh-100">
        <div class="div-9">
            <div class="">
                <form action="../controllers/enregistrer_compte.php" class="d-flex flex-column gap-3 m-auto col-10 col-md-7 col-xl-4" method="post" enctype="multipart/form-data">
                    <div class="">
                        <div class="form-div mb-5 mt-3">
                            <center><h1 class="title-form">creer un compte</h1></center>
                        </div>
                        <div class="form-div mb-3 text-start">
                            <label for="date_creation" class = "form-label text-start">Numero de compte :</label>
                            <input type="number" name="num_compte" id="" class="form-control" placeholder="Numero du compte" required autocomplete="off">
                        </div>
                        <div class="form-div mb-3 text-start">
                            <label for="date_creation" class = "form-label text-start">Date de création :</label>
                            <input type="date" name="date_creation" id="" class="form-control" placeholder="Date de creation" required autocomplete="off">
                        </div>
                        <div class="form-div mb-3 text-start">
                            <select class="form-select" name="etat">
                                <option value="choix">Choisir Etat</option>
                                <option value="En Cours">En cours</option>
                                <option value="Bloque">Bloque</option>
                            </select>
                        </div>
                        <div class="form-div mb-3">
                            <select class="form-select" name="client">
                                <option value="choix2">Choisir le nom du client</option>
                                <?php
                                    $num = 1;
                                    foreach ($clients = getListeClients() as $client){
                                        echo "<option value = ".$client-> getNum_client().">".$num.". " .$client->getNom_client() ." ".$client->getPrenom_client()."</option>";
                                        $num++;
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-div mb-3 text-start">
                            <label for="solde" class = "form-label text-start">Solde d'ouverture :</label>
                            <input type="number" name="solde" id="" class="form-control" placeholder="Solde d'ouverture" required autocomplete="off">
                        </div>
                        <div class="form-div mb-3 text-start">
                            <label for="type" class = "form-label text-start">Type de compte :</label>
                            <input type="type" name="type" id="" class="form-control" placeholder="Type de compte" required autocomplete="off">
                        </div>
                        <div class="p-3 m-auto text-center mb-3 mt-3">
                            <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-image: linear-gradient(to right, #34A0A4, #557BAF);height:40px; text-align: center; align-items: center;">Deposer</button>
                            <button type="reset" name="reset" class="btn btn-primary border-0 py-2 px-3" style="background-color: red;height:40px; text-align: center;">Annuler</button>
                            <button type="submit" name="save" class="btn btn-primary border-0 py-2 px-3" style="background-image: linear-gradient(to right, #34A0A4, #557BAF);height:40px; text-align: center; align-items: center;"><a href="./les_comptes.php" style="color: #fff;">les comptes</a></button>
                        </div>
                </form>
            </div>
        </div>
    </main>
    <?php include("../includes/footer.php"); ?>
</body>
</html>
