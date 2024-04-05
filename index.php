<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="Home.css" rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
<?php
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false){
    echo'
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a href="index.php"><img src="logo.jpeg"></a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active mx-lg-2" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="About us.php">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="services.php">Services</a>
            </li>
          </ul>
        </div>
      </div>
        <a class="nav-link mx-lg-4" href="login.php">Login</a>
        <a href="Register.php" class="login-button  mx-sm-2">Register Now</a>
        <button class="navbar-toggler  mx-sm-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </nav> 
    ';
  }
  else{
    require 'nav.php';
  }
?>  

   
    
    <header class="header__container">
      <div class="header__image__container">
          <div class="header__content">
              <h1>Welcome To Techspot Infotech</h1>
              <p>Learn Technologies through Real-world Projects</p>
          </div>
      </div>
    </header>

  <section class="course">
        <h1>Our course</h1>
        <h4>Unlock Your Coding Potential With Our Expert-Led Courses.</h4>
        <div class="Row">
            <div class="course-card">
                <img src="Courses/dataalgo.jpeg" alt="Portfolio" />
                <h4>Data Structure and Algorithm</h4>
                <p> Beginner Professional Certifiacte. 6 months </p>
                <a class="btn btn-dark  mt-auto">Enroll now</a>
            </div>
            <div class="course-card">
                <img src="Courses/fullstack.jpeg" alt="Portfolio" />
                <h4>Full Stack Web Development</h4>
                <p> Beginner Professional Certifiacte. 6 months </p>
                <a class="btn btn-dark  mt-auto ">Enroll now</a>
            </div>
            <div class="course-card">
                <img src="Courses/Python.jpeg" alt="Portfolio" />
                <h4>Python Crash Course</h4>
                <p> Beginner Professional Certifiacte. 3months </p>
                <a class="btn btn-dark mt-auto ">Enroll now</a>
            </div>
        </div>
        <a class="btn btn-dark mt-5" href="services.html">Read More</a>
  </section>  
  
  <section class="Project">
    <h1>Our Projects</h1>
    <p>Here some of the the projects that our interns have done.</p>

    <div class="Row">
        <div class="project-card">
            <img src="projects/Portfolia.jpeg" alt="Portfolio" />
            <h4>Portfolia</h4>
            <p>JavaScript portfolio project using HTML and CSS for structure and styling, and possibly integrating frameworks like React or Vue.js for dynamic components.</p>
            <a class="btn btn-dark mt-auto">View project</a>
        </div>
        <div class="project-card">
            <img src="projects/employee.jpeg" alt="Employee Management System" />
            <h4>Employee Mnanagenment System</h4>
            <p>Java-based employee management system using JavaFX for GUI, JDBC for database connectivity, and MySQL for efficient data storage and retrieval.</p>
            <a class="btn btn-dark mt-auto">View project</a>
        </div>
        <div class="project-card">
            <img src="projects/movie.jpeg" alt="Movie Recommondation System" />
            <h4>Movie Reccomondation System </h4>
            <p>Movie recommendation system using collaborative filtering and machine learning in Python, leveraging Pandas, Scikit-learn, and possibly TensorFlow for enhanced accuracy.</p>
            <a class="btn btn-dark mt-auto">View project</a>
        </div>
    </div>

    <div class="Row">
        <div class="project-card">
            <img src="projects/ecommerce.jpeg" alt="Ecommerce Website" />
            <h4>Ecommerce Website</h4>
            <p>Python-based e-commerce website using Django framework, integrating Stripe for payment, and incorporating Bootstrap for responsive design and frontend development.</p>
            <a class="btn btn-dark mt-auto">View project</a>
        </div>
        <div class="project-card">
            <img src="projects/bank.jpeg" alt="Bank Management System" />
            <h4>Bank Management System</h4>
            <p>Python-based bank management system using Tkinter for GUI, SQLite for database, and incorporating object-oriented programming principles for efficient data handling.</p>
            <a class="btn btn-dark mt-auto">View project</a>
        </div>
        <div class="project-card">
            <img src="projects/Face.jpeg" alt="Face Recognition System" />
            <h4>Face Recognition ateendance system</h4>
            <p>Python-based face recognition attendance system using OpenCV and dlib for face detection, and integrating SQLite for data storage and retrieval.</p>
            <a class="btn btn-dark mt-auto">View project</a>
        </div>
    </div>
  </section>

  <section class="review">
    <h1>Testimonils</h1>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="testimonils/t1.jpg">
            <p>
              "My internship in Python web development at TechSpot Infotech was a journey of exploration and growth. I had the privilege of working on diverse projects, utilizing Python frameworks to create dynamic and responsive web applications. The exposure to agile development methodologies and best practices significantly contributed to my proficiency in Python-based web development."
            </p>
            <h5>by Pooja Patil</h4>
            <h6>Web Developer</h5>
        </div>
        <div class="swiper-slide">
          <img src="testimonils/t2.jpg">
            <p >
              "TechSpot Infotech offered a dynamic environment for honing web development skills. From frontend frameworks to backend technologies, the internship provided a comprehensive understanding of building responsive and efficient web applications. Collaborating on diverse projects allowed me to strengthen my problem-solving abilities and craftsmanship in creating user-centric interfaces."
            </p>
            <h5>by Atharv Khot</h4>
            <h6>Web Developer</h5>
        </div>
        <div class="swiper-slide">
          <img src="testimonils/t3.webp">
            <p>
              "During my internship at TechSpot Infotech, I had the incredible opportunity to dive deep into machine learning projects. The hands-on experience and mentorship provided a solid foundation for understanding complex algorithms, model development, and practical applications. Grateful for the exposure to real-world challenges that enriched my skills in the field."
            </p>
            <h5>by Rahul Vaidya</h4>
            <h6>ML Engineer</h5>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    
  </section>

  
  
  <section class="footer ">
        <h4>Techspot Infotech| Copyright@2024| www.techspotinfotech.com</h4>
        <h6>Follows us on</h6>
        <div class="social">
            <i class="fa fa-facebook"></i> 
            <i class="fa fa-instagram"></i> 
            <i class="fa fa-linkedin"></i> 
        </div>
  </section>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
 <script>
   var swiper = new Swiper(".mySwiper", {
     effect: "flip",
     grabCursor: true,
     pagination: {
       el: ".swiper-pagination",
     },
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
   });
 </script>
</body>
</html>