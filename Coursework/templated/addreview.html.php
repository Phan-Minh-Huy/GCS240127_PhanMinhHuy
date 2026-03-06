<form action="" method="post">

<p>

<label>Film</label>

<select name="film" required>

<option value="">Select Film</option>

<?php foreach ($films as $film): ?>

<option value="<?= $film['id'] ?>">
<?= htmlspecialchars($film['title']) ?>
</option>

<?php endforeach; ?>

</select>

</p>

<p>

<label>Film Review</label>

<textarea name="reviewtext" rows="4" cols="40"></textarea>

</p>

<p>

<label>Reviewer</label>

<select name="reviewerid">

<?php foreach ($reviewers as $reviewer): ?>

<option value="<?= $reviewer['id'] ?>">

<?= htmlspecialchars($reviewer['name']) ?>

</option>

<?php endforeach; ?>

</select>

</p>

<p>

<label>Genre</label>

<?php foreach ($genres as $genre): ?>

<input type="checkbox" name="genre[]" value="<?= $genre['id'] ?>">

<?= htmlspecialchars($genre['name']) ?>

<br>

<?php endforeach; ?>

</p>

<p>

<input type="submit" value="Add Review">

</p>

</form>