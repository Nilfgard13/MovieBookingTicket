<?php
// Mock data for films
$films = [
    ["title" => "Film 1", "image" => "film1.png"],
    ["title" => "Film 2", "image" => "film2.jpg"],
    ["title" => "Film 3", "image" => "film3.jpeg"],
    ["title" => "Film 4", "image" => "film4.jpeg"],
    ["title" => "Film 5", "image" => "film5.jpg"],
    ["title" => "Film 6", "image" => "film1.png"],
    ["title" => "Film 7", "image" => "film2.jpg"],
    ["title" => "Film 8", "image" => "film3.jpeg"],
    ["title" => "Film 9", "image" => "film4.jpeg"],
];

foreach ($films as $index => $film) {
    echo '<div class="film-card">';
    echo '<img src="assets/images/' . $film["image"] . '" alt="' . $film["title"] . '">';
    echo '<h3>' . $film["title"] . '</h3>';
    // Tambahkan elemen dot
    echo '<span class="dot" data-index="' . $index . '"></span>';
    echo '</div>';
}

// foreach ($films as $film) {
//     echo '<div class="film-card">';
//     echo '<img src="assets/images/' . $film["image"] . '" alt="' . $film["title"] . '">';
//     echo '<h3>' . $film["title"] . '</h3>';
//     echo '</div>';
// }
// ?>