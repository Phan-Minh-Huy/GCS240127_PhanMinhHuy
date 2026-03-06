<?php
include 'includes/DatabaseConnection.php';
try {
if (isset($_POST['reviewtext'])) {
$sql = 'UPDATE review SET reviewtext = :reviewtext WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':reviewtext', $_POST['reviewtext']);
$stmt->bindValue(':id', $_POST['reviewid']);
$stmt->execute();
header('Location: reviews.php');
}
else {
$sql = 'SELECT * FROM review WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$review = $stmt->fetch();
$title = 'Edit Review';
ob_start();
include 'templated/editreview.html.php';

$output = ob_get_clean();

}

}
catch (PDOException $e){

$title = 'Database error';

$output = $e->getMessage();

}

include 'templated/layout.html.php';

?>