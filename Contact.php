<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Instantly create custom courses on any topic with Pick My Course! Our AI-powered tool generates video, image, or text-based lessons, complete with subtopics and an AI teacher to answer your questions. Start learning today!">
    <meta name="author" content="SeenIT">
    <meta name="keywords" content="AI course generator, AI learning platform, create online courses, personalized learning, online education, eLearning, course creation, AI teacher, video courses, image-based learning, text-based learning, educational technology, edtech, online learning platform, custom courses, generate courses, learning tools, study tools, AI in education,  subtopic generator, knowledge creation, skill development">
    <title>Pricing | Pick My Course: AI-Powered Course Generator</title>
    <link rel="icon" href="assets/img/logo/Pick_MY_Course_Favicon.png" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/glightbox-min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- Menu Start -->
    <?php include 'header.php';?>
    <!-- Menu End -->

    <!-- Main Start -->
    <main class="wrapper">
      <!-- Breadcrumb Start -->
      <section
        class="aai-breadcrumb"
        style="
          background: url('assets/img/bg/bread-crumb-bg.jpeg') no-repeat center
            center/cover;
        "
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-auto">
              <div class="text-center">
                <h2 class="aai-page-title">Contact</h2>
                <ul
                  class="aai-breadcrumb-nav d-flex align-items-center justify-content-center"
                >
                  <li>
                    <a
                      href=""
                      class="aai-breadcrumb-link text-decoration-underline"
                      >Home</a
                    >
                  </li>
                  <li>
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M14 16L18 12M18 12L14 8M18 12L6 12"
                        stroke="#DADADA"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </li>
                  <li>
                    <a href="" class="aai-breadcrumb-link"> Contact </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Breadcrumb End -->
 <!-- Contact Form Start-->
 <section class="aai-contact-form">
        <div class="container">
          <div class="row g-5 align-items-center justify-content-between">
            <div class="col-xl-6 col-lg pe-lg-5">
              <div>
                <h2 class="section-title mb-5">
                  We love to collab with, Let’s do great together!
                </h2>
                <div class="">
                  <div class="aai-contact-widget mb-4">
                    <div class="aai-contact-widget-inner d-flex">
                      <div>
                        <img src="assets/img/icons/contact-1.svg" alt="" />
                      </div>
                      <div>
                        <h3 class="aai-contact-widget-title">Our email</h3>
                        <address class="aai-contact-address">
                          hello@pickmycourse.ai
                        </address>
                      </div>
                    </div>
                  </div>
                 <div class="aai-contact-widget mb-4">
                    <div class="aai-contact-widget-inner d-flex">
                      <div>
                        <img src="assets/img/icons/contact-2.svg" alt="" />
                      </div>
                      <div>
                        <h3 class="aai-contact-widget-title">Contact Info</h3>
                        <p class="aai-contact-support">
                          A901, Orvi, Balewadi, Pune, Maharastra - 411045
                        </p>
                        
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg">
              <div class="aai-contact-form">
              <form action="Contact.php" method="post">
                  <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                      <div class="aai-form-input">
                        <input
                          type="text"
                          name="name"
                           required=""
                          class="form-control shadow-none"
                          placeholder="Full Name"
                          
                        />
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="aai-form-input">
                        <input
                          type="text"
                           name="email"
                           required=""
                          class="form-control shadow-none"
                          placeholder="Email"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="aai-form-input">
                        <input
                          type="text"
                           name="phone"
                           required=""
                          class="form-control shadow-none"
                          placeholder="Phone Number"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="aai-form-input">
                        <input
                          type="text"
                           name="subject"
                           required=""
                          class="form-control shadow-none"
                          placeholder="Subject"
                        />
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="aai-form-input">
                        <textarea
                         name="message"
                          class="form-control shadow-none text-area"
                          placeholder="Message"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="d-flex justify-content-start">
                        <button type="submit" name="enquiry" class="aai-btn btn-pill-solid">
                          Send A Message
                        </button>
                      </div>
                    </div>
                  </div>
                </form>

                <?php
// Establilshing Connection into MYSQL!
include('cms/connect.php');
if(isset($_POST['enquiry']))
{
        
        

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $datetime = date('Y/m/d');
       
        // Insert Data into MySQL DB

        $insert_query = "INSERT INTO `contact`(`name`, `phone`, `email`, `subject`, `message`, `datetime`, `note`) VALUES  ('$name','$phone','$email','$subject','$message','$datetime','')";

        if(mysqli_query($connect,$insert_query)){

           
          echo "<script>window.alert('Enquiry Submitted Successfully!')</script>";  
                 echo "<script>window.open('contact.php','_self')</script>";   

        }else{
            echo mysqli_error($connect);
        }

}

?>
              </div>
            </div>
          </div>
        </div>
      </section>

     

      
      <!-- Faq End -->
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->

    <!-- All JS -->
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/glightbox-min.js"></script>
    <script src="assets/js/app.js"></script>
    
  </body>
</html>
