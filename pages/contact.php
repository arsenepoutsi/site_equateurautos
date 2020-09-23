<!--Breadcrumb-->
<div>
	<div class="bannerimg cover-image bg-background3" data-image-src="assets/images/contact.jpg">
		<div class="header-text mb-0">
			<div class="container">
				<div class="text-center text-white ">
					<h1 class="">Contactez-nous</h1>
					<ol class="breadcrumb text-center">
						<li class="breadcrumb-item"><a href="index.php?pages=home">Accueil</a></li>
						<li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Breadcrumb-->

<!--Contact-->
<div class="sptb bg-white mb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-xl-4 col-md-12">
				<div class="contact-description">
					<h2>Informations de contact</h2>
					<p class="mt-5" style="text-align: justify;">Afin de mieux répondre à vos attentes, n'hésitez pas a nous transmettre vos remarques, vos suggestions ou toutes autres suggestions, un intervenant prendra contact avec vous dans les plus brefs délais.</p>

					<?php 
				        $contact = $cockpit->module('singletons')->getData("contacts");
				     ?>
					<div class="mb-5">
						<small class="text-muted">Adresse</small>
						<p class="mb-0 fs-16 font-weight-bold"><?= $contact["adresse"]; ?></p>
					</div>
					<div class="mb-5">
						<small class="text-muted">Email</small>
						<p class="mb-0 fs-16 font-weight-bold"><?= $contact["email"]; ?></p>
					</div>
					<div class="mb-5">
						<small class="text-muted">N° de téléphone</small>
						<p class="mb-0 fs-16 font-weight-bold"><?= $contact["phone"]; ?></p>
					</div>
					<small class="text-muted">Socail Share</small>
					<ul class="list-unstyled list-inline mt-3 mb-5">
						<li class="list-inline-item">
							<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
								<i class="fa fa-facebook bg-facebook"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
								<i class="fa fa-twitter bg-info"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
								<i class="fa fa-linkedin bg-linkedin"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		    <div class="col-lg-7 col-xl-8 col-md-12">
				<div class="single-page" >
					<div class="col-lg-12 col-md-12 mx-auto d-block">
						<div class="wrapper wrapper2">
							<div class="card box-shadow-0 mb-0">
								<form onsubmit="return false;" id="valider">
									<div class="card-body">
										<div class="form-group">
											<input type="text" name="nom" class="form-control" placeholder="Nom(s) et prénom(s)" required="required">
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Adresse email" required="required">
										</div>
										<div class="form-group">
											<input type="text" name="telephone" class="form-control" placeholder="Numéro de téléphone" required="required">
										</div>
										<div class="form-group">
											<input type="text" name="sujet" class="form-control" placeholder="Sujet" required="required">
										</div>
										<div class="form-group">
											<textarea class="form-control" name="message" rows="6" placeholder="Message" required="required"></textarea>
										</div>
										<button type="submit" title="Envoyer votre message" class="btn btn-primary">Envoyer</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Contact-->

<script type="text/javascript">
  var formValid = document.getElementById('valider');
  formValid.addEventListener('submit', function(){
    var data = {};
    formValid.querySelectorAll("[name]").forEach(el=>data[el.getAttribute("name")] = el.value);

    fetch('authentification/api/forms/submit/contact?token=e3a07d1f99ee94e17a351bdd51061a', {
      method: 'post',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
          form: data
      })
  })
  .then(entry =>{ formValid.reset();
    new Noty({
        text: 'Message envoyé',
        type: 'success',
        layout: 'topRight',
        theme: 'relax',
        timeout: 10e3,
    }).show();
  })
  .catch(entry => console.log(entry));
  });
</script>