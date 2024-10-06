<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Bluebrain Solutions</title>
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
    <link rel="stylesheet" href="media/css/index.css" />
    <link rel="stylesheet" href="media/css/services.css" />
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
            <!-- <a class="navbar-link" href="server.php"> -->
            Services <i class="fa-solid fa-angle-down"></i>
            <div class="dropdown-content">
              <div class="dropdown-submenu">
                <a href="ran.php">5G RAN and Backhaul</a>
                <a href="broadband.php">Broadband Access Networks</a>
                <a href="enterprise.php">Premium Enterprise Connectivity</a>
                <a href="wholesale.php">Wholesale & DCI Solutions</a>
                <a href="next-gen.php">Next-Gen Critical Networks</a>
                <a href="defence.php">Government And Defence Networks</a>
              </div>
            </div>
          </li>
          <li class="drop-one" i>
            <a class="navbar-link" href="course.php">Courese</a>
          </li>
          <!-- <li class="drop-one" i>
            <a class="navbar-link" href="research.php">Research</a>
          </li> -->
          <li class="drop-one" i>
            <a class="navbar-link" href="about.php">About Us</a>
          </li>
          <li class="drop-one" i>
            <a class="navbar-link" href="contact.php">Contact Us</a>
          </li>
          
        </ul>
      </nav>
    </div>
    <!-- ------------------------------------------------------------navbar two end ---------------------------------------------------------->
    <!--------------------------------------------------------section slider start ----------------------------------------------------------->
    <section>
      <div class="container-slide">
        <div class="carousel">
          <input type="radio" name="slides" checked="checked" id="slide-1">
          <input type="radio" name="slides" id="slide-2">
          <input type="radio" name="slides" id="slide-3">
          <input type="radio" name="slides" id="slide-4">
          <input type="radio" name="slides" id="slide-5">
          <input type="radio" name="slides" id="slide-6">
          <ul class="carousel__slides">
            <li class="carousel__slide">
              <figure>
                <div>
                  <img src="media/img/slider/5.jpg" alt>
                  <li class="carousel-caption">
                    <h3>Radio Access Network</h3>
                    <p>4G & 5G</p>
                  </div>

                </figure>
              </li>
              <li class="carousel__slide">
                <figure>
                  <div>
                    <img src="media/img/slider/2.webp" alt>
                    <li class="carousel-caption">
                      <h3>Broadband Access</h3>
                      <p>FTTx and FWA</p>
                    </div>

                  </figure>
                </li>
                <li class="carousel__slide">
                  <figure>
                    <div>
                      <img src="media/img/slider/3.jpg" alt>
                      <li class="carousel-caption">
                        <h3>Optical and Data Network</h3>
                        <p>Optical Transport and Ethernet/IP Switches</p>
                      </div>

                    </figure>
                  </li>
                  <li class="carousel__slide">
                    <figure>
                      <div>
                        <img src="media/img/slider/4.jpg" alt>
                        <li class="carousel-caption">
                          <h3>Network Management</h3>
                          <p>Universal SDN ready NMS, NMSaaS, Broadband
                            Manager</p>
                        </div>

                      </figure>
                    </li>
                    <li class="carousel__slide">
                      <figure>

                        <div>
                          <img src="media/img/slider/1.jpg" alt>
                          <li class="carousel-caption">
                            <h3>Wireless Network</h3>
                            <p>4G and 5G</p>
                          </div>

                        </figure>
                      </li>
                      <li class="carousel__slide">
                        <figure>
                          <div>
                            <img src="media/img/slider/6.jpeg" alt>
                            <li class="carousel-caption">
                              <h3>Broadband</h3>
                              <p>Fiber cable</p>
                            </div>

                          </figure>
                        </li>
                      </ul>
                      <ul class="carousel__thumbnails">
                        <li>
                          <label for="slide-1"><img
                              src="media/img/slider/5.jpg" alt></label>
                        </li>
                        <li>
                          <label for="slide-2"><img
                              src="media/img/slider/2.webp" alt></label>
                        </li>
                        <li>
                          <label for="slide-3"><img
                              src="media/img/slider/3.jpg" alt></label>
                        </li>
                        <li>
                          <label for="slide-4"><img
                              src="media/img/slider/4.jpg" alt></label>
                        </li>
                        <li>
                          <label for="slide-5"><img
                              src="media/img/slider/1.jpg" alt></label>
                        </li>
                        <li>
                          <label for="slide-6"><img
                              src="media/img/slider/6.jpeg" alt></label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </section>

                <!-- ---------------------------------------------------section silder end -------------------------------------------------------------->
                <div class="marquee">
                  <p>Our internet network company is dedicated to providing high-speed, reliable connectivity solutions to businesses and individuals nationwide. With cutting-edge technology and exceptional customer support, we ensure seamless online experiences for all our clients.</p>
              </div>
              <!-------------------------------------------------------------- end -------------------------------------------------------------------->
                <div class="container-f">
                  <div class="icon">
                    <img src="./media/img/png/1.png" alt="Partners">
                    <p>PARTNERS</p>
                  </div>
                  <div class="icon">
                    <img src="./media/img/png/2.png" alt="Newsroom">
                    <p>NEWSROOM</p>
                  </div>
                  <div class="icon">
                    <img src="./media/img/png/3.png" alt="Events">
                    <p>EVENTS</p>
                  </div>
                  <div class="icon">
                    <img src="./media/img/png/4.png" alt="Careers">
                    <p>CAREERS</p>
                  </div>
                </div>
                <!--------------------------------------------------- KNOW MORE ------------------------------------------>
                <div class="section">
                  <p>Tejas Networks successfully demonstrates end-to-end
                    network based on its indigenous 4G/5G wireless, optical
                    and satellite products</p>
                  <a href="#" class="button">KNOW MORE</a>
                </div>

                <!------------------------------------------ Solutions for your Network --------------------------------------------->
                <div class="container-net">
                  <h1>Solutions for your Network</h1>
                  <div class="grid">
                    <div class="card">
                      <img src="./media/img/div img/5g.png"
                        alt="5G RAN and Backhaul">
                      <h2>5G RAN and Backhaul</h2>
                      <p>Scalable, reliable and high-performance optical
                        network for cost-efficient transport of ...</p>
                      <a href="#">Read more</a>
                    </div>
                    <div class="card">
                      <img src="./media/img/div img/Broadband.jpg"
                        alt="Broadband Access Networks">
                      <h2>Broadband Access Networks</h2>
                      <p>With increasing penetration of internet and
                        exploding data consumption, there ...</p>
                      <a href="#">Read more</a>
                    </div>
                    <div class="card">
                      <img
                        src="./media/img/div img/Premium Enterprise Connectivity.jpg"
                        alt="Premium Enterprise Connectivity">
                      <h2>Premium Enterprise Connectivity</h2>
                      <p>Enterprise Connectivity Services are growing at an
                        exponential pace. Large enterprises ...</p>
                      <a href="#">Read more</a>
                    </div>
                    <div class="card">
                      <img
                        src="./media/img/div img/Wholesale Bandwidth.jpeg"
                        alt="Wholesale & DCI">
                      <h2>Wholesale & DCI</h2>
                      <p>Wholesale Bandwidth Service providers sell bulk
                        bandwidth to other communication ...</p>
                      <a href="#">Read more</a>
                    </div>
                    <div class="card">
                      <img src="./media/img/div img/next-gen-networks.jpg"
                        alt="Next-Gen Critical Networks">
                      <h2>Next-Gen Critical Networks</h2>
                      <p>Utility companies require communication systems
                        that can ensure reliable, safe and secure ...</p>
                      <a href="#">Read more</a>
                    </div>
                    <div class="card">
                      <img
                        src="./media/img/div img/government-network-cybersecurity.png"
                        alt="Government And Defence Networks">
                      <h2>Government And Defence Networks</h2>
                      <p>Empowering Mission-Critical Applications with
                        Reliable, Scalable and Robust ...</p>
                      <a href="#">Read more</a>
                    </div>
                  </div>
                </div>
