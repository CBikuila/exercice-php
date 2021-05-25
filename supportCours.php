<!DOCTYPE html> 
<html lang="fr"> 
<head> 
	<meta charset="utf-8"> 
	<title>PHP</title> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
</head> 
<body> 
	<div class="container"> 
		<form action="reponsepost.php" method="POST">
			 <div class="form-group"> 
			 	<label for="exampleNom1">Nom</label> 
			 	<input type="text" class="form-control" id="exampleNom1" name="nom" placeholder="Saisissez votre nom">
		 	 </div> 
		 	 <div class="form-group"> 
		 	 	<label for="exampleAge1">Age</label>
		 	    <input type="text" class="form-control" id="exampleAge1" name="age" placeholder="Saisissez votre age">
	 	     </div>
	 	     <button type="submit" class="btn btn-primary">Submit</button>
 	    </form> 
 	</div> 
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
 </body>
</html>