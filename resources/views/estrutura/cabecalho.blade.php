<link rel="stylesheet" href="cabecalho/cabecalho.css">

<header class="cabecalho">
    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <img src="assets/logo.png" class="logo" alt="Logo">
            <p class="titulo-projeto">Super Receitas</p>
        </div>
        <div class="col-lg-6 d-none d-lg-flex justify-content-end align-items-center">
            <ul class="d-flex links-lista">
                <li class="sem-marcadores"><a href="{{ route('principal') }}" class="sem-sublinhado link">Receitas</a></li>
                <li class="sem-marcadores"><a href="{{ route('receita.form') }}" class="sem-sublinhado link">Criar</a></li>
                <li class="sem-marcadores"><a href="{{ route('minhas.receitas') }}" class="sem-sublinhado link">Minhas Receitas</a></li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li class="sem-marcadores"><button type="submit" class="botao-sair sem-sublinhado link">Sair</button></li>
                </form>
            </ul>
        </div>
        <div class="col-6 d-flex d-lg-none justify-content-end align-items-center">
            <i class="menu-burger fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
        <div id="nav-responsivo" class="d-none d-lg-none justify-content-center align-items-center">
            <ul class="links-lista-responsivo">
                <li class="sem-marcadores"><a href="{{ route('principal') }}" class="sem-sublinhado link-responsivo">Receitas</a></li>
                <li class="sem-marcadores"><a href="{{ route('receita.form') }}" class="sem-sublinhado link-responsivo">Criar</a></li>
                <li class="sem-marcadores"><a href="{{ route('minhas.receitas') }}" class="sem-sublinhado link-responsivo">Minhas Receitas</a></li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li class="sem-marcadores"><button type="submit" class="botao-sair sem-sublinhado link-responsivo">Sair</button></li>
                </form>
            </ul>
        </div>
    </div>

    <script src="principal/principal.js"></script>
</header>