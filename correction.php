<?php

$textFile = file_get_contents('message.txt');

$textFileWithMyName = str_replace('#NAME#', 'Benjamin', $textFile);

file_put_contents('message.txt', $textFileWithMyName);