<?php

function get(): \Generator
{
    foreach (range(1, 100) as $item) {
        yield $item;
    }
}

$generatorToArr = [...get()];
echo "<pre>";
print_r($generatorToArr);