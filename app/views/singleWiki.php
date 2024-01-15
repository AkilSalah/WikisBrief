<?php 
require_once '../controllers/wikisController.php';
 ?>
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

    <nav class="navbar navbar-expand-lg fixed">
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
            <a href="login.php" class="login_button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

        <div class="container mt-5">
            <div class="row">
                
                    <article>
                        
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1"><?=$singles['wiki_titre'] ?></h1>
                            <div class="text-muted fst-italic mb-2"><?=$singles['nom'] ?> <?=$singles['prenom'] ?> </br>       <?=$singles['date'] ?></div>
                         
                        </header>
                       <div class="d-flex gap-5" >
                        <img class=" rounded mb-4 col-5" src="<?=$singles['wiki_image'] ?>" alt="" height="100%" width="100%" />
                        <p class="fs-5 mb-4 col-6 "><?=$singles['wiki_content'] ?></p>
                       </div>
                            
                     
                    
                    </article>
                   
                
       
            </div>
        </div>
</section>

