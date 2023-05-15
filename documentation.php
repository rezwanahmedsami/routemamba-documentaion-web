<?php

include_once 'functions.php';
require_once 'parsedown.php';

// Fetch the changelog data
$changelog = fetchChangelogData($owner, $repo);
$parser = new Parsedown();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,
      minimum-scale=1.0, shrink-to-fit=no">
  <link href="assets/images/favicon.png" rel="icon" />
  <title>Documentation | Your ThemeForest item Name</title>
  <meta name="description" content="Your ThemeForest item Name and
      description">
  <meta name="author" content="harnishdesign.net">

  <!-- Stylesheet
============================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css" />
  <!-- Magnific Popup -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css" />
  <!-- Highlight Syntax -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/highlight.js/styles/github.css" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">
  <!-- Preloader -->
  <div class="preloader">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Document Wrapper   
=============================== -->
  <div id="main-wrapper">

    <!-- Header
  ============================ -->
    <header id="header" class="sticky-top">
      <!-- Navbar -->
      <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
        <div class="container-fluid">
          <!-- Sidebar Toggler -->
          <button id="sidebarCollapse" class="navbar-toggler d-block
              d-md-none" type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>

          <!-- Logo -->
          <a class="logo ml-md-3" href="/" title="Routemamba">
            <img src="assets/images/logo.png" width="60px" alt="Routemamba logo" /> </a>
          <span class="text-2 ml-2"><?php echo $changelog[0]['version'] ?></span>
          <!-- Logo End -->

          <!-- Navbar Toggler -->
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
          <div id="header-nav" class="collapse navbar-collapse
              justify-content-end">
            <ul class="navbar-nav">
              <li><a target="_blank" href="https://patreon.com/rezwanahmodsami?utm_medium=clipboard_copy&utm_source=copyLink&utm_campaign=creatorshare_creator&utm_content=join_link">Support</a></li>
            </ul>
          </div>
          <ul class="social-icons social-icons-sm ml-lg-2 mr-2">
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="https://www.facebook.com/routemamba" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-github"><a data-toggle="tooltip" href="https://github.com/rezwanahmodsami/routemamba" target="_blank" title="" data-original-title="Github"><i class="fab fa-github"></i></a></li>
          </ul>
        </div>
      </nav>
      <!-- Navbar End -->
    </header>
    <!-- Header End -->

    <!-- Content
  ============================ -->
    <div id="content" role="main">

      <!-- Sidebar Navigation
	============================ -->
      <div class="idocs-navigation bg-light">
        <ul class="nav flex-column ">
          <li class="nav-item"><a class="nav-link" href="#introduction">Introduction</a></li>
          <li class="nav-item"><a class="nav-link active" href="#idocs_start">Getting Started</a>
            <ul class="nav flex-column">
              <li class="nav-item"><a class="nav-link" href="#idocs_installation">Installation</a></li>
              <li class="nav-item"><a class="nav-link" href="#project_setup">Project Setup</a></li>
              <li class="nav-item"><a class="nav-link" href="#idocs_html_structure">HTML Structure</a></li>
              <li class="nav-item"><a class="nav-link" href="#seo_configuration">SEO configuration</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#routing_and_configuration">Routing and routes
              configuration</a>
            <ul class="nav flex-column">
              <li class="nav-item"><a class="nav-link" href="#http_routes">Http
                  Routes</a></li>
              <li class="nav-item"><a class="nav-link" href="#pop_push_route">Pop
                  & Push Route</a></li>
              <li class="nav-item"><a class="nav-link" href="#navigate_method">Navigate method</a></li>
              <li class="nav-item"><a class="nav-link" href="#rendering_method">Rendering Method</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#appjs_example_usage">Example usage of app.js</a></li>
          <li class="nav-item"><a class="nav-link" href="#creating_tabs">Creating tabs</a></li>
          <li class="nav-item"><a class="nav-link" href="#state_management">State Management</a></li>

          <li class="nav-item"><a class="nav-link" href="#contributing">Contributiing</a></li>

          <li class="nav-item"><a class="nav-link" href="#idocs_changelog">Changelog</a>
            <ul class="nav flex-column">
              <?php

              foreach ($changelog as $entry) {
                $version = $entry['version'];
                $version_id = str_replace('.', '_', $version);
                echo '<li class="nav-item"><a class="nav-link" href="#'.$version_id.'">'.$version.'</a></li>';
              }
              ?>
            </ul>
          </li>
        </ul>
      </div>

      <!-- Docs Content
	============================ -->
      <div class="idocs-content">
        <div class="container">

          <!-- Getting Started
		============================ -->
          <section id="introduction">
            <h1>Documentation</h1>
            <p class="lead">Building Seamless User Experiences:
              Documentation for Routemamba</p>
            <hr>
            <p>Welcome to Routemamba, a powerful JavaScript library designed
              to enhance PHP web applications by transforming them into
              fully functional single-page applications (SPAs). This guide
              will walk you through the process of getting started with
              Routemamba and showcase its capabilities in creating dynamic
              and engaging user experiences.</p><br>

            <div class="introduction">
              <h2>Introduction</h2>
              <p>Routemamba was developed with the goal of empowering PHP
                developers to deliver a user experience on par with that of
                Node.js applications. While PHP remains a popular choice for
                web development, it can sometimes lag behind when it comes
                to providing real-time interactivity and seamless page
                transitions. That's where Routemamba steps in.By
                incorporating Routemamba into your PHP projects, you can
                leverage the power of JavaScript to create SPAs without the
                need for a traditional page reload. This allows you to build
                applications that respond to user actions instantly, deliver
                dynamic content, and provide a smoother and more engaging
                user experience.</p>
              <p class="alert alert-info">If you have any questions that are
                beyond the scope of this project, Please feel free to join
                our <a target="_blank" href="https://discord.gg/7HbVtssu">Discord
                  Channel</a>.</p>
          </section>
        </div>
        </section>
        <section id="idocs_start">
          <div class="getting_started">
            <h2>Getting Started</h2>
            <p>To begin using Routemamba in your PHP projects, follow the
              steps outlined in this documentation. You will learn how to
              integrate the library, set up routing, handle view rendering,
              and take advantage of the various features Routemamba offers.
              Whether you're a seasoned PHP developer or new to the world of
              SPAs, this documentation will provide you with the knowledge
              and resources needed to unlock the full potential of
              Routemamba and elevate your PHP web applications to the next
              level.

              Next, let's dive into the installation process and start
              building remarkable single-page applications with Routemamba.</p>
            <h3>Video Tutorial</h3>
            <p>If you prefer a visual guide to learn Routemamba, you can check
              out our video tutorial series:</p>

            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/NVmOpSOz7JI" title="YouTube
                  video player" frameborder="0" allow="accelerometer; autoplay;
                  clipboard-write; encrypted-media; gyroscope;
                  picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <p>The video tutorial series provides step-by-step instructions
              and demonstrations on how to use Routemamba effectively in your
              PHP projects. Whether you're new to Routemamba or want to
              enhance your existing knowledge, this tutorial series can be a
              valuable resource.</p>

            <p>Click on the play button above to watch the video tutorial
              playlist.</p>

          </div>

          <hr class="divider">

          <!-- Installation
		============================ -->
          <section id="idocs_installation">
            <h2>Installation Guide</h2>
            <p>To start using Routemamba in your PHP projects, follow these
              simple steps:</p>

            <ol>
              <li>
                <strong>Step 1: Install via npm (Node Package Manager)</strong>
                <p>If you prefer using npm, open your terminal or command
                  prompt and run the following command:</p>

                <pre><code class="language-shell">npm install routemamba</code></pre>
                <p>This will install Routemamba and its dependencies in your
                  project.</p>
              </li>

              <li>
                <strong>Step 2: Link via script tag</strong>
                <p>Alternatively, you can include Routemamba directly in
                  your HTML file by adding the following script tag:</p>
                <pre><code class="language-html">&lt;script src="https://unpkg.com/routemamba/dist/routemamba.min.js">&lt;/script></code></pre>
                <p>Place this script tag within the <code>&lt;head&gt;</code>
                  tags of your HTML file.</p>
              </li>

              <li>
                <strong>Step 3: Copy the Routemamba folder (if using npm)</strong>
                <p>If you chose to install Routemamba using npm, navigate to
                  the <code>node_modules/</code> folder in your project
                  directory. Locate the <code>routemamba</code> folder and
                  copy it.</p>

                <p>Next, navigate to your project's <code>/assets</code>
                  folder and paste the <code>routemamba</code> folder there.
                  This step ensures that the library is accessible within
                  your project.</p>
              </li>

              <li>
                <strong>Step 4: Link the Routemamba library</strong>
                <p>In your HTML file, add the following script tag to link
                  the Routemamba library:</p>

                <pre><code class="language-html">&lt;script src="./assets/routemamba/dist/routemamba.min.js">&lt;/script></code></pre>
                <p>Make sure this script tag is placed within the <code>&lt;head&gt;</code>
                  tags of your HTML file.</p>
              </li>

              <li>
                <strong>Step 5: Create the app.js file</strong>
                <p>In the root folder of your project, create a file named
                  <code>app.js</code>. This file will serve as the entry point
                  for your Routemamba code.
                </p>
              </li>
              <li>
                <strong>Step 6: app.js file setup example:</strong>
                <p><code>app.js</code> File code example as our demo test
                  project: (you can find it in the <code>/example</code>
                  folder)</p>
                <p>First of all, you need to set <code>Server Host</code>. It
                  can be your full URL, for example: <code>https://example.com/</code>
                  or <code>https://localhost/</code> for your localhost.</p>
                <pre><code class="language-javascript">// set server host
