<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bootstrap 4, from LayoutIt!</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<?php
	$home = "Home";
	$profile = "Profile";
	$messages = "Messages"
	?>
	<div class="container-fluid">
		<!-- ini bagian header -->
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>
						LayoutIt! <small>Interface Builder for Bootstrap</small>
					</h1>
				</div>
			</div>
		</div>
		<!-- ini akhir header -->
		<!-- ini awal navigasi atau menu -->
		<div class="row">
			<div class="col-md-12">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="#"><?= $home ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><?= $profile ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#"><?= $messages ?></a>
					</li>
					<li class="nav-item dropdown ml-md-auto">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider">
							</div> <a class="dropdown-item" href="#">Separated link</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="carousel slide" id="carousel-103432">
					<ol class="carousel-indicators">
						<li data-slide-to="0" data-target="#carousel-103432">
						</li>
						<li data-slide-to="1" data-target="#carousel-103432">
						</li>
						<li data-slide-to="2" data-target="#carousel-103432" class="active">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item">
							<img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg">
							<div class="carousel-caption">
								<h4>
									First Thumbnail label
								</h4>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg">
							<div class="carousel-caption">
								<h4>
									Second Thumbnail label
								</h4>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
						<div class="carousel-item active">
							<img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg">
							<div class="carousel-caption">
								<h4>
									Third Thumbnail label
								</h4>
								<p>
									Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
								</p>
							</div>
						</div>
					</div> <a class="carousel-control-prev" href="#carousel-103432" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-103432" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron">
					<h2>
						Hello, world!
					</h2>
					<p>
						This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
					</p>
					<p>
						<a class="btn btn-primary btn-large" href="#">Learn more</a>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="jumbotron">
					<h2>
						Hello, world!
					</h2>
					<p>
						This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
					</p>
					<p>
						<a class="btn btn-primary btn-large" href="#">Learn more</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
			</div>
			<div class="col-md-4">
				<ol>
					<li class="list-item">
						Lorem ipsum dolor sit amet
					</li>
					<li class="list-item">
						Consectetur adipiscing elit
					</li>
					<li class="list-item">
						Integer molestie lorem at massa
					</li>
					<li class="list-item">
						Facilisis in pretium nisl aliquet
					</li>
					<li class="list-item">
						Nulla volutpat aliquam velit
					</li>
					<li class="list-item">
						Faucibus porta lacus fringilla vel
					</li>
					<li class="list-item">
						Aenean sit amet erat nunc
					</li>
					<li class="list-item">
						Eget porttitor lorem
					</li>
				</ol>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>