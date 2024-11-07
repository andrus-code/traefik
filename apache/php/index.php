<?php

$array = [
    "name" => "Claudio Andres",
    "lastname" => "Salamanca",
    "age" => empty($_GET["age"]) ? 48 : intval($_GET["age"]),
    "servers" => [
        "server_ip" => $_SERVER["SERVER_ADDR"],
        "remote_ip" => $_SERVER["REMOTE_ADDR"]
    ],
    "action" => "Practice with Traefik!!!"
];

header('Content-Type: application/json');

echo json_encode($array, true);