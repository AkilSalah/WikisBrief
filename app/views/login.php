<?php
require_once '../controllers/adminController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Connexion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/css/main.css'>
    <script src='main.js'></script>
</head>
<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method = "post">
                    <h2>L o g i n</h2>
                    <div class="inputbox">
                        <input type="email" name="Email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="Password" required>
                        <label for="">Mot de pass</label>
                    </div>
                    <div class="button">
                     <a href="inscription.php"><input type="submit" name="submit" value="Connexion"></a> 
                    </div>
                    <div class="register">
                        <p>Vous n’avez pas de compte ?  <a href="inscription.php"> <span class="text-primary"> Inscrivez-vous</span></a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>