<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" 
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
            crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
          crossorigin="anonymous"></script>

        <script src="{{asset('/js/main.js')}}"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <title>BOOK HOUSE - Online Book Store</title>
    </head>
    <body>

        <div class="container-fluid mx-0 px-0">

          {{-- <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand font-weight-bold" href="/">
              <img src="/images/logo_nav.jpg" class="img-fluid rounded-circle" alt="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-between" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link font-weight-bold active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link font-weight-bold" href="/shop">Books</a>
                <a class="nav-link font-weight-bold" href="#">About Us</a>
                <a class="nav-link font-weight-bold" href="#">Contact Us</a>
              </div>
              <div class="authentication-links d-flex">
                <div class="d-flex login ml-3">
                  <a href="/cart"><i class="fa fa-shopping-cart text-danger" style="font-size:36px"></i></a>
                </div>
              </div>
            </div>            
          </nav> --}}

          {{-- <div class="d-flex titlebar px-3 justify-content-between py-2 bg-primary">
            <div class="titlebar-brand ">
              <a href="/" class="nav-link h5 pl-0 text-light">BOOK HOUSE</a>
            </div>
            <div class="d-flex search-form mr-3 align-items-center">
              <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search Book Here...">
              </form>
            </div>
            <div class="d-flex shopping-cart align-items-center ">
              <a href="/cart"><i class="fa fa-shopping-cart text-danger" style="font-size:36px"></i></a>
            </div>
          </div> --}}
        </div>
        {{ $slot }}
        {{-- <footer class="badge-primary py-3">
          <div class="footer-top">
		        <div class="container ">
		        	<div class="row">
		        		<div class="col-md-3 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
		        			<h3>BOOK HOUSE</h3>
                  <div class="logo-img">
                    <img src="./images/logo.jpg" class="img-fluid" alt="logo" style="width: 150px; height: 150px">
                  </div>
	              </div>
		        		<div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
		        			<h3>Contact US</h3>
		                	<p><i class="fa fa-home" style="font-size:24px"></i> Via Rossini 10, 10124 Turin Italy</p>
		                	<p><i class="fa fa-phone" style="font-size:24px"></i> Phone: (0039) 333 12 68 347</p>
		                	<p><i class="fa fa-envelope" style="font-size:24px"></i> Email: <a class="text-light" href="mailto:hello@domain.com">hello@domain.com</a></p>
		                	<p><i class="fa fa-skype" style="font-size:24px"></i> Skype: you_online</p>
	              </div>
	              <div class="col-md-4 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	                <div class="row">
	                  <div class="col">
	                    <h3>Links</h3>
	                  </div>
	                </div>
                  <div class="row">
                    <div class="col-md-6">
                      <p><a class="scroll-link text-light" href="#">Home</a></p>
                      <p><a class="text-light" href="#">Books</a></p>
                      <p><a class="text-light" href="#">About Us</a></p>
                      
                    </div>
                  </div>
	              </div>
		          </div>
		        </div>
	        </div>
	        <div class="footer-bottom">
	        	<div class="container">
	        		<div class="row">
	           		<div class="col footer-social">
	                <a class="text-light mr-2" href="#"><i class="fa fa-facebook-square" style="font-size: 36px"></i></a> 
                  <a class="text-light mr-2" href="#"><i class="fa fa-twitter-square" style="font-size: 36px"></i></a> 
                  <a class="text-light mr-2" href="#"><i class="fa fa-google-plus-square" style="font-size: 36px"></i></a> 
                  <a class="text-light mr-2" href="#"><i class="fa fa-instagram" style="font-size: 36px"></i></a> 
                  <a class="text-light" href="#"><i class="fa fa-pinterest-square" style="font-size: 36px"></i></i></a>
	              </div>
	           	</div>
	        	</div>
	        </div>
        </footer> --}}
        
    </body>
</html>