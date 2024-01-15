<?php 
require_once '../controllers/userController.php';
require_once '../controllers/adminController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../../public/css/main.css">
</head>
<body>
    <section>
        <div class="form-box user-form">
            <div class="form-value">
                <h2>Login</h2>
                <form method="post" id="loginForm" action="">
                    <div class="inputbox">
                        <input type="email" name="Email" id="loginEmail" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="Password" id="loginPassword" required>
                        <label for="">Mot de passe</label>
                    </div>
                    <div class="button">
                        <input type="submit" name="user-login" id="loginSubmit" value="Connexion">
                    </div>
                    <div class="register">
                        <p>Vous n’avez pas de compte ?  <a href="inscription.php"><span class="text-primary">Inscrivez-vous</span></a></p>
                        <p>are you an admin?<span class="text-primary admin-login-form-btn">Login here</span></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-box admin-form">
            <div class="form-value">
                <h2>Admin Login</h2>
                <form method="post" id="loginForm" action="">
                    <div class="inputbox">
                        <input type="email" name="Email" id="loginEmail" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="Password" id="loginPassword" required>
                        <label for="">Mot de passe</label>
                    </div>
                    <div class="button">
                        <input type="submit" name="admin-login" id="loginSubmit" value="Connexion">
                    </div>
                    <div class="register">
                        <p>Vous n’avez pas de compte ?  <a href="inscription.php"><span class="text-primary">Inscrivez-vous</span></a></p>
                        <p>are you not an admin?  <span class="text-primary user-login-form-btn">Login here</span></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../../public/js/loginRegex.js"></script>
    <script>

        const adminForm =document.querySelector(".admin-form");
        const userForm =document.querySelector(".user-form");
        const adminFormBtnSwitcher =document.querySelector(".admin-login-form-btn");
        const userFormBtnSwitcher =document.querySelector(".user-login-form-btn");

        adminForm.style.display = "none";
        adminFormBtnSwitcher.addEventListener("click", () => {
            adminForm.style.display = "flex";
            userForm.style.display = "none";
        })
        userFormBtnSwitcher.addEventListener("click", () => {
            adminForm.style.display = "none";
            userForm.style.display = "flex";
        })

    </script>
</body>
</html>
