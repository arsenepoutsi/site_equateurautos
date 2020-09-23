<script src="assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap js -->
<script src="assets/plugins/bootstrap-4.3.1/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<!--JQueryVehiclerkline Js-->
<script src="assets/js/jquery.sparkline.min.js"></script>

<!-- Circle Progress Js-->
<script src="assets/js/circle-progress.min.js"></script>

<!-- Star Rating Js-->
<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Counters -->
<script src="assets/plugins/counters/counterup.min.js"></script>
<script src="assets/plugins/counters/waypoints.min.js"></script>
<script src="assets/plugins/counters/numeric-counter.js"></script>

<!--Owl Carousel js -->
<script src="assets/plugins/owl-carousel/owl.carousel.js"></script>

<!--Horizontal Menu-->
<script src="assets/plugins/horizontal-menu/horizontal.js"></script>

<!--JQuery TouchSwipe js-->
<script src="assets/js/jquery.touchSwipe.min.js"></script>

<!--Select2 js -->
<script src="assets/plugins/select2/select2.full.min.js"></script>
<script src="assets/js/select2.js"></script>

<!-- Sticky Js-->
<script src="assets/js/sticky.js"></script>

<!-- Cookie js -->
<script src="assets/plugins/cookie/jquery.ihavecookies.js"></script>
<script src="assets/plugins/cookie/cookie.js"></script>

<!--Showmore Js-->
<script src="assets/js/jquery.showmore.js"></script>
<script src="assets/js/showmore.js"></script>

<!-- Custom scroll bar Js-->
<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.js"></script>

<!-- Swipe Js-->
<script src="assets/js/swipe.js"></script>



<!-- Custom Js-->
<script src="assets/js/custom.js"></script>

<!-- Owl Carousel Js-->
<script src="assets/js/owl-carousel.js"></script>

<script src="assets/js/aos.js"></script>
<script src="assets/js/noty.min.js"></script>


<!-- Popup modal -->
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
	$( window ).load(function() {
		var q = sessionStorage.getItem("info");
		if(q == null ){
			sessionStorage.setItem("info",1);
			$('#pubModalCenter').modal('show');
		}
	});
</script>
