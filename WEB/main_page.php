<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='main_page.css' />
    <title>Document</title>
</head>
<body>
    <div id="fond">
        <div id="topbar">
            <h1>RPS</h1>
            <div id="links">
                <a class="link" href='?page=choice'>Get to choice page</a>
                <a class="link" href='?page=connexion'>Get to connexion page</a>
            </div>
        </div>
        <div id="contenu">
            <?php
            if( !isset($_GET["page"]) ) { 
                $page="connexion";
              }else{
                $page=$_GET["page"];
              }
            if( file_exists("".$page."_page.php") ){ 
                include("".$page."_page.php");
            }
            ?>
        </div>

    </div>
</body>
</html>