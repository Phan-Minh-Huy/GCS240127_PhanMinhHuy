<h2>Upload Film Poster</h2>

<form method="post" enctype="multipart/form-data">

<p>

<label>Film Review</label>

<textarea name="reviewtext"></textarea>

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

<label>Poster</label>

<input type="file" name="poster">

</p>

<br>

<input type="submit" name="submit" value="Upload Poster">

</form>