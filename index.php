<?php 

require 'database.php';

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

if ( isset($_GET['page']) ) {
	$page = $_GET['page'];
} else{
	$page = "gallery";
}
require $page . '.php';

require 'footer.php';

?>

<!-- include and require - include will repeat the action that you are trying to complete. Require is just that "required" the page will fail if it doesn't work . -->