<?php

try {

include 'includes/DatabaseConnection.php';

$sql = 'DELETE FROM review WHERE id = :id';

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':id', $_POST['id']);

$stmt->execute();

header('Location: reviews.php');

}
catch (PDOException $e){

$title = 'Database error';

$output = $e->getMessage();

}

include 'templates/layout.html.php';

?>