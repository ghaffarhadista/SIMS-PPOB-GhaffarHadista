<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
    <div class="container">
        <img src="/icons/logo.png" class="me-1" alt="logo">
        <a class="navbar-brand fw-bolder" href="/pages">SIMS PPOB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto text-dark">
                    <a class="nav-link fw-bold <?= $menu=='topup' ? 'text-danger' : ''; ?>" aria-current="page" href="/pages/topup">Top Up</a>
                    <a class="nav-link fw-bold <?= $menu=='transaction' ? 'text-danger' : ''; ?>" href="/pages/transaction">Transaction</a>
                    <a class="nav-link fw-bold <?= $menu=='akun' ? 'text-danger' : ''; ?>" href="/pages/akun ">Akun</a>
                </div>
            </div>
    </div>
</nav>

