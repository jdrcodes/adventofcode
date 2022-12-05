<?php

include('utils.php');

const PLAY_ROCK = 'A';
const PLAY_PAPER = 'B';
const PLAY_SCISSORS = 'C';

const PLAY_ROCK_2 = 'X';
const PLAY_PAPER_2 = 'Y';
const PLAY_SCISSORS_2 = 'Z';

const DRAW = 3;
const VICTORY = 6;

const POINTS_ROCK = 1;
const POINTS_PAPER = 2;
const POINTS_SCISSORS = 3;

$data = getPlaysFromFile('2.txt');

$points = 0;
foreach ($data as $plays)
{
    $points += getPoints2($plays[0], $plays[1]);
}

echo $points;

function getPoints2($player1, $player2): int
{
    $points = 0;

    if ($player1 === PLAY_ROCK) {
        $points += POINTS_ROCK + DRAW;
    } elseif ($player1 === PLAY_PAPER) {
        $points += POINTS_ROCK;
    } elseif ($player1 === PLAY_SCISSORS) {
        $points += POINTS_ROCK + VICTORY;
    }

    return $points;
}

function getPoints($player1, $player2): int
{
    $points = 0;
    if ($player1 === PLAY_ROCK) {
        switch ($player2) {
            case PLAY_ROCK_2:
                $points = POINTS_ROCK + DRAW;
                break;
            case PLAY_PAPER_2:
                $points = POINTS_PAPER + VICTORY;
                break;
            case PLAY_SCISSORS_2:
                $points = POINTS_SCISSORS;
                break;
        }
    } elseif ($player1 === PLAY_PAPER) {
        switch ($player2) {
            case PLAY_ROCK_2:
                $points = POINTS_ROCK;
                break;
            case PLAY_PAPER_2:
                $points = POINTS_PAPER + DRAW;
                break;
            case PLAY_SCISSORS_2:
                $points = POINTS_SCISSORS + VICTORY;
                break;
        }
    } elseif ($player1 === PLAY_SCISSORS) {
        switch ($player2) {
            case PLAY_ROCK_2:
                $points = POINTS_ROCK + VICTORY;
                break;
            case PLAY_PAPER_2:
                $points = POINTS_PAPER;
                break;
            case PLAY_SCISSORS_2:
                $points = POINTS_SCISSORS + DRAW;
                break;
        }
    }

    return $points;
}
