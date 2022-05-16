<?php

// get url after first /
$uri = $_SERVER["REQUEST_URI"];

// if url =  "..." require the files "..."
switch ($uri) {
    case "/login":
        require_once __DIR__ . "/php_partial/login.php";
        break;
    case "/sign_up":
        require_once __DIR__ . "/php_partial/sign_up.php";
        break;
    case "/sign_out":
        require_once __DIR__ . "/php_partial/sign_out.php";
        break;
    case "/profile":
        require_once __DIR__ . "/php_partial/profile.php";
        break;
    case "/profile_settings":
        require_once __DIR__ . "/php_partial/profile_settings.php";
        break;
    case "/theme":
        require_once __DIR__ . "/php_partial/theme.php";
        break;
    case "/timeline":
        require_once __DIR__ . "/php_partial/timeline.php";
        break;
    case "/new_article":
        require_once __DIR__ . "/php_partial/new_article.php";
        break;
    case "/delete_article":
        require_once __DIR__ . "/php_partial/delete_article.php";
        break;
    case "/friend_request":
        require_once __DIR__ . "/php_partial/friend_request.php";
        break;
    case "/friend_request":
        require_once __DIR__ . "/php_partial/friend_request.php";
        break;
    case "/friend_removal":
        require_once __DIR__ . "/php_partial/friend_removal.php";
        break;
    case "/friend_approval":
        require_once __DIR__ . "/php_partial/friend_approval.php";
        break;
    case "/block":
        require_once __DIR__ . "/php_partial/block.php";
        break;
    case "/delete":
        require_once __DIR__ . "/php_partial/delete.php";
        break;
    case "/inactive":
        require_once __DIR__ . "/php_partial/inactive.php";
    case "/modify_article":
        require_once __DIR__ . "/php_partial/modify_article.php";
        break;
    case "/settings_profil":
        require_once __DIR__ . "/php_partial/settings_profil/settings_profil.php";
        break;
    case "/new_first_name":
        require_once __DIR__ . "/php_partial/settings_profil/new_first_name.php";
        break;
    case "/new_last_name":
        require_once __DIR__ . "/php_partial/settings_profil/new_last_name.php";
        break;
    case "/new_password":
        require_once __DIR__ . "/php_partial/settings_profil/new_password.php";
        break;
    case "/new_email":
        require_once __DIR__ . "/php_partial/settings_profil/new_email.php";
        break;
    case "/edit_photo":
        require_once __DIR__ . "/php_partial/settings_profil/edit_photo.php";
        break;
    case "/edit_banniere":
        require_once __DIR__ . "/php_partial/settings_profil/edit_banniere.php";
    case "/like_article":
        require_once __DIR__ . "/php_partial/like_article.php";
        break;
    case "/new_comment":
        require_once __DIR__ . "/php_partial/new_comment.php";
        break;
    case "/like_comment":
        require_once __DIR__ . "/php_partial/like_comment.php";
        break;
    case "/delete_comment":
        require_once __DIR__ . "/php_partial/delete_comment.php";
        break;
    case "/modify_comment":
        require_once __DIR__ . "/php_partial/modify_comment.php";
        break;
    case "/search":
        require_once __DIR__ . "/php_partial/search.php";
        break;
}

// we require base_html to display $content ($content references in files from php_partial)
require_once __DIR__ . "/html_partial/base_html.php";
