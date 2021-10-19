<!DOCTYPE html>
<html>
<head>
	<title>Ajout employé</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<h2>Ajout d'un nouvel employé</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Prénom</label>
			    <div class="col-sm-10">
			      <input type="text" name="prenom"  class="form-control" id="input1" placeholder="Prénom*" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nom</label>
			    <div class="col-sm-10">
			      <input type="text" name="nom"  class="form-control" id="input1" placeholder="Nom*" />
			    </div>
			</div>

			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Sexe</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="sexe" id="optionsRadios1" value="homme" checked> m
			  </label>
			  	  <label>
			    <input type="radio" name="sexe" id="optionsRadios1" value="femme"> f
			  </label>
			</div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Service</label>
			    <div class="col-sm-10">
			      <input type="text" name="service"  class="form-control" id="input1" placeholder="Service*" />
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Date d'embauche</label>
			    <div class="col-sm-10">
			      <input type="text" name="date_embauche"  class="form-control" id="input1" placeholder="aaaa-mm-jj" />
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Salaire</label>
			    <div class="col-sm-10">
			      <input type="text" name="salaire"  class="form-control" id="input1" placeholder="Salaire*" />
			    </div>
			</div>

			
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Ajouter" />
		</form>
	</div>
</div>
</body>
</html>