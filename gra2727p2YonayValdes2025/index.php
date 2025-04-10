<!doctype html>
<?php 
date_default_timezone_set('America/New_York');
$hour = date("H");
$day = date("l");
$time = date("H:i");
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<title>Untitled Document</title>
<?php if ($hour >= 6 && $hour <= 12) { ?>
	<link href="mornings.css" rel="stylesheet" type="text/css">
<?php }  elseif ($hour >= 12 && $hour <= 18) { ?>
	<link href="afternoons.css" rel="stylesheet" type="text/css">
<?php }  else { ?>
	<link href="nights.css" rel="stylesheet" type="text/css">
<?php } ?>
<style>
	body{
		margin:0;
		padding:0;
		background-color:#fff;
		font-family: "Roboto Mono", serif;
		--color_one: #CCFAFF;
		--color_two: #FFF9CC;
		--color_three: #FFCBE7;
		
     }
	wrapper{
		display:block;
		margin:0 auto;
		padding: 2.5%;
		box-sizing: border-box;
     }
	h1 {
		font-family: "Jersey 10", serif;
		font-size: 4em;
		margin: 0;
		text-align: center;
		position: sticky;
		top: 2vh;
		z-index: 2;	
	}
	h2 {
		font-size: 2em;
		margin: 0;
		text-align: center;
		
	}
	ul {
		display: flex;
		justify-content: space-between;
		padding: 0;
	}
	li {
		display: inline-block;
		text-decoration: none;
		font-size: 1.2em;
		font-weight: 600;
	}
	li:hover {
		color: #0D226D;
		text-decoration: underline wavy #0D226D;
	}
	main img {
		width: 100%;
		border-radius: 10px;
	}
	.banner {
		position: relative;
		vertical-align: top;
		margin: 5vh 0;
	}
	.descBox {
		width: 25%;
		padding: 1.5vw;
		position: absolute;
		left: 70%;
		top: 39%;
		font-size: 1.5vw;
		font-weight: 600;
		border-radius: 5px;
	}
	p {
		text-shadow: green -5 0;
		margin: 0;
	}
</style>
</head>

<body>
<wrapper>
	
	<header>
		
	</header>
	<h1><span style="text-shadow: green 5 5">Block Game</span></h1>
	<main>
		<h2>Hello! Today is <?php echo $day; ?>. It is <?php echo $time; ?>.</h2>
		<div class="banner">
			<?php if ($hour >5 && $hour <12) { ?>
			<img src="images/cherry_blossoms.png">
			<?php }  elseif ($hour >11 && $hour <19) { ?>
				<img src="images/island.png">
			<?php }  else { ?>
				<img src="images/moonlit_cave.png">
			<?php } ?>

			<div class="descBox"><p class="description">Block Game is a versatile sandbox game that many love. It can be played by yourself or with friends. It can be a survival game, a creative game, or a competitive game. You can build a house, or fight a war, or explore an endless world. Truly the limit is your imagination. Play the game that is loved by millions.
			</p></div>
		</div>
		
		
	</main>
	<footer>
		<p>© 2025, Yonay Valdes<br>
		This is a fictitious web page created solely for the purpose of education and training. All products and people associated with this web page are also fictitious. Any resemblance to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious and should not be construed to be representative of actual products on the market in a similar product category.</p>
	</footer>
</wrapper>
</body>
</html>