<?php
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function isUrl($link)
{
    return $_SERVER["REQUEST_URI"] === $link;
}
function authorize($condition, $statusCode = Response::FORBIDDEN) {
    if (!$condition) {
        abort($statusCode);
    }
}
