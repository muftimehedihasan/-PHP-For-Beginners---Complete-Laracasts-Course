<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }
</style>

<body>


<?php 
$books = [

    [
        'name' => 'Ogni Bina',
        'author' => 'Kazi',
        'releaseYear' => 1996,
        'purchase_url' => 'https://www.example.com'
    ],

    [
        'name' => 'Sonali Kabin',
        'author' => 'Kobi',
        'releaseYear' => 1985,
        'purchase_url' => 'https://www.example.com'
    ],

    [
        'name' => 'Unknown Book',
        'author' => 'Unknown Author',
        'releaseYear' => 1945,
        'purchase_url' => 'https://www.example.com'
    ],

    [
        'name' => 'Modern Poetry',
        'author' => 'Kazi',
        'releaseYear' => 2005,
        'purchase_url' => 'https://www.example.com'
    ]
];

require 'index.vue.php';

?>
