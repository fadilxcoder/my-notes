<?php

var_dump("RISKY! see code! "); die;
function benchmark(string $name, Closure $closure, int $repeat = 10 ** 7): void
{
    $startTime = microtime(true);
    $i=0;
    while ($i++ < $repeat) {
        $closure();
    }
    $endTime = microtime(true);
    printf('%s: %f%s', $name, $endTime - $startTime, "\n");
}

$array = range(1, 2 ** 7);

benchmark('count', fn() => $array[count($array) - 1]);
benchmark('slice', fn() => array_slice($array, -1, 1)[0]);
benchmark('count', fn() => $array[array_key_last($array)]);
