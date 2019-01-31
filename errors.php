<?php
	// We use this file to display all the errors in the queries if any
?>

<?php if (count($errors) > 0) : ?>
<div class="col-md-12">
	<div class="text-danger">
		<strong>Oops</strong><br>
		<?php foreach ($errors as $error) : ?>
			<?php echo $error ?><br>
		<?php endforeach ?>
	</div>
</div>
<br>
<?php endif ?>
