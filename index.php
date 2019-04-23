<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Find the Exact Restaurant You Want</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="Frontend/css/main.css" />
		<noscript><link rel="stylesheet" href="Frontend/css/noscript.css" /></noscript>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<i class="icon-food" height="30" width="30"></i>
						</div>
						<div class="content">
							<div class="inner">
								<h1>The Best Dining Experience for Your Tastes</h1>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#search">Search</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="#login">Company Access</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Search -->
							<article id="search">
								<h2 class="major">Search</h2>
								<span class="image main"><img src="images/Searchimg.jpg" alt="" /></span>
								<p>Enter your restaurant search specifications below:</p>
								<!-- SEARCH FORM -->
								<script>
									function includeHTML() {
  										var z, i, elmnt, file, xhttp;
  										/*loop through a collection of all HTML elements:*/
  										z = document.getElementsByTagName("*");
  										for (i = 0; i < z.length; i++) {
    										elmnt = z[i];
    										/*search for elements with a certain atrribute:*/
    										file = elmnt.getAttribute("w3-include-html");
    										if (file) {
      											/*make an HTTP request using the attribute value as the file name:*/
      											xhttp = new XMLHttpRequest();
      											xhttp.onreadystatechange = function() {
        											if (this.readyState == 4) {
          												if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          												if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          											/*remove the attribute, and call this function once more:*/
          											elmnt.removeAttribute("w3-include-html");
          											includeHTML();
       												}
      											}      
      											xhttp.open("GET", file, true);
      											xhttp.send();
      											/*exit the function:*/
      											return;
    										}
  										}
									};
								</script>
								<div w3-include-html="SearchForm/index.html"></div>
								<script>
									includeHTML();
								</script>
								<form method="get" action="#results">
									<ul class="actions">
										<li><input type="submit" value="Search" class="primary" /></li>
									</ul>
								</form>
								<form method="post" action="#"></form>
									<ul class="actions">
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About Us</h2>
								<span class="image main"><img src="images/Map.jpg" alt="" /></span>
								<p>We are a world-wide restaurant and bar advanced search engine. Our goal is to provide travellers, anyone looking for a specific place to eat/drink, as well as anyone indecisive  about where to eat, a service that can point them to the exact place that fits their tastes and mood.</p>
								<p>The idea of our company is that other companies and bars pay us to be able to add all of their restaurants and  bars to our  database so that people will be directed to them if their search criteria matches.</p>
								<p>Our mission is to provide people with the best possible dining and drink experience without being a brick-and-morter establishment.</p>
							</article>

						<!-- Login -->
							<article id="login">
								<h2 class="major">Login/Register for Companies</h2>
								<h3>Log In</h3>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field half">
											<label for="password">Password</label>
											<input type="password" name="password" id="password" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Log In" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<form method="get" action="#forgot">
									<ul class="actions">
										<li><input type="submit" value="Forgot Password" /></li>
									</ul>
									<hr />
									<h3>Don't have an account? Register today!</h3>
								</form>
								<form method="get" action="#register">
									<ul class="actions">
										<li><input type="submit" value="Register" class="primary"/></li>
									</ul>
								</form>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="company">Company</label>
											<input type="text" name="company" id="company" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<!-- Register -->

							<article id="register">
								<h2 class="major">Register</h2>
								<p>Registration of your company requires a $50/year subscription to our marketing services.</p>
								
								<?php include('Backend2/Register.php'); ?>
								
								<!-- <form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="company">Company Name</label>
											<input type="text" name="company" id="company" />
										</div>
										<div class="field half">
											<label for="email">Company Email</label>
											<input type="email" name="email" id="email" />
										</div>
										<div class="field half">
											<label for="address">Primary Address</label>
											<input type="text" name="address" id="address" />
										</div>
										<div class="field half">
											<label for="phone">Primary Phone</label>
											<input type="tel" name="phone" id="phone" />
										</div>
										<div class="field half">
											<label for="pwd">Password</label>
											<input type="password" name="pwd" id="pwd" />
										</div>
										<div class="field half">
											<label for="pwd2">Confirm Password</label>
											<input type="password" name="pwd2" id="pwd2" />
										</div>
									</div>
									<hr />
									<h3>Payment Information</h3>
									<p>Note: For website testing purposes, account creation will be free.</p>
									<p>Do not enter any card information in the fields below.</p>
									<br>
									<div class="fields">
										<div class="field half">
											<label for="cc">Credit Card Number</label>
											<input type="text" name="cc" id="cc" />
										</div>
										<div class="field half">
											<label for="CVV">CVV Code</label>
											<input type="text" name="CVV" id="CVV" />
										</div>
										<div class="field half">
											<label for="date">Expiration Date</label>
											<input type="date" name="date" id="date" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Register and Pay" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form> -->
							</article>

						<!-- Results -->
							<article id="results">
								<h2 class="major">Search Results (6)</h2>
								<b>Name: Tupelo Honey</b>
								<span class="image main"><img src="images/Tupelo.png" alt="" /></span>
								<ul>
									<li>Type of restaurant: Fine Dining</li>
									<li>Type of food: American</li>
									<li>Price range: $$-$$$</li>
									<li>Rating: 4/5</li>
									<li>Address: 1 Market Square, Knoxville, TN 37902</li>
									<li><a href="https://tupelohoneycafe.com/location/knoxville/menus/#lunch-and-dinner-menu" target="_blank">Menu</a></li>
								</ul>
								<hr />
								<b>Name: Copper Cellar</b>
								<span class="image main"><img src="images/Copper.png" alt="" /></span>
								<ul>
									<li>Type of restaurant: Fine Dining</li>
									<li>Type of food: American</li>
									<li>Price range: $$-$$$</li>
									<li>Rating: 4.5/5</li>
									<li>Address: 1807 Cumberland Ave, Knoxville, TN 37916</li>
									<li><a href="https://coppercellar.com/cumberland-copper-cellar/" target="_blank">Menu</a></li>
								</ul>
								<hr />
								<b>Name: Quality Turkish Market & Deli</b>
								<span class="image main"><img src="images/Turkish.png" alt="" /></span>
								<ul>
									<li>Type of restaurant: To-Go</li>
									<li>Type of food: Mediterranean</li>
									<li>Price range: $</li>
									<li>Rating: 4.5/5</li>
									<li>Address: 8078 Kingston Pike, Knoxville, TN 37919</li>
									<li><a href="http://www.browniebites.net/quality-turkish-market-review-knoxville-tn/" target="_blank">Menu</a></li>
								</ul>
								<hr />
								<b>Name: Field House Social</b>
								<span class="image main"><img src="images/Fieldhouse.png" alt="" /></span>
								<ul>
									<li>Type of restaurant: Bar and Grill</li>
									<li>Type of food: American</li>
									<li>Price range: $$</li>
									<li>Rating: 4.5/5</li>
									<li>Address: 2525 University Commons Way, Knoxville, TN 37919</li>
									<li><a href="http://fieldhousesocial.com/Fieldhouse-Social-Menu.pdf" target="_blank">Menu</a></li>
								</ul>
								<hr />
								<b>Name: Literboard</b>
								<span class="image main"><img src="images/Liter.png" alt="" /></span>
								<ul>
									<li>Type of restaurant: Bar</li>
									<li>Type of food: American</li>
									<li>Price range: $</li>
									<li>Rating: 4.5/5</li>
									<li>Address: 1848 Cumberland Ave, Knoxville, TN 37916</li>
									<li><a href="https://www.literboardknox.com/menu" target="_blank">Menu</a></li>
								</ul>
								<hr />
								<b>Name: Cool Beans</b>
								<span class="image main"><img src="images/Beans.png" alt="" /></span>
								<ul>
									<li>Type of restaurant: Bar and Grill</li>
									<li>Type of food: American</li>
									<li>Price range: $</li>
									<li>Rating: 4.2/5</li>
									<li>Address: 1817 Lake Ave, Knoxville, TN 37916</li>
									<li><a href="http://www.coolbeansbar.com/food/"  target="_blank">Menu</a></li>
								</ul>
							</article>

						<!-- User -->
							<article id="userID">
								<h2 class="major">Account Control Panel</h2>
								<ul>
									<li><a href="#">Log Out</a></li>
									<li><a href="#addstore">Add New Restaurant</a></li>
									<li><a href="#">Change Email</a></li>
									<li><a href="#">Change Password</a></li>
								</ul>
							</article>

						<!-- Add Restaurant -->
							<article id="addstore">
								<h2 class="major">Add New Restaurant</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<select data-trigger="" name="choices-single-defaul">
												<option placeholder="" value="">Type of Restaurant</option>
												<option>Bar</option>
												<option>Hotel</option>
												<option>Sit Down</option>
												<option>To Go</option>
												<option>Fast Food</option>
												<option>Fine Dining</option>
											</select>
										</div>
										<div class="field half">
												<select data-trigger="" name="choices-single-defaul">
													<option placeholder="" value="">Type of Food</option>
													<option>American</option>
													<option>Chinese</option>
													<option>Japanese</option>
													<option>Mexican</option>
													<option>Thai</option>
													<option>Vietnamese</option>
													<option>French</option>
													<option>German</option>
													<option>Mediterranean</option>
													<option>Caribbean</option>
												</select>
											</div>
										<div class="field half">
											<select data-trigger="" name="choices-single-defaul">
												<option placeholder="" value="">Price Range</option>
												<option>$</option>
												<option>$$</option>
												<option>$$$</option>
											</select>
										</div>
										<div class="field half">
											<label for="rating">Rating (0-5)</label>
											<input type="text"  name="rating" id="rating" />
										</div>
										<div class="field half">
											<label for="address">Location Address</label>
											<input type="text" name="address" id="address"/>
										</div>
										<div class="field half">
											<label for="hours">Business Hours (Use military time)</label>
											<input type="text" name="hours" id="hours" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Add Restaurant" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<a href="#userID">Back to Account Control Panel</a>
							</article>

						<!-- Forgot password -->
							<article id="forgot">
								<h2 class="major">Forgot Password</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="email">Enter Account Email</label>
											<input type="text" name="email" id="email" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send New Password" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
									<p>A new password will be sent you your email. Click the link in the email to create a new custom password.</p>
								</form>
							</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="Frontend/js/jquery.min.js"></script>
			<script src="Frontend/js/browser.min.js"></script>
			<script src="Frontend/js/breakpoints.min.js"></script>
			<script src="Frontend/js/util.js"></script>
			<script src="Frontend/js/main.js"></script>

	</body>
</html>
