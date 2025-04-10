<!doctype html>
<?php 
$month = ucfirst(date("F"));
$monthNumber = date("n");
$birthstone = ["Garnet", "Amethyst", "Aquamarine", "Diamond", "Emerald", "Pearl", "Ruby", "Peridot", "Sapphire", "Opal", "Topaz", "Turquoise"];

?>
<html>
<head>
<meta charset="utf-8">
<title>Lovely Jewelry | Yonay Valdes, 2025</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
<style>
	body {
		margin: 0;
		padding: 0;
		text-align: center;
		font-family: "Playfair", serif;
		--accent_color: #ff90b3;
		background-color: white;
	}
	wrapper {
		display: block;
		width: 90%;
		margin: 0 auto;
		background-color: white;
	}
	h1 {
		font-family: "Playfair Display", serif;
		color: var(--accent_color);
		font-size: 2em;
		letter-spacing: 0.5em;
		font-weight: 800;
	}
	h2 {
		margin: 0;
		font-size: 1.5em;
		font-weight: 800;
	}
	h3 {
		margin: 0;
		font-size: 1.5em;
		font-weight: 400;
	}
	ul {
		display: flex;
		justify-content: space-evenly;
		padding: 0 0 2vh 0;
		border-bottom: solid black 1px;
		margin: 0;
	}
	li {
		display: inline-block;
		text-decoration: none;
		font-size: 1.2em;
		font-weight: 600;
		text-decoration: none;
	}
	li:hover {
		color: var(--accent_color);
		text-decoration: underline solid var(--accent_color);
	}
	main {
		display: flex;
		justify-content: space-between;
		margin: 1.5em 0;
	}
	main div:first-of-type {
		flex-grow: 2;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-content: center;
		gap: 1em;
	}
	.button {
		color: var(--accent_color);
		margin: 0;
	}
	.button:hover {
		color: black;
		text-decoration: underline solid black;
	}
	.birthstone {
		display: inline-block;
		width: 50%;
		aspect-ratio: 16 / 9;
		background-color: var(--accent_color);
	}
	footer {
		border-top: solid black 1px;
		width: 80%;
		margin: 3em auto;
	}
</style>
</head>

<body>
<wrapper>
	<header>
		<h1>Lovely</h1>
		<nav>
			<ul>
				<li>Rings</li>
				<li>Necklaces</li>
				<li>Bracelets</li>
				<li>Earings</li>
			</ul>
		</nav>
	</header>
	<main>
		<div>
			<h2><?Php echo $month ?> is the month of <span style="color: var(--accent_color);"> <?php echo $birthstone[$monthNumber - 1] ?></span>.</h2>
			<h3>Be happy or something.</h3>
			<p class="button">See more</p>
		</div>
		
		<img class="birthstone" src="images/<?php echo $monthNumber ?>.jpeg">
	</main>
	<footer>
		<p>© 2025, Yonay Valdes. This is a fictitious web page created solely for the purpose of education and training. All products and people associated with this web page are also fictitious. Any resemblance to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious and should not be construed to be representative of actual products on the market in a similar product category.</p>
	</footer>
</wrapper>
</body>
</html>
