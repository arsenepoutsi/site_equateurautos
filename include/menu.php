<div class="header-main">

	<!-- Horizontal Header -->
	<div class="horizontal-header clearfix ">
		<div class="container">
			<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
			<span class="smllogo"><img src="assets/images/brand/logo.png" width="120" alt="Logo Equateur Auto"/></span>
			<a href="tel:00241 04 05 46 74" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- /Horizontal Header -->

	<!-- Horizontal Main -->
	<div class="horizontal-main bg-dark-transparent clearfix">
		<div class="horizontal-mainwrapper container clearfix">
			<div class="desktoplogo">
				<a href="index.php?page=home"><img src="assets/images/brand/logo1.png" alt="Logo Equateur Auto"></a>
			</div>
			<div class="desktoplogo-1">
				<a href="index.php?page=home"><img src="assets/images/brand/logo.png" alt="Logo Equateur Auto"></a>
			</div>
			<!--Nav-->
			<nav class="horizontalMenu clearfix d-md-flex">
				<ul class="horizontalMenu-list">
					<li aria-haspopup="true"><a href="index.php?page=home" class="active">Accueil</a></li>
					<li aria-haspopup="true"><a href="index.php?page=about">Présentation </a></li>
					<li aria-haspopup="true"><a href="index.php?page=services">Services</a></li>
					<li aria-haspopup="true"><a href="index.php?page=cars">Nos véhicules</a></li>
					<li aria-haspopup="true"><a href="index.php?page=news">Actualités</a></li>
					<li aria-haspopup="true"><a href="index.php?page=contact"> Contact <span class="horizontalarrow"></span></a></li>
				</ul>
			</nav>
			<!--Nav-->
		</div>
	</div>
	<!-- /Horizontal Main -->
</div>
<!-- Modal -->
<div class="modal fade" id="pubModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="
    padding: 0;
    margin: 0 auto;
    max-width: 75%;
    max-height: 85%;
    height: 84%;
">
    <div class="modal-content" style="
    height: 50%;
    background: url(https://picsum.photos/700/200?i=10&amp;grayscale);
    background-position: center;
    background-size: cover;
">
      
      <div class="modal-body" style="
    /* width: 50%; */
    /* height: 50%; */
    /* background: url(https://picsum.photos/700/200?i=10&amp;grayscale); */
    /* background-position: center; */
    /* background-size: cover; */
">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="
    background: rgba(255, 255, 255, 0.6);
    padding: 0px;
    border-radius: 15px;
    height: 30px;
    width: 30px;
">
          <span aria-hidden="true">×</span>
        </button>
        
      </div>
      
      <div class="modal-footer" style="
    background-color: #00000066;
    border: none;
    height: auto;
"><div style="
    text-align: center;
    color: white;
    "><h3>Title purus sit amet fermentum</h3>
    <p>
Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
    </p>
        
        <button type="button" class="btn btn-primary">Action</button>
      </div>
</div>
    </div>
  </div>
</div>
<script>
	window.addeventlistener('load',function(){
		var q = sessionStorage.getItem("info");
		if(q == null ){
			sessionStorage.setItem("info",1);
			$('#pubModalCenter').modal('show');
		}
	});
</script>
