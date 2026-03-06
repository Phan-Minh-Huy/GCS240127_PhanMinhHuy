<form action="" method="post">

<input type="hidden" name="reviewid" value="<?= $review['id'] ?>">

<label>Edit Review</label>

<textarea name="reviewtext" rows="4" cols="40">

<?= htmlspecialchars($review['reviewtext']) ?>

</textarea>

<br><br>

<input type="submit" value="Save">

</form>