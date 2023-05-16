<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Routemamba - a javascript library.</title>
      <meta name="title" content="Routemamba - a javascript library.">
      <meta name="description" content="Routemamba is a js library to develop single page web applications easily, specially for php webapp. ">
      <meta name="keywords" content="routemamba, Route mamba, route mamba, javascript library, routemamba js, Reactive appplication, react js, next js, single page web app">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English">
      <meta name="revisit-after" content="1 days">
      <meta name="author" content="Routemamba">

      <!-- Open Graph / Facebook -->
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://routemamba.com/">
      <meta property="og:title" content="Routemamba - a javascript library.">
      <meta property="og:description" content="Routemamba is a js library to develop single page web applications easily, specially for php webapp. ">
      <meta property="og:image" content="https://routemamba.com/assets/images/logo.png">

      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="https://routemamba.com/">
      <meta property="twitter:title" content="Routemamba - a javascript library.">
      <meta property="twitter:description" content="Routemamba is a js library to develop single page web applications easily, specially for php webapp. ">
      <meta property="twitter:image" content="https://routemamba.com/assets/images/logo.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Righteous&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
            rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"
            href="assets/vendor/bootstrap/css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" type="text/css"
            href="assets/vendor/font-awesome/css/all.min.css" />
        <!-- Magnific Popup -->
        <link rel="stylesheet" type="text/css"
            href="assets/vendor/magnific-popup/magnific-popup.min.css" />
        <!-- Highlight Syntax -->
        <link rel="stylesheet" type="text/css"
            href="assets/vendor/highlight.js/styles/github.css" />
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css"
            />

            <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
        <style>
        /* Primary Color */
        :root {
            --primary-color: #c65817;
        }

        /* Secondary Color */
        :root {
            --secondary-color: #1E1E1E;
        }

        /* Styling for the landing page */
        body {
            background-color: white;
            color: var(--secondary-color);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .back-primary {
            background-color: var(--primary-color) !important;
            color: white;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--primary-color);
            color: white;
            /* padding: 20px; */
            z-index: 100;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .header.visible {
            opacity: 1;
        }

        .container {
            position: relative;
            max-width: 800px;
            margin: 120px auto 40px;
            padding: 40px;
            text-align: center;
        }

        h1 {
            color: var(--primary-color);
            opacity: 0;
            animation: fade-in 1s ease-in-out forwards;
        }

        .righteous {
            font-family: 'Righteous', cursive;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .hero-section{
            height: 100vh;
            background-image: url('/assets/images/texture.svg'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            opacity: 0.9;
        }
        .hero-fadeout {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px; /* Adjust the height as needed */
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
}


        .hero-logo {
            width: 200px;
            height: auto;
            margin-bottom: 20px;
            opacity: 0;
            animation: fade-in 1s ease-in-out forwards;
        }

        .key-feature i{
            font-size: 80px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .cta-button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 30px;
        }

        .cta-button:hover {
            background-color: #a04f12;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .star {
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.8);
            animation: twinkle 1.5s infinite;
        }

        @keyframes twinkle {
            0% {
                opacity: 0;
                transform: translateY(-100%);
            }
            20% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateY(100%);
            }
        }


        .contact-info {
  text-align: center;
}

.info-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.info-description {
  font-size: 16px;
  margin-bottom: 30px;
}

.contact-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.contact-list li {
  font-size: 18px;
  margin-bottom: 10px;
}

.contact-list li i {
  margin-right: 10px;
}

.contact-list li a {
  color: var(--primary-color);
  text-decoration: none;
}

.contact-list li a:hover {
  text-decoration: underline;
}

.btn-primary{
    background-color: var(--primary-color) !important;
    border: var(--primary-color);
}

html, body {
  height: 100%;
  margin: 0;
}

.wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.footer-section {
  margin-top: auto;
  height: 80px;
  line-height: 80px;
}



    </style>
    </head>
    <body>
        <div class="wrapper" id="main-wrapper">
            <!-- Header
  ============================ -->
            <header class="header" id="header" class="sticky-top">
                <!-- Navbar -->
                <nav class="primary-menu navbar navbar-expand-lg
                    navbar-dropdown-dark">
                    <div class="container-fluid">

                        <!-- Logo -->
                        <a class="logo logo-index-header ml-md-3 ml-sm-3"
                            href="/" title="Routemamba">
                            <img src="assets/images/logo.png" width="60px"
                                alt="Routemamba Logo"/> </a>
                        <!-- Logo End -->

                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler ml-auto" type="button"
                            data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
                        <div id="header-nav" class="collapse navbar-collapse
                            justify-content-end">
                            <ul class="navbar-nav">
                                <li><a
                                    href="/documentation">Documentation</a></li>
                                <li><a target="_blank"
                                        href="https://patreon.com/rezwanahmodsami?utm_medium=clipboard_copy&utm_source=copyLink&utm_campaign=creatorshare_creator&utm_content=join_link">Support</a></li>
                            </ul>
                        </div>
                        <ul class="social-icons social-icons-sm ml-lg-2 mr-2">
                            <li class="social-icons-facebook"><a
                                    data-toggle="tooltip"
                                    href="https://www.facebook.com/routemamba"
                                    target="_blank" title=""
                                    data-original-title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-github"><a
                                    data-toggle="tooltip"
                                    href="https://github.com/rezwanahmodsami/routemamba"
                                    target="_blank" title=""
                                    data-original-title="Github"><i
                                        class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Navbar End -->
            </header>
            <!-- Header End -->

            <div class="stars">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <!-- Add more star elements as needed -->
            </div>

            <section class="hero-section">
                <div class="container">
                  <img class="hero-logo" src="/assets/images/logo.png" alt="Routemamba Logo" />
                  <h1 class="righteous">Routemamba</h1>
                  <p id="description">Create stunning single-page applications</p>
                  <a href="/documentation"><button class="cta-button">Read Documentation</button></a>
                </div>
                <div class="hero-fadeout"></div>

              </section>
              
              
              

            <section class="about-us-section">
                <div class="container">
                    <h1 class="section-title righteous">About Us</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/images/about-us-image.png"
                                alt="About Us" class="about-us-image img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="about-us-content">
                                <p class="section-description ">Routemamba is a
                                    revolutionary JavaScript library designed to
                                    empower PHP developers in creating
                                    exceptional single-page applications. We
                                    believe that PHP development should not be
                                    limited when it comes to delivering
                                    cutting-edge user experiences. Our mission
                                    is to bridge the gap between PHP and
                                    Node.js, providing PHP developers with the
                                    tools they need to build highly interactive
                                    and responsive web applications. With
                                    Routemamba, you can transform your PHP
                                    projects into seamless single-page
                                    experiences without the complexity of
                                    traditional setups or package imports. At
                                    Routemamba, we value simplicity,
                                    performance, and innovation. Our open-source
                                    project welcomes contributions from the
                                    community, allowing developers like you to
                                    shape the future of PHP web development.</p>
                                <a href="https://discord.gg/7HbVtssu" class="btn btn-primary
                                    btn-lg">Join Discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="key-features-section">
                <div class="container">
                    <h1 class="section-title text-center righteous mb-5">Features</h1>

                        <div class="feature">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="feature__item">
                                  <h3 class="section__title righteous">Fast &amp; Light</h3>
                                  <p>Routemamba is a fast and lightweight library. Simply link it with a script tag and configure it by creating an <span class="code code--inline">app.js</span> file.</p>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="feature__item">
                                  <h3 class="section__title righteous">Customizable</h3>
                                  <p>Create highly customizable web apps using this library. It is designed especially for raw coders and raw projects.</p>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="feature__item">
                                  <h3 class="section__title righteous">Server-side Rendering</h3>
                                  <p>Routemamba supports server-side rendering in PHP, allowing you to develop SEO-friendly web apps.</p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="feature__item">
                                  <h3 class="section__title righteous">SEO Friendly</h3>
                                  <p>Routemamba provides flexibility in handling web SEO while routing. Check our <b><a href="/documentation" class="docLink">documentation</a></b> for more information.</p>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="feature__item">
                                  <h3 class="section__title righteous">Open Source</h3>
                                  <p>Routemamba is an open-source library, freely available for commercial use. You can also contribute to the project on <b><a href="https://github.com/rezwanahmodsami/routemamba">GitHub</a></b>.</p>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="feature__item">
                                  <h3 class="section__title righteous">Reactive System</h3>
                                  <p>Utilize the Routemamba state management system to make your application reactive. Refer to our <b><a href="/documentation" class="docLink">documentation</a></b> for more details.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                </div>
            </section>



            <section class="contact-us-section">
                <div class="container">
                    <h1 class="section-title text-center righteous">Contact Us</h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-info">
                                <h3 class="info-title">Get in touch</h3>
                                <p class="info-description">Have questions or
                                    need assistance? Reach out to us, and we'll
                                    be happy to help!</p>
                                <ul class="contact-list">
                                    <li><i class="fab fa-discord"></i> Discord
                                        Channel: <a target="_blank"
                                            href="https://discord.gg/7HbVtssu">Join
                                            us on Discord</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"
                                            placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary
                                        btn-lg btn-block">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer-section back-primary d-flex
                justify-content-center align-items-center">
                <!-- <div class="container"> -->
                <!-- <div class="row"> -->
                <!-- <div class="d-flex justify-content-center align-items-center"> -->
                <p>&copy; 2023 Routemamba. All rights reserved.</p>
                <!-- </div> -->
                <!-- </div> -->
                <!-- </div> -->
            </footer>


        </div>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- JavaScript
    ============================ -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Highlight JS -->
        <script src="assets/vendor/highlight.js/highlight.min.js"></script>
        <!-- Easing -->
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <!-- Magnific Popup -->
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Custom Script -->
        <script src="assets/js/theme.js"></script>
        <script>
        // Show/hide header based on scroll position
        $(window).scroll(function() {
            var scrollPos = $(window).scrollTop();
            var header = $('.header');

            if (scrollPos > 120) {

                header.addClass('visible');
            } else {
                header.removeClass('visible');
            }
        });
    </script>
    </body>
</html>
