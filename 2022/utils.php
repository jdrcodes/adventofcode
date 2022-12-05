<?php

function getFileFromData($fileName): array
{
    $data = [];

    if (!empty($fileName)) {
        $file = fopen($fileName, 'r');

        $index = 0;
        while ($line = fgets($file)) {
            if (strlen(trim($line)) === 0) {
                $index++;
                continue;
            }

            $data[$index][] = intval(trim($line));

        }
        fclose($file);
    }

    return $data;
}

function getPlaysFromFile($fileName): array
{
    $data = [];

    if (!empty($fileName)) {
        $file = fopen($fileName, 'r');

        while ($line = fgets($file)) {
            $line = trim($line);
            $data[] = explode(" ", $line);
        }

        fclose($file);
    }

    return $data;
}