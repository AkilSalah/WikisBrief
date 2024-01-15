<?php
require_once '../controllers/wikisController.php';
require_once '../controllers/categorieController.php';


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
    <style>
      @media (max-width: 991.98px) {
    .navbar .d-lg-inline {
        display: none;
    }

    .navbar .d-lg-none {
        display: block;
    }
}

    </style>
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
                        <a class="nav-link mx-lg-2" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Wikis</a>
                    </li>
                </ul>
                
                <a href="login.php" class="login_button d-lg-none">Login</a>
            </div>
        </div>

        <a href="login.php" class="login_button d-none d-lg-inline">Login</a>

        <form method="get" class="d-none d-lg-inline">
            <div class="form-outline" data-mdb-input-init>
                <input id="search-input" type="search" name="search" id="form1" class="form-control mx-3" placeholder="Search" />
            </div>
        </form>

        <button class="navbar-toggler pe-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form method="get" class="d-lg-none">
            <div class="form-outline">
                <input id="search-input-mobile" type="search" name="search" class="form-control" placeholder="Search" />
            </div>
        </form>
    </div>
</nav>



    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column ">
            <h1>Wiképidia</h1>
            <h2>Wikipedia is a free-content online encyclopedia, written and maintained by a community of volunteers, collectively known as Wikipedians, through open collaboration and the use of wiki . Wikipedia is the largest and most-read reference work in history. </h2>
        </div>
    </section>

    <section>
        <h1 id="wiki" class="text-center mt-5">Nouveau Wikis </h1>
        <div class="d-flex flex-row align-items-center justify-content-center gap-3 mt-4">
    <?php foreach ($resultcat as $cat) { ?>
        <a href="index.php?id_cat=<?= $cat['id_categories'] ?>">
        <button type="button" name="filter"  class="btn btn-secondary btn-rounded" data-mdb-ripple-init><?= $cat['nom_categorie'] ?></button></a>
        <?php } ?>
    </div>
        <div class="  container mt-5">
            <div class=" ALL row">
                <?php foreach ($all as $wiik) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <p class="card-text">
                            <div class="text-muted d-flex justify-content-between px-3 ">
                                <div><i class="far fa-user"></i> <?= $wiik['nom'] ?> <?= $wiik['prenom'] ?></div>
                                <div><i class="fas fa-calendar-alt"></i> <?php echo (new DateTime($wiik['date']))->format('Y-m-d'); ?></div>
                            </div>
                            </p>
                            <img class="card-img-top" src="<?= $wiik['wiki_image'] ?>"  alt="Card image cap" height="200px" >
                            <div class="card-body">
                                <h5 class="card-title"><?= $wiik['wiki_titre'] ?></h5>
                                <p class="card-text">
                                    <?= substr($wiik['wiki_content'],0,200)  ?>...
                                </p>
                                <a href="singleWiki.php?single=<?= $wiik['id_wiki'] ?>" class="btn btn-dark">Découvrez plus</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>
    <footer class="bg-dark text-center text-white mt-5">
  
  <div class=" p-4">
    
    <section class="mb-4">
      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

    
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
        <div class="row d-flex justify-content-center">
        
          <div class="col-auto">
            <p class="pt-2">
              Sign up for our newsletter
            </p>
          </div>
          <div class="col-md-5 col-12">
            
            <div class="form-outline form-white mb-4">
              <input type="email"   class="form-control" placeholder="Email"/>
            </div>
          </div>
        
          <div class="col-auto">
            
            <button type="submit" class="btn btn-outline-light mb-4">
              Send
            </button>
          </div>
        
        </div>
        
      </form>
    </section>
    
    <section class="mb-4">
      <p>
        Nous sommes toujours ravis d'entendre de nos clients. Que vous ayez des questions, des commentaires ou des préoccupations, notre équipe est là pour vous écouter et vous aider. Chez <span class="text-warning">Wiki™</span>, la satisfaction de nos clients est notre priorité absolue.
      </p>
    </section>
    

  
    <section class="">
    
      <div class="row justify-content-center">
      
        

          <ul class="list-unstyled mb-0">
            <li>
              <a href="index.php" class="text-white">Home</a>
            </li>
            <li>
              <a href="index.php" class="text-white">About us</a>
            </li>
            <li>
              <a href="#wiki" class="text-white">Wikis</a>
            </li>
            <li>
              <a href="#" class="text-white">Contact Us</a>
            </li>
          </ul>
       
      
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
         <a href="index.html"><img src="assets/img/1-removebg-preview.png" alt="" class="w-50"></a> 
        </div>
      </div>
    </section>
    
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://intranet.youcode.ma/classroom/CODE%20X">CodeX.com</a>
  </div>
   
</footer> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var searchInput = document.getElementById('search-input');

            searchInput.addEventListener('input', function() {
                var searchText = this.value;

                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        console.log(xhr.responseText);
                        document.querySelector('.ALL').innerHTML = xhr.responseText;
                    }
                }

                xhr.open('GET', 'search.php?searchText=' + searchText, true);
                xhr.send();
            });
        });
    </script>
</body>

</html>