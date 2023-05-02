<?php 

namespace App;

define('DEBUG', true);

include_once("./controller/autoload.php");

use App\Components\Head;
use App\Components\Header;
use App\Components\Footer;


$head = new Head();
$header = new Header();
$footer = new Footer();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= $head->getContent(); ?>
	<title> Playit </title>
</head>
<body>
	<?= $header->getContent(); ?>

	<?= $footer->getContent(); ?>
</body>
</html>