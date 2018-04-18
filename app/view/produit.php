<!DOCTYPE html>
<html>

  <body>
	

    <div class="container">
		<div class="row">
		<!-- PREMIERE LIGNE -->
			<div class="col-sm-12 col-lg-8">
				<!-- IMAGES -->
				<div class="text-center">
					<img src="public/img/produit_newyork_0.jpeg" alt="image_newyork_0" class="img-fluid" id="img_princ">
				</div>
				<div class="row" id="miniatures">
					<!-- MINIATURES -->
					<div class="col-3">
						<img src="public/img/produit_newyork_0.jpeg" alt="image_newyork_0" class="img-fluid" id="mini_1">
					</div>
					<div class="col-3">
						<img src="public/img/produit_newyork_1.jpeg" alt="image_newyork_1" class="img-fluid" id="mini_2">
					</div>
					<div class="col-3">
						<img src="public/img/produit_newyork_2.jpeg" alt="image_newyork_2" class="img-fluid" id="mini_3">
					</div>
					<div class="col-3">
						<img src="public/img/produit_newyork_3.jpeg" alt="image_newyork_3" class="img-fluid" id="mini_4">
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-lg-4">
				<!-- TITRE, PRIX, ETC ... -->
				<h3>LEGO Architecture</h3>
				<h3><b>New York City</b></h3>
				<hr />
				<h3 id="prix">49.99€</h3>
				<div class="alert alert-success text-right">
					En stock
				</div>
				<hr />
				<p class="text-right">
					<button class="btn btn-outline-dark" id="moins">-</button>
					<button class="btn btn-secondary disabled" id="c_panier">1</button>
					<button class="btn btn-outline-dark" id="plus">+</button> <br /> <br />
					<a href="#" class="btn btn-primary btn-lg">Ajouter au panier <span class="oi oi-cart"></span></a>
				</p>
			</div>
		</div>	
		
	<br />
	<br />
    <div class="row">
		 <!-- DEUXIEME LIGNE -->
		<div class="col-sm-12 col-lg-8">
			<!-- DESCRIPTION -->
			<h3><b>Description</b></h3>
			<p class="text-justify">
				Fêtez la diversité architecturale de New York avec ce modèle détaillé en briques
				LEGO. La collection LEGO Architecture Skyline offre des modèles adaptés à
				l'exposition à la maison et au bureau, et a été développée pour toutes les
				personnes qui s'intéressent au voyage, à la création, à l'histoire et à
				l'architecture.<br /> <br />
				Chaque ensemble a une échelle adaptée pour donner une idée précise de la taille
				comparative de chaque structure, avec une représentation en couleurs réalistes.
				Cet ensemble comprend le Flatiron Building, le Chrysler Building, l'Empire State
				Building, le One World Trade Center et la Statue de la Liberté, et un écriteau
				décoratif “New York”.
			</p>
			
			<br />

			<!-- SPECIFICITES -->
			<h3><b>Spécificités</b></h3>
			<ul>
				<li>Interprétation LEGO du paysage de New York.</li>
				<li>Comprend le Flatiron Building, le Chrysler Building, l'Empire State Building, le One World Trade Center et la Statue de la Liberté.</li>
				<li>Inclut une plaque de base 4x32 avec un écriteau décoratif "New York".</li>
				<li>Recréez les plus belles villes du monde avec la collection LEGO Architecture Skyline.</li>
				<li>Mesure 26 cm de haut, 25 cm de large et 4 cm de profondeur.</li>
			</ul>

		</div>
		<div class="col-sm-12 col-lg-4">
			<!-- AVIS -->
			<h3>Avis</h3>
			<table class="table table-striped">
				<tr>
					<td>
						<p><img src="public/img/avatar.png" class="float-left" id="avatar"><b>Pierre</b>
						<br /><i>26/12/2017</i></p>
						<p>
							Ceci est un commentaire, super commentaire
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><img src="public/img/avatar.png" class="float-left" id="avatar"><b>Paul</b>
						<br /><i>26/12/2017</i></p>
						<p>
							Ceci est un autre commentaire, un peu plus long que le premier
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p><img src="public/img/avatar.png" class="float-left" id="avatar"><b>Jacques</b>
						<br /><i>26/12/2017</i></p>
						<p>
							Ceci est un dernier commentaire, super produit au fait !
						</p>
					</td>
				</tr>
			</table>
			<!-- Zone de saisie commentaire TP4 -->
			<div class="input-group">
				<div class="input-group-addon">
					<span class="oi oi-pencil"></span>
				</div>
				<input type="text" id="avis" class="form-control" placeholder="Rédiger un avis" />
			</div>
		</div>
     </div>
    </div>
  </body>
</html>
