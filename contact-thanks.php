<?php include 'header.php'; ?>
<div class="content">
	<div class="grid-4-12-centered">
	<h1 class="alert">Thank you for your message, we will get back to you (usually) within the next 24 hours.</h1>
		<form action="contact-submit.php" method="post">
			<input type="text" name="Name" placeholder="Name">
			<input type="email" name="Email" placeholder="Email">
			<input type="text" name="Message" placeholder="What can we do for you?">
			<input type="submit" name="submit" value="Send">
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>