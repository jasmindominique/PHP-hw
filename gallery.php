<?php
	
	//ask the database to run this quers
	$query = mysqli_query($db, "SELECT * FROM  candy"); //Get all the candy data.


	//mysqli_fetch_array means "get me one row of candy & format it as an array". 
	//The while loop makes it keep getting rows of candy until it runs out of rows, because mysqli_fetch_array returns null when no rows are left
	// while($row = mysqli_fetch_array($query)) { 
	// 	echo "the candy called " . $row['name'] . "is $ " . $row['price'] . "<br>";
	// }

	$all_candy = mysqli_fetch_all($query, MYSQLI_ASSOC);
	foreach ($all_candy as $i => $candy) {
	 	echo "The candy called " . $candy['name'] . "is $ " . $candy['price'] . "<br>";
	}

	$gallery_query = mysqli_query($db, "SELECT * FROM  Gallery"); //getting images from the database
	$gallery = mysqli_fetch_all($gallery_query, MYSQLI_ASSOC);


// $gallery = [
// 		[
// 			'src' => 'https://picsum.photos/seed/1/800/600',
// 			'name' => 'Stuff'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/2/800/600',
// 			'name' => 'Things'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/3/800/600',
// 			'name' => 'Picture'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/4/800/600',
// 			'name' => 'Whatever'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/16/800/600',
// 			'name' => 'Image'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/6/800/600',
// 			'name' => 'What'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/7/800/600',
// 			'name' => 'Wat'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/8/800/600',
// 			'name' => 'Foo'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/9/800/600',
// 			'name' => 'Baz'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/10/800/600',
// 			'name' => 'Thingies'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/11/800/600',
// 			'name' => 'Boom'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/14/800/600',
// 			'name' => 'Out of ideas'
// 		],
// 		[
// 			'src' => 'https://picsum.photos/seed/13/800/600',
// 			'name' => '???'
// 		],
// 	];
?>
		<h1>
		<?php echo $site_title;?>
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

		<?php //if there is a photo-index in the url then display this.
			if (isset($_GET['photo-index']) ) { ?>

			
			<div class="feature">
				<img src="<?php echo $gallery[$_GET['photo-index']]['src'];?>">
				<!-- $gallery[$_GET['photo-index']]['src']
				The src of the [$_GET['photo-index']]-th item in $gallery -->

				<h2><?php echo $gallery[$_GET['photo-index']]['name'];?></h2>
			</div>

		<?php } else{ ?>
			<p>Click and image to enlarge</p>
		<?php } ?>

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

			<a href="?photo-index=<?php echo $i;?>"> <!-- this is going to show the ikg number at the bottom of the pg -->

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
			</a>
			 
		</ul>
