<?php
	require 'model.php';
	require 'view.php';

	echo "Bonjour";

	echo "<br/>";

	render_all(getUserFormation());
	echo "<br/>";
	echo "<br/>";

	render_all(getUserByName("dupont"));
	echo "<br/>";
	echo "<br/>";
?>