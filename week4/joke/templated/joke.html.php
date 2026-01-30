<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Jokes</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #f2f2f2; }
        img { vertical-align: middle; margin-left: 10px; }
    </style>
</head>
<body>
<?php if (isset($error)): ?>
    <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php else: ?>
    <table>
        <tr>
            <th>Joke</th>
            <th>Date</th>
            <th>Image</th>
        </tr>
        <?php foreach ($jokes as $joke): ?>
            <tr>
                <td><?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?></td>
                <td>
                    <?= htmlspecialchars(date('D d M Y', strtotime($joke['jokedate'])), ENT_QUOTES, 'UTF-8') ?>
                </td>
                <td>
                    <?php if (!empty($joke['image'])): ?>
                        <img src="images/<?= htmlspecialchars($joke['image'], ENT_QUOTES, 'UTF-8') ?>" width="80">
                    <?php else: ?>
                        No image
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
</body>
</html>
