<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cocoa Bakery</title>
    <link rel="shortcut icon" type="image" href="logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/729a098223.js" crossorigin="anonymous"></script> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

    <title>Bakery Website | Home</title>
  </head>
  <body>
       @include('nav2')

      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="cover.jpg" class="d-block w-100" height="520"  alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="c2.gif" class="d-block w-100" height="520" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="chocolate.gif" class="d-block w-100" height="520"  alt="...">
                  </div>
                  
                  <div class="carousel-item">
                    <img src="c3.gif" class="d-block w-100" height="520"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="c4.gif" class="d-block w-100" height="520"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="c5.gif" class="d-block w-100" height="520"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="c6.gif" class="d-block w-100" height="520"  alt="...">
                  </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
      </div>

      <div class="container" id="cont" data-aos="fade-up"
      data-aos-duration="1500">
        <h3 style="text-align:center; color:white;"> TOP SELLER </h3>
          <div class="row">
            <div class="col-md-4 py-3 py-md-0 mt-4">
              <div class="card">
                   <img src="c6.gif" width="354" height="200">
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0 mt-4">
              <div class="card">
                   <img src="chocolate.gif" width="354" height="200">
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0 mt-4 mb-4">
              <div class="card">
                   <img src="c2.gif" width="353" height="200">
              </div>
            </div>
          </div>
      </div>

      <div class="banner"    data-aos="fade-up"
        data-aos-duration="1500">
            <div class="content">
                <h3>Delicious Cake</h3>
                <h2>UP TO 50% OFF</h2>
                <p>Chocolate cake with special recipe available now!!!</p>
                <div id="btnorder"><button>Order Now</button></div>
            </div>
            <div class="img">
                <img src="c4.gif" alt="">
            </div>
        </div>

        <div class="footer">
          <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5" data-aos="fade-up"
        data-aos-duration="1500">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #573818">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Products</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Help</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Contact</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
         <div class="copyright text-center">
                &copy; Copyright <strong>Cocoa Bakery</strong> .All Rights Reserved
            </div>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
            
</div>

<!-- script utk enable transition utk setiap div spt fade-up -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

  </body>
</html>