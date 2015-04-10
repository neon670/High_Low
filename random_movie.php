<?php

$inputFile  = 'movies.txt';
$outputFile = 'sorted_movies.txt';

/**
 * Read in a file, return contents as an array
 **/
function readLines($inputFile)
{
}

/**
 * Write contents of an array to a file
 **/
function writeLines($outputFile, $movies)
{
}

/**
 * Pick a random movie from an array
 **/
function randomMovie($movies)
{
	$movies = 'movies.txt';
}

$movies = readLines($inputFile);
$randomMovie = randomMovie($movies);

echo "Let's watch " . $randomMovie . "!\n";
echo "But " . $randomMovie . " really sucks!\n";

sort($movies);

writeLines($outputFile, $movies);