<footer
      class="aai-footer pt-120"
      style="
        background: url('assets/img/bg/footer-bg.jpeg') no-repeat center
          center/cover;
      "
    >
      <div class="container">
        <div class="aai-footer-support">
          <div class="row g-4 align-items-center">
            <div class="col-lg-6">
              <div class="aai-support-info d-flex align-items-center">
                <div>
                  <img src="assets/img/icons/headset.svg" alt="" />
                </div>
                <div class="aai-support-contact">
                  <p class="aai-support-text mb-1">
                    Subscribe to our Newsletter
                  </p>
                  <!-- <a
                    href="tel:+1707797
                    0462"
                    class="aai-support-number"
                  >
                    +1 (707) 797 0462</a -->
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="aai-newsletter">
              <form action="footer.php" method="post">
                  <div class="position-relative">
                    <input
                      type="text"
                      name="email"
                      required=""
                      class="form-control"
                      placeholder="Enter your email"
                    />
                    <button type="submit" name="newsletter" class="aai-newsletter-btn">Subscribe</button>
                  </div>
                </form>
                <?php
// Establilshing Connection into MYSQL!
include('cms/connect.php');
if(isset($_POST['newsletter']))
{
    
        $email = $_POST['email'];
        $datetime = date('Y/m/d');
       
        // Insert Data into MySQL DB

        $insert_query = "INSERT INTO `newsletter`(`email`, `datetime`) VALUES ('$email','$datetime')";

        if(mysqli_query($connect,$insert_query)){

           
          echo "<script>window.alert('Request Submitted Successfully!')</script>";  
                 echo "<script>window.open('index.php','_self')</script>";   

        }else{
            echo mysqli_error($connect);
        }

}

?>
              </div>
            </div>
          </div>
        </div>
        <div class="aai-footer-navigation-widgets py-80">
          <div class="row">
            <div
              class="col-xl-4 col-lg-4 col-md-12"
              data-aos="fade-right"
              data-aos-duration="1500"
              data-aos-delay="50"
            >
              <div class="aai-footer-info">
                <a href="" class="aai-footer-logo">
                  <img src="assets/img/logo/logo-f.svg" alt="" />
                </a>
                <p class="aai-footer-desc">
                  Your Personalized AI Learning Journey
                </p>
                <div class="aai-social-links d-flex">
                  <a href="https://www.linkedin.com/company/pickmycourseai/" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-linkedin-in"></i>
                  </a>
                  <a href="https://x.com/pickmycourseai" target="_blank" rel="noopener noreferrer">
                  <i class="fa-brands fa-x-twitter"></i></a>
                  <a href="https://www.instagram.com/pickmycourse.ai/" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i
                  ></a>
                  <a href="https://www.youtube.com/@pickmycourseai" target="_blank" rel="noopener noreferrer"
                    ><i class="fa-brands fa-youtube"></i
                  ></a>
                  <a href="https://www.reddit.com/user/pickmycourseai/" target="_blank" rel="noopener noreferrer"
                    ><i class="fa-brands fa-reddit-alien"></i></a>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 mt-5 mt-lg-0">
              <div class="row">
                <div
                  class="col-xl-4 col-lg-4 col-md-4 mb-5 mb-lg-0"
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1500">
                  <nav class="aai-footer-nav">
                    <h3 class="aai-footer-nav-title">Company</h3>
                    <ul class="aai-footer-nav-list">
                      <li class="aai-footer-nav-list-item">
                        <a href="Discover/Our_Story.php" class="aai-footer-nav-link">Our Story </a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="Blogs/Blog.php" class="aai-footer-nav-link">Blogs</a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="Features.php" class="aai-footer-nav-link">Features</a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="Pricing.php" class="aai-footer-nav-link">Pricing</a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="Contact.php" class="aai-footer-nav-link"> Contact </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4 mb-5 mb-lg-0"
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1500"
                >
                  <nav class="aai-footer-nav">
                    <h3 class="aai-footer-nav-title">Resources</h3>
                    <ul class="aai-footer-nav-list">
                      <!-- <li class="aai-footer-nav-list-item">
                        <a href="services.html" class="aai-footer-nav-link"> Blogs</a>
                      </li> -->
                      <li class="aai-footer-nav-list-item">
                        <a href="https://helpcenter.pickmycourseai.support/" target="_blank" class="aai-footer-nav-link"> Help Center & FAQ </a>
                      </li>
                      <!-- <li class="aai-footer-nav-list-item">
                        <a href="services.html" class="aai-footer-nav-link">
                          Documentation & Tutorials
                        </a> -->
                      <!-- </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="services.html" class="aai-footer-nav-link">Intro Videos </a>
                      </li> -->
                    </ul>
                  </nav>
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4"
                  data-aos="fade-up"
                  data-aos-delay="500"
                  data-aos-duration="1500"
                >
                  <nav class="aai-footer-nav">
                    <h3 class="aai-footer-nav-title">Legal</h3>
                    <ul class="aai-footer-nav-list">
                      <li class="aai-footer-nav-list-item">
                        <a href="Terms_Service.php" class="aai-footer-nav-link">
                          Terms Of Service
                        </a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="Privacy_Policy.php" class="aai-footer-nav-link"> Privacy Policy</a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="Cancellation_Policy.php" class="aai-footer-nav-link"> Cancellation & Refund Policy</a>
                      </li>
                    
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="aai-footer-copyright text-center">
          <p class="aai-copyright-text">Copyright @2023 <a href="https://seenit.co" target="_blank">SeenIT</a>.</p>
        </div>
      </div>
    </footer>