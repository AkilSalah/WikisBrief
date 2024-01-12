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


            <a href="login.php" class="login_button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="form-outline" data-mdb-input-init>
                <input id="search-input" type="search" id="form1" class="form-control mx-3" placeholder="Search" />
            </div>

        </div>
    </nav>
    
    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column ">
            <h1>Wiképidia</h1>
            <h2>Wikipedia is a free-content online encyclopedia, written and maintained by a community of volunteers, collectively known as Wikipedians, through open collaboration and the use of wiki . Wikipedia is the largest and most-read reference work in history. </h2>
        </div>
    </section>

    <section class="last_wikis">
        <h1 class="text-center mt-5">Trois dernier wikis</h1>

        <?php
        foreach ($tree as $treeW) {
        
        ?>
        <div class="card flex-md-row rounded-lg bg-white mx-auto  shadow mt-5 w-75 position-relative">
            <img class="card-img-top w-50" src="../../public/images/<?=$treeW['wiki_image'] ?> alt="" height="250vh">
            <div class="card-body flex flex-col justify-start p-6">
                <h5 class="card-title mb-2 mt-3 text-xl font-medium text-dark">
                    <?=$treeW['wiki_titre'] ?>
                </h5>
                <p class="card-text mb-4 text-base text-dark">
                <?=$treeW['wiki_content'] ?>
                </p>
                <p class="card-text text-muted small position-absolute top-0 end-0 m-3">
                <?=$treeW['nom'] ?>   <?=$treeW['prenom'] ?>


                 </p>
                <div class="d-flex justify-content-between">
                    <p class="card-text text-muted small">
                        <i class="fa-solid fa-calendar-days"></i>
                        <?=$treeW['date'] ?>
                                        </p>
                    <button class="btn btn-dark ">Découvrez plus</button>
                </div>

            </div>
        </div>
            <?php } ?>

    </section>
    <section>
        <h1 class="text-center mt-5"> Wikis </h1>
        <div class="container mt-5">
    <div class="row">
        <?php foreach ($all as $wiik) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <p class="card-text">
                        <div class="text-muted d-flex justify-content-between">
                            <div><i class="far fa-user"></i> <?= $wiik['nom'] ?> <?= $wiik['prenom'] ?></div>
                            <div><i class="fas fa-calendar-alt"></i> <?= $wiik['date'] ?></div>
                        </div>
                    </p>
                    <img class="card-img-top" src="<?= $wiik['wiki_image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $wiik['wiki_titre'] ?></h5>
                        <p class="card-text">
                            <?= $wiik['wiki_content'] ?>
                        </p>
                        <a href="#" class="btn btn-dark">Découvrez plus</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>