routemamba.registerServerHost('http://example.com/');
                </code></pre>
                <p>Then set a <code>meta content url</code> to get meta
                  content, mainly using PHP for dynamic meta content. Check
                  the <code>/test/app.js</code> file in this project
                  directory.</p>
                <pre><code class="language-javascript">// set meta content
routemamba.registerMetaUrl('inc/meta-content.php');
                </code></pre>
                <p>After setting the meta content path, you need to add a
                  <code>&lt;meta&gt;&lt;/meta&gt;</code> tag in the <code>&lt;head&gt;</code>
                  section.
                </p>
                <pre><code class="language-html">&lt;head&gt;
  &lt;meta&gt;&lt;/meta&gt;
&lt;/head&gt;
                </code></pre>
                <p><strong>Note:</strong> After adding this, the meta content
                  will be loaded. However, you may face an issue with SEO
                  since search engine crawlers cannot retrieve your SEO
                  information from the meta content due to it loading after
                  document ready. To fix this problem, you need to add
                  additional meta info using PHP. More info in <a href="#introduction">SEO configuration.</a></p>
              </li>



              <li>
                <strong>Step 7: Link the app.js file</strong>
                <p>Finally, include the <code>app.js</code> file in the
                  footer of your HTML file using the following script tag:</p>
                <pre><code class="language-html">&lt;script src="/app.js">&lt;/script></code></pre>
                <p>Place this script tag just before the closing <code>&lt;/body&gt;</code>
                  tag of your HTML file.</p>
              </li>
            </ol>

            <p>Congratulations! You have successfully installed Routemamba
              in your project. Now you're ready to harness the power of
              Routemamba and create exceptional single-page applications
              with PHP.</p>

            <p><strong>Note:</strong> You have the flexibility to choose the
              installation method that suits your preferences. Whether you
              prefer npm or including the library via a script tag,
              Routemamba will work seamlessly in your project.</p>

            <p class="lead">Please refer to the Routemamba documentation for
              further details on configuring and utilizing the library to
              maximize its potential in your PHP web application.</p>
          </section>

          <hr class="divider">
          <section id="project_setup">
            <h2>Project Setup</h2>
            <p>To properly set up your project to use Routemamba, follow the
              file and folder structure outlined below:</p>

            <pre><code>
