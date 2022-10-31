<?php
mb_internal_encoding("UTF-8");
function convertString(string $input)
{
    $str = str_replace('-', '', ucwords(str_replace('_', '', ucwords(str_replace(' ', '', ucwords($input, ' ')), '_')), '-'));

    echo $str . "\n";
}

convertString('I-love_ php!');
convertString('Are---you_ winning son-?');
convertString('The quick-brown_fox jumps over the_lazy-dog');
