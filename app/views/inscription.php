<?php
require_once ('../controllers/UserController.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>inscription</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/css/main.css'>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" id="inscriptionForm">
                    <h2>INSCRIPTION</h2>
                    <div class="inputbox">
                        
                        <input type="text" name="Nom" id="nom" required>
                        <label for="">Nom</label>
                    </div>
                    <div class="inputbox">
                
                        <input type="text" name="Prenom" id="prenom" required>
                        
                        <label for="">Prenom</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="Email" id="emailValidation" required>
                        <label for="">Email</label>

                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="passValidation" required>
                        <label for="">Mot de passe</label>

                    </div>
                    <div class="button">
                        <input type="submit" name="submit" id="valide"  value="Inscrit">
                    </div>

                    <div class="register">
                        <p> Vous avez un compte ?  <a href="login.php"><span class="text-primary">Connectez-vous</span></a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src='../../public/js/regex.js'></script>
</body>
</html>