project_root
├── assets
|   └── routemamba
|       └── routemamba.min.js
├── components
|   ├── header-layout
|   |   └── header-component.php
|   ├── footer-layout
|   |   └── footer-component.php
|   ├── about-component.php
|   └── index-component.php
├── include
|   ├── header.php
|   ├── footer.php
|   └── meta-content.php
├── index.php
├── about.php
└── app.js
</code></pre>
            <p>The above file and folder structure provides a recommended
              organization for your Routemamba-powered PHP project. Here's a
              breakdown of the different directories and files:</p>

            <ul>
              <li><strong>assets/routemamba</strong>: This folder contains
                the <code>routemamba.min.js</code> file, which is the main
                Routemamba library. Make sure to include this file in your
                project for Routemamba functionality.</li>
              <li><strong>components</strong>: This directory holds various
                components that make up your web application, such as the
                header and footer layouts, as well as specific components
                for pages like the about page and index page.</li>
              <li><strong>include</strong>: This folder includes common
                files that are included in multiple pages, such as the
                header, footer, and meta content files. These files can be
                used to maintain consistency across different pages of your
                application.</li>
              <li><strong>index.php, about.php</strong>: These PHP files
                represent the different pages of your application. You can
                customize these files as per your requirements and utilize
                Routemamba to create single-page application functionality.</li>
              <li><strong>app.js</strong>: This file serves as the entry
                point for your Routemamba code. You can include your
                Routemamba-specific JavaScript code in this file.</li>
            </ul>

            <p>By organizing your files and folders in this manner, you can
              effectively utilize Routemamba and maintain a structured
              project setup.</p>

            <p>Please note that this file and folder structure is a
              suggested setup, and you can modify it based on your specific
              project requirements.</p>

          </section>
          <hr class="divider">

          <!-- HTML Structure
		============================ -->
          <section id="idocs_html_structure">
            <h2>HTML Structure</h2>
            <p>When using Routemamba in your PHP projects, you need to
              follow a specific HTML structure. Below is an example of the
              required structure:</p>

            <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;!-- Here The meta information will load specially for seo --&gt;
    &lt;meta&gt;&lt;/meta&gt;
    &lt;!-- Add any additional meta tags if required --&gt;

    &lt;!-- Include the Routemamba library --&gt;
    &lt;script src="./dist/routemamba.min.js"&gt;&lt;/script&gt;

    &lt;!-- Include Bootstrap CSS --&gt;
    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;!-- Header Load Section --&gt;
    &lt;div id="header_load"&gt;&lt;/div&gt;

    &lt;!-- Root Container --&gt;
    &lt;div id="root"&gt;&lt;/div&gt;

    &lt;!-- Footer Load Section --&gt;
    &lt;div id="footer_load"&gt;&lt;/div&gt;

    &lt;!-- Include your app.js file --&gt;
    &lt;script src="./web/app.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p class="alert alert-info">If you need more information, please
              join our <a target="_blank" href="https://discord.gg/7HbVtssu">Discord
                Channel</a></p>
          </section>

          <hr class="divider">

          <!-- Sass
		============================ -->
          <section id="seo_configuration">
            <h2 class="section__title">SEO Configuration</h2>

            <h3 class="section__subtitle">Example: Configuring SEO with
              Routemamba</h3>

            <p>To configure SEO with Routemamba, you need to set up the
              following files:</p>

            <h4 class="section__title">In the <code>header.php</code> file:</h4>
            <pre><code class="language-php">&lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
      &lt;meta&gt;
      &lt;?php
        $route = basename($_SERVER['PHP_SELF']);
        
        // Set the appropriate title based on the current route
        switch ($route) {
          case 'index.php':
            $title = 'Home';
            break;
          case 'about.php':
            $title = 'About';
            break;
          case 'privacy.php':
            $title = 'Privacy';
            break;
          default:
            $title = 'Home';
            break;
        }
      ?&gt;
      
      &lt;meta charset="UTF-8"&gt;
      &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
      &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;
      &lt;/meta&gt;
      
      &lt;script src="https://cdn.rezwanahmodsami.com/routemamba/v2.0.x/routemamba.min.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;</code></pre>
            <p>In the <code>header.php</code> file, we define the HTML
              document structure and set the appropriate title based on the
              current route. This ensures that each page has a unique and
              descriptive title for better SEO.</p>

            <h4 class="section__title">In the <code>meta-content.php</code>
              file:</h4>

            <pre><code class="language-php">&lt;?php
      if (isset($_GET['route'])) {
        switch ($_GET['route']) {
          case 'index.php':
            $title = 'Home';
            break;
          case 'about.php':
            $title = 'About';
            break;
          case 'privacy.php':
            $title = 'Privacy';
            break;
          default:
            $title = 'Home';
            break;
        }
      }
    ?&gt;
      
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;</code></pre>
            <p>In the <code>meta-content.php</code> file, we handle dynamic
              meta content generation. Based on the current route, we set the
              appropriate meta title. This allows search engine crawlers to
              retrieve relevant information for indexing.</p>

            <p>Make sure to include the necessary PHP code to fetch and handle
              any additional parameters passed via the URL in the <code>meta-content.php</code>
              file.</p>

            <p>By following this SEO configuration approach, you can ensure
              that each page has an appropriate title and meta information,
              improving the search engine visibility and ranking of your web
              application.</p>
          </section>


          <hr class="divider">

          <!-- Layout
		============================ -->
          <section id="routing_and_configuration">
            <h2>Routing and routes configuration</h2>
            <h5 class="section__subtitle">Overview of Routing and Routes
              Configuration</h5>

            <p>Routing in Routemamba involves defining how your web
              application handles different URLs or routes. By configuring
              routes, you can map specific URLs to corresponding actions,
              controllers, or components within your application.</p>

            <p>Routes configuration consists of defining URL patterns and
              associating them with the appropriate actions or components.
              This allows users to access specific content or trigger specific
              functionality based on the URL they visit.</p>

          </section>


          <!-- Header
		============================ -->
          <section id="http_routes">
            <h2 class="section__title">HTTP Routes Configuration</h2>

            <h3 class="section__subtitle">Overview of HTTP Routes</h3>

            <p>In Routemamba, HTTP routes are the URLs that users will visit
              to access specific content or trigger specific functionality
              within your web application. To handle these routes effectively,
              you need to configure HTTP routes by defining an array of route
              objects.</p>

            <h3 class="section__subtitle">HTTP Routes Configuration Example</h3>
            <p>Let's take a look at an example from our test project's
              `app.js` file to understand how to configure HTTP routes:</p>
            <pre><code>// HTTP routes setup
