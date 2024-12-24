<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>SuwandiSecBrand</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
			<div class="container">
			  <a class="navbar-brand" href="/">SuwandiSecBrand<span>.</span></a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
				  <li class><a class="nav-link" href="/">Home</a></li>
			<li><a class="nav-link" href="shop">Shop</a></li>
				  <li><a class="nav-link" href="about">About us</a></li>
				  <li class="nav-item active"><a class="nav-link" href="contact">Contact us</a></li>
			@if (!Auth::check())
				<li><a class="nav-link" href="{{ route('login.show') }}">Login</a></li>
				<li><a class="nav-link" href="{{ route('register.show') }}">Register</a></li>
			@else
				<!-- If user is logged in, show Logout Link -->
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>
	<a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
	
			@endif
				</ul>
				<ul class="navbar-nav ms-5">
					<li class="nav-item">
					  <a class="nav-link" href="user"><img src="images/user.svg" alt="User" width="24"></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="cart"><img src="images/cart.svg" alt="Cart" width="24"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="history">
						  <img src="images/history.svg" alt="History" width="24" style="filter: invert(1);">
						</a>
					  </li>		
				  </ul>		
			  </div>
			</div>
		  </nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Contact</h1>
								<p class="mb-4">Jika terdapat pertanyaan, ataupun kendala bisa kontak kita dengan nomor ataupun email yang tertera dibawah</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="shop" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
							  <img src="images/kontak.jpg" class="img-fluid" style="width: 100%; height: auto;">
							</div>
						  </div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		
		<!-- Start Contact Form -->
		<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">


            <div class="col-md-8 col-lg-8 pb-4">


              <div class="row mb-5">
                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>Jl. KArya Wisata Ujung No.43, Medan</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>suwandisecbrand@gmail.com</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>+62895383713434</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>
              </div>

			  <form id="whatsappForm">
				<div class="row">
				  <div class="form-group">
					<label class="text-black" for="fname">Full name</label>
					<input type="text" class="form-control" id="fname" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="text-black" for="email">Email address</label>
				  <input type="email" class="form-control" id="email" required>
				</div>
				<div class="form-group mb-5">
				  <label class="text-black" for="message">Pesan</label>
				  <textarea name="" class="form-control" id="message" cols="30" rows="5" required></textarea>
				</div>
				<button type="submit" class="btn btn-primary-hover-outline">Kirim Pesan</button>
			  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Contact Form -->

		
		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container">
				<div class="row justify-content-center">
					<!-- Kolom Logo dan Teks -->
					<div class="col-lg-4 text-center">
						<div class="mb-4 footer-logo-wrap">
							<a href="#" class="footer-logo">SuwandiSecBrand<span>.</span></a>
						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Section -->
		


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
		<script>
			document.getElementById("whatsappForm").addEventListener("submit", function (event) {
			  event.preventDefault(); // Mencegah reload halaman
		  
			  // Ambil data dari input form
			  const fullName = document.getElementById("fname").value;
			  const email = document.getElementById("email").value;
			  const message = document.getElementById("message").value;
		  
			  // Nomor WhatsApp tujuan
			  const phoneNumber = "62895383713434";
		  
			  // Format pesan WhatsApp dengan newline (%0A)
			  const whatsappMessage = `Halo, nama saya ${fullName}%0AEmail: ${email}%0APesan: ${message}`;
		  
			  // Buat URL WhatsApp
			  const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
		  
			  // Redirect ke WhatsApp
			  window.open(whatsappURL, "_blank");
			});
		  </script>
	</body>

</html>

