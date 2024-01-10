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
            <i class="fa-solid fa-chart-simple"></i>
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
            <i class="fa-solid fa-tag"></i>
            Tags
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="fa-brands fa-wikipedia-w"></i>
            Wikis
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
          <p class="text-black my-auto">Admin name</p>


        </div>
      </nav>
      <main class="content px-3 py-2">
        <div class="container-fluid">
          <div class="mb-3">

            <section>
              <div class="row">
                <div class="col-12 mt-3 mb-1">
                  <h4 class="text-uppercase fw-bold m-1">Admin Statistics</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-xl-6 col-md-12">
                  <div class="card overflow-hidden">
                    <div class="card-content">
                      <div class="card-body cleartfix">
                        <div class="media align-items-stretch">
                          <div class="align-self-center">
                            <i class="icon-pencil primary font-large-2 mr-2"></i>
                          </div>
                          <div class="media-body">
                            <h4>Wikis</h4>
                            <span>All posts</span>
                          </div>
                          <div class="align-self-center">
                            <h1>18,000</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 col-md-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body cleartfix">
                        <div class="media align-items-stretch">
                          <div class="align-self-center">
                            <i class="icon-speech warning font-large-2 mr-2"></i>
                          </div>
                          <div class="media-body">
                            <h4>Auteur</h4>
                            <span>wikis auteurs</span>
                          </div>
                          <div class="align-self-center">
                            <h1>84,695</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xl-6 col-md-12">
                  <div class="card overflow-hidden">
                    <div class="card-content">
                      <div class="card-body cleartfix">
                        <div class="media align-items-stretch">
                          <div class="align-self-center">
                            <i class="icon-pencil primary font-large-2 mr-2"></i>
                          </div>
                          <div class="media-body">
                            <h4>Catégories</h4>
                            <span>All Categories</span>
                          </div>
                          <div class="align-self-center">
                            <h1>18,000</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 col-md-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body cleartfix">
                        <div class="media align-items-stretch">
                          <div class="align-self-center">
                            <i class="icon-speech warning font-large-2 mr-2"></i>
                          </div>
                          <div class="media-body">
                            <h4>Tags</h4>
                            <span>All Tags</span>
                          </div>
                          <div class="align-self-center">
                            <h1>84,695</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

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