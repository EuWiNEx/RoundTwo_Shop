<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sua página de Games Idie, com lançamentos de jogos pagos e gratuitos - FEITO POR DOUGLAS LOPES DE LARA®">
    <meta name="keywords" content="jogos, lançamentos, novidades geek">

    <base href="http://localhost/roundtwo/">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Danfo&family=Jaro:opsz@6..72&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="imagens/logo.png">

    <title>ShopSet</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="home"><img src="imagens/icon.png" alt="ShopSet Logo" title="ShopSet"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-users fa-xs"></i> Suporte 
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="quem-somos"><i class="fa-brands fa-github fa-xs"></i> Conheça nosso time</a></li>
                                <li><a class="dropdown-item" href="contato"><i class="fa-solid fa-envelope fa-xs"></i> Contato</a></li>
                                <li><a class="dropdown-item" href="parceiros"><i class="fa-solid fa-handshake fa-xs"></i> Parceiros</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="feedback"><i class="fa-solid fa-comment fa-xs"></i> Faça seu Feedback</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="home"><i class="fa-solid fa-house fa-xs"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="lancamentos"><i class="fa-solid fa-bomb fa-xs"></i> Lançamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="jogos"><i class="fa-solid fa-gamepad fa-xs"></i> Jogue Agora</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ofertas"><i class="fa-solid fa-tags fa-xs"></i> Ofertas</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <?php
            //print_r($_GET);
            $pagina = "home";
            //verificar se foi clicado em algum menu
            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"] ?? "home";
                //game / 1
                $pagina = explode("/", $pagina);
                //print_r($pagina);
                $codigo = $pagina[1] ?? NULL;
                $pagina = $pagina[0] ?? "home";
            }

            $pagina = "pages/{$pagina}.php";

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "pages/erro.php";
            }
        
        ?>
    </main>
    <footer>
        <p>DIREITOS AUTORAIS POR DOUGLAS LOPES DE LARA ®</p>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
</body>

</html>