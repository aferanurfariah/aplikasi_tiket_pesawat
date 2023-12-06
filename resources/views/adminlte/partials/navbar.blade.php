<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: rgb(177, 51, 51)">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="/tabel" class="nav-link">Data Perpustakaan</a>
        </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="logout" class="btn btn-light">Log Out</button>
            </form>
        </li>
    </ul>
</nav>
