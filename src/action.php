<?php

require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

function main(array $args) : array
{
    echo "Started my PHP Action";

    $name = $args["name"] ?? "World";

    return [
        "greeting" => "Hello $name!",
        "Uuid" => Uuid::uuid4(),
        "time" => date("r"),
    ];
}
