<?php
    echo '
        <nav class="navbar navbar-expand-lg">
        <!-- Adição ícone do menu -->
            <a href="#" class="navbar-brand">
                <img class="navbar-brand-img" src="imagem/Logo_Clara.svg" alt="Logo Siqueira Websites"/>
            </a>
        <!-- Adição Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon">|||</span>
            </button>
        <!-- Adição do menu -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Exercícios</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="pagina1.php">PHP</a>
                        <a class="dropdown-item" href="#">JavaScript</a>

                        </div>
                    
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>

                </ul>
            </div>
        </nav>
    ';
?>