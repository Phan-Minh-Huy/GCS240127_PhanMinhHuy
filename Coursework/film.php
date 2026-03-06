<?php
try {
    include 'includes/DatabaseConnection.php';

    $sql = '
        SELECT
    j.id AS joke_id,
    j.joketext,
    j.jokedate,
    f.title AS film_title,
    a.name AS author_name,
    GROUP_CONCAT(c.name SEPARATOR ", ") AS categories
FROM joke j
JOIN author a ON j.authorid = a.id
JOIN film f ON j.filmid = f.id
LEFT JOIN jokecategory jc ON j.id = jc.jokeid
LEFT JOIN category c ON jc.categoryid = c.id
GROUP BY j.id
    ';

    $jokes = $pdo->query($sql);

    $title = 'Film Reviews';
    $films = $pdo->query('SELECT id, title FROM film');
    $totalJokes = $pdo->query('SELECT COUNT(*) FROM joke')->fetchColumn();
    

    ob_start();
    include 'templated/joke.html.php';
    $output = ob_get_clean();

} catch (PDOException $e) {
    $title = 'Database Error';
    $output = $e->getMessage();
}

include 'templated/layout.html.php';
?>