routemamba.register_http_routes([
  {
    method: "GET",
    meta_loader: true,
    content_url: "content/home.php",
    container: "#root",
    data: {},
    preloader: 'loading...',
    error_content: 'error',
    http_url_change: false,
    http_url: "index.php"
  },
  {
    method: "GET",
    meta_loader: true,
    content_url: "content/about.php",
    container: "#root",
    data: {},
    preloader: 'loading...',
    error_content: 'error',
    http_url_change: false,
    http_url: "about.php"
  },
  {
    method: "GET",
    meta_loader: true,
    content_url: "content/privacy.php",
    container: "#root",
    data: {},
    preloader: 'loading...',
    error_content: 'error',
    http_url_change: false,
    http_url: "privacy.php"
  }
]);</code></pre>
            <p>The above code represents an array of HTTP route objects. Each
              object defines the configuration for a specific route, including
              the method, meta loader, content URL, container, preloader,
              error content, HTTP URL change, and HTTP URL.</p>

            <h3 class="section__subtitle">Explanation of HTTP Route Object</h3>
            <p>Let's explore the properties of the HTTP route object:</p>

            <ul>
              <li><strong>method:</strong> Specifies the request method (POST
                or GET) for the route.</li>
              <li><strong>meta_loader:</strong> A boolean value indicating
                whether the meta content should change for the specific route.</li>
              <li><strong>content_url:</strong> The path to the content file
                that will be loaded for the route.</li>
              <li><strong>container:</strong> The selector for the HTML
                element where the content will be displayed.</li>
              <li><strong>preloader:</strong> HTML content or message to be
                shown as a preloader while the content is loading.</li>
              <li><strong>error_content:</strong> HTML content or message to
                be displayed if there is an error loading the content.</li>
              <li><strong>http_url_change:</strong> A boolean value indicating
                whether the HTTP URL should change in the browser's URL bar
                for the specific route.</li>
              <li><strong>http_url:</strong> The HTTP URL that will be visible
                in the browser's URL bar for the specific route.</li>
            </ul>

            <h3 class="section__subtitle">Setting Headers and Footers for
              Routes</h3>

            <p>You can also set different headers and footers for specific
              routes or use the same header and footer content for multiple
              routes. To achieve this, you can utilize the
              `register_routes_headers()` and `register_routes_footers()`
              functions.</p>

            <h4>Setting Headers for Routes</h4>
            <p>If you want to set different headers for specific routes, you
              can use the `register_routes_headers()` function. Here's an
              example code snippet:</p>
            <pre><code>// Set pages headers
  routemamba.register_routes_headers([
    {
      content_url: "content/header.php",
      container: "#header_load",
      preloader: 'loading...',
      error_content: 'error',
      http_url: ["index.php", "about.php", "privacy.php"]
    },
  ]);</code></pre>
            <p>In the above code, an array of header objects is defined. Each
              object specifies the content URL, container selector, preloader,
              error content, and the HTTP URLs for which the header should be
              displayed. This allows you to have different headers for
              different routes.</p>
            <h4>Setting Footers for Routes</h4>
            <p>Similarly, if you want to set different footers for specific
              routes, you can use the `register_routes_footers()` function.
              Here's an example code snippet:</p>
            <pre><code>routemamba.register_routes_footers([
    {
      content_url: "content/footer.php",
      container: "#footer_load",
      preloader: 'loading...',
      error_content: 'error',
      http_url: ["index.php", "about.php", "privacy.php"]
    },
  ]);</code></pre>
            <p>In the above code, an array of footer objects is defined. Each
              object specifies the content URL, container selector, preloader,
              error content, and the HTTP URLs for which the footer should be
              displayed. This allows you to have different footers for
              different routes.</p>
            <p>By configuring headers and footers for routes, you can
              customize the appearance and content of specific sections of
              your web application based on the current route, providing a
              more tailored and consistent user experience.</p>
          </section>

          <hr class="divider">

          <!-- Navbar
		============================ -->
          <section id="pop_push_route">
            <h4>Pop Route and Push Route</h4>
            <p>The Routemamba library provides functionality to navigate
              between routes by popping and pushing routes onto the navigation
              stack. This allows users to go back to the previous route or
              move forward to the next route within the application. Here's an
              example of how to use the pop and push route methods:</p>
            <pre><code>// Pop Route
