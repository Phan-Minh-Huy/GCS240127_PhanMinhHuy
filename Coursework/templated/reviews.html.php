<p><?= $totalReviews ?> reviews in the database.</p>

<?php foreach ($reviews as $review): ?>

<blockquote>

<?php if (!empty($review['poster'])): ?>

<img src="uploads/<?= htmlspecialchars($review['poster']) ?>" width="200">

<?php endif; ?>

<p>
<?= htmlspecialchars($review['reviewtext']) ?>

<a href="editreview.php?id=<?= $review['review_id'] ?>">Edit</a>

</p>

<small>

(<?= htmlspecialchars($review['reviewdate']) ?>

- <?= htmlspecialchars($review['reviewer']) ?>

- <?= htmlspecialchars($review['genres'] ?? 'No genre') ?>)

</small>

<form action="deletereview.php" method="post">

<input type="hidden" name="id" value="<?= $review['review_id'] ?>">

<input type="submit" value="Delete">

</form>

</blockquote>

<?php endforeach; ?>