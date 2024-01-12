<?php

require_once '../controllers/tagController.php';
require_once '../controllers/categorieController.php';


require_once '../controllers/wikisController.php';
require_once '../controllers/userController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/admin.css">
    <title>Auteur</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo  ">
                    <img src="../../public/images/Wikipedia_svg_logo.png" alt="" width="60px">
                    <a href="#">Auteur Wikis</a>
                </div>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-chart-simple"></i>
                        Ajouter Wikis
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </li>


            </div>
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand border-bottom d-flex justify-content-between">
                <button class="btn" type="button" data-bs-theme="dark" style="font-size: larger;">
                    <span class="fa-solid fa-bars" style="width: 20%;"></span>
                </button>
                <div class="d-flex">

                    <img src="../../public/images/7O2A0186.JPG" alt="" class="rounded-circle " width="40px" height="40px">
                    <p class="text-black my-auto"><?= $auteur['nom'] ?> <?= $auteur['prenom'] ?></p>

                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="col-6">
                                <h4 class="text-uppercase fw-bold m-1">Management Wikis</h4>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crudModal">
                                    Ajouter Wiki
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="crudModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md-6">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-black fw-bold">Ajouter Wiki</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post">
                                        <div class="modal-body">
                                            <div>
                                                <label for="nom" class="form-label">Nom Wiki</label>
                                                <input type="text" name="nomW" class="form-control" id="nom" placeholder="Nom Wiki" required>
                                            </div>
                                            <div>
                                                <label for="image" class="form-label mt-1">Image Wiki</label>
                                                <input type="file" name="image" class="form-control" id="image" placeholder="Image Wiki" required>
                                            </div>


                                            <div class="mt-1">
                                                <label class="mt-1">Choisissez un tag :</label>
                                                <div style="max-height: 60px; overflow-y: auto;">
                                                    <?php foreach ($resultt as $tag) { ?>
                                                        <div class="form-check">
                                                            <label>
                                                                <input type="checkbox" name="options[]" value="<?= $tag['id_tag'] ?>">
                                                                <a href="?id_tag=<?= $tag['id_tag'] ?>">
                                                                    <?= $tag["nom_tag"] ?>
                                                                </a>
                                                            </label>
                                                        </div>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                            <div class="mt-1">
                                                <label for="category">Categories :</label>
                                                <select id="category" name="categoriesW" class="form-control">
                                                    <option selected disabled>Choisissez une catégorie</option>
                                                    <?php
                                                    foreach ($resultcat as $cat) {
                                                    ?>
                                                        <option value="<?= $cat['id_categories'] ?>"><?= $cat['nom_categorie'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mt-1">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="descriptionW" class="form-control" id="description" placeholder="Description Wiki" required></textarea>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" name="submitt" class="btn btn-primary">Ajouter Wiki</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            </form>


                        </div>
                    </div>
                    <?php
                    foreach ($result as $wiki) {
                    ?>
                        <div class="card h-50" style="width: 30%;">

                            <div class="view overlay">
                                <img class="card-img-top" src="<?= $wiki['wiki_image'] ?>" alt="Card image cap">

                            </div>

                            <div class="card-body elegant-color white-text">

                                <h4 class="card-title"><?= $wiki['wiki_titre'] ?></h4>
                                <p class="card-text white-text ">
                                    <?= $wiki['wiki_content'] ?>
                                </p>
                                <div class="d-flex justify-content-around ">
                                    <button value="<?= $res['id_wiki'] ?>" class="updateHidden btn btn-warning update-btn" data-bs-toggle="modal" data-bs-target="#modifierModal">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <a href="auteur.php?id_d=<?= $res['id_wiki'] ?>" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>


                            </div>

                        </div>
                    <?php } ?>

                </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="modifierModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md-6">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-black fw-bold">Modifier Wiki</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" enctype="multipart/form-data" >
                    <div class="modal-body">
                        <div>
                            <label for="nom" class="form-label">Nom Wiki</label>
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom Wiki" required>
                        </div>
                        <div>
                            <label for="image" class="form-label mt-1">Image Wiki</label>
                            <input type="file" name="image" class="form-control" id="image" placeholder="Image Wiki" required>
                        </div>


                        <div>
                            <label class="mt-1">Choisissez un tag :</label>
                            <div style="max-height: 30px; overflow-y: auto;">
                                <?php foreach ($resultt as $tag) { ?>
                                    <div class="form-check">
                                        <input type="checkbox" name="options[]" value="<?= $tag['id_tag'] ?>">
                                        <label><?= $tag['nom_tag'] ?></label>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>


                        <div class="mt-1">
                            <label for="category">Categories :</label>
                            <select id="category" name="categories" class="form-control">
                                <option selected disabled>Choisissez une catégorie</option>
                                <?php
                                foreach ($resultcat as $cat) {
                                ?>
                                    <option value="<?= $cat['id_categories'] ?>"><?= $cat['nom_categorie'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mt-1">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Description Wiki" required></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Modifier Wiki</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </form>


    </div>
    </main>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });
    </script>
</body>

</html>