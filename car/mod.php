<?php
	if(isset($_POST['id'])){
		$id = $_POST['id'];//mysqli_real_escape_string($con, $_POST['id']);
		echo "<h1 style='color:#fff'>".$_POST['id']."</h1>";
	}else{
		echo "cka";
	}
?>