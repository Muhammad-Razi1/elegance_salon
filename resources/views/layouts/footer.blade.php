
<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo">Elegance Salon</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">


            @if (session('msg'))
<script>
	document.addEventListener('DOMContentLoaded', function() {
		alert('{{ session("msg") }}');
	});
</script>
@endif

              <h2 class="ftco-heading-2">Feedback</h2>
              <ul class="list-unstyled">
                <form action="/feedback" method="post">
                  @csrf
                <input type="text" placeholder="Enter name" class="form-control" name="name">
                <input type="email" placeholder="Enter email" class="form-control mt-1" name="email">
                <textarea class="form-control mt-1" name="message" placeholder="Enter Message" rows="3" cols="30" id=""></textarea>
                <button type="submit" class="btn-btn-outline-primary">Submit</button>
                </form>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="/" class="py-2 d-block">Home</a></li>
                <li><a href="/services" class="py-2 d-block">Services</a></li>
                <li><a href="/shop" class="py-2 d-block">Shop</a></li>
                <li><a href="/booknow" class="py-2 d-block">Book Now</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">125/U, P.E.C.H.S, Karachi, 75400</span></li>
	                <li><a><span class="icon icon-phone"></span><span class="text">0324-1453408</span></a></li>
	                <li><a><span class="icon icon-envelope"></span><span class="text">elegancesalon31@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Elegance Salon</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <script>
    $(document).ready(function() {
    $('#serviceSelector').change(function() {
        var selectedService = $(this).val();

        // Show all options initially
        $('#timeSelector option').show();

        // Hide options based on the selected service
        if (selectedService) {
            $('#timeSelector option').each(function() {
                if ($(this).val() && !$(this).hasClass(selectedService)) {
                    $(this).hide();
                }
            });
        }
    });
});

    </script>

  </body>
</html>
