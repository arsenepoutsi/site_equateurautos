<!--Breadcrumb-->
<div>
	<div class="bannerimg cover-image bg-background3" data-image-src="assets/images/booking.jpg">
		<div class="header-text mb-0">
			<div class="container">
				<div class="text-center text-white ">
					<h1 class="">Réservation</h1>
					<ol class="breadcrumb text-center">
						<li class="breadcrumb-item"><a href="index.php?pages=home">Accueil</a></li>
						<li class="breadcrumb-item active text-white" aria-current="page">Réserver</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Breadcrumb-->

<!--Contact-->
<section class="sptb">
	<div class="container customerpage">
		<div class="row">
		    <div class="single-page" >
				<div class="col-lg-8 col-xl-8 col-md-8 d-block mx-auto">
					<div class="wrapper wrapper2">
						<form onsubmit="return false;" id="valider" class="card-body" tabindex="500">
							<h3>Prendre un rendez-vous</h3>
							<div class="name">
								<input type="text" name="nom" required="required">
								<label>Nom(s) & Prénom(s)</label>
							</div>
							<div class="mail">
								<input type="email" name="mail" required="required">
								<label>Email</label>
							</div>
							<div class="name">
								<input type="text" name="phone" required="required">
								<label>Téléphone</label>
							</div>
							<div class="row">
								<div class="col-md-6 name">
									<input type="Date" name="date" required="required">
									<label>Date</label>
								</div>
								<div class="col-md-6 name">
									<input type="Time" name="heure" required="required">
									<label>Heure</label>
								</div>
					        </div>
					        <div class="name">
								<textarea name="message" class="form-control" cols="30" rows="5" required="required"></textarea>
								<label>Message</label>
							</div>
							<div class="row">
								<div class="col-md-4 name"></div>
								<div class="col-md-4 name">
									<button type="submit" title="Prendre rendez-vous" class="btn btn-primary">Prendre rendez-vous</button>
								</div>
								<div class="col-md-4 name"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact-->

<!-- Recent Post-->
<section class="sptb2 bg-white border-top">
	<div class="container">
		<h6 class="fs-18 mb-4">Dernières publications</h6>
		<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
		<div class="row">
			<div class="col-md-12 col-lg-4">
				<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
					<img class="w-8 h-8 mr-4" src="assets/images/media/6.png" alt="img">
					<div class="media-body">
						<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
						<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
						<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
					<img class="w-8 h-8 mr-4" src="assets/images/media/4.png" alt="img">
					<div class="media-body">
						<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
						<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
						<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="d-flex mt-0 mb-0 border bg-white p-4 box-shadow2">
					<img class="w-8 h-8 mr-4" src="assets/images/media/2.png" alt="img">
					<div class="media-body">
						<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Car</a></h4>
						<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
						<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Recent Post-->

<script type="text/javascript">
  var formValid = document.getElementById('valider');
  formValid.addEventListener('submit', function(){
    var data = {};
    formValid.querySelectorAll("[name]").forEach(el=>data[el.getAttribute("name")] = el.value);

    fetch('authentification/api/forms/submit/devis?token=e3a07d1f99ee94e17a351bdd51061a', {
      method: 'post',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
          form: data
      })
  })
  .then(entry =>{ formValid.reset();
    new Noty({
        text: 'Demande de Rendez-vous envoyée',
        type: 'success',
        layout: 'topRight',
        theme: 'relax',
        timeout: 10e3,
    }).show();
  })
  .catch(entry => console.log(entry));
  });
</script>