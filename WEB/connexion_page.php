
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='connexion_page.css' />
    <title>Document</title>
</head>

<body>
    <?php
            if(isset($_POST["username"]) && isset($_POST["password"])){
                //header('Location: choice_page.php');
                echo '<meta http-equiv="refresh" content="0;url=choice_page.php">';
            }

        ?>


    <div class="container_connexion">
        <div>
            <?php
                echo '
                <form method="POST" action="">
                <H1 id="title">Connexion</H1><br>
                <div id="container_info">
                    <div class="ligne">
                        <H2 for="username" class="form_el">Username</H2><br>
                        <input type="text" id="username" name="username" class="textArea"><br>
                    </div>
                    <div class="ligne">
                        <H2 for="password" class="form_el">Mot de passe</H2><br>
                        <input type="password" id="password" name="password" class="textArea"><br>
                    </div>
                </div>
                
                <input type="hidden" name="page" value="5">
                <input type="submit" value="Connexion" name="Connexion" class="button" id="connexion">
                </form>'
            ?>
        </div>
    </div>
</body>
</html>
