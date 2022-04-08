<?php

/**
 * Affiche les erreurs même lorsqu'elles sont masquées
 * @see https://www.php.net/manual/en/function.ini-set.php
 * @see https://www.php.net/manual/en/ini.list.php
 */
ini_set("display_errors", 1);

/**
 * Affiche les avertissements et les informations comme des erreurs
 * @see https://www.php.net/manual/en/function.error-reporting.php
 * @see https://www.php.net/manual/en/errorfunc.constants.php
 */
error_reporting(E_ALL);

/**
 * Route correspondant à un fichier ou dossier qui n'existe pas
 * @see https://www.php.net/manual/en/reserved.variables.request.php
 */
$route = $_REQUEST["route"] ?? "undefined";

/**
 * Récupère la méthode HTTP utilisé par le client
 * @see https://www.php.net/manual/en/reserved.variables.server.php
 */
$method = $_SERVER["REQUEST_METHOD"];

if ($route === "users") {
    if ($method === "GET") {
        /**
         * Importe le contenu du fichier "controllers/users/get.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/get.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu du fichier "controllers/users/post.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/post.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu du fichier "controllers/users/patch.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/patch.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu du fichier "controllers/users/delete.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/delete.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "comments") {
    if ($method === "GET") {
        /**
         * Importe le contenu du fichier "controllers/comments/get.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/get.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu du fichier "controllers/comments/post.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/post.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu du fichier "controllers/comments/patch.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/patch.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu du fichier "controllers/comments/delete.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/delete.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "albums") {
    if ($method === "GET") {
        /**
         * Importe le contenu du fichier "controllers/albums/get.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/get.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu du fichier "controllers/albums/post.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/post.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu du fichier "controllers/albums/patch.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/patch.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu du fichier "controllers/albums/delete.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/delete.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "todos") {
    if ($method === "GET") {
        /**
         * Importe le contenu du fichier "controllers/todos/get.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/get.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu du fichier "controllers/todos/post.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/post.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu du fichier "controllers/todos/patch.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/patch.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu du fichier "controllers/todos/delete.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/delete.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "posts") {
    if ($method === "GET") {
        /**
         * Importe le contenu du fichier "controllers/posts/get.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/get.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu du fichier "controllers/posts/post.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/post.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu du fichier "controllers/posts/patch.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/patch.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu du fichier "controllers/posts/delete.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/delete.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "photos") {
    if ($method === "GET") {
        /**
         * Importe le contenu du fichier "controllers/photos/get.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/get.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu du fichier "controllers/photos/post.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/post.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu du fichier "controllers/photos/patch.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/patch.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu du fichier "controllers/photos/delete.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/delete.php";

        /**
         * Arrête l'exécution du script
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

include __DIR__ . "/functions/json-response.php";

jsonResponse(404, [], ["success" => false, "error" => "Not found"]);