routemamba.pop_route();

// Push Route
routemamba.push_route();
</code></pre>
            <p>The `pop_route()` function is used to go back to the previous
              route in the navigation stack. It simulates clicking the
              browser's back button. On the other hand, the `push_route()`
              function is used to move forward to the next route, similar to
              clicking the browser's forward button.</p>
            <p>It's important to note that these functions should be called
              within an appropriate event listener to trigger the desired
              navigation behavior. For example:</p>
            <pre><code>back.addEventListener('click', () => {
   routemamba.pop_route();
});

next.addEventListener('click', () => {
   routemamba.push_route();
});
</code></pre>
            <p>In the above code snippet, the `pop_route()` function is called
              when the user clicks the "back" button, while the `push_route()`
              function is called when the user clicks the "next" button. This
              allows for intuitive navigation within the application.</p>
            <p>By utilizing the pop and push route functionality, you can
              create a smooth and interactive browsing experience for your
              users, enabling them to easily navigate through different routes
              within your application.</p>
          </section>


          <hr class="divider">

          <!-- Sidebar
		============================ -->
          <section id="navigate_method">
            <h4>Navigate Method</h4>
            <p>The `navigate()` method in Routemamba allows you to navigate
              from one page to another within your application without
              reloading the entire website. This provides a seamless and fast
              user experience. Here's an example of how to use the
              `navigate()` method:</p>
            <pre><code>if (bookmarks_btn != undefined) {
   bookmarks_btn.addEventListener('click', (event) => {
      event.preventDefault(); // Stop double-click
      event.stopImmediatePropagation(); // Stop immediate propagation

      // routemamba.navigate(<URL here>, <Data here>, <Options here>);
      routemamba.navigate("bookmarks.php", {
         id: 345345,
         name: "rezwan",
      }, {
         header_load: true,
         footer_load: true
      });

      // Additional examples:
      routemamba.navigate("bookmarks.php?id=4545&name=rezwan", {}, {
         meta_loader: true,
         method: "GET",
         http_url_change: true,
         header_load: true,
         footer_load: true
      });

      routemamba.navigate("bookmarks.php?id=4545&name=rezwan", {}, {});
      routemamba.navigate("bookmarks.php?id=4545&name=rezwan");
      routemamba.navigate("bookmarks.php");
   });
}
</code></pre>
            <p>In the above code, when the `bookmarks_btn` is clicked,
              the `navigate()` method is called to navigate to the
              "bookmarks.php" page. You can pass additional data as an
              object, which will be available on the destination page.
              The third parameter allows you to specify options for the
              navigation process.</p>
            <p>Options you can provide include:</p>
            <ul>
              <li>`header_load`: Specify whether to load the header
                content for the destination page.</li>
              <li>`footer_load`: Specify whether to load the footer
                content for the destination page.</li>
              <li>`meta_loader`: Specify whether to load the meta
                content for the destination page.</li>
              <li>`method`: Specify the HTTP method to use for the
                request (default is "GET").</li>
              <li>`http_url_change`: Specify whether the URL should
                change in the browser's URL bar (default is `true`).</li>
            </ul>
            <p>By customizing these options, you can control the
              behavior of the navigation process. It's important to note
              that if you encounter issues with double-clicking or
              multiple content loads, you should use
              `event.preventDefault()` and
              `event.stopImmediatePropagation()` within your click event
              listener to prevent unwanted behavior.</p>
            <p>With the `navigate()` method, you can create dynamic and
              interactive navigation within your application, allowing
              users to move between pages smoothly and efficiently.</p>
          </section>

          <hr class="divider">

          <!-- Footer
		============================ -->
          <section id="rendering_method">
            <h4>Rendering Method</h4>
            <p>The `render()` method in Routemamba is a crucial step to ensure that the content loads correctly. Without calling the `render()` method, the content may not be displayed on the page. Here's an example of how to use the `render()` method:</p>
            <pre><code>// Rendering
