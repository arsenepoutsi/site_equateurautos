<!--Breadcrumb-->
<section>
	<div class="bannerimg cover-image bg-background3" data-image-src="assets/images/news.jpg">
		<div class="header-text mb-0">
			<div class="container">
				<div class="text-center text-white">
					<h1 class="">Actualités</h1>
					<ol class="breadcrumb text-center">
						<li class="breadcrumb-item"><a href="#">Accueil</a></li>
						<li class="breadcrumb-item active text-white" aria-current="page">Actualités</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/Breadcrumb-->

<!--listing-->
<section class="sptb">
	<div class="container">
		<div class="alert alert-success" role="alert" style="margin-top: -50px; background-color: #d4edda; color: #172e00;">
			<i class="fa fa-info-circle"></i>&nbsp;&nbsp; 
			<span>
				This is a success alert with an example link. Give it a click if you like.
			</span> 
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="row">
					<?php 
				        $res = $cockpit->module('collections')->find("actualites", [
				            "filter"=> [],
				            "sort" => ['_o'=> 1],
				            "populate" =>1
				          ]);
				     ?>
				     <?php foreach ($res as $actualite): ?>
					<div class="col-xl-4 col-lg-6 col-md-12">
						<div class="card">
							<div class="item7-card-img">
								<a></a>
								<img src=".<?= $actualite['photo']['path']; ?>" alt="img" class="cover-image">
							</div>
							<div class="card-body" style="height: 300px;">
								<div class="item7-card-desc d-flex mb-2">
									<a><i class="fa fa-calendar-o text-muted mr-2"></i><?= $actualite["date"]; ?></a>
								</div>
								<a class="text-dark"><h4 class="font-weight-semibold"><?= $actualite["titre"]; ?></h4></a>
								<p><?= $actualite["resume"]; ?></p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/Add listing-->

<!-- Newsletter-->
<section class="sptb2 bg-white border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-6 col-md-12">
				<div class="sub-newsletter">
					<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Abonnez-vous à notre newsletter</h3>
					<p class="mb-0">Equateur Autos traite les données reccueillies afin d'informer les personnes inscrites de ses activités.</p>
				</div>
			</div>
			<div class="col-lg-5 col-xl-6 col-md-12">
				<form onsubmit="return false;" id="valider">
					<div class="input-group sub-input mt-1">
						<input type="text" name="email" class="form-control input-lg " placeholder="Entrez votre Email">
						<div class="input-group-append ">
							<button type="submit" class="btn btn-primary btn-lg br-tr-3  br-br-3">
								Souscrire
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--/Newsletter-->


<script type="text/javascript">
  var formValid = document.getElementById('valider');
  formValid.addEventListener('submit', function(){
    var data = {};
    formValid.querySelectorAll("[name]").forEach(el=>data[el.getAttribute("name")] = el.value);

    fetch('authentification/api/forms/submit/newsletter?token=e3a07d1f99ee94e17a351bdd51061a', {
      method: 'post',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
          form: data
      })
  })
  .then(entry =>{ formValid.reset();
    new Noty({
        text: 'confirmation de votre inscription',
        type: 'success',
        layout: 'topRight',
        theme: 'relax',
        timeout: 10e3,
    }).show();
  })
  .catch(entry => console.log(entry));
  });
</script>