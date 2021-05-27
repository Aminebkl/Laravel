@extends('layout.app')

@section('content')
<header>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white"
        style="width: 280px; height: 100vh; background-color: rgb(102, 0, 0)">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4 ms-5 ps-4 text-center">Admin</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto ms-2">
            <li class="nav-item">
                <a href="#" class="nav-link  navtxt" aria-current="page">
                    Continents
                </a>
            </li>
            <li>
                <a href="#" class="nav-link navtxt">
                    Equipes
                </a>
            </li>
            <li>
                <a href="#" class="nav-link navtxt">
                    Joueurs
                </a>
            </li>
        </ul>
    </div>
</header>
@endsection