<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Canil Pets">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/stylepaginainicial.css">
    <title>Aumigo - Página inicial</title>
</head>

<body>
    <div class="container-geral">
        <header class="js-header">
            <div class="container">
                <span class="logo">Aumigo</span>
                <nav class="js-nav-mobile">
                    <ul class="lista-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown-item">
                            <button type="button" class="dropdown-btn">Pets</button>
                            <ul class="dropdown-lista">
                                <li><a href="nossosanimais.php">Nossos animais</a></li>
                                <li class="dropdown-item">
                                    <button type="button" class="dropdown-btn sub-btn">Raças</button>
                                    <ul class="dropdown-lista lista-racas-menu">
                                        <li><a href="cadastrodecachorro.php">Cães</a></li>
                                        <li><a href="cadastrodegato.php">Gatos</a></li>

                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="#">Faça uma doaçao</a></li>
                        <li><a href="#" class="btn-padrao">Adote</a></li>
                        <li><a href="cadastro.html" class="btn-padrao">cadastre-se</a></li>
                        <li><a href="formadm">Administração</a></li>

                    </ul>

                    
                </nav>
                <button class="menu-mobile js-menu-mobile" aria-label="abrir menu" type="button">
                    <div class="barra-menu"></div>
                </button>
            </div>
        </header>
        </main>
        <section class="principal">
            <div class="txt-principal">
                <h1>Adote um <span> amigo</span> mais próximo de você</h1>
                <p>Adotar é resgatar um coração perdido e preenchê-lo com amor e cuidado.</p>
                <a href="#" class="btn-padrao">Adote um pet!</a>
                <div id="seta"></div>
                <div id="ball-1" class="balls"></div>
                <div id="ball-2" class="balls"></div>
                <div id="ball-3" class="balls"></div>
                <div id="ball-4" class="balls"></div>
            </div>
            <address class="redes-sociais-home">
                <p>Siga-nos</p>
                <ul>
                    <li><a href="https://www.instagram.com/" title="Instagram"><img src="assets/imgs/instagram-white.svg" alt=""></a></li>
                    <li><a href="#" title="Facebook"><img src="assets/imgs/facebook-white.svg" alt=""></a></li>
                    <li><a href="https://www.youtube.com/" title="Youtube"><img src="assets/imgs/youtube-white.svg" alt=""></a></li>
                </ul>
            </address>
            <address class="endereco">
                <span>Rua dos animais - doglandia <br>
                    doglandia - SP</span>
            </address>
        </section>
        <section class="caracteristicas">
            <ul>
                <li><img src="assets/imgs/carac.png" alt="" class="js-scroll">
                    <p>Salve uma vida e tenha um novo amigo!</p>
                </li>
                <li><img src="assets/imgs/carac2.png" alt="" class="js-scroll">
                    <p>Animais vacinados e vermifugados</p>
                </li>
                <li><img src="assets/imgs/carac3.png" alt="" class="js-scroll">
                    <p>Todos os pets livres de parasitas</p>
                </li>
            </ul>
        </section>
        <section class="racas container">
            <h2>Nossas raças</h2>
            <article class="racas-caes">
                <h3>Cães</h3>
                <div class="raca-item">
                    <div class="img-raca img-1">
                        <img src="assets/img/racas1.webp" alt="Pit Bull Terrier" class="js-scroll">
                    </div>
                    <div class="raca-infos">
                        <h4>Pit Bull Terrier</h4>
                        <p>São cães bem receptivos com pessoas, porém, podem apresentar agressividade contra outros cães.</p>
                        <span>
                            <p>Expectativa de vida:</p>
                            <p>8 a 15 anos</p>
                        </span>
                    </div>
                </div>
                <div class="raca-item">
                    <div class="img-raca img-2">
                        <img src="assets/img/racas2.webp" alt="Sem raça definida" class="js-scroll">
                    </div>
                    <div class="raca-infos">
                        <h4>Sem raça definida</h4>
                        <p>É um cão muito variado, encontrando-se em todas as cores e tipos, de todos os temperamentos. São muito inteligentes e afetuosos, variando de acordo com as características herdadas.</p>
                        <span>
                            <p>Expectativa de vida:</p>
                            <p>14 a 18 anos</p>
                        </span>
                    </div>
                </div>
                <div class="raca-item">
                    <div class="img-raca img-3">
                        <img src="assets/img/racas3.webp" alt="Labrador" class="js-scroll">
                    </div>
                    <div class="raca-infos">
                        <h4>Labrador Retriever</h4>
                        <p>O labrador é um cão ativo, companheiro e um animal de exposição, além de trabalhar em buscas e salvamento. Também, é o cão guia para deficientes visuais mais visto nas ruas.</p>
                        <span>
                            <p>Expectativa de vida:</p>
                            <p>10 a 12 anos</p>
                        </span>
                    </div>
                </div>
            </article>
            <article class="racas-gatos">
                <h3>Gatos</h3>
                <div class="raca-item">
                    <div class="img-raca img-1">
                        <img src="assets/img/racas4.webp" alt="Pit Bull Terrier" class="js-scroll">
                    </div>
                    <div class="raca-infos">
                        <h4>Sem raça definida</h4>
                        <p>São animais com maiores níveis de resistência e grande aptidão para a vida ao lado dos seres humanos. Possuem reduzida propensão ao desenvolvimento de doenças de origem genética, sendo muito amigáveis e apegados aos donos.</p>
                        <span>
                            <p>Expectativa de vida:</p>
                            <p>15 anos</p>
                        </span>
                    </div>
                </div>
                <div class="raca-item">
                    <div class="img-raca img-2">
                        <img src="/assetsimg/racas5.webp" alt="Pit Bull Terrier" class="js-scroll">
                    </div>
                    <div class="raca-infos">
                        <h4>Siamês</h4>
                        <p>Gato siamês é uma raça de gato oriental, caracterizada por um corpo elegante e esguio e uma cabeça marcadamente triangular.</p>
                        <span>
                            <p>Expectativa de vida:</p>
                            <p>15 anos</p>
                        </span>
                    </div>
                </div>
            </article>
        </section>
        <section class="animais">
            <div class="container">
                <div class="header-animais">
                    <h2>Últimos animais resgatados</h2>
                    <div class="botoes">
                        <button class="anterior js-btn-anterior">Anterior</button>
                        <button class="proximo js-btn-proximo">Próximo</button>
                    </div>
                </div>
                <div class="container-animais">
                    <div class="js-scroll-animais">
                        
                    </div>
                </div>
                <a href="#" class="todos-os-animais btn-padrao">Todos os animais</a>
            </div>
        </section>
        <section class="ajude">
            <h2>Não pode adotar no momento?</h2>
            <div class="container-ajude">
                <a href="aqjude.php">
                    <img src="img/ajude1.png" alt="" class="js-scroll">
                    <p>Faça uma doação</p>
                </a>
            </div>
        </section>
            <div class="container">
                <div>
                    <span class="js-numero">321</span>
                    <p>Animais resgatados</p>
                </div>
                <div>
                    <span class="js-numero">42</span>
                    <p>Animais disponíveis agora</p>
                </div>
                <div>
                    <span class="js-numero">212</span>
                    <p>Famílias atendidas</p>
                </div>
            </div>
        </section>
        <main>
        <?php include 'rodape.php'; ?>
    </div>
    <script src="assets/js/js/script.js" type="module"></script>
</body>
</html>