<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url('assets/'); ?>" target="_blank">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>ARIES - Free Bootstrap Theme by WowThemes.net</title>
<!-- Bootstrap Core CSS -->
<link href="build/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="build/css/theme.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		<i class="fa fa-bars"></i>
		</button>
		<a class="navbar-brand page-scroll" href="index.html">
		MakanBanyak.com</a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<?php $this->load->view('user/user_navigation') ?>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Intro Header -->
<header style="background-image:url('<?php echo base_url("assets/")?>images/frontend/home_background.jpg');" class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="brand-heading">Refrensi Resep dan Tempat Makan Enak</h1>
				<p class="intro-text">
					Makan Gak Makan Yang Penting Kumpul
				</p>
				<a href="#about" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</header>
<!-- About Section -->
<section id="about">
<div class="container content-section text-center">
	<div class="row">
		<h2>Latest Post</h2>
		<div class="col-lg-12">
			<?php foreach($latest_post->result() as $rows ) { ?>
					<h3><?php echo $rows->title; ?></h3>
					<div class="col-md-6 latest_post">
						<p>
							<?php echo substr($rows->post,0,250); ?>
							...
						</p>
						<p>
							<strong>Penulis : <?php echo $rows->author; ?></strong><br/>
							<a href="#" class="btnghost"><i class="fa fa-download"></i> Read More</a>
					</div>
					<div class="col-md-6">
							<iframe width="560" height="315" src="<?php echo $rows->video; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
			<?php } ?>
			</p>
		</div>
	</div>
</div>
</section>
<section id="portfolio">

<div class="gallery">
	<ul>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=1" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=2" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=3" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a class="image" href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=4" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=5" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=6" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=7" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=8" alt="">
		</a>
		</li>
				<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=10" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=11" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=12" alt="">
		</a>
		</li>
		<li class="col-md-3">
		<a href="portfolio-item.html">
		<img src="http://unsplash.it/680/380?random=13" alt="">
		</a>
		</li>
	</ul>
</div>
</section>
<!-- Contact Section -->
<section id="contact">
<div class="container content-section text-center">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h2>Author's Message</h2>
			<p>
				 If you like "Aries" template, we'd love to hear from you, whether it be feedback, thanks, new template ideas or even just to say hello, we welcome it all!
			</p>
			<p>
				<i><a href="mailto:wowthemesnet@gmail.com" style="border-bottom:1px dashed #ccc;">wowthemesnet@gmail.com</a></i>
			</p>
			<ul class="list-inline banner-social-buttons">
				<li>
				<a href="https://twitter.com/wowthemesnet" class="btn btnghost btn-lg"><i class="fa fa-twitter fa-fw"></i><span class="network-name">Twitter</span></a>
				</li>
				<li>
				<a href="https://www.facebook.com/pages/wowthemesnet/562560840468823" class="btn btnghost btn-lg"><i class="fa fa-facebook fa-fw"></i><span class="network-name">Facebook</span></a>
				</li>
				<li>
				<a href="https://plus.google.com/u/0/b/110916582192388695332/110916582192388695332/posts" class="btn btnghost btn-lg"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">Google+</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>
</section>
<!-- Footer -->
<footer>
<div class="container text-center">
	<p class="credits">
		Copyright &copy; Your Website 2015<br/>
		"Aries" Template by WowThemes.net
	</p>
</div>
</footer>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>
