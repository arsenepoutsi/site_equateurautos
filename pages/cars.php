<!--Breadcrumbs Section-->
<div class="bannerimg cover-image bg-background3" data-image-src="assets/images/vehicule.jpg">
	<div class="header-text mb-0">
		<div class="container">
			<div class="text-center text-white ">
				<h1 class="">Nos véhicules</h1>
				<ol class="breadcrumb text-center">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item active text-white" aria-current="page">Nos véhicules</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumbs Section-->

<div class="container">
	<div class="row" style="margin-top: 20px;">
		<?php 
	        $res = $cockpit->module('collections')->find("vehicules", [
	            "filter"=> [],
	            "sort" => ['_o'=> 1],
	            "populate" =>1
	          ]);
	     ?>
	     <?php foreach ($res as $vehicule): ?>
		<div class="col-lg-4 col-md-12">
			<div class="card">
				<div class="product-item2">
					<div class="product-item2-img text-center bg-white">
						<img src=".<?= $vehicule['photo']['path']; ?>" alt="img" class="h-100 w-100">
					</div>
				</div>
				<div class="card-body">
					<div class="product-item2-desc ">
						<h4 class="font-weight-semibold text-dark"><a><?= $vehicule["marque"]["nom"]; ?> <?= $vehicule["modele"]; ?></a></h4>
					</div>
					<div class="d-flex pb-0 pt-0">
						<a>
							<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-asterisk text-primary mr-2"></i>Moteur</p>
						</a>
						<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold"><?= $vehicule["moteur"]; ?></span>
					</div>
					<div class="d-flex pb-0 pt-0">
						<a>
							<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-asterisk text-primary mr-2"></i>Carburant</p>
						</a>
						<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold"><?= $vehicule["carburant"]; ?></span>
					</div>
					<div class="d-flex pb-0 pt-0">
						<a>
							<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-asterisk text-primary mr-2"></i>Système</p>
						</a>
						<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold"><?= $vehicule["systeme"]; ?></span>
					</div>

				</div>
				<div class="card-footer">
					<div class="product-item-wrap d-flex">
						<div class="product-item-price">
							<span class="newprice text-dark"><?= $vehicule["prix"]; ?></span>
						</div>
						<a href="index.php?page=booking" class="btn btn-danger btn-sm ml-auto">Réserver</a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>