<!DOCTYPE html>
<html lang="en">
	<head>
	<title>S2K Digisolutions Private Limited</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <style>
		.navbar
		{
			letter-spacing:4px;
			font-size:18px;
			background-color:#fb1d58;
			margin-buttom:0px;
			border:0;
		}
		.navbar li a, .navbar .navbar-brand 
		{
		  color:white !important;
		}
		.navbar-nav li a:hover, .navbar-nav li.active a 
		{
		  color:black !important;
		  background-color: #fff !important;
		}
		.jumbotron
		{
			background-color:#fb1d58;
			color:white;
			padding: 100px 25px;
		}
		.container-fluid
		{
			padding:60px 50px;
		}
		.logo {
		  font-size:200px;
		  color:red;
		}
		@media screen and (max-width: 768px) {
		  .col-sm-4 {
			text-align: center;
			margin: 25px 0;
		  }
		}
		.bg-grey
		{
			background-color:lightgrey;
		}
		h2 {
		  font-size: 30px;
		  margin-bottom: 30px;
		}
		h4 {
		  font-size: 19px;
		  margin-bottom: 30px;
		}
		.logo-small {
		  color: red;
		  font-size: 50px;
		}
		.thumbnail {
		  padding: 0 0 15px 0;
		  border: none;
		  border-radius: 0;
		}

		.thumbnail img {
		  width: 100%;
		  height: 100%;
		  margin-bottom: 10px;
		}
				.carousel-control.right, .carousel-control.left {
		  background-image: none;
		  color:red;
		}

		.carousel-indicators li {
		  border-color:red;
		}

		.carousel-indicators li.active {
		  background-color:red;
		}

		.item h4 {
		  font-size: 19px;
		  font-style: italic;
		  margin: 70px 0;
		}

		.item span {
		  font-style: normal;
		}
		p
		{
			font-size:20px;
			
		}
	  </style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">pFone.in</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#about">About</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#pricing">Pricing</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron text-center">
			<h1>pFone.in</h1>
			<p>Some Text</p>
			<form class="form-inline">
				<div class="input-group">
				  <input type="email" class="form-control" size="50" placeholder="Email Address" required>
				  <div class="input-group-btn">
					<button type="button" class="btn btn-success">Subscribe</button>
				  </div>
				</div>
			</form>
		</div>
		<div class="container-fluid" id="about">
		  <div class="row">
			<div class="col-sm-8">
			  <h2>About Company Page</h2>
			  <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			  <a class="btn btn-primary" href="#contact" role="button">Contact Us</a>
			</div>
			<div class="col-sm-4 text-center">
			  <span class="glyphicon glyphicon-signal logo"></span>
			</div>
		  </div>
		</div>

		<div class="container-fluid bg-grey">
		  <div class="row">
			<div class="col-sm-4 text-center">
			  <span class="glyphicon glyphicon-globe logo"></span>
			</div>
			<div class="col-sm-8">
			  <h2>Our Values</h2>
			  <h4><strong>MISSION:</strong> Our mission lorem ipsum ullamco laboris nisi ut aliquip ex ea commodo 
			  consequat. Duis aute irure dolor in reprehenderit in voluptate
			  velit esse cillum </h4>
			  <p><strong>VISION:</strong> Lorem ipsum dolor sit amet, consectetur
			  adipiscing elit, sed do eiusmod tempor incididunt ut labore
			  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
			  exercitation dolore eu fugiat nulla pariatur. Excepteur sint 
			  occaecat cupidatat non proident, sunt in culpa qui officia</p>
			</div>
		  </div>
		</div>
		<div class="container-fluid text-center" id="services">
			<h2>Services</h2>
			<h3>What We Provides Services</h3>
			<br>
			<div class="row">
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-off logo-small"></span>
					<h2>Text </h2>
					<p>Some Text</p>
				</div>
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-heart logo-small"></span>
					<h2>Text 2</h2>
					<p>Some Text 2</p>
				</div>
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-lock logo-small"></span>
					<h2>Text </h2>
					<p>Some Text</p>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-leaf logo-small"></span>
					<h2>Text </h2>
					<p>Some Text</p>
				</div>
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-certificate logo-small"></span>
					<h2>Text 2</h2>
					<p>Some Text 2</p>
				</div>
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-wrench logo-small"></span>
					<h2>Text </h2>
					<p>Some Text</p>
				</div>
			</div>
		</div>
		<div class="container-fluid text-center bg-grey" id="portfolio">
			<h2>Portfolio</h2>
			<h4>What We Have Done</h4>
			<div class="row text-center">
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1624555130581-1d9cca783bc0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8dXJsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Paris">
						<p><strong>Paris</strong></p>
						<p>Yes, we built Paris</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1624555130581-1d9cca783bc0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8dXJsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Paris">
						<p><strong>City</strong></p>
						<p>Yes, we built Paris</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="https://images.unsplash.com/photo-1624555130581-1d9cca783bc0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8dXJsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Paris">
						<p><strong>Text</strong></p>
						<p>Yes, we built Paris</p>
					</div>
				</div>
			</div>
			<h2> Customer Reviews</h2>
			<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			  <li data-target="#myCarousel" data-slide-to="4"></li>
			  <li data-target="#myCarousel" data-slide-to="5"></li>
			  <li data-target="#myCarousel" data-slide-to="6"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
			  </div>
			  <div class="item">
				<h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
			  </div>
			  <div class="item">
				<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
			  </div>
			  <div class="item">
				<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
			  </div>
			  <div class="item">
				<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
			  </div>
			  <div class="item">
				<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
			  </div>
			  <div class="item">
				<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
			  </div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="container-fluid" id="pricing">
			<div class="text-center">
				<h2>Pricing</h2>
				<h4>Select Your Hosting Plan</h4>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="panel panel-success text-center">
						<div class="panel-heading">
							<h2>Basic</h2>
						</div>
						<div class="panel-body">
							<p><strong>1</strong> Site</p>
							<p><strong>1</strong> Subdomain</p>
							<p><strong>1</strong> Email</p>
							<p><strong>Free</strong> Cpanel</p>
							<p><strong>Free</strong> SSL</p>
							<p><strong>E-mail</strong> Support</p>
						</div>
						<div class="panel-footer">
							<h2>₹99 <small>Per Month<small></h2>
							<a class="btn btn-primary" href="https://pfone.in/shop-full-width?v=f9f0a42f293e" role="button">Add To Cart</a>							
						</div>
					</div>
				</div>
				<div class="col-sm-3"> 
					<div class="panel panel-success text-center">
						<div class="panel-heading">
							<h2>Normal</h2>
						</div>
						<div class="panel-body">
							<p><strong>3</strong> Site</p>
							<p><strong>5</strong> Subdomain</p>
							<p><strong>5</strong> Email</p>
							<p><strong>Free</strong> Cpanel</p>
							<p><strong>Free</strong> SSL</p>
							<p><strong>E-mail/Call</strong> Support</p>
						</div>
						<div class="panel-footer">
							<h2>₹299 <small>Per Month<small></h2> 
							<a class="btn btn-primary" href="https://pfone.in/shop-full-width?v=f9f0a42f293e" role="button">Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="col-sm-3"> 
					<div class="panel panel-danger text-center">
						<div class="panel-heading">
							<h2>Popular</h2>
						</div>
						<div class="panel-body">
							<p><strong>10</strong> Site</p>
							<p><strong>100</strong> Subdomain</p>
							<p><strong>100</strong> Email</p>
							<p><strong>Free</strong> Cpanel</p>
							<p><strong>Free</strong> SSL</p>
							<p><strong>And Many More</strong> Support</p>
						</div>
						<div class="panel-footer">
							<h2>₹599 <small>Per Month<small></h2> 
							<a class="btn btn-primary" href="https://pfone.in/shop-full-width?v=f9f0a42f293e" role="button">Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="col-sm-3"> 
					<div class="panel panel-danger text-center">
						<div class="panel-heading">
							<h2>Popular</h2>
						</div>
						<div class="panel-body">
							<p><strong>∞</strong> Site</p>
							<p><strong>∞</strong> Subdomain</p>
							<p><strong>∞</strong> Email</p>
							<p><strong>Free</strong> Cpanel</p>
							<p><strong>Free</strong> SSL</p>
							<p><strong>And Many More</strong> Support</p>
						</div>
						<div class="panel-footer">
							<h2>₹1999 <small>Per Month<small></h2> 
							<a class="btn btn-primary" href="https://pfone.in/product/short-sleeve-t-shirt?v=f9f0a42f293e" role="button">Add To Cart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-grey" id="contact">
		<h2 class="text-center">Contact Us</h2>
			<div class="row">
				<div class="col-sm-5">
				  <p>Contact us and we'll get back to you within 24 hours.</p>
				  <p><span class="glyphicon glyphicon-map-marker"></span> India</p>
				  <p><span class="glyphicon glyphicon-phone"></span> +91 7508049205</p>
				  <p><span class="glyphicon glyphicon-envelope"></span> contact@sanjaykm.pfone.in</p>
				</div>
				<div class="col-sm-7">
			  <div class="row">
				<div class="col-sm-6 form-group">
				  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
				</div>
				<div class="col-sm-6 form-group">
				  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				</div>
			  </div>
			  <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
			  <div class="row">
				<div class="col-sm-12 form-group">
				  <button class="btn btn-default pull-right" type="submit">Send</button>
				</div>
			  </div>
			</div>
			</div>
			<br>
			<img src="https://www.w3schools.com/bootstrap/map.jpg" style="width:100%">
		</div>
		<footer class="container-fluid text-center">
		  <p>Theme Made By &copy <a href="https://pfone.in" title="Visit w3schools">pFone.in</a></p>
		</footer>
	</body>
</html>