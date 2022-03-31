<?php

$route = $_REQUEST["route"];

if ($route === "users") {
    include __DIR__ . "/controllers/users.php";
    die();
}

if ($route === "comments") {
    include __DIR__ . "/controllers/comments.php";
    die();
}

// Controlleur pour les albums
// Controlleur pour les todos
// Controlleur pour posts
// Controlleur pour photos

echo "Ce code ne s'affiche pas";
echo "Après ce code";
