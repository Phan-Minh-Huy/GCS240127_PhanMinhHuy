<?php

if (isset($_POST['reviewtext'], $_POST['reviewerid'])) {

try {

include 'includes/DatabaseConnection.php';

$sql = 'INSERT INTO review SET
reviewtext = :reviewtext,
reviewdate = CURDATE(),
reviewerid = :reviewerid,
filmid = :filmid';

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':reviewtext', $_POST['reviewtext']);
$stmt->bindValue(':reviewerid', $_POST['reviewerid']);
$stmt->bindValue(':filmid', $_POST['filmid']);

$stmt->execute();

$reviewId = $pdo->lastInsertId();

if (isset($_POST['genre'])) {

$sql = 'INSERT INTO reviewgenre SET
reviewid = :reviewid,
genreid = :genreid';

$stmt = $pdo->prepare($sql);

foreach ($_POST['genre'] as $genre) {

$stmt->bindValue(':reviewid', $reviewId);
$stmt->bindValue(':genreid', $genre);
$stmt->execute();

}

}

header('Location: reviews.php');
exit();

}
catch (PDOException $e){

$title = 'Database error';
$output = $e->getMessage();

}

}
else{

try{

include 'includes/DatabaseConnection.php';

$reviewers = $pdo->query('SELECT id,name FROM reviewer');
$genres = $pdo->query('SELECT id,name FROM genre');
$films = $pdo->query('SELECT id, title FROM film')->fetchAll(); 
$title = 'Add Film Review';

ob_start();
include 'templated/addreview.html.php';
$output = ob_get_clean();

}
catch (PDOException $e){

$title = 'Database error';
$output = $e->getMessage();

}

}

include 'templated/layout.html.php';

?>