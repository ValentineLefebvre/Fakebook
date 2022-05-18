<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="titre"><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <link rel="stylesheet" type="text/css" href="/style/style.css?<?php echo time();?>">
    <?php require_once __DIR__ . "/../php_partial/get_style.php";?>
</head>
<body>
    <header>
    <?php if(isset($_SESSION["user"]["user_id"])) {?>
            	<form id="deco_form" method="post" action="/sign_out">
                    <button class="nav_deco" id="deconnexion" type="submit">Deconnexion</button>
                    <input type="hidden" name="deco">
                </form>

                <a href="timeline">Fil d'actualité</a>
                
                <form id="someone" method="post" action="/search">
                    <label id="someone" for="someone"></label>
                    <input id="someone" type="text" name="someone">
                    <button id="someone" type="submit">Chercher une personne</button>
                </form>
                <form id="page" method="post" action="/search">
                    <label id="page" for="page"></label>
                    <input id="page" type="text" name="page">
                    <button id="page" type="submit">Chercher une page</button>
                </form>
                <form id="group" method="post" action="/search">
                    <label id="group" for="group"></label>
                    <input id="group" type="text" name="group">
                    <button id="group" type="submit">Chercher un groupe</button>
                </form>
        <?php }?>
    </header>
    <main>
        <!-- Affiche $content ici -->
        <?= $content ?>
    </main>

    <footer>
        <!-- require the right script by checking url -->
        <?php require_once __DIR__ . "/../php_partial/get_script.php"; ?>
    </footer>
</body>
</html>