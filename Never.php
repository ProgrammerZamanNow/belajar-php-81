<?php

function stop(): never
{
    echo "STOP" . PHP_EOL;
    exit();
}

stop();

echo "Ups" . PHP_EOL;
