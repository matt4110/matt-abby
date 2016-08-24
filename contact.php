<?php include 'header.php'; ?>
<div class="content">
	<div class="grid-4-12-centered">
		<form method="post" action="contact-submit.php">
			<input type="text" name="Name" placeholder="Name">
			<input type="email" name="Email" placeholder="Email">
			<input type="text" name="Message" placeholder="What can we do for you?">
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>