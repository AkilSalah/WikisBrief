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
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-chart-simple pe-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list pe-2"></i>
                        Catégories
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-tag pe-2"></i>
                        Tags
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-brands fa-wikipedia-w pe-2"></i>
                        Wikis
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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
                <div class="d-flex" >
                <img src="../../public/images/7O2A0186.JPG" alt="" class="rounded-circle " width="40px" height="40px" >
                <p class="text-black my-auto" >Admin name</p>
                

                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                            <div class="col-6">
                                <h4 class="text-uppercase fw-bold m-1">Tags</h4>
                            </div>
                            <div >
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crudModal">
                                    Ajouter Tag
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="crudModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">
                                <div class="modal-header">
                                                <h3 class="modal-title text-black fw-bold ">Ajouter Tag</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Nom Tag</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Nom Categorie" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-primary">Ajouter Tag</button>
                                                </div>
                                            </form>


                                </div>
                            </div>
                        </div>
                        
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th scope="col">Id Tag</th>
                                    <th scope="col">Nom Tag</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td> <i class="fa-solid fa-trash mx-2"></i></td>
                                    <td><i class="fa-solid fa-pen mx-2"></i></td>
                                    
                                </tr>
                                
                               
                            </tbody>
                        </table>



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