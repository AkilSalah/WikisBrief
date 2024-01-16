<?php
require_once '../controllers/adminController.php';

require_once '../controllers/categorieController.php';
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
    <title>Wiképidia</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo  ">
                    <img src="../../public/images/Wikipedia_svg_logo.png" alt="" width="60px">
                    <a href="#">Admin Wikis</a>
                </div>

                <li class="sidebar-item">
                    <a href="adminDash.php" class="sidebar-link">
                        <i class="fa-solid fa-chart-simple"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="categories.php" class="sidebar-link">
                        <i class="fa-solid fa-list pe-2"></i>
                        Catégories
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="tags.php" class="sidebar-link">
                        <i class="fa-solid fa-tag"></i>
                        Tags
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="wikiAdmin.php" class="sidebar-link">
                        <i class="fa-brands fa-wikipedia-w"></i>
                        Wikis
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="logout.php" class="sidebar-link">
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
                    <p class="text-black my-auto"> <?=$admin['nom'] ?> <?=$admin['prenom'] ?> </p>


                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="col-6">
                                <h4 class="text-uppercase fw-bold m-1">Categories</h4>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crudModal">
                                    Ajouter Categorie
                                </button>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="crudModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-black fw-bold ">Ajouter Catégorie</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nom Categorie</label>
                                                <input type="text" class="form-control" name="nom_cat" id="name" placeholder="Nom Categorie" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Ajouter Catégorie</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>



                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th scope="col">Id Categorie</th>
                                    <th scope="col">Nom Categorie</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">Supprimer</th>

                                </tr>
                            </thead>
                            <?php $idcat = null;
                            foreach ($resultcat as $res) {
                                $idcat = $res['id_categories'];  ?>
                                <tbody>
                                    <tr>

                                        <th scope="row"><?= $res['id_categories'] ?></th>
                                        <td><?= $res['nom_categorie'] ?>
                                        </td>
                                        <td>

                                            <button value="<?= $res['id_categories'] ?>" class="updateHidden btn btn-warning update-btn" data-bs-toggle="modal" data-bs-target="#modifierModal">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="categories.php?id_d=<?= $res['id_categories'] ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>

                                    <?php } ?>
                                    </tr>


                                </tbody>
                        </table>
                        <div class="modal fade" id="modifierModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-black fw-bold">Modifier Catégorie</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/WikisBrief/app/views/categories.php" method="get">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nom_cat_modif" class="form-label">Nouveau Nom Categorie</label>
                                                <input type="text" class="form-control" name="nom_cat_modif" id="nom_cat_modif" placeholder="Nouveau Nom Categorie" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" value="<?= $idcat  ?>" name="id_u" class="btn btn-warning EModal">Modifier Catégorie</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
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

        const updatebtn = document.querySelectorAll(".updateHidden");
        const EModal = document.querySelector(".EModal");
        updatebtn.forEach(element => {
            element.addEventListener("click", function() {
                EModal.value = this.value;
            });
        });
    </script>



</body>

</html>

