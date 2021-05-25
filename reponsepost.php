<!DOCTYPE html>
<html lang="fr"> 
	<head> 
		<meta charset="utf-8"> 
		<title>PHP</title> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
	</head> 
	<body> 
		<div class="container"> 
			<h1>Bonjour, 
				<?php 
				echo $_POST['nom']; 
				?>					
			</h1> 
			<h2>Vous semblez avoir <?php echo $_POST['age']; ?> ans</h2> 
			<?php $n = $_POST['nom']; 
				$a = $_POST['age']; 
			?> 
			Votre nom est stocké dans la variable $n 
			dont le type est <?php echo gettype($n) 
			?>
			Votre âge est stocké dans la variable <b>$a</b> 
			<br/> dont le type est <i><?php echo gettype($a); ?></i> 
			<br/> On peut la transformer en <i>integer</i> en faisant : 
			<?php settype($a,'integer'); ?> 
			<br/> 
			Type de $a :<?php echo gettype($a); ?>
		</div> 
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
	</body>
</html> 