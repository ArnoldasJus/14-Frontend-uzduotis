<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend užduotis</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <nav class="navbar navbar-expand-lg py-5">
            <div class="container-xl">
                <a class="navbar-brand fw-bold logo" href="#">clemo.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link fw-light menu-theme" href="#">about us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light menu-theme" href="services.php">services</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light menu-theme" href="#">works</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light menu-theme" href="#">blog</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fw-light menu-theme" href="#">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    
    <section class="container-xl">
        <div id="featuredSectionCarousel" class="carousel slide container-xl bg-theme featured d-flex align-items-center">
            <div class="carousel-indicators side gap-3">
                <button type="button" data-bs-target="#featuredSectionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#featuredSectionCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#featuredSectionCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <h1 class="fw-bold">we are clemo.</h1>
                        <hr class="separator mx-auto">
                    <p class="fw-light text-black">professionals<br>in the creative industries</p>
                    <button type="button" class="btn cta rounded-pill my-5">get in touch</button>
                </div>
                <div class="carousel-item">
                <h1 class="fw-bold">we are clemo.</h1>
                    <hr class="separator mx-auto">
                    <p class="fw-light text-black">professionals<br>in the creative industries</p>
                    <button type="button" class="btn cta rounded-pill my-5">get in touch</button>
                </div>
                <div class="carousel-item">
                <h1 class="fw-bold">we are clemo.</h1>
                    <hr class="separator mx-auto">
                    <p class="fw-light text-black">professionals<br>in the creative industries</p>
                    <button type="button" class="btn cta rounded-pill my-5">get in touch</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xl">
        <h2 class="text-center py-5">what we do?</h2>
        <div class="row gx-5 mb-5">
            <div class="col-12 col-md-6 text-center text-md-end">
                <img src="img\what-we-do-1.jpg" alt="">
            </div>
            <div class="col-12 col-md-6 text-center text-md-start mt-3 mt-md-0">
                <a href="#" class="link-theme">
                    <h3>creative<br><span class="fs-1 fw-bold">kitchen</span></h3>
                </a>
                <div class="wwd-separator"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti tempore est reprehenderit incidunt, tenetur alias voluptatum facilis vitae iure.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum a soluta iusto alias perspiciatis aut.</p>
                <button type="button" class="btn cta-light rounded-pill">learn more</button>
            </div>
        </div>

        <div class="row gx-5 mb-5">
            <div class="col-12 col-md-6 text-center text-md-start">
                <a href="#" class="link-theme">
                    <h3>art<br><span class="fs-1 fw-bold">installation</span></h3>
                </a>
                <div class="wwd-separator"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti tempore est reprehenderit incidunt, tenetur alias voluptatum facilis vitae iure.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum a soluta iusto alias perspiciatis aut.</p>
                <button type="button" class="btn cta-light rounded-pill">learn more</button>
            </div>
            <div class="col-12 col-md-6 text-center text-md-start  mt-3 mt-md-0">
                <img src="img\what-we-do-2.jpg" alt="">
            </div>
        </div>

        <div class="row gx-5">
            <div class="col-12 col-md-6 text-center text-md-end">
                <img src="img\what-we-do-3.jpg" alt="">
            </div>
            <div class="col-12 col-md-6 text-center text-md-start mt-3 mt-md-0">
                <a href="#" class="link-theme">
                    <h3>print<br><span class="fs-1 fw-bold">design</span></h3>
                </a>
                <div class="wwd-separator"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti tempore est reprehenderit incidunt, tenetur alias voluptatum facilis vitae iure.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum a soluta iusto alias perspiciatis aut.</p>
                <button type="button" class="btn cta-light rounded-pill">learn more</button>
            </div>
        </div>
    </section>

    <section class="container-xl bestWork-container text-center">
        <h2 class="text-center py-5">our best work</h2>

        <div class="grid-container">
                <div class="grid-item">
                    <img src="img/our-best-work-1.jpg" alt="">
                    <div class="image-text square-img">
                        <h3 class="fs-1 fw-bold">golfino<br>awards</h3>
                        <hr class="separator mx-auto">
                        <p>print design</p>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="img/our-best-work-2.jpg" alt="">
                    <div class="image-text rect-img">
                        <h3 class="fs-1 fw-bold">golfino<br>awards</h3>
                        <hr class="separator mx-auto">
                        <p>print design</p>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="img/our-best-work-3.jpg" alt="">
                    <div class="image-text rect-img">
                        <h3 class="fs-1 fw-bold">golfino<br>awards</h3>
                        <hr class="separator mx-auto">
                        <p>print design</p>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="img/our-best-work-4.jpg" alt="">
                    <div class="image-text square-img">
                        <h3 class="fs-1 fw-bold">golfino<br>awards</h3>
                        <hr class="separator mx-auto">
                        <p>print design</p>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="img/our-best-work-5.jpg" alt="">
                    <div class="image-text square-img">
                        <h3 class="fs-1 fw-bold">golfino<br>awards</h3>
                        <hr class="separator mx-auto">
                        <p>print design</p>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="img/our-best-work-6.jpg" alt="">
                    <div class="image-text rect-img">
                        <h3 class="fs-1 fw-bold">golfino<br>awards</h3>
                        <hr class="separator mx-auto">
                        <p>print design</p>
                    </div>
                </div>
        </div>

        <button type="button" class="btn cta rounded-pill my-5 ">learn more</button>
    </section>

    <section class="container-fluid bg-theme text-center pb-5">
        <h2 class="py-5">best team</h2>
            <div id="bestTeamCarousel" class="carousel slide container">
                <div class="carousel-indicators gap-3">
                    <button type="button" data-bs-target="#bestTeamCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#bestTeamCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#bestTeamCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner container-xl py-5">
                    <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-1.jpg" alt="">
                                    <h3 class="fw-bold">paul hall</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">art director</p>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-2.jpg" alt="">
                                    <h3 class="fw-bold">joshua spencer</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">founder</p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-3.jpg" alt="">
                                    <h3 class="fw-bold">diane lewis</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">artist, designer</p>
                                </div>
                            </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-1.jpg" alt="">
                                    <h3 class="fw-bold">paul hall</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">art director</p>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-2.jpg" alt="">
                                    <h3 class="fw-bold">joshua spencer</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">founder</p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-3.jpg" alt="">
                                    <h3 class="fw-bold">diane lewis</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">artist, designer</p>
                                </div>
                        </div>  
                    </div>
                    <div class="carousel-item">
                    <div class="row">
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-1.jpg" alt="">
                                    <h3 class="fw-bold">paul hall</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">art director</p>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-2.jpg" alt="">
                                    <h3 class="fw-bold">joshua spencer</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">founder</p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <img class="rounded-circle" src="img\best-team-3.jpg" alt="">
                                    <h3 class="fw-bold">diane lewis</h3>
                                    <hr class="separator mx-auto">
                                    <p class="fw-bold">artist, designer</p>
                                </div>
                            </div> 
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#bestTeamCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bestTeamCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> 
    </section>

    <section class="container-xl pb-5">
        <h2 class="text-center py-5">clients say's</h2>
        <div id="clientsSaysCarousel" class="carousel slide">
            <div class="carousel-indicators gap-3">
                <button type="button" data-bs-target="#clientsSaysCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#clientsSaysCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#clientsSaysCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner py-5">
                <div class="carousel-item active">
                    <div class="row gx-5 mb-5">
                        <div class="col text-end">
                            <h3 class="fs-1 fw-bold">frank sims</h3>
                            <div class="separator-right"></div>
                            <p class="fw-bold">photographer</p>
                        </div>
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum delectus facilis a distinctio, sit rerum. Molestias fugiat aperiam molestiae!</p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-3">
                            <img src="img\frank-sims-1.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="img\frank-sims-2.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="img\frank-sims-3.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="img\frank-sims-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                        <div class="row gx-5 mb-5">
                            <div class="col text-end">
                                <h3 class="fs-1 fw-bold">frank sims</h3>
                                <div class="separator-right"></div>
                                <p class="fw-bold">photographer</p>
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum delectus facilis a distinctio, sit rerum. Molestias fugiat aperiam molestiae!</p>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-3">
                                <img src="img\frank-sims-1.jpg" alt="">
                            </div>
                            <div class="col-3">
                                <img src="img\frank-sims-2.jpg" alt="">
                            </div>
                            <div class="col-3">
                                <img src="img\frank-sims-3.jpg" alt="">
                            </div>
                            <div class="col-3">
                                <img src="img\frank-sims-4.jpg" alt="">
                            </div>
                        </div>
                </div>
                <div class="carousel-item">
                    <div class="row gx-5 mb-5">
                        <div class="col text-end">
                            <h3 class="fs-1 fw-bold">frank sims</h3>
                            <div class="separator-right"></div>
                            <p class="fw-bold">photographer</p>
                        </div>
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum delectus facilis a distinctio, sit rerum. Molestias fugiat aperiam molestiae!</p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-3">
                            <img src="img\frank-sims-1.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="img\frank-sims-2.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="img\frank-sims-3.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="img\frank-sims-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-black pb-5" id="getintouch">
        <h2 class="text-center text-white py-5">get in touch</h2>
        <div class="container-xl">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 md-md-0 text-white">
                    <div class="d-flex gap-3 align-items-start">
                        <img src="img/Pin.png" alt="">
                        <p class="lh-1 w-75">23 Mulholland Drive, Suite 721. Los Angeles 10010 100 S. Main Street. Los Angeles 90012</p>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <img src="img/iPhone.png" alt="">
                        <p class="lh-1">+1-670-567-5590</p>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <img src="img/Envelope.png" alt="">
                        <p class="lh-1">hello@clemocreative.com</p>
                    </div>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="d-flex justify-content-center align-items-center social-bg">
                            <img src="img/facebook-icon.png" alt="">
                        </a>
                        <a href="#" class="d-flex justify-content-center align-items-center social-bg">
                            <img src="img/twitter-icon.png" alt="">
                        </a>
                        <a href="#" class="d-flex justify-content-center align-items-center social-bg">
                            <img src="img/google-plus-icon.png" alt="">
                        </a>
                        <a href="#" class="d-flex justify-content-center align-items-center social-bg">
                            <img src="img/pinterest-icon.png" alt="">
                        </a>
                        <a href="#" class="d-flex justify-content-center align-items-center social-bg">
                            <img src="img/Instagram-icon.png" alt="">
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <!-- <form id="contact-form" action="index.php" method="post">
                        <div class="mb-3">
                           
                            <input type="text" class="form-control bg-transparent input-style rounded-0 text-white" id="nameInput" aria-describedby="emailHelp" placeholder="name">
                        </div>
                        <div class="mb-3">
                           
                            <input type="email" class="form-control bg-transparent input-style rounded-0 text-white" id="emailInput" aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="mb-3">
                            
                            <input type="text" class="form-control bg-transparent input-style rounded-0 text-white" id="messageInput" placeholder="your message">
                        </div>
                        <button id="form-submit" type="submit" class="btn rounded-pill cta-white mt-3">submit</button>
                    </form> -->
                    <form method="POST" id="contact-form" action="index.php">
                        <div class="form-group mb-3">
                            <!-- <label for="nameInput" class="form-label">name</label> -->
                            <input type="text" class="form-control bg-transparent input-style rounded-0 text-white" id="nameInput" aria-describedby="emailHelp" placeholder="name">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="emailInput" class="form-label">email</label> -->
                            <input type="email" class="form-control bg-transparent input-style rounded-0 text-white" id="emailInput" aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="messageInput" class="form-label">your message</label> -->
                            <input type="text" class="form-control bg-transparent input-style rounded-0 text-white" id="messageInput" placeholder="your message">
                        </div>
                        <button id="form-submit" type="submit" class="btn rounded-pill cta-white mt-3">submit</button>
                    </form>

                    <div id="form-message" class="message text-white">
                        <img class="mx-3 mb-3" src="img/check.png" alt="">
                        <p class="mb-1">Thank you!</p>
                        <p class="mb-1">Your message has been sent!</p>
                        <button id="new-form" class="btn rounded-pill cta-white mt-3">new message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-black">
        <p class="fw-bold mt-4 mb-0">© 2016 clemo.</p>
        <p class="mb-4">all rights reserved</p>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>