<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=week4;charset=utf8mb4', 'root', '');
    $sql = 'SELECT joketext, jokedate, image FROM joke';
    $jokes = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error = "Database error: " . $e->getMessage();
}
include 'templated/joke.html.php';
