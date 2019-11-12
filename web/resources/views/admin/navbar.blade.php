<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route("home") }}">Sifut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nav-link"><i class="fas fa-power-off"></i></a>
                    
        
                <form id="logout-form" action="{{ route('logout') }}"
                        method="POST" style="display: none;">
                    @csrf
                </form>
                    
            </li>
            
        </ul>
        
    </div>
</nav>