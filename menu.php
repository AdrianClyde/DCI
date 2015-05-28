<a href="index.php"><img src="images/DCI_Logo.png" alt="DCI Logo"></a>
<nav>
	<ul>
		<li class="<?= $active == 'contact' ? 'active' : '' ?>"><a href="contact.php">CONTACT</a></li>
		<li class="<?= $active == 'investors' ? 'active' : '' ?>"><a href="#" onclick="javascript:toggleMenu()">INVESTORS</a><img src="images/locked.png"></li>
		<li class="<?= $active == 'liquidity' ? 'active' : '' ?>"><a href="liquidity.php">LIQUIDITY</a></li>
		<li class="<?= $active == 'people' ? 'active' : '' ?>"><a href="people.php">PEOPLE</a></li>
	</ul>
</nav>
<hr>
<div id="login-main" style="display: none">
	<div id="login-modal" style="display: none">
		<h2>Investor Log-in</h2>
		<button class="close-button" onclick="javascript:toggleMenu();">
			&#10006;
		</button>
		<input type="text" required placeholder="Username"/>
		<input type="password" required placeholder="Password"/>
		<a href=""><p>Forgot / Sign-up</p></a>
		<button id="sign-in">Sign-in
		</button>
	</div>
</div>