routemamba.render();
</code></pre>
            <p>In the above code, the `render()` method is called to initiate the rendering process. It ensures that the content specified in the routing configuration is loaded and displayed correctly on the page.</p>
            <p>By invoking the `render()` method, you trigger the routing engine to start loading the appropriate content based on the current URL or route. It's essential to include this method in your code to ensure that the content is rendered and visible to the user.</p>
            <p>Make sure to place the `render()` method at the appropriate location within your code, typically after setting up the routing configuration and registering the necessary routes. This ensures that the content is loaded and displayed when the page is accessed or navigated to.</p>
            <p>By incorporating the `render()` method, you guarantee that your application's content is dynamically rendered and available to users, enhancing their browsing experience.</p>
          </section>

          <hr class="divider">

          <section id="appjs_example_usage">
            <h4>Example Usage of app.js</h4>
            <p>Below is an example that demonstrates the usage of `app.js` from the `/example` project. The code sets up various routes, headers, footers, and defines event listeners for navigation. Let's explore the example:</p>
            <pre><code>routemamba.registerMetaUrl("inc/meta-content.php");

                      routemamba.registerServerHost("http://localhost:3000/example/");
                      
                      routemamba.register_http_routes([
                          {
                              method: "GET",
                              meta_loader: true,
                              content_url: "content/home.php",
                              container: "#root",
                              preloader: '&lt;h1&gt;loading...&lt;/h1&gt;',
                              data: {},
                              error_content: 'error',
                              http_url_change: false,
                              http_url: "/"
                           },
                           {
                            method: "GET",
                            meta_loader: true,
                            content_url: "content/home.php",
                            container: "#root",
                            preloader: '&lt;h1&gt;loading...&lt;/h1&gt;,
                            data: {},
                            error_content: 'error',
                            http_url_change: false,
                            http_url: "index.php"
                         },
                          {
                              method: "GET",
                              meta_loader: true,
                              content_url: "content/about.php",
                              container: "#root",
                              preloader: '&lt;h1&gt;loading...&lt;/h1&gt;,
                              data: {},
                              error_content: 'error',
                              http_url_change: false,
                              http_url: "about.php"
                           },
                           {
                              method: "GET",
                              meta_loader: true,
                              content_url: "content/privacy.php",
                              container: "#root",
                              preloader: '&lt;h1&gt;loading...&lt;/h1&gt;,
                              data: {},
                              error_content: 'error',
                              http_url_change: false,
                              http_url: "privacy.php"
                           },
                           {
                              method: "GET",
                              meta_loader: true,
                              content_url: "content/tabs-example.php",
                              container: "#root",
                              preloader: '&lt;h1&gt;loading...&lt;/h1&gt;,
                              data: {},
                              error_content: 'error',
                              http_url_change: false,
                              http_url: "tabs-example.php"
                           },
                      ]);
                      
                      routemamba.register_routes_headers([
                          {
                              content_url: "content/header.php",
                              container: "#header_load",
                              preloader: 'loading...',
                              error_content: 'error',
                              http_url: ["/","about.php", "privacy.php", "tabs-example.php"]
                           },
                      ]);
                      
                      routemamba.register_routes_footers([
                          {
                              content_url: "content/footer.php",
                              container: "#footer_load",
                              preloader: 'loading...',
                              error_content: 'error',
                              http_url: ["/","about.php", "privacy.php", "tabs-example.php"]
                           },
                      ]);
                      
                      routemamba.render();
                      
                      var home_btn = document.getElementById("home");
                      var about_btn = document.getElementById("about");
                      var privacy_btn = document.getElementById("privacy");
                      var tabs_example_btn = document.getElementById("tabs-example");
                      var back = document.getElementById("back");
                      var next = document.getElementById("next");
                      
                      back.addEventListener('click', ()=>{
                          routemamba.pop_route();
                       });
                       
                       next.addEventListener('click', ()=>{
                          routemamba.push_route();
                       });
                       
                      
                      home_btn.addEventListener('click', ()=>{
                          routemamba.navigate("/", {}, {
                              header_load: true,
                              footer_load: true
                          });
                      });
                      
                      about_btn.addEventListener('click', ()=>{
                          routemamba.navigate("about.php", {
                             id: 43345,
                             name: "rezwan"
                          }, {
                             header_load: true,
                             footer_load: true
                          });
                       });
                      
                       privacy_btn.addEventListener('click', ()=>{
                          routemamba.navigate("privacy.php");
                       });
                       
                       tabs_example_btn.addEventListener('click', ()=>{
                          routemamba.navigate("tabs-example.php", {}, {
                             meta_loader: true,
                             method: "GET",
                             http_url_change: true,
                             header_load: true,
                             footer_load: true
                          });
                       });
                      </code></pre>
            <p>The above code attaches event listeners to the respective buttons, enabling navigation within the app. When a button is clicked, the corresponding route is loaded using `routemamba.navigate()`. You can customize the route parameters and specify options such as loading headers and footers.

              This example demonstrates how to configure routes, headers, footers, and handle navigation within your app using the app.js module.

              Make sure to include the necessary HTML elements in your markup, such as <b>#root</b>, <b>#header_load</b>, <b>#footer_load</b>, and the navigation buttons referenced in the JavaScript code.

              Feel free to modify the code and customize it to fit your specific application's needs.</p>
          </section>

          <hr class="divider" />
          <!-- Content
		============================ -->
          <section id="creating_tabs">
            <h2>Creating Tabs</h2>
            <p>
              Some people also want to create a tabs system easily. With Routemamba, you can accomplish this by using the `routemamba.initTabs()` method. Below is an example of how to create tabs using Routemamba:
            </p>
            <h4>JavaScript Initialization:</h4>
            <pre><code>
