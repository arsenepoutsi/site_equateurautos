<!--Section-->
<section>
	<div class="banner-2 cover-image sptb-2 sptb-tab bg-background2" data-image-src="assets/images/banner1.jpg">
		<div class="header-text mb-0">
			<div class="container">
				<div class="text-center text-white ">
					<h1 class="mb-1">La location de voitures au Gabon est notre spécialité.</h1>
					<p>Envie de voyager ? un déplacement professionnel ? une voiture de mariage ? Equateur Autos vous propose une gamme variée de véhicules de location, pour tout type de besoin.</p>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto" style="text-align: center;">
						<div class="item-search-tabs">
						<a href="index.php?page=booking">
							<button type="button" class="btn btn-danger btn-lg" style="background-color: #f8d7da; color: #721c24;"> 
								<i class="fa fa-calendar"></i>&nbsp;&nbsp; R&Eacute;SERVATION
							</button>
						</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /header-text -->
	</div>
</section>
<!--Section-->

<!--Section-->
<section class="categories">
	<div class="container">
		<div id="small-categories" class="owl-carousel owl-carousel-icons2">
			<?php 
		        $res = $cockpit->module('collections')->find("marques", [
		            "filter"=> [],
		            "sort" => ['_o'=> 1]
		          ]);
		     ?>
		     <?php foreach ($res as $marques): ?> 
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<div class="cat-item text-center">
							<a href="index.php?page=cars"></a>
							<div class="cat-img1">
								<img src=".<?= $marques['logo']['path']; ?>" alt="img" class="mx-auto">
							</div>
							<div class="cat-desc">
								<h5 class="mb-1"><?= $marques["nom"]; ?></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!--Section-->

<!--Section-->
<section class="sptb bg-white">
	<div class="container">
		<div class="section-title center-block text-center">
			<h2>Nos offres du moment</h2>
			<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
		</div>
		<div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
			<?php 
		        $res = $cockpit->module('collections')->find("offres", [
		            "filter"=> [],
		            "sort" => ['_o'=> 1],
		            "populate" =>1
		          ]);
		     ?>
		     <?php foreach ($res as $offres): ?>
			<div class="item">
				<div class="card mb-0 sold-out">
					<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Offre</span></div>
					<div class="item-card2-img">
						<img src=".<?= $offres['photo']['path']; ?>" alt="img" class="cover-image">
						<div class="item-tag-overlaytext">
							<span class="text-white bg-danger"><?= $offres["prix"]; ?></span>
						</div>
					</div>
					<div class="card-body pb-0">
						<div class="item-card2">
							<div class="item-card2-desc">
								<div class="item-card2-text">
									<a href="index.php?page=booking" class="text-dark"><h4 class="mb-0"><?= $offres["marque"]["nom"]; ?> <?= $offres["modele"]; ?></h4></a>
								</div>
								<div class="d-flex pb-0 pt-0">
									<a href="">
										<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-asterisk text-primary mr-2"></i>Moteur</p>
									</a>
									<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold"><?= $offres["moteur"]; ?></span>
								</div>
								<div class="d-flex pb-0 pt-0">
									<a href="">
										<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-asterisk text-primary mr-2"></i>Carburant</p>
									</a>
									<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold"><?= $offres["carburant"]; ?></span>
								</div>
								<div class="d-flex pb-0 pt-0">
									<a href="">
										<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-asterisk text-primary mr-2"></i>Système</p>
									</a>
									<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold"><?= $offres["systeme"]; ?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer" style="margin: auto;">
						<a href="index.php?page=booking">
							<button class="btn btn-danger"><b>RESERVEZ ICI</b></button>
						</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>
<!--Section-->

<!--Section-->
<section>
	<div class="about-1 cover-image sptb bg-background-color" data-image-src="assets/images/banner2.jpg">
		<?php 
	        $client = $cockpit->module('singletons')->getData("client");
	        $partenaire = $cockpit->module('singletons')->getData("partenaire");
	        $marque = $cockpit->module('singletons')->getData("marques");
	        $vehicule = $cockpit->module('singletons')->getData("vehicules");
	     ?>
		<div class="content-text mb-0 text-white info">
			<div class="container"> 
				<div class="row text-center">
					<div class="col-lg-3 col-md-6">
						<div class="counter-status md-mb-0">
							<div class="counter-icon">
								<i class="ti-user"></i>
							</div>
							<h5>Clients</h5>
							<h2 class="counter mb-0"><?= $client["effectif"]; ?></h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-status status-1 md-mb-0">
							<div class="counter-icon text-warning">
								<i class="ti-car"></i>
							</div>
							<h5>Véhicules</h5>
							<h2 class="counter mb-0"><?= $vehicule["effectif"]; ?></h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-status status md-mb-0">
							<div class="counter-icon text-primary">
								<i class="ti-package"></i>
							</div>
							<h5>Marques de véhicules</h5>
							<h2 class="counter mb-0"><?= $marque["effectif"]; ?></h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-status status">
							<div class="counter-icon text-success">
								<i class="fa fa-handshake-o"></i>
							</div>
							<h5>Partenaires</h5>
							<h2 class="counter mb-0"><?= $partenaire["effectif"]; ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Section-->

<!--Section-->
<section class="sptb  bg-white">
	<div class="container">
		<div class="section-title center-block text-center">
			<h2>Ils nous ont fait confiance</h2>
			<p>
				En dehors de notre clientèle de particuliers,nous faisons aussi affaires avec des entreprises privées ou publiques, des ministères et autres institutions. Chaque année, c’est plus de 5000 contrats à notre actif... En tant que client pris en compte à EQUATEUR AUTOS ,vous bénéficiez de tarifs spéciaux pour profiter encore plus de chacune de vos locations.
			</p>
		</div>
		<div class="row">
			<?php 
		        $res = $cockpit->module('collections')->find("partenaires", [
		            "filter"=> [],
		            "sort" => ['_o'=> 1]
		          ]);
		     ?>
		     <?php foreach ($res as $marques): ?> 
			<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
				<a class="car-body-shapes card text-center p-4 bg-primary box-shadow2">
					<div class="car-body-img"><img src="assets/images/png/1.png" alt="img"></div>
					<div class="servic-data">
						<h4 class="font-weight-semibold mb-0 text-white"><?= $marques["nom"]; ?></h4>
					</div>
				</a>
			</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>
<!--Section-->