<?php
	function render_all($res){
		while($row=$res->fetch()){
		print_r($row);
		echo "<br/>";
		}
	}
?>