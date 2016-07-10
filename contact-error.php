<?php include 'header.php'; ?>
<div class="content">
	<div class="grid-4-12-centered">
	<h1 class="alert">It seems something went wrong. Please try again, or contact us on Facebook.</h1>
		<form action="contact-submit.php" method="post">
			<input type="text" name="Name" placeholder="Name">
			<input type="email" name="Email" placeholder="Email">
			<input type="text" name="Message" placeholder="What can we do for you?">
			<input type="submit" name="submit" value="Send">
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>