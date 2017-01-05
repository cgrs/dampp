<?php
echo '<!DOCTYPE html>
<html>
<head>
<title>Apache + PHP (with MySQL extensions)</title>
<style>pre{background:#ddd;width:300px;padding:5px;border-radius:2px;box-shadow:inset 2px 2px 1px rgba(0,0,0,0.1);}</style>
</head>
<body>
';

try {
	$mysql = new PDO('mysql:host=mysql;dbname=mysql', 'root', '');
	echo "<p>MySQL works!</p>\n<p> Output from users table:</p>\n<pre>\n";
	foreach ($mysql->query('SELECT user,host from user') as $fila) {
		print_r($fila);
	}
	echo "</pre>\n";
} catch (PDOException $e) {
	print "<code>Error: " .$e->getMessage()."</code>\n";
	echo '</body>
</html>';
	die();
}
echo '</body>
</html>';
?>