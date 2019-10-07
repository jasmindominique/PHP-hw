<?php 

	$site_title = "My First PHP Image Gallery";

	$gallery = [
		[
			'src' => 'https://picsum.photos/seed/1/800/600',
			'name' => 'Stuff'
		],
		[
			'src' => 'https://picsum.photos/seed/2/800/600',
			'name' => 'Things'
		],
		[
			'src' => 'https://picsum.photos/seed/3/800/600',
			'name' => 'Picture'
		],
		[
			'src' => 'https://picsum.photos/seed/4/800/600',
			'name' => 'Whatever'
		],
		[
			'src' => 'https://picsum.photos/seed/16/800/600',
			'name' => 'Image'
		],
		[
			'src' => 'https://picsum.photos/seed/6/800/600',
			'name' => 'What'
		],
		[
			'src' => 'https://picsum.photos/seed/7/800/600',
			'name' => 'Wat'
		],
		[
			'src' => 'https://picsum.photos/seed/8/800/600',
			'name' => 'Foo'
		],
		[
			'src' => 'https://picsum.photos/seed/9/800/600',
			'name' => 'Baz'
		],
		[
			'src' => 'https://picsum.photos/seed/10/800/600',
			'name' => 'Thingies'
		],
		[
			'src' => 'https://picsum.photos/seed/11/800/600',
			'name' => 'Boom'
		],
		[
			'src' => 'https://picsum.photos/seed/14/800/600',
			'name' => 'Out of ideas'
		],
		[
			'src' => 'https://picsum.photos/seed/13/800/600',
			'name' => '???'
		],
	];
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

		<style type="text/css">
			body{
				background: #edeff8;
			}
		</style>

		<h1><?php echo $site_title;?>
			<style type="text/css">
				h1{ color: #6577C0;
					font-family: 'Poppins', sans-serif;
					font-weight: 700;
					text-align: center;
					margin-top: 5%; 
					text-decoration: underline;
				}
			</style>
		</h1>

		<br>

		<h3>Showing images <?php echo count ($gallery)?> of
			<?php echo count ($gallery) ?>
			<style type="text/css">
				h3{
					font-family: 'Poppins', sans-serif;
					font-weight: 300;
					text-align: center;
					margin:20px auto;
				}
			</style>
		</h3>

		<br>

		<ul class="gallery">
			<?php 
				foreach ($gallery as $i => $photo) { 
			?> 

			<!-- <style type="text/css">
				.gallery{
					margin-left: 20px;
					margin-right: 20px;
				}
			</style> -->

			<li>
				<style type="text/css">
				li{
					padding: 20px;
					font-family: 'Poppins', sans-serif;
					font-style: thin;
				}
				</style>
				
				<?php
					echo $i, ".";
					echo "<img src='",$photo['src']," '> ";
					echo "<h4>", $photo['name'],"</h4>";
					}
				?>  

				<style type="text/css">
				img{
					filter: grayscale(100%);
				}
				img:hover{
					filter: none;
					transition: .4s ease-out;
				}
				</style>

				<style type="text/css">
				h4{
					color: #6577C0;
					font-size: 20px;
					font-weight: 400;
					text-align: center;
					margin-top: 5px;
				}
				</style>
			</li> 
		</ul>

		<script src="dist/js/main.js"></script>

	</body>
</html>
