<?php
ob_start();

require_once __DIR__ . "/../database/pdo.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $profile_id = $_SESSION["user"]["user_id"];
    $email = $_SESSION["user"]["email"];
    $first_name = $_SESSION["user"]["first_name"];
    $last_name = $_SESSION["user"]["last_name"];
    $password = $_SESSION["user"]["password"];
}


require_once __DIR__ . "/../html_partial/settings_profil/settings_profil.php";
$content = ob_get_clean();
