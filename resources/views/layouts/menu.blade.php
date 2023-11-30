<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Pesto</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Főoldal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hozzávalók
                    </a>
                    <ul class="dropdown-menu">
                        @php
                        $pestos = DB::table('pestos')->get();
                    @endphp
                        @foreach ($pestos as $pesto)
                            {{-- {{$pesto->id}} --}}
                            <li><a class="dropdown-item" href="{{ route('pesto.view', ['id' => $pesto->id]) }}"> {{$pesto->name}}</a></li>
                        
                           
                        @endforeach
                            
                        
                    </ul>
                  </li>
            </ul>
        </div>
    </div>
</nav>