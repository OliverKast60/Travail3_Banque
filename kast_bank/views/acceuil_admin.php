<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kast bank</title>
    <?php
        include("/xamppa/htdocs/kast_bank/assets/b.php");
    ?>
</head>

<body>
    <header class="min-vh-400">
        <?php include("/xamppa/htdocs/kast_bank/includes/header_admin.php") ?>
        <main class="container-fluid my-3">
        <section class="row mb-3">
            <div class="col-12 col-lg-8">
                <img src="../images/officeBuilding.jpg" alt="Bureau One2Learn" class="img-fluid rounded">
            </div>
            <div class="col-12 col-lg-4 bg-light py-5 px-3">
                <h1 class="display-4">Kast Bank</h1>
                <p class="lead">La banque du futur <br>
                    Votre argent dans un endroit sûr et securisé</p>
                <hr class="my-3">
                <p class="lead">Banque numérique</p>
                <hr class="my-3">
                <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas1" data-bs-target="#userTools">En savoir plus</a>
            </div>
        </section>
    </main>
    <section class="offcanvas offcanvas1 offcanvas-start" id="userTools">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">Kast bank</h1>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas1"></button>
        </div>
        <div class="offcanvas-body">
            <span>Developée par: <br/>Kasereka Kasonia Olivier</span>
            <hr class="mt-3">
            <span>En date: <br/>Mardi, 29 novembre 2023</span>
            <hr class="mt-3">
            <span>Role: <br/>Cette application va permettre une bonne gestion de la banque</span>
        </div>
    </section>
    </header>
    <?php include("/xamppa/htdocs/kast_bank/includes/footer.php"); ?>
</body>

</html>
