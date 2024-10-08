<!-- Developed by Poulomi Bhattacharya -->
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiHealth</title>

    <!-- title icon -->
    <link rel="icon" href="./assets/images/home-section/logo/logo-main.png" type="image/x-icon" />
    <!-- title icon -->

    <!-- all linked css -->f
    <link rel="stylesheet" href="./styles/universal-css-design/universal-css-design.css">
    <link rel="stylesheet" href="./styles/top-navbar/top-navbar.css">
    <link rel="stylesheet" href="./styles/top-navbar/register.css">
    <link rel="stylesheet" href="./styles/top-navbar/login.css">
    <link rel="stylesheet" href="./styles/top-navbar/services.css">
    <link rel="stylesheet" href="./styles/body-elements-wrapper/body-elements-wrapper.css">
    <link rel="stylesheet" href="./styles/body-elements-wrapper/home-wrapper.css">
    <link rel="stylesheet" href="./styles/body-elements-wrapper/site-basic-info.css">
    <link rel="stylesheet" href="./styles/body-elements-wrapper/clients.css">
    <link rel="stylesheet" href="./styles/footer/footer.css">
    <!-- all linked css -->

    <!-- universal google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- universal google fonts -->

    <!-- logo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <!-- logo font -->

</head>



<body>

    <!-- top-navbar starts -->
    <div class="top-navbar">
        <div class="top-navbar-content">
            <div class="logo">
                <img loading="lazy" src="./assets/images/home-section/logo/logo-main.png" alt="">
                <p>Digi<span>Health</span></p>
            </div>

            <div class="top-navbar-content-right">
                <div class="all-items">
                    <div class="search-box">
                        <input type="text" placeholder="Search Website">
                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    </div>

                    <div class="nav-list">
                        <ul>
                            <li><a href="./blogs/blogs.html" target="_blank">Blogs</a></li>
                            <li><a href="">Location</a></li>
                            <li><a href="">Donate</a></li>
                            <li><a href="">NGO's</a></li>
                            <li><a href="">Our clients</a></li>
                        </ul>
                        <i class="fa-solid fa-user" style="color: #ffffff; margin: 0;"></i>

                        <?php
                        session_start();
                        if (isset($_SESSION['email'])) {
                            echo '<ul>
                                        <li id="userDropdown">
                                            <p style="cursor:pointer;">' . htmlspecialchars($_SESSION['username']) . '</p> 
                                            <ul id="userOptions">
                                                <li><a href="user-profile/user-profile.php">My Profile</a></li>
                                                <li><a href="php/logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    
                                  </ul>';
                        } else {
                            echo '<ul>

                                        <li>
                                            <p style="cursor:pointer;" id="registerLink">Register</p>
                                            <li>
                                            <p style="cursor:pointer;" id="loginLink">Login</p>
                                            </li>

                                        </li>
                                  </ul>';
                        }
                        ?>

                    </div>
                </div>


                <div class="nav-list">
                    <ul>
                        <li><a id="aServices" href="#">Services</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a target="_blank" href="./medicines/medicines.php">Medicines</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <button>Book Appointment</button>
                    <button class="findBloodButton" onclick="window.open('./find-blood/find-blood.html', '_blank');">Find Blood</button>
                </div>
            </div>

        </div>

        <div class="top-navbar-bottom">
            <p>Presence &nbsp; >></p>
            <ul>
                <li><a href="">Kolkata</a></li>
                <li><a href="">Mumbai</a></li>
                <li><a href="">Pune</a></li>
                <li><a href="">Chennai</a></li>
                <li><a href="">Bengaluru</a></li>
                <li><a href="">Goa</a></li>
                <li><a href="">Delhi</a></li>
                <li><a href="">Mysore</a></li>
                <li><a href="">Surat</a></li>
                <li><a href="">Chandigrah</a></li>
            </ul>
        </div>
    </div>
    <!-- top-navbar ends -->


    <!-- Register Form starts -->
    <div class="login-form" id="registerForm">
        <form action="php/register.php" method="post">
            <div class="login-form-title">
                <p>Sign-Up</p>
                <i id="closeForm" class="fa-regular fa-circle-xmark" style="color: #05445E;"></i>
            </div>
            <div class="scroll">
                <input type="text" name="name" placeholder="Your Name">
                <input type="text" name="email" placeholder="Your Email">
                <input type="text" name="phone" placeholder="Your Phone">
                <!-- <input type="text" name="phone" placeholder="Your Phone"> -->
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confPassword" placeholder="Confirm Passowrd">
            </div>
            <a href="">Already have account? Login here</a>
            <button>Sign-Up</button>
        </form>
    </div>
    <!-- Register Form ends -->


    <!-- Login Form starts -->
    <div class="login-form login" id="loginForm">
        <form action="php/login.php" method="post">
            <div class="login-form-title">
                <p>Sign-In</p>
                <i id="closeLoginForm" class="fa-regular fa-circle-xmark" style="color: #05445E;"></i>
            </div>
            <div class="scroll">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
            </div>
            <a href="">Don't have account? Register here</a>
            <button>Sign-In</button>
            <p>Login with</p>
            <div class="icons">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </form>
    </div>
    <!-- Login Form ends -->


    <!-- services pop-up container starts -->
    <div class="services-container" id="servicesContainer">
        <div class="services-container-elements">

            <div class="elements">
                <div class="img">
                    <img src="./assets/images/home-section/top-navbar/services/cardiology.png" alt="">
                </div>
                <div class="content">
                    <p>A healthy heart means a healthy life, cherish it dearly</p>
                </div>
            </div>
            <div class="elements">
                <div class="img">
                    <img src="./assets/images/home-section/top-navbar/services/dental.png" alt="">
                </div>
                <div class="content">
                    <p>In dentistry, every tooth tells a story of care and dedication</p>
                </div>
            </div>
            <div class="elements">
                <div class="img">
                    <img src="./assets/images/home-section/top-navbar/services/medicine.png" alt="">
                </div>
                <div class="content">
                    <p>Medicines cure diseases, but only doctors can cure patients</p>
                </div>
            </div>
            <div class="elements">
                <div class="img">
                    <img src="./assets/images/home-section/top-navbar/services/eye-care.png" alt="">
                </div>
                <div class="content">
                    <p>Vision is the art of seeing what is invisible to others</p>
                </div>
            </div>

        </div>
    </div>
    <!-- services  pop-up container ends -->




    <!-- body-elements-wrapper starts -->
    <div class="body-elements-wrapper">
        <!-- home-wrapper starts -->
        <div class="home-wrapper">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/home-section/home-wrapper/1.png" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/home-section/home-wrapper/2.png" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/home-section/home-wrapper/3.png" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/home-section/home-wrapper/4.png" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/home-section/home-wrapper/5.png" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/home-section/home-wrapper/6.png" class="d-block w-100" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
        <!-- home-wrapper ends -->


        <!-- site-basic-info starts -->
        <div class="site-basic-info">
            <div class="content">
                <div class="content-text">
                    <i class="fa-solid fa-1 fa-beat" style="color: #fff;"></i>
                    <p> Get your medications</p>
                    <p>delivered to</p>
                    <p>your doorstep.</p>
                </div>
                <div class="content-img">
                    <dotlottie-player src="https://lottie.host/0d4d8575-ce25-4196-93fc-39a7448d4ce8/NPAmRBSBtv.json"
                        background="transparent" speed="1" style="width: 100%; height: 100%; z-index: -1;" loop
                        autoplay></dotlottie-player>
                </div>
            </div>
            <div class="content">
                <div class="content-img">
                    <dotlottie-player src="https://lottie.host/a8d79492-b373-4a75-af00-cce84de292d4/aKff3IYyWJ.json"
                        background="transparent" speed="1" style="width: 100%; height: 100%; z-index: -1;" loop
                        autoplay></dotlottie-player>
                </div>
                <div class="content-text">
                    <i class="fa-solid fa-2 fa-beat" style="color: #fff;"></i>
                    <p>Ensure your privacy</p>
                    <p>with encrypted</p>
                    <p> video consultations.</p>
                </div>
            </div>
            <div class="content">
                <div class="content-text">
                    <i class="fa-solid fa-3 fa-beat" style="color: #fff;"></i>
                    <p>Manage your health </p>
                    <p>information seamlessly with</p>
                    <p>our secure EHR system.</p><!--EHR refers to Electronic Health Report-->
                </div>
                <div class="content-img">
                    <dotlottie-player src="https://lottie.host/3ad73178-5224-4a54-9351-7488bcca5c04/aEQWAtiTR6.json"
                        background="transparent" speed="1" style="width: 100%; height: 100%; z-index: -1;" loop
                        autoplay></dotlottie-player>
                </div>
            </div>
            <div class="content">
                <div class="content-img">
                    <dotlottie-player src="https://lottie.host/200da68b-fc87-4482-b286-29adf956e9dc/oz15Bq6dFS.json"
                        background="transparent" speed="1" style="width: 100%; height: 100%; z-index: -1;" loop
                        autoplay></dotlottie-player>
                </div>
                <div class="content-text">
                    <i class="fa-solid fa-4 fa-beat" style="color: #fff;"></i>
                    <p>Connect with our board-certified</p>
                    <p>doctors from the</p>
                    <p> comfort of your home.</p>
                </div>
            </div>
        </div>
        <!-- site-basic-info ends -->


        <!-- clients slider starts -->
        <div class="clients">
            <div class="client-logos-slide">
                <img src="./assets/images/clients/3m.svg" />
                <img src="./assets/images/clients/barstool-store.svg" />
                <img src="./assets/images/clients/budweiser.svg" />
                <img src="./assets/images/clients/buzzfeed.svg" />
                <img src="./assets/images/clients/forbes.svg" />
                <img src="./assets/images/clients/macys.svg" />
                <img src="./assets/images/clients/menshealth.svg" />
                <img src="./assets/images/clients/mrbeast.svg" />
            </div>
        </div>
        <!-- clients slider ends -->

    </div>
    <!-- body-elements-wrapper ends -->





    <!-- footer starts -->
    <div class="footer-wrapper">

        <div class="footer-elements">
            <div class="footer-logo">
                <div class="logo">
                    <img src="assets/images/home-section/logo/logo-main.png" alt="">
                    <p>Digi<span>Health</span></p>
                </div>

                <div class="newsletter">
                    <p>Subscribe our newsletter</p>
                    <div class="content">
                        <input type="text" placeholder="Entter your email">
                        <i class="fa-solid fa-paper-plane" style="color: #75E6DA;"></i>
                    </div>
                </div>

                <div class="social-icons">
                    <i class="fa-brands fa-linkedin" style="color: #74C0FC;"></i>
                    <i class="fa-brands fa-square-instagram" style="color: #e4406f;"></i>
                    <i class="fa-brands fa-skype" style="color: #00aff0 ;"></i>
                    <i class="fa-brands fa-square-facebook" style="color: #3b5998;"></i>
                    <i class="fa-brands fa-youtube" style="color: #cd201f;"></i>
                </div>

                <div class="social-icons playstore">
                    <img src="assets/images/footer/footer-logo/playstore.png" alt="">
                    <img src="assets/images/footer/footer-logo/appstore.png" alt="">
                </div>
            </div>

            <div class="user-links">
                <p>User Links</p>
                <ul>
                    <li><a href="">Feedback</a></li>
                    <li><a href="">Documents</a></li>
                    <li><a href="">Patient-Resources</a></li>
                    <li><a href="">Accessibility</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>

            <div class="user-links organization-links">
                <p>Organization Links</p>
                <ul>
                    <li><a href="">Organization-policy</a></li>
                    <li><a href="">Terms & conditions</a></li>
                    <li><a href="">Partners</a></li>
                    <li><a href="">Work-culture</a></li>
                    <li><a href="">Employ-policy</a></li>
                    <li><a href="">Contributors</a></li>
                    <li><a href="">Support</a></li>
                </ul>
            </div>

            <div class="contact-form">
                <p>Contact-us</p>
                <form action="" method="post">
                    <input type="text" placeholder="Your Name">
                    <input type="text" placeholder="Your Email">
                    <!-- <input type="text" placeholder="Your Message">
                     -->
                    <textarea name="" id=""
                        style="width: 90%; height: 100px; padding: 7px; border-radius: 5px; outline: none; font-weight: 500;"
                        placeholder="Your message"></textarea>
                    <button>Submit</button>
                </form>
            </div>
        </div>
        <h3>© 2024 Poulomi Bhattacharya. All rights reserved. Developed by Poulomi Bhattacharya for DigiHealth.</3>
    </div>
    <!-- footer ends -->


    <!-- font awasome -->
    <script src="https://kit.fontawesome.com/cf9f264ee5.js" crossorigin="anonymous"></script>
    <!-- font awasome -->


    <!-- lottie player -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <!-- lottie player -->


    <!-- all linked scripts -->
    <script src="scripts/top-navbar/services.js"></script>
    <script src="scripts/top-navbar/register.js"></script>
    <script src="scripts/top-navbar/login.js"></script>
    <script src="scripts/body-elements-wrapper/body-elements-wrapper.js"></script>
    <script src="scripts/body-elements-wrapper/home-wrapper.js"></script>
    <script src="scripts/body-elements-wrapper/clients.js"></script>
    <!-- all linked scripts -->



</body>

</html>

<!-- By Suraj -->