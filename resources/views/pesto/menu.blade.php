<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hozzávalók</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            @foreach ($pestos as $pesto)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pesto/' . $pesto->id) }}">{{ $pesto->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>