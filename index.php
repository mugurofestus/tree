<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton Doubletree Hotel - HOME</title>
        <!-- Swiper CSS -->
         <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
            
        }
    </style>
</head>
<body class="bg-light">
    <!--header-->
    <?php require('inc/header.php'); ?>
    <!--carousel-->
    <!-- Swiper Container -->
    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swipper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/Carousel/1.jpg" class="w-100 d-block">
         </div>
         <div class="swiper-slide">
            <img src="images/Carousel/2.jpg"class="w-100 d-block">
         </div>
         <div class="swiper-slide">
            <img src="images/Carousel/5.jpg"class="w-100 d-block">
         </div>

      </div>
     </div>
    </div>
    <!-- Check availability -->
     <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                          <label class="form-label" style="font-weight: 500;">check-in</label>
                          <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                          <label class="form-label" style="font-weight: 500;">Check-out</label>
                          <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                         <label class="form-label" style="font-weight: 500;">Adult</label>
                         <select class="form-select shadow-none">
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                         <label class="form-label" style="font-weight: 500;">Children</label>
                         <select class="form-select shadow-none">
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                          <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </form>
    </div>
    </div>
    </div>
    <!-- Our rooms -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
     <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">KES5000 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wi-Fi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room heater
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                        
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                      </div>
                      
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/2.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">KES5000 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wi-Fi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room heater
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                        
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                      </div>
                      
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/4.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">KES5000 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wi-Fi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room heater
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                        
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                      </div>
                      
                    </div>
                  </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>>></a>
            </div>
        </div>
     </div>
     <!-- Our Facilities -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
     <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/1.jpg" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/2.jpg" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/3.jpg" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/4.jpg" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/5.jpg" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>>></a>
            </div>
        </div>
     </div>
     <!-- Reviews -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>
     <div class="container mt-5">
        <!-- Swiper -->
  <div class="swiper swipper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Voluptatibus ratione accusamus fuga consequatur commodi eius deleniti maiores 
            impedit aliquam expedita?
        </p>
        <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Voluptatibus ratione accusamus fuga consequatur commodi eius deleniti maiores 
            impedit aliquam expedita?
        </p>
        <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Voluptatibus ratione accusamus fuga consequatur commodi eius deleniti maiores 
            impedit aliquam expedita?
        </p>
        <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
     </div><div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>>></a>
    </div>
     <!-- Reach us -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
     <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.789557994358!2d36.78220667404902!3d-1.3011516986864842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f109db34bbce9%3A0x877c70633105b8d9!2sDoubleTree%20by%20Hilton%20Nairobi%20Hurlingham!5e0!3m2!1ssw!2ske!4v1740130538695!5m2!1ssw!2ske"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel 0700130897" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0700130897
                    </a>
                    <br>
                    <a href="tel 0700130897" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0745501250
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
     </div>
     <!--Footer-->
        <?php require('inc/footer.php'); ?>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swipper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
    var swiper = new Swiper(".swipper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>