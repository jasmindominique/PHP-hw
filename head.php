<?php 

	$site_title = "My First PHP Image Gallery";

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $site_title;?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="dist/css/main.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,400,700&display=swap" rel="stylesheet">

	</head>
	<body>

		<nav>
			<a href="?page=gallery">Gallery</a>
			<a href="?page=about">About</a>
			<a href="?page=contact">Contact</a>
		</nav>

		<style type="text/css">
			body{
				background: #edeff8;
			}

			nav{
				font-size: 19px;
			}
		</style>