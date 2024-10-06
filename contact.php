<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Contact Us</title>
    <link
      rel="stylesheet"
      href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin" />
    <link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css" />
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css" />
    <link rel="icon" href="media/img/logo-gbu.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="media/css/contact.css" />
    <link rel="stylesheet" href="media/css/components/footer.css" />
    <link rel="stylesheet" href="media/css/components/navbar.css" />

    <style></style>
  </head>
  <body>
    <!-------------------------------------------------------- navbar two start------------------------------------------------------------- -->
    <div class="nav-two">
      <img src="media/img/bluebrain.png" alt="gbu" class="logo" />
      <div class="mobile-navbar-btn" onclick="toggleMenu()">
        <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
        <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
      </div>
      <nav class="navbar">
        <ul class="navbar-list">
          <li class="drop-one"><a class="navbar-link" href="/">Home</a></li>
          <li class="drop-one" i>
            <a class="navbar-link" href="services.html">Services</a>
          </li>
          <li class="drop-one" i>
            <a class="navbar-link" href="course.html">Courese</a>
          </li>
          <li class="drop-one" i>
            <a class="navbar-link" href="research.html">Research</a>
          </li>
          <li class="drop-one" i>
            <a class="navbar-link" href="about.html">About Us</a>
          </li>
          <li class="drop-one" i>
            <a class="navbar-link" href="contact.html">Contact Us</a>
          </li>
          
        </ul>
      </nav>
    </div>
    <!-- ------------------------------------------------------------navbar two end ---------------------------------------------------------->
     <!-------------------------------------------------------- slider section start --------------------------------------------------------->
     <div id="carouselExampleSlidesOnly" class="carousel slide"
     data-bs-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="media/img/2.jpg" class="d-block w-100"  alt="...">
         <div class="carousel-caption">
           <h5>Bluebrain Solutions Contact Us</h5>
           <p>Reliable, high-speed connectivity solutions for businesses and consumers nationwide.</p>
         </div>
       </div>
     </div>
   </div>
   <!---------------------------------------------------------- slider section end -------------------------------------------------------->
   <section class="contact-us">
    <div class="container">
        <h2>Contact Us</h2>
        <p>At Bluebrain Solutions, we're here to help you stay connected. Whether you have questions about our services, need technical support, or want to provide feedback, our team is ready to assist you. We believe in building strong relationships with our customers and are committed to providing exceptional service and support.</p>
        
        <h3>Get in Touch</h3>
        <p><strong>Customer Support:</strong> Our dedicated support team is available 24/7 to assist you with any technical issues, service inquiries, or account questions. You can reach our support team by phone at <a href="tel:8303744132">Phone Number: 8303744132</a> or by email at <a href="mailto:contact@bluebrainsolutions.com">Email: contact@bluebrainsolutions.com</a>.</p>
        <p><strong>Sales Inquiries:</strong> Interested in learning more about our internet services for your home or business? Contact our sales team for personalized recommendations and information about our plans and pricing. Call us at <a href="tel:[Sales Phone Number]">Phone Number: 8303744132</a> or email us at <a href="mailto:contact@bluebrainsolutions.com">Email: contact@bluebrainsolutions.com</a>.</p>
        <p><strong>Feedback and Suggestions:</strong> We value your feedback and are always looking for ways to improve our services. If you have any suggestions or comments, please send them to <a href="mailto:[Feedback Email Address]">Email: contact@bluebrainsolutions.com</a>.</p>
        
        <h3>Visit Us</h3>
        <p>You're always welcome to visit our office for in-person assistance. Our office is located at:</p>
        <address>
            Greater Noida<br>
            Uttar Pradesh<br>
            Zip Code : 201310
        </address>
 
    </div>
    <div class="content">
      <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10">
      <div class="row justify-content-center">
      <div class="col-md-6">
      <h3 class="heading mb-4">Let's talk about everything!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>
      <p><img src="media/img/undraw-contact.svg" alt="Image" class="img-fluid"></p>
      </div>
      <div class="col-md-6">
      <form class="mb-5" method="post" id="contactForm" name="contactForm">
      <div class="row">
      <div class="col-md-12 form-group">
      <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
      </div>
      </div>
      <div class="row">
      <div class="col-md-12 form-group">
      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
      </div>
      </div>
      <div class="row">
      <div class="col-md-12 form-group">
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
      </div>
      </div>
      <div class="row">
      <div class="col-md-12 form-group">
      <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
      </div>
      </div>
      <div class="row">
      <div class="col-12">
      <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
      <span class="submitting"></span>
      </div>
      </div>
      </form>
      <div id="form-message-warning mt-4"></div>
      <div id="form-message-success">
      Your message was sent, thank you!
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</section>

       <!--------------------------------------------------------------------- Footer ----------------------------------------------------------->
       <div class="footer-v1">
        <div class="footer">
          <div class="container">
            <div class="row">
              <!-- About -->
              <div class="col-md-3 md-margin-bottom-40">
                <a href="#"><img id="logo-footer"
                    class="footer-logo"
                    src="media/img/logo.png" height="90"
                    alt="Logo"></a>
                <div class="headline"><h2>Bluebrain
                    Solutions</h2></div>
                <ul class="list-unstyled link-list">
                  <li>
                    <a href="#">Empowering minds through
                      <br>innovative educational solutions,
                      <br>our company bridges the gap
                      <br>between traditional learning and
                      <br>modern technology, ensuring students
                      <br>excel in an ever-evolving world.</a>
                  </li>

                </ul>
              </div><!--/col-md-3-->
              <!-- End About -->

              <!-- Latest -->
              <div class="col-md-3" style="margin-bottom: 40px;">
                <div class="posts">
                  <div class="headline"><h2>Usefull
                      Link</h2></div>
                  <ul class="list-unstyled link-list">
                    <li>
                      <a href="#">Courses</a>
                    </li>
                    <li>
                      <a href="#">Internship</a>
                    </li>
                    <li>
                      <a
                        href="#">Certificate Course</a>
                    </li>

                  </ul>
                </div>
              </div><!--/col-md-3-->
              <!-- End Latest -->

              <!-- Link List -->
              <div class="col-md-3" style="margin-bottom: 40px;">
                <div class="headline"><h2>Privacy
                    Policy</h2></div>
                <ul class="list-unstyled link-list">
                  <li><a href="#">Teams of Conditions</a></li>
                  <li><a href="#">Returns Policy</a></li>
                  <li><a href="#">Privercy Policy</a></li>

                </ul>
              </div><!--/col-md-3-->
              <!-- Link List -->
              <div class="col-md-3" style="margin-bottom:  40px;">
                <div class="headline"><h2>Quick Contact</h2></div>
                <ul class="list-unstyled link-list">
                  <li><a href="#">Greater Noida, India</a></li>
                  <li><a
                      href="#">support@bluebrainsolutions.com</a></li>
                  <li><a href="#">+91 830xxxxxxxx</a></li>
                  <li><a href="#">9 AM – 7 PM</a></li>
                </ul>
              </div><!--/col-md-3-->
              <!-- End Link List -->

              <!-- Address -->

              <div class="col-md-0" style="margin-bottom: 40px;">
                <!-- Footer Social Icons -->
                <ul class="footer-socials">

                  <li class="social-i">
                    <a
                      href="#"
                      class="social-button social-button--linkedin"
                      aria-label="LinkedIn">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li class="social-i">
                    <a href="#"
                      class="social-button social-button--instagram"
                      aria-label="instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li class="social-i">
                    <a href="#"
                      class="social-button social-button--youtube"
                      aria-label="youtube">
                      <i class="fab fa-youtube"></i>
                    </a>
                  </li>
                  <li class="social-i">
                    <a href="#"
                      class="social-button social-button--facebook"
                      aria-label="Facebook">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="social-i">
                    <a href="#"
                      class="social-button social-button--twitter"
                      aria-label="twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                </ul>

              </div><!--/col-md-3-->
              <!-- End Address -->
            </div><!--/row-->
          </div><!--/container-->
        </div><!--/footer-->
        <div class="copyright">
          <div class="container">
            <div class="right">
              <div class="row">
                <div class="col-md-6">
                  <p>2024 &copy; All Right Reserved | Maintained
                    by : <a
                      href="https://www.google.com/search?client=ms-android-vivo-rvo3&sca_esv=40208b2a209bf428&sxsrf=ACQVn0-Vu1x3eyXfnwwibAFGFuD9HShEzw:1706770200615&q=APEX+BYTE&si=AKbGX_rOAlAWZm8yZPZsiL6aVCbdD97y3lZlG6WCaiU0tO9pR0fYA0R4uhblGHfjRzoah2BN9iZgrruDEocccGk0rQCfHGxc7PkC2WG04RpyVbnzRXPL5uQ5KFG_Z1F3v0O4UxnWVMsW-a7cbGEopdfWxDwmLQg_lYeskzodAXOimc7NAurVwT0%3D&sa=X&ved=2ahUKEwi05pS8xomEAxXogFYBHYvkBkMQ6RN6BAguEAE&biw=1128&bih=2184&dpr=2.75">Apex
                      Byte IT Serivices</a> </p>
                </div>
                <div class="col-md-6">
                  <!-- Footer Social Icons -->
                  <!-- Footer Social Icons -->
                  <ul class="footer-socials">
                    <p>Designed and Developed By : <a
                        href="developer.html">
                        Team Alfa | Apex Byte</a></p>
                    <!-- Add similar list items for other social icons -->
                  </ul>
                </div>
                <!-- Add more social icons as needed -->
              </div>
            </div>
          </div><!--/copyright-->
        </div>
        <!--=== End Footer ===-->
        <!-- ======================================== 
  Our JavaScript Section Start  
========================================  -->
<script src="media/css/bootstrap.min.css"></script>

        <script
          type="module"
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script
          nomodule
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
        <script src="media/js/index.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- animation -->
        <script
          src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
AOS.init();
</script>
      </body>
    </html>
