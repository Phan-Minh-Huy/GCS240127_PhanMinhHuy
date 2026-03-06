<?php

include 'includes/DatabaseConnection.php';

if (isset($_POST['submit'])) {

    $posterName = '';

    if ($_FILES['poster']['error'] == 0) {

        $posterName = $_FILES['poster']['name'];

        move_uploaded_file(
            $_FILES['poster']['tmp_name'],
            'uploads/' . $posterName
        );
    }

    $sql = 'INSERT INTO review SET
        reviewtext = :reviewtext,
        reviewdate = CURDATE(),
        reviewerid = :reviewerid,
        poster = :poster';

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':reviewtext', $_POST['reviewtext']);
    $stmt->bindValue(':reviewerid', $_POST['reviewerid']);
    $stmt->bindValue(':poster', $posterName);

    $stmt->execute();

    header('Location: reviews.php');
    exit();
}

$reviewers = $pdo->query('SELECT id,name FROM reviewer');

$title = 'Upload Film Poster';

ob_start();

include 'templated/uploadposter.html.php';

$output = ob_get_clean();

include 'templated/layout.html.php';

?>