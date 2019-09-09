	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Animal Shelter</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			  <script src="js/Angular-v1.3.15.min.js"></script> 

		</head>
		<body ng-app="readApp" ng-controller="DbController">
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">About Us</a></li>
				          <li><a href="cats.php">Adoption Pet</a></li>
				          <li><a href="voluntir.php">Volunteer</a></li>
				          <li><a href="contact.html">Contact</a></li>			              
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Become a Volunteer				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="volunteer.html"> Become a Volunteer</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start Volunteer-form Area -->
			<section class="Volunteer-form-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Want to help? Become a Volunteer</h1>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center">
						<form class="col-lg-9" method="POST" ng-submit="simpan();">
						  <div class="form-group">
						    <label for="first-name">Full Name</label>
						    <input type="text" class="form-control" placeholder="Full Name *" ng-model="nama" name="nama" id="nama" required autocomplete="off">
						  </div>	
						  <div class="form-group">
						    <label for="email">Email</label>
						    <input type="email" class="form-control" placeholder="Email (youremail@gmail.com) *" ng-model="email" name="email" id="email" required autocomplete="off">
						  </div>						  	
						  <div class="form-group">
						    <label for="phone">Phone Number</label>
						   	<input type="phone" class="form-control" placeholder="Phone *" name="telp" ng-model="telp" id="telp" pattern="[0-9]+" maxlength="13" required autocomplete="off">
						  </div>	
						  <input type="button" name="submit" class="primary-btn float-right" ng-click="simpan();" value="Submit"></input>				  
						</form>
					</div>
				</div>	
			</section>
			<!-- End Volunteer-form Area -->
																							
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row pt-120 pb-80">
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6>Donation</h6>
								<p>Bank Mandiri 1180028 999 000 </p>
								<p>Bank BCA 756 02 888 02</p>
								<p>a/n PetShelter</p>	
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							
						</div>						
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contact Us</h6>
								<ul class="list-contact">
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-home"></span>
										</div>
										<div class="detail">
											<h4>Depok, Indonesia</h4>
											<p>
												Jalan Margonda
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-phone-handset"></span>
										</div>
										<div class="detail">
											<h4>(+62)81182283382</h4>
											<p>
												Mon to Fri 9am to 6 pm
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-envelope"></span>
										</div>
										<div class="detail">
											<h4>support@colorlib.com</h4>
											<p>
												Send us your query anytime!
											</p>
										</div>	
									</li>																		
								</ul>
							</div>
						</div>						
					</div>
				</div>
				<div class="copyright-text">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between">
							<p class="col-lg-8 col-sm-6 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by G
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<div class="col-lg-4 col-sm-6 footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	

			<script type="text/javascript">
            
            function Validasi(){

                var angka = "0123456789";
                var x = 0;
                var email=document.getElementById('email').value;
                var notelepon=document.getElementById('telp').value;
                if (email=="" || notelepon ==""){
                  alert("Ada form yang belum terisi");

             }
             
                if (notelepon.length!=12) {
                    alert("no telepon harus 12 karakter");
                    return false;
                }

                for (var i=0; i < notelepon.length; i++) {
					digitb = "" + notelepon.substring(i, i+1);
                  
					if (angka.indexOf(digitb) == "-1") {
                        window.alert("Karakter pada No Telepon yang dimasukkan salah (harus angka semua)");
                        return false;
                    }

                }
                return true;

            }

              <script src="readController.js"></script>


        </script>
		</body>
	</html>