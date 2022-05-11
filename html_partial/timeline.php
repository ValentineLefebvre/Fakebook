<form id="deco_form" method="post" action="/sign_out">
    <button class="nav_deco" id="deconnection" type="submit">Deconnection</button>
    <input type="hidden" name="deco">
</form>
<section id="sectionPublication">
    <div id="newPublication">
        <!-- Form new article-->
        <form id="newPublicationForm" method="post" enctype="multipart/form-data" action="/new_article">
            <label id="publicationLabel" for="articleInput">Ecrivez votre message</label><br>
            <textarea id="articleInput" name="articleInput" type="text"></textarea>
            <div id="depose">Déposez vos images ou cliquez pour choisir</div>
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg, image/png, image/gif, image/jpg">
            <div id="preview"></div>
            <button type="submit" id="submitPublication" >Envoyer</button>
            <button type="button" id="cancel">Annuler</button>
        </form>
    </div>
    <?php foreach ($articles as $article):
        foreach ($profiles as $profile) {
            if ($profile["user_id"] === $article["user_id"]) {
                $profil_picture = $profile["profil_picture"];
                $first_name = $profile["first_name"];
                $last_name = $profile["last_name"];
            }
        } ?>
        <div id="article" style="margin-top:20px; border: solid 1px black; padding: 10px; width: 500px">
            <form id="goToProfile" action="/profile" method="post">
                <input type="hidden" name="profil_id" value="<?= $article["user_id"] ?>" />
                <button type="submit" id="profil_picture" style="background: white; border:0; padding:5px;">
                    <img src="img_profil/<?= $profil_picture ?>" alt="" width="40px">
                </button>
                <button type="submit" id="first_name" style="background: white; border:0; padding:0;"> 
                    <?= $first_name . " " . $last_name ?> 
                </button>
            </form>
            <span id="date"><?= $article["date"] ?></span>
            <br>
            <span id="data"><?= $article["content"] ?></span>
            <br>
            <?php if($article["picture"]) :?>
                <img id="image_article" width="300px" src="img_post/<?=$article["picture"]?>" >
            <?php endif; ?>
            <?php if($article["user_id"] === $_SESSION["user"]["user_id"]) :?>
                <form id="delete_article" method="post" action="/delete_article">
                    <button type="submit" id="delete_btn">Supprimer</button>
                    <input type="hidden" name="article_id" value="<?=$article["article_id"]?>">
                    <input type="hidden" name="article_user" value="<?=$article["user_id"]?>">
                </form>
            <?php endif ?>

        </div>
    <?php endforeach;?>
</section>