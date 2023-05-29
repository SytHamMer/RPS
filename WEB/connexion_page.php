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
    <div class="container_connexion">
        <div>
            <?php
                echo '
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
                ';
            ?>
            <form method="POST" action="">
                <input type="hidden" name="page" value="5">
                <?php
                    echo '<input type="submit" value="Connexion" name="Connexion" class="button" id="connexion">';
                ?>
            </form>
        </div>
    </div>
</body>
</html>
