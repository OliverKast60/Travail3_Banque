<header class="navbar navbar-expand-md navbar-light bg-light px-3 mb-light">
    <a href="#" class="navbar-brand">
        <h1>Kast Bank</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-content"  style="display:flex !important; justify-content:space-between">
        <nav style="margin: 0 auto !important;">
            <ul class="navbar-nav ms-auto nav-tabs">
                <li class="nav-item"><a class="nav-link" href="../views/acceuil_admin.php">Accueil</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Ajouter</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../views/creer_client.php">Créer un client</a></li>
                        <li><a class="dropdown-item" href="../views/creer_compte.php">Créer un Compte</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Operations</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../views/depot.php">Deposer de l'argent</a></li>
                        <li><a class="dropdown-item" href="../views/retrait.php">Retirer de l'argent</a></li>
                        <li><a class="dropdown-item" href="../views/fermer_compte.php">Fermer un compte</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <form action="" id="searchForm" class="ms-auto">
            <div class="input-group">
                <input type="search" name="q" placeholder="Rechercher" class="form-control">
                <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <button type="button" class="btn btn-primary ms-3" data-bs-toggle="offcanvas" data-bs-target="#userTools">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
    </button>
</header>
<section class="offcanvas offcanvas-end" id="userTools">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title">Se déconnecter</h2>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe" />
                <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
            </div>
            <a href="/kast_apartments/index.php" class="btn btn-primary h2 active">Se déconnecter</a>
        </form>
    </div>
</section>
