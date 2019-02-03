<?php
	// We use this file to display all the errors in the queries if any
?>

<?php if (count($errors) > 0) : ?>
<div class="col-md-12">
	<div class="text-danger">
		<strong>Oops</strong><br>
		<?php foreach ($errors as $error) : ?>
			<?php echo $error ?><br> <p>Redirecting in <span id="count">3</span> seconds...</p>
		<?php endforeach ?>
	</div>
</div>
<br>
<?php endif ?>



<script type="text/javascript">


window.onload = function(){

(function(){
  var counter = 3;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
    //    alert('this is where it happens');
				window.location.href = '<?php echo $page; ?>';
        clearInterval(counter);
    }



  }, 1000);

})();

}

</script>
