<?php
$file = "../text.txt";
$text = file_get_contents($file);
$lines = explode("\n", $text);
foreach ($lines as $newline) {
	echo '<b>'.$newline .'<br>';
}
?>