routemamba.initTabs([
  {
    tabSwitcher: ".tab-switcher",
    initialTab: "tab1",
    activeSwitcherClass: "tab-active",
    activeTabClass: "activeTab",
    tabs: [
      {
        tabRoute: "tab1",
        content_url: "content/tabs/tab1.php",
        preloader: 'loading...',
        error_handler: 'error',
      },
      {
        tabRoute: "tab2",
        content_url: "content/tabs/tab2.php",
        preloader: 'loading...',
        error_handler: 'error',
      },
      {
        tabRoute: "tab3",
        content_url: "content/tabs/tab3.php",
        preloader: 'loading...',
        error_handler: 'error',
      },
    ]
  },
]);
</code></pre>
            <p>
              Note: You can initialize multiple tabs by adding more objects to the `routemamba.initTabs()` method.
            </p>
            <p>
              For a more detailed example, you can refer to the code in the <a href="https://github.com/rezwanahmodsami/routemamba/tree/main/example/content/tabs-example.php">Tabs example code</a> file.
            </p>
            <h4>HTML Code Example:</h4>
            <pre><code>
  &lt;style&gt;
  .TabRoot {
    width: 500px;
    height: 500px;
    background-color: green;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
  }
  /* Add your custom styles for tabs here */
&lt;/style&gt;

&lt;div class="TabRoot"&gt;
  &lt;div class="tabs-btns"&gt;
    &lt;!-- Tab switcher buttons --&gt;
    &lt;button class="tab-switcher" tabRoute="tab1"&gt;Tab1&lt;/button&gt;
    &lt;button class="tab-switcher" tabRoute="tab2"&gt;Tab2&lt;/button&gt;
    &lt;button class="tab-switcher" tabRoute="tab3"&gt;Tab3&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="tab-contents"&gt;
    &lt;!-- Tab containers --&gt;
    &lt;div id="tab1" class="tab-container"&gt;&lt;/div&gt;
    &lt;div id="tab2" class="tab-container"&gt;&lt;/div&gt;
    &lt;div id="tab3" class="tab-container"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

</code></pre>
            <p>Please note that you may need to adjust the styles and class names in the HTML code snippet to match your specific design and implementation.
              Customize the styles in the `&lt;style&gt;` section according to your requirements to achieve the desired look and feel of your tabs.
            </p>

          </section>
          <hr class="divider">
          <!-- Typography
		============================ -->
          <section id="state_management">
            <h4>Reactive System by State Management in Routemamba</h4>

            <p>In Routemamba, you can leverage state management to create reactive systems. This allows you to handle and display data that dynamically updates based on changes within a specific section or multiple sections of your application.</p>

            <h5>Local States</h5>

            <p>Local states are used to showcase data reactivity within a particular section or multiple sections. To utilize local states, follow the steps outlined below:</p>

            <ol>
              <li>Declare a local state using the <code>routemamba.localState.useState()</code> method.</li>
              <li>Specify an initial value for the state and provide a selector to identify the section(s) where changes will be displayed.</li>
              <li>Use the <code>setCount()</code> function to update the state's value whenever necessary.</li>
              <li>Retrieve the current value of the state by calling the state variable as a function (e.g., <code>count()</code>).</li>
            </ol>

            <p>Here's an example showcasing the usage of local states:</p>

            <pre><code>// To display changes in a particular section
const [count, setCount] = routemamba.localState.useState(0, "#count1");

// To display changes in multiple sections simultaneously
const [count, setCount] = routemamba.localState.useState(0, ["#count1", "#count2"]);

// Update the state value
setCount(4534);

