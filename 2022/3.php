<?php

include('utils.php');

$a = range('a', 'z');
$a = array_merge($a, range('A', 'Z'));

$alphabet = [];
foreach ($a as $key => $letter)
{
    $alphabet[$letter] = ($key+1);
}

function getRucksack($fileName, $alphabet): int
{
    $total = 0;

    if (!empty($fileName)) {
        $file = fopen($fileName, 'r');

        while ($line = fgets($file)) {
            $line = trim($line);
            $length = strlen($line);
            $char = getSameCharacter(substr($line, 0, $length/2), substr($line, $length / 2));
            $total += $alphabet[$char];
        }

        fclose($file);
    }

    return $total;
}

function getSameCharacter($string1, $string2): string
{
    foreach (str_split($string1) as $char)
    {
        foreach (str_split($string2) as $char2)
        {
            if ($char === $char2) {
                return $char;
            }
        }
    }
}

function getRucksack2($fileName, $alphabet): int
{
    $total = 0;

    if (!empty($fileName)) {
        $file = fopen($fileName, 'r');

        $data = [];
        while ($line = fgets($file)) {
            $line = trim($line);

            if (sizeof($data) === 3) {

            }
        }

        fclose($file);
    }

    return $total;
}

function getSameCharacter2($array): string
{
    foreach (str_split($array[0]) as $char)
    {
        foreach (str_split($array[1]) as $char2)
        {
            foreach (str_split($array[2]) as $char3)
            {
                if ($char === $char2 && $char === $char3) {
                    return $char;
                }
            }
        }
    }
}

echo getRucksack2('3.txt', $alphabet);