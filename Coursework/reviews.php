<?php
try {

include 'includes/DatabaseConnection.php';

$sql = '
SELECT
r.id AS review_id,
r.reviewtext,
r.reviewdate,
u.name AS reviewer,
GROUP_CONCAT(g.name SEPARATOR ", ") AS genres
FROM review r
JOIN reviewer u ON r.reviewerid = u.id
LEFT JOIN reviewgenre rg ON r.id = rg.reviewid
LEFT JOIN genre g ON rg.genreid = g.id
GROUP BY r.id
';

$reviews = $pdo->query($sql);

$title = 'Film Reviews';

$totalReviews = $pdo->query('SELECT COUNT(*) FROM review')->fetchColumn();

ob_start();
include 'templated/reviews.html.php';
$output = ob_get_clean();

}
catch (PDOException $e){

$title = 'Database error';
$output = $e->getMessage();

}

include 'templated/layout.html.php';
?>