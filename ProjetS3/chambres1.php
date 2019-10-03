<!DOCTYPE html>

<html>
  	<head>
    	<title>Location chambre d'hôtes</title>
   		<meta charset="utf-8">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	    <link rel="stylesheet" type="text/css" href="./styles.css">
	</head>

  	<body>
	    <div class="container" id="wrapper">

	      	<!-- Menu -->
	        <div class="row">
	        	<div class="col s12">
	            	<div class="card">
		            	<div class="card-content">
			                <div> <a class="menu" href="./index.php"> Accueil </a> </div>
			                <div> <a class="menu" href="./Admin.html"> Admin </a> </div>
			                <div> <a class="menu" href="./chambres1.php"> Chambre </a> </div>
		            	</div>
	          		</div>
	        	</div>
	        </div>
	      
	        <!-- Caroussel -->
	        <div class="row">
		        <div class="col s12">
		          	<div class="card">
			            <div class="card-content ">
			              <div class="center">
			                <img src="images/1.jpg" alt="n1">
			              </div>
			            </div>
		          	</div>
		        </div>
	        </div>

	        <!-- Chambres -->
	        <div class="row">
			    <h2> La chambre </h2>
			    <div class="col s12">
				    <div class="card">
					    <div class="card-content">
						    <?php
								require_once "Model.php";
								require_once "Chambre.php";                
							    $desc = Chambre::getDescription();
								foreach  ($desc as $obj) {
								echo $obj->afficher();
								}
							?>
						</div>
				    </div>
			    </div>
	      	</div>

	        <div class="row">
		      	<div class="col s12 l6">
			        <div class="card">
			          	<div class="card-content">
			          	</div>
			        </div>
		     	</div>

		      	<div class="col s12 l6">
	        		<div class="card">
	          			<div class="card-content">
	          				<form method="post" action="reservation.php">
							    <legend>Réservation :</legend>
							    <p>
							      <label for="nom_id">Nom</label>
							      <input type="text" name="nom" id="nom_id" required/>
							    </p>
							    <p>
							      <label for="prenom_id">Prénom</label>
							      <input type="text" name="prenom" id="prenom_id" required/>
							    </p>
							    <p>
							      <label for="email_id">Email</label>
							      <input type="email" name="email" id="email_id" required/>
							    </p>
							    <p>
							      <label for="datedebut_id">Date début</label>
							      <input type="date" name="datedebut" id="datedebut_id" required/>
							    </p>
							    <p>
							      <label for="datefin_id">Date fin</label>
							      <input type="date" name="datefin" id="datefin_id" required/>
							    </p>
							    <p>
							      <input type="submit" value="Envoyer" />
							    </p>
							</form>
	          			</div>
	        		</div>
	      		</div>
	    	</div>
	    </div>
    </body>

  <footer>
  </footer>
</html>
