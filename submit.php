<?php	
function in_range($val, $min, $max) {
	return ($val >= $min && $val <= $max);
}

$colors = array("Limestone", "Haematite", "Limonite", "Manganite", "Lapis", "Malachite");

$x = $_POST["x"];
$y = $_POST["y"];
$color = $_POST["color"];
$name = $_POST["name"];
$flip = $_POST["flip"];

if (!empty($flip)) {
	$flip="--flip";
}

if (empty($name)) {
	$name="Anonymous";
}

if (!in_range($x, 0, 400) || !in_range($y, 0, 240) || !in_array($color, $colors)) {
	echo "Invalid form data";
	header('Location: .');
} else {
	echo exec("bash -c 'cd /home/shivrm/public_html/handprints; ./add_handprint $x $y $color \"$name\" $flip'");
	echo "Handprint added";
	header("Location: ../");
}
?>
