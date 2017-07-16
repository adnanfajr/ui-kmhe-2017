<?php
	require 'inc/header.php';
	require 'inc/nav.php';
?>
	<div class="wrapper">
		<section class="container" style="position: relative; text-align: center;">
			<header class="major">
				<h2>Login</h2>
				<br>
			</header>
			<form method="post" action="#">
				<div class="row">
					<div class="12u">
						<input name="name" placeholder="Email" type="text" />
					</div>
					<div class="12u" style="padding-top: 2em">
						<input name="password" placeholder="Password" type="password" />
					</div>
				</div>
				<div class="row">
					<div class="12u">
						<ul class="actions">
							<li><input type="submit" value="Submit" /></li>
						</ul>
					</div>
				</div>
			</form>
		</section>
	</div>

	<?php
	require 'inc/footer.php';
?>