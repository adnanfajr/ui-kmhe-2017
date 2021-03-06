<?php
	require 'inc/header.php';
	require 'inc/nav.php';
?>
	<!-- Features 1 -->
	<div class="wrapper">
		<div class="container">
			<header class="major">
				<h2>Hubungi Kami</h2>
				<p></p>
			</header>
			<div class="row">
				<section class="6u 12u(narrower)">
					<form method="post" action="#">
						<div class="row 50%">
							<div class="6u 12u(mobile)">
								<input name="name" placeholder="Name" type="text" />
							</div>
							<div class="6u 12u(mobile)">
								<input name="email" placeholder="Email" type="text" />
							</div>
						</div>
						<div class="row 50%">
							<div class="12u">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="row 50%">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
									<li><input type="reset" value="Clear form" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
				<section class="6u 12u(narrower)">
					<div class="row 0%">
						<ul class="divided icons 6u 12u(mobile)">
							<li class="icon fa-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
							<li class="icon fa-facebook"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
							<li class="icon fa-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
						</ul>
						<ul class="divided icons 6u 12u(mobile)">
							<li class="icon fa-instagram"><a href="#"><span class="extra">instagram.com/</span>untitled</a></li>
							<li class="icon fa-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
							<li class="icon fa-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>

<?php
	require 'inc/footer.php';
?>