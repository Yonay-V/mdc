<?php
$startYear = 2023;
$thisYear = date('Y');
if ($thisYear > $startYear){
   $dates = "$startYear – $thisYear";
} else {
   $dates = $startYear;
}
?>
<?php
$servername = "localhost";
$username = "flowershopadmin";
$password = "flowershoppassword";

try {
  $conn = new PDO("mysql:host=$servername;flower_shop=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Flora's Flowers | Yonay Valdes, 2025</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<style type="text/css">
<!--
	body {
		margin:0;
		padding:0;
		background-color:#ccc;
		font-family: "Playfair Display", serif;
		--background-color: #A4AF69;
		--primary-color: #FFE0B5;
		--secondary-color: #F9CFF2;
		--accent-color: #D35269;
	}
	wrapper {
		width: 100%;
		padding: 0;
		margin: 0 auto;
		background: var(--background-color);
		display: block;
		box-sizing: border-box;
		min-width: 400px;
	}
	header {
		background-color: var(--primary-color);
		padding: 4em;
	}
	h1 {
		font-size: 4em;
		color: var(--accent-color);
		text-shadow: 2px 2px 1px var(--secondary-color);
		text-align: center;
		margin: 0;
		padding: 0;
	}
	h2 {
		font-size: 3em;
		color: var(--accent-color);
		text-align: center;
		margin: 1em 0 0 0;
		padding: 0;
	}
	h3 {
		font-size: 1.5em;
		color: var(--accent-color);
		padding: 0;
		background-color: var(--secondary-color);
	}
	h4:hover {
		color: var(--accent-color);
	}
	ul {
		display: flex;
		flex-direction: column;
		margin: 2em auto 0;
		width: 60%;
		justify-content: space-between;
	}
	li {
		text-decoration: none;
		display: inline;
		font-size: 1.5em;
		transition: all 300ms;
	}
	li:hover{
		color: var(--secondary-color);
		text-decoration: underline var(--secondary-color);
		text-shadow: var(--accent-color) 2px 2px 1px;
	}
	main {
		display: flex;
		flex-wrap: wrap;
		gap: 2em;
		padding: 4em;
	}
	items {
		width: 100%;
		display:inline-block;
		flex-grow: 1;
		border-bottom: solid 2px var(--accent-color);
	}
	items img {
		width: 100%;
		box-shadow: 0 0 5px 0px #111;
		transition: all 400ms;
	}
	items img:hover
	{
		transform: scale(0.97);
	}
	footer {
		padding: 2em 4em;
	}
	@media (min-width: 50em) {
		h1 {
			font-size: 3em;
		}
		ul {
			flex-direction: row;
		}
		items {
			width: 40%;
		}
	}
	@media (min-width: 65em) {
		h1 {
			font-size: 3em;
		}
		ul {
			flex-direction: row;
		}
		items {
			width: 30%;
		}
	}	
	@media (min-width: 80em) {
		h1 {
			font-size: 4em;
		}
		ul {
			flex-direction: row;
		}
		items {
			width: 20%;
		}
	}
	@media (min-width: 90em) {
		h1 {
			font-size: 5em;
		}
		ul {
			flex-direction: row;
		}
		items {
			width: 18%;
		}
	}
</style>
</head>

<body>

<wrapper>
	<header>
		<h1>Flora's Flowers</h1>
		<nav>
			<ul>
				<li>Flowers</li>
				<li>Care Tools</li>
				<li>Contact</li>
				<li>Cart</li>
			</ul>
		</nav>
	</header>
    <h2>Featured Items</h2>
	<?php
echo "<main>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<div>" . parent::current(). "</div>";
  }

  function beginChildren() {
    echo "<items>";
  }

  function endChildren() {
    echo "</items>" . "\n";
  }
}

$servername = "localhost";
$username = "flowershopadmin";
$password = "flowershoppassword";
$dbname = "flower_shop";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT image, title, price, description FROM arrangements");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</main>";
?>
	<footer>
		<p>© <?php echo $dates; ?>, Yonay Valdes. This is a fictitious web page created by Yonay Valdes Here solely for the purpose of education and training. All products and people associated with this web page are also fictitious. Any resemblance to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious and should not be construed to be representative of actual products on the market in a similar product category.</p>
	</footer>

</wrapper>

</body>
</html>
