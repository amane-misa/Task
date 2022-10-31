<?php
mb_internal_encoding("UTF-8");
function decodeJSON(string $json, string $key)
{
    echo "$key : $json" . "\n";
}

$json = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail":{ "Publisher": "Little Brown"}}';
$j = json_decode($json, true);
array_walk_recursive($j, "decodeJSON");
