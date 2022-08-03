<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend užduotis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xl">
                <a class="navbar-brand fw-bold logo" href="#">clemo.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link fw-light" href="#">about us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light" href="#">services</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light" href="#">works</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light" href="#">blog</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light" href="#">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="bg-theme container-xl">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <h1 class="fw-bold">we are clemo.</h1>
                    <hr class="separator">
                    <p class="fw-light">professionals<br>in the creative industries</p>
                    <button type="button" class="btn cta rounded-pill">get in touch</button>
                </div>
                <div class="carousel-item">
                <img src="img/alexandra-gorn-JIUjvqe2ZHg-unsplash.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/christopher-jolly-GqbU78bdJFM-unsplash.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </section>

    <section class="container-xl">
        <h2 class="text-center">what we do?</h2>
        <div class="row">
            <div class="col">
                <img src="img/pexels-dmitry-zvolskiy-2062426.jpg" alt="">
            </div>
            <div class="col">
                <h3>creative<br>kitchen</h3>
                <hr class="separator">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti tempore est reprehenderit incidunt, tenetur alias voluptatum facilis vitae iure.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum a soluta iusto alias perspiciatis aut.</p>
                <button type="button" class="btn cta-light rounded-pill">learn more</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>creative<br>kitchen</h3>
                <hr class="separator">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti tempore est reprehenderit incidunt, tenetur alias voluptatum facilis vitae iure.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum a soluta iusto alias perspiciatis aut.</p>
                <button type="button" class="btn cta-light rounded-pill">learn more</button>
            </div>
            <div class="col">
                <img src="img/pexels-dmitry-zvolskiy-2062426.jpg" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <img src="img/pexels-dmitry-zvolskiy-2062426.jpg" alt="">
            </div>
            <div class="col">
                <h3>creative<br>kitchen</h3>
                <hr class="separator">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti tempore est reprehenderit incidunt, tenetur alias voluptatum facilis vitae iure.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum a soluta iusto alias perspiciatis aut.</p>
                <button type="button" class="btn cta-light rounded-pill">learn more</button>
            </div>
        </div>
    </section>

    <section class="container-xl">
        <h2 class="text-center">our best work</h2>
    </section>

    <section class="container-fluid bg-theme">
        <h2 class="text-center">best team</h2>
    </section>

    <section class="container-xl">
        <h2 class="text-center">clients say's</h2>
    </section>

    <section class="container-fluid bg-black text-white">
        <h2 class="text-center">get in touch</h2>
    </section>

    <footer class="text-center">
        <p class="fw-bold">© 2016 clemo.</p>
        <p>all rights reserved</p>
    </footer>
</body>
</html>