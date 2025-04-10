<?php
$startYear = 2023;
$thisYear = date('Y');
if ($thisYear > $startYear){
   $dates = "$startYear – $thisYear";
} else {
   $dates = $startYear;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Flora's Flowers pt.2 | Yonay Valdes, 2025</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>

<body>
<wrapper>
<?php include "header.php"; ?>
<main>
	<?php
$mysqli = new mysqli("localhost","flowershopadmin","flowershoppassword","flower_shop");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM arrangements WHERE (id=1)";

if ($result = $mysqli -> query($sql)) {
  while ($obj = $result -> fetch_object()) {
    printf("<div class='product-img'>%s</div> <div class='product-info'>%s %s <button class='buy-button'>Add to Cart</button></div> <div class='desc'>%s</div>\n",$obj->image,$obj->title,$obj->price,$obj->description);
  }
  $result -> free_result();
}

$mysqli -> close();
?>
</main>
<?php include "footer.php"; ?>
</wrapper>
</body>
</html>