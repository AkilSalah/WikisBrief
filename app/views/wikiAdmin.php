<?php

require_once '../controllers/adminController.php';

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
    <title>Admin</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo ">
                    <img src="../../public/images/Wikipedia_svg_logo.png" alt="" width="60px">
                    <a href="#">Wiképidia</a>
                </div>

                <li class="sidebar-item">
                    <a href="adminDash.php" class="sidebar-link">
                        <i class="fa-solid fa-chart-simple pe-2"></i>
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
                        <i class="fa-solid fa-tag pe-2"></i>
                        Tags
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="wikiAdmin.php" class="sidebar-link">
                        <i class="fa-brands fa-wikipedia-w pe-2"></i>
                        Wikis
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="logout.php" class="sidebar-link">
                        <i class="fa-solid fa-right-from-bracket pe-2"></i>
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
                    <p class="text-black my-auto"><?=$admin['nom'] ?> <?=$admin['prenom'] ?></p>


                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="col-6">
                            <h4 class="text-uppercase fw-bold m-1">Wikis</h4>
                        </div>
                        <div class="container mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-image">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tilte</th>
                                                <th scope="col">Image</th>
                                                <th scope="col"> Content</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">Archived</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           foreach ($allWikis as $wiki){

                                           
                                           ?> 
                                            <tr>
                                                <th scope="row "><?=$wiki['wiki_titre'] ?></th>
                                                <td class="w-25">
                                                    <img src="<?=$wiki['wiki_image'] ?>" class="img-fluid img-thumbnail" alt="image">
                                                </td>
                                                <td><?=$wiki['wiki_content'] ?></td>
                                                <td><?= $wiki['nom'] ?> <?= $wiki['prenom'] ?></td> 
                                                <td>
                                                <form method="post">
                                                        <a href="?idArchive=<?=$wiki['id_wiki']?>"><input type="submit" class="btn btn-danger " name="archive" value="Archiver"></a>
                                                        <a href="?idNoArchive=<?=$wiki['id_wiki']?>"><input type="submit" class="btn btn-success " name="inArchive" value="désarchiver"></a>
                                                </form>
                                            </td>

                                            </tr>
                                           <?php }?>
                                        </tbody>
                                    </table>
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
    </script>
</body>

</html>