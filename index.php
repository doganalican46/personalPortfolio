<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ali Can Dogan - Personal Web Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="website icon" type="png" href="images/website_icon.png">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("uWnEB4TnXLiSdMTEU");
        })();
    </script>
    <script src="js/index.js"></script>
</head>

<body class="bg-light">


    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-lg">
            <a class="navbar-brand text-danger fw-bold fs-4" href="#">Personal Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">What I Do?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->


    <!-- home section start -->
    <section class="home py-5" id="home">
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="home-img text-center">
                        <img src="images/Biyometrik.jpg" class="rounded-circle" alt="Profile image" width="300"
                            height="350">
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text">
                        <p class="text-muted mb-1">Hello I'm</p>
                        <h1 class="text-danger text-uppercase fs-1 fw-bold">Software Engineer</h1>
                        <h2 class="fs-4">Ali Can Doğan</h2>
                        <p class="mt-4 text-muted"> I graduated as a software engineer from <a
                                href="https://www.eul.edu.tr/" class="text-dark me-2 text-decoration-none"
                                target="_blank">European
                                University of Lefke</a> where I pursued my studies from 2018 to 2023. Presently, I am
                            actively working on independent projects and constantly seeking opportunities to expand my
                            knowledge. </p>
                        <a href="#portfolio" class="btn btn-danger px-3 mt-4">My Works</a>
                        <br> <br>
                        <div class="social-links ">
                            <a href="https://www.facebook.com/doganalican46/" target=”_blank” class="text-dark me-2"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/can_dgn46" target=”_blank” class="text-dark me-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/can.dgn.46/" target=”_blank” class="text-dark me-2"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/doganalican46/" target=”_blank”
                                class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://github.com/doganalican46" target=”_blank” class="text-dark me-2"><i
                                    class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->


    <!-- about section start -->
    <section class="about py-5 bg-white" id="about">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="fs-4 mb-3">Hello! I'm Ali Can,</h3>
                        <p class="text-muted">I am a 22-year-old software engineering student with a passion for web,
                            Android, and desktop development. Throughout my academic journey, I have gained valuable
                            experience in these areas, which has allowed me to develop a solid foundation in software
                            development. I thrive on challenges and embrace innovation in the ever-evolving software
                            world. My strong adaptability to both Windows and Linux environments, along with my ability
                            to collaborate effectively within a team, makes me a dedicated individual. My goal is to
                            continuously enhance my programming skills and build strong professional relationships. </p>
                    </div>
                    <!-- <div class="row text-center text-uppercase my-3">
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">19</h4>
                                <p class="text-muted">Total Project</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">90</h4>
                                <p class="text-muted">Another Statistics</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">50</h4>
                                <p class="text-muted">Another Statistics</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">

                            <!-- İngilizce CV dosyası -->
                            <a href="https://drive.google.com/uc?export=download&id=1ctPoDfETsTXSytUQvrx-rG471iOniPeR"
                                class="btn px-3 btn-danger me-5" download="CV - English.pdf">Download CV - English </a>

                            <!-- Türkçe CV dosyası -->
                            <a href="https://drive.google.com/uc?export=download&id=1tBFMXM706UObuv8y3wtz9o13pQ1Q4uZv"
                                class="btn px-3 btn-danger me-5" download="CV - Turkish.pdf">Download CV - Turkish </a>
                            <div class="social-links">
                                <a href="https://www.facebook.com/doganalican46/" target=”_blank”
                                    class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/can_dgn46" target=”_blank” class="text-dark me-2"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/can.dgn.46/" target=”_blank”
                                    class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/doganalican46/" target=”_blank”
                                    class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/doganalican46" target=”_blank” class="text-dark me-2"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-mt-0">
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">HTML</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">CSS</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">PHP</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">C++</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Java</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- service section start -->
    <section class="services py-5" id="services">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">What I do?</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="fs-5 py-2">Web Development</h3>
                        <p class="text-muted">I have developed multiple web projects including my graduation project,
                            using different ways like Python-flask and HTML-CSS-JS/PHP.
                            <a href="https://github.com/doganalican46" class="text-dark me-2 " target="_blank">See all
                                on GitHub!</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2">
                            <i class="fas fa-computer"></i>
                        </div>
                        <h3 class="fs-5 py-2">C/C++</h3>
                        <p class="text-muted">During my university life, I did many projects and assignments on
                            object-oriented programming languages such as C/C++.
                            <a href="https://github.com/doganalican46" class="text-dark me-2 " target="_blank">See all
                                on GitHub!</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h3 class="fs-5 py-2">Desktop Applications</h3>
                        <p class="text-muted">During my university life, I did many projects and assignments on
                            object-oriented programming languages such as C/C++.
                            <a href="https://github.com/doganalican46" class="text-dark me-2 " target="_blank">See all
                                on GitHub!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->


    <!-- portfolio section start -->
    <section class="portfolio py-5 bg-white" id="portfolio">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Latest Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <script>
                    function createPortfolioItem(imageUrl, name, githubUrl) {
                        var container = document.querySelector('.container');
                        var portfolioItem = document.createElement('div');
                        portfolioItem.className = 'col-md-6 col-lg-4';
                        portfolioItem.innerHTML = `
                            <div class="portfolio-item">
                                <img src="${imageUrl}" class="w-100 img-thumbnail" alt="portfolio image">
                                <h3 class="text-capitalize fs-5 my-2">${name}</h3>
                                <p><a class="text-danger text-decoration-none" target="_blank" href="${githubUrl}">See Details</a></p>
                            </div>
                        `;
                        container.appendChild(portfolioItem);
                        createPortfolioItem("images/bus tracking system.png", "Bus Tracking System", "https://github.com/doganalican46/BusTrackingSystem");
                        createPortfolioItem("images/EUL- Registration.png", "EUL-Course Registration System", "https://github.com/doganalican46/EUL-Course-Registration-Project");

                    }
                </script>

                <!-- <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="images/EUL- Registration.png" class="w-100 img-thumbnail" alt="portfolio image">
                        <h3 class="text-capitalize fs-5 my-2">EUL-Course Registration System</h3>
                        <p><a class="text-danger text-decoration-none" target="_blank"
                                href="https://github.com/doganalican46/EUL-Course-Registration-Project">See Details</a>
                        </p>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="images/hms.png" class="w-100 img-thumbnail" alt="portfolio image">
                        <h3 class="text-capitalize fs-5 my-2">Hospital Management System</h3>
                        <p><a class="text-danger text-decoration-none" target="_blank"
                                href="https://github.com/doganalican46/DoctorAppointmentBookingSystem">See Details</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="images/child monitoring.png" class="w-100 img-thumbnail" alt="portfolio image">
                        <h3 class="text-capitalize fs-5 my-2">Child Monitoring System</h3>
                        <p><a class="text-danger text-decoration-none" target="_blank"
                                href="https://github.com/doganalican46/ChildMonitoringSystemApp">See Details</a></p>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="images/project.png" class="w-100 img-thumbnail" alt="portfolio image">
                        <h3 class="text-capitalize fs-5 my-2">Chat Application</h3>
                        <p><a class="text-danger text-decoration-none" target="_blank" href="#">See Details</a></p>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="images/university management system.png" class="w-100 img-thumbnail"
                            alt="portfolio image">
                        <h3 class="text-capitalize fs-5 my-2">University Management System</h3>
                        <p><a class="text-danger text-decoration-none" target="_blank"
                                href="https://github.com/doganalican46/UniversityManagementSystem">See Details</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="images/project.png" class="w-100 img-thumbnail" alt="portfolio image">
                        <h3 class="text-capitalize fs-5 my-2">Personal Website</h3>
                        <p><a class="text-danger text-decoration-none" target="_blank" href="#">You are here now :D</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="images/turtle game.png" class="w-100 img-thumbnail" alt="portfolio image">
                        <h3 class="text-capitalize fs-5 my-2">Turtle Game</h3>
                        <p><a class="text-danger text-decoration-none" target="_blank"
                                href="https://github.com/doganalican46/TurtleGameWithPython">See Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- portfolio section end -->


    <!-- contact section start -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <section class="contact py-5 " id="contact">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">

                    <div class="container-form">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <h5 for="name">Name</h5>
                                <input type="text" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    id="name" placeholder="Enter your name..." />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <h5 for="email">Email</h5>
                                <input type="email" class="form-control form-control-lg fs-6 border-0 shadow-sm"
                                    id="email" placeholder="Enter your e-mail..." />
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <h5 for="subject">Subject</h5>
                            <input type="text" class="form-control form-control-lg fs-6 border-0 shadow-sm" id="subject"
                                placeholder="Enter your subject..." />
                        </div>
                        <div class="col-lg-12 mb-4">
                            <h5 for="message">Message</h5>
                            <textarea class="form-control form-control-lg fs-6 border-0 shadow-sm" id="message"
                                placeholder="Type your message" rows="3"></textarea>
                        </div>
                        <button class="btn btn-danger px-3" onclick="validateAndSendMail()">Submit</button>
                        <script>
                            function validateAndSendMail() {
                                var name = document.getElementById("name").value;
                                var email = document.getElementById("email").value;
                                var subject = document.getElementById("subject").value;
                                var message = document.getElementById("message").value;

                                if (name === "" || email === "" || subject === "" || message === "") {
                                    alert("Please fill in all the required fields.");
                                } else {
                                    sendMail();
                                }
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- contact section end -->


    <!-- footer section start -->
    <footer class="footer border-top py-4 bg-white">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center text-muted">&copy; Ali Can Doğan</p>
                </div>
            </div>
            <div class="social-links text-center">
                <a href="https://www.facebook.com/doganalican46/" target=”_blank” class="text-dark me-2"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/can_dgn46" target=”_blank” class="text-dark me-2"><i
                        class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/can.dgn.46/" target=”_blank” class="text-dark me-2"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/doganalican46/" target=”_blank” class="text-dark me-2"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/doganalican46" target=”_blank” class="text-dark me-2"><i
                        class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>
    <!-- footer section end -->


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>