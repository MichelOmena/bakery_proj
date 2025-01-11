<?php
include 'cards.php';
//function
$cards = getCards();
$leftCards = $cards['left_cards'];
$rightCards = $cards['right_cards'];
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./src/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="./src/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crisnuel</title>
</head>

<body>
    <header>
        <!--navBar-->
        <nav id="navbar">
            <i class="fa-solid fa-store" id="nav_logo">Padaria & Pastelaria</i>

            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Contactos</a>
                </li>
            </ul>

            <!--Botao padrao-->
            <button class="btn-default">
                Encomende aqui
            </button>

            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>
        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Contactos</a>
                </li>
            </ul>

            <!--Botao padrao-->
            <button class="btn-default">
                Encomende já, clique aqui
            </button>

        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                <h1 class="title">
                    O calor do forno, o sabor da
                    <span>tradição</span>
                </h1>

                <p class="description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
                <div id="cta_buttons">
                    <a href="#" class="btn-default">
                        Produtos
                    </a>

                    <a href="tel:+11111111111" id="phone_button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                        </button>
                        2376 2736263
                    </a>
                </div>

                <div class="social-media-buttons">

                    <!--icon whatsapp-->
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <!--icon instagram-->
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <!--icon facebook-->
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                </div>
            </div>

            <div id="banner">
                <img src="src/img/bread_hero.png" alt="">
            </div>
        </section>
    </main>

    <section id="menu">
        <div class="first_section">
        <h2 class="section-title">Mais vendidos</h2>
        <h3 class="section-subtitle">Nossas especialidades</h3>
        </div>

        <div class="d-flex justify-content-between row"> <!-- d-flex row for sidebar list-->
        <div class="container d-flex justify-content-center row col-6">
            <!--loop for dishes-->
            <?php foreach ($leftCards as $card): ?>
                <!-- <div class="col-md-6"> -->
            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
            </div>               
                    <img src="<?php echo $card['imagem']; ?>" alt="<?php echo $card['titulo']; ?>" class="w-25 img-auto">

                    <h3 class="dish-title">
                       <?php echo $card['titulo']; ?>
                    </h3>
                    <span class="dish-description">
                        <?php echo $card['descricao']; ?>
                    </span>

                    <div class="dish-rate">
                        <?php for ($i = 0; $i < $card['avaliacao']; $i++): ?>
                        <i class="fa-solid fa-star"></i>
                        <?php endfor; ?>
                        
                        <span>(<?php echo $card['avaliacao_total']; ?>+)</span>
                    </div>

                    <div class="dish-price">
                        <h4><?php echo $card['preco']; ?> €</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>



        <div class="container d-flex justify-content-center row col-6">
            <!--loop for dishes-->
            <?php foreach ($rightCards as $card): ?>
                <!-- <div class="col-md-6"> -->
            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
            </div>               
                    <img src="<?php echo $card['imagem']; ?>" alt="<?php echo $card['titulo']; ?>" class="w-25 img-auto">

                    <h3 class="dish-title">
                       <?php echo $card['titulo']; ?>
                    </h3>
                    <span class="dish-description">
                        <?php echo $card['descricao']; ?>
                    </span>

                    <div class="dish-rate">
                        <?php for ($i = 0; $i < $card['avaliacao']; $i++): ?>
                        <i class="fa-solid fa-star"></i>
                        <?php endfor; ?>
                        
                        <span>(<?php echo $card['avaliacao_total']; ?>+)</span>
                    </div>

                    <div class="dish-price">
                        <h4><?php echo $card['preco']; ?> €</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </section>
    <!--Script JS-->
    <script src="./src/javascript/scripts.js"></script>
    <!--Js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>