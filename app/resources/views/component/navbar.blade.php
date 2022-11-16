  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" width="90">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav justify-content-end">
                <a class="nav-link {{ Request::is('/') ? 'active':'' }}" aria-current="page" href="/">Home</a>
                <a class="nav-link {{ Request::is('data-dokter') ? 'active':'' }}" aria-current="page" href="/data-dokter">Pegawai</a>
                <a class="nav-link {{ Request::is('data-unit') ? 'active':'' }}" aria-current="page" href="/data-unit">Poli-Klinik</a>
                <a class="nav-link {{ Request::is('data-jadwal') ? 'active':'' }}" aria-current="page" href="/data-jadwal">Jadwal</a>
            </div>
        </div>
    </div>
</nav>