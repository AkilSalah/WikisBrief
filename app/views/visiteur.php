<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiteur</title>
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/visiteur.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="../../public/images/Wikipedia_svg_logo.png" alt="" width="60px">
            <a class="navbar-brand me-auto" href="#">Wiképidia</a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="../../public/images/Wikipedia_svg_logo.png" alt="" width="60px">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Wiképidia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " href="#">Wikis</a>
                        </li>


                    </ul>

                </div>
            </div>
            <a href="" class="login_button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column ">
            <h1>Wiképidia</h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti reiciendis officia illo corrupti sequi tempora architecto perferendis minima nam? officia illo corrupti sequi tempora architecto </h2>
        </div>
    </section>

    <section class="last_wikis">
        <h1 class="text-center mt-5">Trois dernier wikis</h1>
        <div class="card flex-md-row rounded-lg bg-white shadow mt-5 w-75 position-relative  ">
            <img class="card-img-top w-50" src="../../public/images/Wikipedia_svg_logo.png" alt=" " height="250vh">
            <div class="card-body flex flex-col justify-start p-6">
                <h5 class="card-title mb-2 mt-3 text-xl font-medium text-dark">
                    Card title
                </h5>
                <p class="card-text mb-4 text-base text-dark">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                </p>
                <p class="card-text text-muted small position-absolute top-0 end-0 m-3">
                    Author Name
                </p>
                <div class="d-flex justify-content-between">
                    <p class="card-text text-muted small">
                        <i class="fa-solid fa-calendar-days"></i>
                        12/2/2022
                    </p>
                    <button class="btn btn-dark ">Découvrez plus</button>
                </div>

            </div>
        </div>

        <div class="card flex-md-row rounded-lg bg-white mx-auto  shadow mt-5 w-75 position-relative">
            <img class="card-img-top w-50" src="../../public/images/Wikipedia_svg_logo.png" alt=" " height="250vh">
            <div class="card-body flex flex-col justify-start p-6">
                <h5 class="card-title mb-2 mt-3 text-xl font-medium text-dark">
                    Card title
                </h5>
                <p class="card-text mb-4 text-base text-dark">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                </p>
                <p class="card-text text-muted small position-absolute top-0 end-0 m-3">
                    Author Name
                </p>
                <div class="d-flex justify-content-between">
                    <p class="card-text text-muted small">
                        <i class="fa-solid fa-calendar-days"></i>
                        12/2/2022
                    </p>
                    <button class="btn btn-dark ">Découvrez plus</button>
                </div>

            </div>
        </div>

        <div class="card flex-md-row rounded-lg bg-white pe-5  shadow mt-5 w-75 position-relative" style="margin-left: 300PX;">
            <img class="card-img-top w-50" src="../../public/images/Wikipedia_svg_logo.png" alt=" " height="250vh">
            <div class="card-body flex flex-col justify-start p-6">
                <h5 class="card-title mb-2 mt-3 text-xl font-medium text-dark">
                    Card title
                </h5>
                <p class="card-text mb-4 text-base text-dark">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                </p>
                <p class="card-text text-muted small position-absolute top-0 end-0 m-3">
                    Author Name
                </p>
                <div class="d-flex justify-content-between">
                    <p class="card-text text-muted small">
                        <i class="fa-solid fa-calendar-days"></i>
                        12/2/2022
                    </p>
                    <button class="btn btn-dark ">Découvrez plus</button>
                </div>
            </div>
        </div>

    </section>
    <section>
        <h1 class="text-center mt-5"> Wikis </h1>

        <div class="card w-25 container mt-5">
            <p class="card-text ">
            <div class="text-muted d-flex justify-content-between ">
                <div><i class="far fa-user"></i>auteur</div>
                <div><i class="fas fa-calendar-alt"></i>Jan 20, 2018</div>
            </div>
            </p>
            <img class="card-img-top" src="https://images.unsplash.com/photo-1535025639604-9a804c092faa?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6cb0ceb620f241feb2f859e273634393&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
            <div class="card-body  ">
                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. dolorum ea eos et excepturi explicabo facilis harum illo impedit incidunt laborum laudantium...
                </p>
                <button class="btn btn-dark ">Découvrez plus</button>

            </div>

        </div>



    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>