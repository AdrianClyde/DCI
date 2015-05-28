<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1">
		<title>DCI - Contact</title>
		<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
        <link type="text/css" rel="stylesheet" href="css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
		<?php $active = 'contact';
			include('menu.php');
		?>
        </header>

  		<section>
			<h1 style="text-align: left">CONTACT</h1>
			<div class="contact">
				<img src="images/DCI_Logo_large.png">
			</div>
			<div class="contact">
				<div class="card">
					<figure class="front">
						<form action="" method="">
							<div>
								<input type="text" id="name" placeholder="Name" required/>
							</div>
							<div>
								<input type="email" id="mail" placeholder="E-mail" required/>
							</div>
							<div>
								<textarea id="msg" placeholder="Type your message here..." required></textarea>
							</div>

							<div class="button">
								<button type="submit">Send</button>
							</div>
						</form>
					</figure>
					<figure class="back">
						<div>
							<p>Thank you.<br />Your message has been sent!</p>
						</div>
					</figure>
				</div>
			</div>
		</section>
        <footer>
            <?php include("footer.php"); ?>
        </footer>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/contactForm.js"></script>
		<script src="js/mainScript.js"></script>
    </body>
</html>