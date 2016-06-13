<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantillas/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantillas/css/ie8.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantillas/css/ie8.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantillas/css/main.css">
	<!--<script type="text/javascript" href="<?= base_url() ?>plantillas/js/jquery.dropotron.min.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/jquery.min.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/jquery.onvisible.min.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/jquery.scrolly.min.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/main.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/skel.min.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/util.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/ie/html5shiv.js"></script>
	<script type="text/javascript" href="<?= base_url() ?>plantillas/js/ie/respond.min.js"></script>
	-->
		<title>Puebla Mágica</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Puebla Mágica</h1>
						<nav>
							<ul>
								<li><a href="/PueblaMagica/Pahuatlan/Pahuatlan.html"><img src="<?= base_url()?>imagenes/Btn1.png" width="150%" ></a></li>
								
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<br>
					<br>
					<!--<footer id="footer">
						<span class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</span>
					</footer>-->

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>