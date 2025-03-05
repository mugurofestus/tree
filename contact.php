<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton Doubletree Hotel - CONTACT</title>
        <!-- Swiper CSS -->
         <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <!--header-->
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
             Necessitatibus, vero. <br> Fuga architecto impedit ad omnis
              ea natus labore reiciendis nulla.
            </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow px-4">
                <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.789557994358!2d36.78220667404902!3d-1.3011516986864842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f109db34bbce9%3A0x877c70633105b8d9!2sDoubleTree%20by%20Hilton%20Nairobi%20Hurlingham!5e0!3m2!1ssw!2ske!4v1740130538695!5m2!1ssw!2ske"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--Address-->
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/sZnc6S4NiTfvq3ue9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i> XYZ, Nairobi, Kenya
                    </a>
                    <!--Phone Number-->
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel 0700130897" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0700130897
                    </a>
                    <br>
                    <a href="tel 0700130897" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0745501250
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: mugurofestus@gmail.com" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> mugurofestus@gmail.com
                    </a>
                    <!--Social media-->
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                            <i class="bi bi-twitter-x me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                            <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                            <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!--Footer-->
        <?php require('inc/footer.php'); ?>
</body>
</html>