// Retrieve the current state value
console.log("Total count is:", count());
</code></pre>

            <p>In the code snippet above, we define a local state named <code>count</code> using the <code>routemamba.localState.useState()</code> method. The initial value is set to <code>0</code>, and changes to this state will be displayed in the section(s) identified by the selector, such as <code>#count1</code> or <code>["#count1", "#count2"]</code>.</p>

            <p>To update the state value, we use the <code>setCount()</code> function, passing the new value as an argument. We can access the current value of the state by invoking the <code>count()</code> function, which returns the latest value.</p>

            <p>By utilizing local states, you can create reactive components that update their displayed data based on changes, providing a dynamic user experience within specific sections of your application.</p>

          </section>

          <hr class="divider">

          <!-- Code
		============================ -->
          <section id="contributing">
            <h4>Contributing</h4>

            <p>We welcome and appreciate contributions from the community to enhance Routemamba. To ensure a smooth and collaborative development process, we follow the "fork-and-pull" Git workflow. Please follow the steps outlined below to contribute:</p>

            <ol>
              <li>Fork the Routemamba repository on GitHub.</li>
              <li>Clone the project to your local machine.</li>
              <li>Make changes and additions in your forked repository. Focus your changes primarily on the <code>src/</code> and <code>__tests__/</code> folders, as well as the <code>README.md</code> file.
                <ul>
                  <li>Most of your modifications should be made within the <code>src/</code> and <code>__tests__/</code> folders, which contain the source code and tests, respectively.</li>
                  <li>Note that certain files such as <code>/dist/routemamba.min.js</code> and <code>/dist/routemamba.min.js.LICENSE.txt</code> are automatically generated when running tests (<code>npm run build</code>) and should not be modified manually.</li>
                </ul>
              </li>
              <li>Ensure that you write or update tests if necessary to maintain test coverage.</li>
              <li>Run the tests locally and verify that they pass successfully.</li>
              <li>If needed, make corresponding updates to the <code>README.md</code> file to reflect the changes you have made.</li>
              <li>Commit your changes to a new branch within your forked repository.</li>
              <li>Before submitting your changes, merge the latest changes from the "upstream" repository into your branch, and resolve any conflicts if necessary.</li>
              <li>Repeat the process of making changes, running tests, and committing as needed.</li>
              <li>Push your work back to your forked repository.</li>
              <li>Submit a Pull Request from your forked repository to the original Routemamba repository. This allows us to review and incorporate your changes.</li>
            </ol>

            <p>We appreciate your contributions and will review your Pull Request promptly. Please ensure that your changes align with the project's guidelines and best practices.</p>

            <p>Thank you for your interest in contributing to Routemamba!</p>

          </section>


          <hr class="divider">

          <!-- Changelog
		============================ -->

          <section id="idocs_changelog">
            <h2>Changelog</h2>
            <p class="text-4">See what's new added, changed, fixed, improved, or updated in the latest versions.</p>
            <p class="alert alert-info mb-5">For Future Updates Follow Us <a target="_blank" href="https://www.facebook.com/routemamba">@facebook</a></p>

            <?php
            
            if ($changelog !== null) {
              foreach ($changelog as $entry) {
                $version = $entry['version'];
                $version_id = str_replace('.', '_', $version);
                $date = $entry['date'];
                $changes = $entry['changelog'];
            ?>

                <h1 class="primary-title" id="<?php echo $version_id; ?>">Version <?php echo $version; ?> <small class="text-muted">(<?php echo date('j M, Y', strtotime($date)); ?>)</small></h1>
                <!-- <ul class="changelog"> -->
                  <?php
                  echo $parser->text($changes);
                  
                  echo '<hr class="divider">';
            }
          }
            ?>
          </section>



      </div>
    </div>

  </div>
  <!-- Content end -->

  <!-- Footer
  ============================ -->
  <footer id="footer" class="section bg-dark footer-text-light">
    <div class="container">
      <ul class="social-icons social-icons-lg social-icons-muted
                  justify-content-center mb-3">
        <li><a data-toggle="tooltip" href="https://twitter.com/harnishdesign/" target="_blank" title="" data-original-title="Twitter"><i class="fab
                        fa-twitter"></i></a></li>
        <li><a data-toggle="tooltip" href="http://www.facebook.com/harnishdesign/" target="_blank" title="" data-original-title="Facebook"><i class="fab
                        fa-facebook-f"></i></a></li>
        <li><a data-toggle="tooltip" href="http://www.dribbble.com/harnishdesign/" target="_blank" title="" data-original-title="Dribbble"><i class="fab
                        fa-dribbble"></i></a></li>
        <li><a data-toggle="tooltip" href="http://www.github.com/" target="_blank" title="" data-original-title="GitHub"><i class="fab fa-github"></i></a></li>
      </ul>
      <p class="text-center">Copyright &copy; 2023 <a href="https://routemamba.com">Routemamba</a>.
        All Rights Reserved.</p>
      <p class="text-2 text-center mb-0">Template Design by <a class="btn-link" target="_blank" href="http://www.harnishdesign.net/">HarnishDesign</a>.</p>
    </div>
  </footer>
  <!-- Footer end -->

  </div>
  <!-- Document Wrapper end -->

  <!-- Back To Top -->
  <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

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
</body>

</html>