<!---------------------------------------------------------- spotlight ------------------------------------------>
                <div class="spotlight">
                  <h1>In the Spotlight</h1>
                  <div class="con">
                    <div class="con-one">
                      <div class="card-one">
                        <div class="img">
                          <img
                            src="media/img/spotlight/1.jpg"
                            alt="Description of the image"
                            height="250" />
                        </div>
                        <div class="card-contents">
                          <h3>
                            Bluebrain Solutions Networks Deploys Ultra
                            Converged Broadband Solution for
                            Tata Tele Business Services
                          </h3>
                          <a href="#">Read More</a>
                        </div>
                      </div>
                      <div class="card-one">
                        <div class="img">
                          <img
                            src="media/img/spotlight/2.jpg"
                            alt="Description of the image"
                            height="250" />
                        </div>
                        <div class="card-contents">
                          <h3>
                            Bluebrain Solutions Networks Deploys Ultra
                            Converged Broadband Solution for
                            Tata Tele Business Services
                          </h3>
                          <a href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                    <div class="con-one">
                      <div class="card-one">
                        <div class="img">
                          <img
                            src="media/img/spotlight/3.jpg"
                            alt="Description of the image"
                            height="250" />
                        </div>
                        <div class="card-contents">
                          <h3>
                            Bluebrain Solutions Networks Deploys Ultra
                            Converged Broadband Solution for
                            Tata Tele Business Services
                          </h3>
                          <a href="#">Read More</a>
                        </div>
                      </div>
                      <div class="card-one">
                        <div class="img">
                          <img
                            src="media/img/spotlight/4.jpg"
                            alt="Description of the image"
                            height="250" />
                        </div>
                        <div class="card-contents">
                          <h3>
                            Bluebrain Solutions Networks Deploys Ultra
                            Converged Broadband Solution for
                            Tata Tele Business Services
                          </h3>
                          <a href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                    <div class="con-one">
                      <div class="card-one">
                        <div class="img">
                          <img
                            src="media/img/spotlight/6.jpg"
                            alt="Description of the image"
                            height="250" />
                        </div>
                        <div class="card-contents">
                          <h3>
                            Bluebrain Solutions Networks Deploys Ultra
                            Converged Broadband Solution for
                            Tata Tele Business Services
                          </h3>
                          <a href="#">Read More</a>
                        </div>
                      </div>
                      <div class="card-one">
                        <div class="img">
                          <img
                            src="media/img/spotlight/5.jpg"
                            alt="Description of the image"
                            height="250" />
                        </div>
                        <div class="card-contents">
                          <h3>
                            Bluebrain Solutions Networks Deploys Ultra
                            Converged Broadband Solution for
                            Tata Tele Business Services
                          </h3>
                          <a href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!------------------------------------------- About Us -------------------------------------------->
                <section class="about-us">
                  <h2>About Us</h2>
                  <p class="description">A global broadband, optical and
                    wireless networking company, with a focus on technology,
                    innovation and R&D</p>
                  <div class="stats">
                    <div class="stat">
                      <div class="img">
                        <img src="media/img/png-two/1.png"
                          alt="Description of the image" height="100">

                      </div>
                      <span class="number">&gt;750000</span>
                      <span class="label">Deployments</span>
                    </div>
                    <div class="stat">
                      <div class="img">
                        <img src="media/img/png-two/2.png"
                          alt="Description of the image" height="100">

                      </div>
                      <span class="number">&gt;500</span>
                      <span class="label">Networks</span>
                    </div>
                    <div class="stat">
                      <div class="img">
                        <img src="media/img/png-two/3.png"
                          alt="Description of the image" height="100">

                      </div>
                      <span class="number">&gt;75</span>
                      <span class="label">Countries</span>
                    </div>
                    <div class="stat">
                      <div class="img">
                        <img src="media/img/png-two/4.png"
                          alt="Description of the image" height="100">

                      </div>
                      <span class="number">&gt;30</span>
                      <span class="label">Prestigious Innovation
                        Awards</span>
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
                                  href="developer.php">
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
