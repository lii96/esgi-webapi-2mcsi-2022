<?php

/**
 * Renvoie une réponse au format JSON
 * @param {int} $statusCode
 * @param {array} $headers
 * @param {string} $body
 */
function jsonResponse($statusCode, $headers, $body) {
    /**
     * Modifier le code de statut HTTP de la réponse
     * @see https://www.php.net/manual/en/function.http-response-code.php
     */
    http_response_code($statusCode);

    /**
     * Ajouter/modifier un en-tête à la réponse
     * @see https://www.php.net/manual/en/function.header.php
     */
    header("Content-Type: application/json");

    foreach ($headers as $key => $value) {
        header("$key: $value");
    }

    /**
     * Transformer un tableau PHP en chaîne de caractères JSON
     * @see https://www.php.net/manual/en/function.json-encode.php
     */
    echo json_encode($body);
}
