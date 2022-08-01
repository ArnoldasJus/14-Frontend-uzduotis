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
    <header>
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

    <section class="featured container-xl">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active text-center" data-bs-interval="8000">
                    <h1 class="fw-bold">we are clemo.</h1>
                    <hr class="separator">
                    <p class="fw-light">professionals<br>in the creative industries</p>
                    <button type="button" class="btn btn-black rounded-pill">get in touch</button>
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
                </div>
                <div class="carousel-item" data-bs-interval="8000">
                <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="8000">
                <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </section>
</body>
</html>