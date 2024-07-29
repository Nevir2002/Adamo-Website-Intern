<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/gif" />

  <title>Shapel</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- lightbox Gallery-->
  <link rel="stylesheet" href="{{ asset('css/ekko-lightbox.css') }}" />

  <!-- font awesome style -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

  <!-- header section starts -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{ url('index') }}">
          <span>
            Shapel
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{ url('index') }}">Home</a>
                <a href="{{ url('about') }}">About</a>
                <a href="{{ url('gallery') }}">Gallery</a>
                <a href="{{ url('service') }}">Service</a>
                <a href="{{ url('blog') }}">Blog</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img_container">
            <div class="img-box">
              <img src="{{ asset('images/slider-bg.jpg') }}" class="" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="{{ asset('images/slider-bg.jpg') }}" class="" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="{{ asset('images/slider-bg.jpg') }}" class="" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn_box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="detail-box">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="inner_detail-box">
          <h1>
            Interior Design <br>
            Studio
          </h1>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem
          </p>
          <div>
            <a href="{{ url('contact') }}" class="slider-link">
              CONTACT US
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- about section -->
  <section class="about_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('images/about-img.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
            </p>
            <a href="{{ url('about') }}">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- gallery section -->
  <div class="gallery_section layout_padding2">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          Gallery
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="{{ asset('images/g1.jpg') }}" alt="">
            <a href="{{ asset('images/g1.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('images/g2.jpg') }}" alt="">
            <a href="{{ asset('images/g2.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('images/g3.jpg') }}" alt="">
            <a href="{{ asset('images/g3.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('images/g4.jpg') }}" alt="">
            <a href="{{ asset('images/g4.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('images/g5.jpg') }}" alt="">
            <a href="{{ asset('images/g5.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="{{ asset('images/g6.jpg') }}" alt="">
            <a href="{{ asset('images/g6.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="{{ url('gallery') }}">
          View All
        </a>
      </div>
    </div>
  </div>
  <!-- end gallery section -->

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('images/s1.jpg') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Design
              </h5>
              <p>
                We offer exceptional design services to transform your vision into reality.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('images/s2.jpg') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Planning
              </h5>
              <p>
                Comprehensive planning to ensure every aspect of your project is covered.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('images/s3.jpg') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Execution
              </h5>
              <p>
                Efficient execution and management to bring your project to life.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Contact Us
        </h2>
      </div>
      <form action="{{ url('contact') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Name" name="name" required>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
          </div>
          <div class="col-md-12">
            <textarea class="form-control" placeholder="Message" name="message" rows="5" required></textarea>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
              Send
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- end contact section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="footer_bottom">
        <div class="row">
          <div class="col-md-6">
            <p>
              &copy; 2024 All Rights Reserved
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social_icons">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer section -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/ekko-lightbox.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
