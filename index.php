<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio Rogerio Filho</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <script src="https://kit.fontawesome.com/19ce1ec299.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="nav-container">
                    <h1 class="nav-title"><a href="index.php">PORTIFÓLIO</a></h1>
                    <div>
                        <a href="#home" class="nav-itens">Home</a>
                        <a href="#sobre" class="nav-itens">Sobre</a>
                        <a href="#trabalhos" class="nav-itens">Trabalhos</a>
                        <a href="#contato" class="nav-itens">Contato</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container">
            <section class="Banner" id="home">
                <div class="ring">
                    <i class="aro" style="--clr:#7102DC;"></i>
                    <i class="aro" style="--clr:#fff;"></i>
                    <i class="aro" style="--clr:#2870ff;"></i>

                    <article class="banner-div">
                        <p>Oi sou o Rogerio,</p>
                        <h1>Desenvolvedor <br><strong style="color:#2870ff">FRONT END</strong></h1>
                        <a href="#sobre">
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </article>
                </div>
            </section>
        </section>

        <section class="container">
            <section class="sobre" id="sobre">
                <h1>SOBRE MIM</h1>

                <article class="sobre-div">
                    <p>Sou Desenvolvedor Front-End e tenho experiencia com landing pages e sistemas de gestão utilizando bancos de dados. Fiz estágio na empresa Wa Web Design. Alguns dos meus hobbes são: ouvir musica, jogar e criar jogos. </p>
                </article>

            </section>
        </section>

        <!-- Habilidades -->
        <section class="container">
            <section class="habil" id="habil">
                <h1>HABILIDADES</h1>
                <!-- HTML, CSS, JS, MYSQL, PHP, C# -->
                <ul class="linguas">
                    <li>
                        <i class="fa-brands fa-html5"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-css3-alt"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-square-js"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-database"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-php"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-figma"></i>
                    </li>
                    <li>
                        <img src="assets/img/c-sharp.png" alt="Língua C#" width="90" height="90">
                    </li>
                </ul>
            </section>
        </section>

        <section class="container">
            <section class="trabalhos" id="trabalhos">
                <h1>TRABALHOS</h1>

                <ul class="projetos">
                    <li>
                        <a href="" class="proj-container" target="_blank">
                            <img src="assets/img/projetos/DehumanosCadastro.png" alt="Imagem do site" class="proj-img">
                            <p>Dehumanos - Cadastro</p>
                        </a>
                    </li>
                    <li>
                        <a class="proj-container" href="" target="_blank">
                            <img src="assets/img/projetos/Gft.png" alt="Imagem do site" class="proj-img">
                            <p>Dehumanos GFT</p>
                        </a>
                    </li>
                    <li>
                        <a class="proj-container" href="https://www.dehumanos.com.br/" target="_blank">
                            <img src="assets/img/projetos/Dehumanos.png" alt="" class="proj-img">
                            <p>Dehumanos</p>
                        </a>
                    </li>
                    <li>
                        <a class="proj-container" href="" target="_blank">
                            <img src="assets/img/projetos/dehumanosSistema.png" alt="" class="proj-img">
                            <p>Dehumanos - Sistema</p>
                        </a>
                    </li>
                    <li>
                        <a class="proj-container" href="https://urbantech.com.br/" target="_blank">
                            <img src="assets/img/projetos/urbantech.png" alt="" class="proj-img">
                            <p>Urbantech</p>
                        </a>
                    </li>
                    <li>
                        <a class="proj-container" href="https://condserraverdelimeira.com.br/" target="_blank">
                            <img src="assets/img/projetos/condominio.png" alt="" class="proj-img">
                            <p>Sistema Condomínio Serra Verde</p>
                        </a>
                    </li>
                    <li>
                        <a class="proj-container" href="https://splashcascavel.com.br" target="_blank">
                            <img src="assets/img/projetos/Splash.png" alt="" class="proj-img">
                            <p>Splash Cascavel</p>
                        </a>
                    </li>
                </ul>
            </section>
        </section>

        <!-- contato -->
        <section class="container">
            <section class="contato">
                <h1>Contato</h1>
                <article class="contato-container">
                    <div class="contato-item">
                        <i class="fa-solid fa-phone"></i>
                        <a href="">67-992997684</a>
                    </div>
                    <div class="contato-item">
                        <i class="fa-regular fa-envelope"></i>
                        <a href="">rogerio.rhty@outlook.com</a>
                    </div>
                    <div class="contato-item">
                        <i class="fa-brands fa-linkedin outro"></i>
                        <a href="">Rogerio Filho</a>
                    </div>
                </article>
            </section>
        </section>
    </main>
    <footer>
        <div id="contato" class="footer-container">
            <div class="footer-icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://github.com/rogeriofilhoO" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin outro2"></i></a>
            </div>
            <p>© 2024 Rogerio Filho, All rights reserved.</p>
        </div>
    </footer>
</body>

</html>