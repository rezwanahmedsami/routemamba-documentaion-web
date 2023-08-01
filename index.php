<?php
include_once "functions.php";
$changelog = fetchChangelogData($owner, $repo);
?>
<!doctype html>
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

      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RJ6PY489PW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RJ6PY489PW');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZC98TP7');</script>
<!-- End Google Tag Manager -->

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZC98TP7"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="bg-gray-900">
    <!-- Header section -->
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Routemamba</span>
            <img class="h-8 w-auto" src="./assets2/logo.svg" alt="">
          </a>
        </div>

        <!-- <div class="flex lg:gap-x-12">
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Documentation</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
            </div> -->
        <div class="flex lg:flex-1 lg:justify-end">
          <a href="/documentation" class="text-sm font-semibold leading-6 text-white">Documentation <span
              aria-hidden="true">&rarr;</span></a>
        </div>
      </nav>

    </header>
    <!-- Header section -->

<!-- Hero section -->
    <div class="relative isolate px-6 pt-0 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
        aria-hidden="true">
        <div
          class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>
      <div class="mx-auto max-w-2xl pt-32 pb-32 sm:pt-40 sm:pb-48 lg:pt-40 lg:pb-56">
        <div class="mb-8 flex justify-center items-center">
          <img src="./assets2/routemamba-js-logo-transparent.png" alt="Routemamba logo"
            class="h-[70px] sm:h-[100px] w-auto sm:h-[100px]">
        </div>
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Routemamba <?php echo $changelog[0]['version'] ?></h1>
          <p class="mt-6 text-lg leading-8 text-gray-200">Create fast and interactive web applications effortlessly
            using RouteMamba, the simple yet powerful JavaScript library.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/documentation"
              class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-grey-900 shadow-sm hover:bg-grey-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600">Get
              started</a>
            <a href="https://discord.gg/7HbVtssu" class="text-sm font-semibold leading-6 text-white">Join Discord <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
      <div
        class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div
          class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>
    </div>
  </div>
    <!-- Hero section -->

  <!-- About section -->
  <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="text-base font-semibold leading-7 text-sky-500">Streamlined Development, Maximum Control</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Highly Customizable Single-Page Apps</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">Craft customizable, seamless web experiences effortlessly. No complex setups or page reloads. Embrace innovation and control for modern applications—completely free. Unleash your creativity with RouteMamba's efficiency.</p>
            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-200 lg:max-w-none">
              <div class="relative pl-9">
                <dt class="inline font-semibold text-sky-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-1 top-1 h-5 w-5 text-sky-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512" fill="currentColor"><path d="M0,7.23c0-.352,.184-.677,.485-.857L10.347,.456c1.021-.613,2.287-.613,3.307,0l9.861,5.917c.301,.181,.485,.506,.485,.857s-.184,.677-.485,.857l-9.861,5.917c-.51,.306-1.082,.458-1.653,.459-.572,0-1.143-.153-1.653-.459L.485,8.088c-.301-.181-.485-.506-.485-.857Zm23,11.77h-2v-2c0-.553-.448-1-1-1s-1,.447-1,1v2h-2c-.552,0-1,.447-1,1s.448,1,1,1h2v2c0,.553,.448,1,1,1s1-.447,1-1v-2h2c.552,0,1-.447,1-1s-.448-1-1-1Zm-10.485,2.914L1.515,15.314c-.475-.285-1.089-.131-1.372,.343-.284,.474-.131,1.088,.343,1.372l11,6.6c.161,.097,.338,.143,.514,.143,.34,0,.671-.173,.858-.485,.284-.474,.131-1.088-.343-1.372Zm9.971-11.167l-10.485,6.291L1.515,10.747c-.475-.285-1.089-.132-1.372,.343-.284,.474-.131,1.088,.343,1.372l11,6.6c.159,.095,.336,.143,.515,.143s.356-.048,.515-.143l11-6.6c.474-.284,.627-.898,.343-1.372s-.898-.627-1.372-.343Z"/></svg>
                  Easy Integration:
                </dt>
                <dd class="inline">Effortlessly link RouteMamba into your project with a simple <b>&lt;script&gt;&lt;/script&gt;</b>
                  tag, avoiding the need for complex configurations.</dd>
              </div>
              <div class="relative pl-9">
                <dt class="inline font-semibold text-sky-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-1 top-1 h-5 w-5 text-sky-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512" fill="currentColor"><path d="M7.093,11.071l-.108-.028L15.1,8.9,12.986,17l-1.719-4.271ZM24,12A12,12,0,1,1,12,0,12.013,12.013,0,0,1,24,12ZM17.9,6.1,6.461,9.113A1.982,1.982,0,0,0,5,11.031a1.945,1.945,0,0,0,1.354,1.9l3.379,1.342,1.349,3.34A1.982,1.982,0,0,0,12.986,19H13a1.989,1.989,0,0,0,1.922-1.478Z"/></svg>
                  Efficient Routing:
                </dt>
                <dd class="inline">Achieve efficient URL-based navigation and data handling, enhancing the overall performance of your application.</dd>
              </div>
              <div class="relative pl-9">
                <dt class="inline font-semibold text-sky-500">

                  <svg id="Layer_1" class="absolute left-1 top-1 h-5 w-5 text-sky-500" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="currentColor"><path d="m0 9v9a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-9zm14 10h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2zm4-4h-12a1 1 0 0 1 0-2h12a1 1 0 0 1 0 2zm6-8v-1a5.006 5.006 0 0 0 -5-5h-14a5.006 5.006 0 0 0 -5 5v1zm-14-4a1 1 0 1 1 -1 1 1 1 0 0 1 1-1zm-3 0a1 1 0 1 1 -1 1 1 1 0 0 1 1-1zm-3 0a1 1 0 1 1 -1 1 1 1 0 0 1 1-1z"/></svg>
                  SEO-Friendly:
                </dt>
                <dd class="inline">Improve search engine visibility with RouteMamba's SEO-friendly approach, benefiting your app's discoverability.</dd>
              </div>
            </dl>
          </div>
        </div>
        <!-- <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot"
          class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
          width="2432" height="1442"> -->
          <img src="./assets2/code-image.png" alt="Product screenshot"
          class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
          width="2432" height="1442">
      </div>
    </div>
  </div>
  <!-- About section -->

<!-- Features section -->
  <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">

        <div
          class="rounded-[20px] border-gray-700 bg-gray-800 scale-general cursor-pointer space-y-4 border p-8 lg:w-96">
          <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-gray-900 text-white shadow-xl"><svg
            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
            class="text-sky-500 dark:text-secondary1" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.24,24a2.262,2.262,0,0,1-.948-.212,2.18,2.18,0,0,1-1.2-2.622L10.653,16H6.975A3,3,0,0,1,4.1,12.131l3.024-10A2.983,2.983,0,0,1,10,0h3.693a2.6,2.6,0,0,1,2.433,3.511L14.443,8H17a3,3,0,0,1,2.483,4.684l-6.4,10.3A2.2,2.2,0,0,1,11.24,24Z"/>
          </svg></div>
          <h2 class="text-medium text-white text-0 text-center font-medium">Fast & Light</h2>
          <p class="text-normal text-center text-gray-200">Routemamba is a fast and lightweight library. Simply link it with a script tag and configure it by creating an app.js file.</p>
        </div>

        <div
          class="rounded-[20px] border-gray-700 bg-gray-800 scale-general cursor-pointer space-y-4 border p-8 lg:w-96">
          <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-gray-900 text-white shadow-xl"><svg
            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
            class="text-sky-500 dark:text-secondary1" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M24,5c0-2.206-1.794-4-4-4s-4,1.794-4,4c0,1.86,1.277,3.428,3,3.873v8.127c0,.551-.449,1-1,1h-4.996l2.203-2.203-1.414-1.414-3.256,3.256c-.774,.775-.774,2.037,0,2.812l3.256,3.256,1.414-1.414-2.304-2.293h5.097c1.654,0,3-1.346,3-3V8.873c1.723-.445,3-2.013,3-3.873Zm-4,2c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Zm-9.838,2.662l3.256-3.255c.775-.775,.775-2.037,0-2.812L10.162,.338l-1.414,1.414,2.259,2.248H6c-1.654,0-3,1.346-3,3V15.127c-1.723,.445-3,2.013-3,3.873,0,2.206,1.794,4,4,4s4-1.794,4-4c0-1.86-1.277-3.428-3-3.873V7c0-.551,.449-1,1-1h4.995l-2.248,2.248,1.414,1.414Zm-4.162,9.338c0,1.103-.897,2-2,2s-2-.897-2-2,.897-2,2-2,2,.897,2,2Z"/>
          </svg></div>
          <h2 class="text-medium text-white text-0 text-center font-medium">Customizable</h2>
          <p class="text-normal text-center text-gray-200">Create highly customizable web apps using this library. It is designed especially for raw coders and raw projects.</p>
        </div>

        <div
          class="rounded-[20px] border-gray-700 bg-gray-800 scale-general cursor-pointer space-y-4 border p-8 lg:w-96">
          <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-gray-900 text-white shadow-xl"><svg
            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
            class="text-sky-500 dark:text-secondary1" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22,1H10.037V4H8V1H6V4H3.963V1H2A2,2,0,0,0,0,3V5A2,2,0,0,0,2,7H22a2,2,0,0,0,2-2V3A2,2,0,0,0,22,1Z"/><path d="M22,9H10.037v3H8V9H6v3H3.963V9H2a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2H22a2,2,0,0,0,2-2V11A2,2,0,0,0,22,9Z"/><path d="M22,17H10.037v3H8V17H6v3H3.963V17H2a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2H22a2,2,0,0,0,2-2V19A2,2,0,0,0,22,17Z"/>
          </svg></div>
          <h2 class="text-medium text-white text-0 text-center font-medium">Server-side Rendering</h2>
          <p class="text-normal text-center text-gray-200">Routemamba supports server-side rendering, allowing you to develop SEO-friendly web apps.</p>
        </div>

        <div
          class="rounded-[20px] border-gray-700 bg-gray-800 scale-general cursor-pointer space-y-4 border p-8 lg:w-96">
          <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-gray-900 text-white shadow-xl"><svg
              stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
              class="text-sky-500 dark:text-secondary1" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="m0 9v9a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-9zm14 10h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2zm4-4h-12a1 1 0 0 1 0-2h12a1 1 0 0 1 0 2zm6-8v-1a5.006 5.006 0 0 0 -5-5h-14a5.006 5.006 0 0 0 -5 5v1zm-14-4a1 1 0 1 1 -1 1 1 1 0 0 1 1-1zm-3 0a1 1 0 1 1 -1 1 1 1 0 0 1 1-1zm-3 0a1 1 0 1 1 -1 1 1 1 0 0 1 1-1z"/>
            </svg>
          </div>
          <h2 class="text-medium text-white text-0 text-center font-medium">SEO Friendly</h2>
          <p class="text-normal text-center text-gray-200">Routemamba provides flexibility in handling web SEO while routing. Check our <a class="text-sky-500 font-bold" href="/documentation">documentation</a> for more information.</p>
        </div>


        <div
          class="rounded-[20px] border-gray-700 bg-gray-800 scale-general cursor-pointer space-y-4 border p-8 lg:w-96">
          <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-gray-900 text-white shadow-xl"><svg
            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
            class="text-sky-500 dark:text-secondary1" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.922,.681c-.686-.572-1.579-.808-2.516-.636l-4.122,1.003c-1.903,.346-3.284,2.001-3.284,3.936v7.802l-1,.182-1-.182v-7.802c0-1.935-1.381-3.589-3.227-3.923l-4.237-1.028c-.881-.162-1.774,.077-2.458,.648-.686,.572-1.078,1.411-1.078,2.303v9.834l12,2.182,12-2.182V11.984c0-.892-.393-1.731-1.078-2.303Z"/>
          </svg></div>
          <h2 class="text-medium text-white text-0 text-center font-medium">Open Source</h2>
          <p class="text-normal text-center text-gray-200">Routemamba is an open-source library, freely available for commercial use. You can also contribute to the project on  <a class="text-sky-500 font-bold" href="https://github.com/rezwanahmedsami/routemamba">GitHub</a>.</p>
        </div>


        <div
          class="rounded-[20px] border-gray-700 bg-gray-800 scale-general cursor-pointer space-y-4 border p-8 lg:w-96">
          <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-gray-900 text-white shadow-xl"><svg
            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
            class="text-sky-500 dark:text-secondary1" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="m22.4 1.592c-1.812-1.807-5-2.759-10.417 1.008-5.412-3.766-8.605-2.815-10.413-1.008s-2.76 4.998 1.008 10.408c-3.768 5.41-2.815 8.6-1.008 10.408a5.271 5.271 0 0 0 3.844 1.6c1.7 0 3.857-.7 6.569-2.594 2.713 1.889 4.868 2.595 6.569 2.595a5.266 5.266 0 0 0 3.844-1.6c1.804-1.809 2.761-4.999-1.008-10.409 3.769-5.41 2.812-8.6 1.012-10.408zm-3.928 1.416a2.446 2.446 0 0 1 1.8.707c1.355 1.354.585 3.6-.823 5.8-.706-.821-1.487-1.675-2.4-2.584s-1.764-1.689-2.585-2.395a8.148 8.148 0 0 1 4.008-1.528zm-.855 8.992c-.968 1.171-1.958 2.214-2.688 2.944s-1.775 1.72-2.946 2.687c-1.171-.967-2.215-1.956-2.945-2.687s-1.721-1.773-2.688-2.944c.967-1.171 1.957-2.214 2.688-2.944s1.773-1.721 2.945-2.688c1.172.967 2.215 1.957 2.946 2.688s1.72 1.773 2.688 2.944zm-13.923-8.285a2.445 2.445 0 0 1 1.8-.707 8.141 8.141 0 0 1 4.006 1.53c-.822.706-1.676 1.486-2.585 2.395s-1.692 1.767-2.398 2.584c-1.407-2.204-2.178-4.448-.823-5.802zm0 16.57c-1.355-1.354-.584-3.6.823-5.8.706.821 1.487 1.675 2.4 2.584s1.762 1.7 2.579 2.4c-2.206 1.402-4.448 2.169-5.802.816zm16.578 0c-1.355 1.354-3.6.586-5.8-.818.818-.7 1.676-1.495 2.581-2.4s1.69-1.763 2.4-2.584c1.404 2.204 2.174 4.448.819 5.802z"/><circle cx="12" cy="12" r="2"/>
          </svg></div>
          <h2 class="text-medium text-white text-0 text-center font-medium">Reactive System</h2>
          <p class="text-normal text-center text-gray-200">Utilize the Routemamba state management system to make your application reactive. Refer to our <a class="text-sky-500 font-bold" href="/documentation">documentation</a> for more details.</p>
        </div>

        

      </div>
    </div>

  </div>
  <!-- Features section -->

  <!-- Easy navigate Code Features Section -->
  <section class="py-12 bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0">
            <!-- Code Image on the Left -->
            <div class="w-full md:w-1/2">
                <img src="./assets2/navigate-code.png" alt="Code" class="w-full h-auto">
            </div>

            <!-- Code Features with Short Explanations on the Right -->
            <div class="md:w-1/2 md:ml-6">
                <div class="space-y-4">
                    <div>
                        <h2 class="text-2xl font-semibold text-white">Easy navigate</h2>
                        <p class="text-gray-200">With RouteMamba's efficient routing system, users can effortlessly navigate through your app's different sections using simple and intuitive URLs. Say goodbye to page reloads and enjoy a smooth, uninterrupted journey as your users explore your content. Whether you're building a personal portfolio, an e-commerce store, or a data-rich dashboard, RouteMamba ensures that your users can easily find what they need with just a click.</p>
                    </div>
                    
                    <!-- Add more code features with their explanations as needed -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Easy to register routes Code Features Section -->
<section class="py-12 bg-gray-900">
  <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0">
          <!-- Code Features with Short Explanations on the Left -->
          <div class="md:w-1/2 md:mr-6">
              <div class="space-y-4">
                <div>
                  <h2 class="text-2xl font-semibold text-white">Easy to register routes</h2>
                  <p class="text-gray-200">Creating and managing routes for your single-page web applications has never been simpler. Say goodbye to complex setups and boilerplate code. RouteMamba allows developers to effortlessly define routes using a straightforward syntax, reducing development time and effort. Whether you're adding new pages or updating existing ones, registering routes is a breeze, enabling you to focus on building engaging user experiences. Embrace the convenience and efficiency of RouteMamba's route registration, empowering you to unleash your creativity and take full control of your application's navigation.</p>
              </div>
                  <!-- Add more code features with their explanations as needed -->
              </div>
          </div>

          <!-- Code Image on the Right -->
          <div class="w-full md:w-1/2">
              <img src="./assets2/easy-register-route-code.png" alt="Code" class="w-full h-auto">
          </div>
      </div>
  </div>
</section>


  <!-- Author Section -->
  <section class="bg-gray-800 py-12">
    <div class="container mx-auto px-4 max-w-7xl">
      <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl text-center mb-4">Meet the Visionary Behind RouteMamba</h1>
        <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0">
            <!-- <div class="w-32 h-32 md:w-48 md:h-48 rounded-full overflow-hidden"> -->
                <img src="./assets2/author.png" alt="Author" class="object-cover w-32 h-32 md:w-48 md:h-48">
            <!-- About Author -->
            <div class="md:ml-6">
                <h2 class="text-2xl font-semibold text-white">Rezwan Ahmed Sami</h2>
                <p class="text-gray-400">Software Engineer</p>
                <p class="mt-4 text-gray-200">An innovative and ambitious software engineer, driven by a relentless passion for pushing the boundaries of technology to create groundbreaking solutions. With a strong desire to build a successful business and establish a reputable brand, they remain committed to leveraging their expertise and entrepreneurial spirit to bring their visionary ideas to life. Thriving on challenges, they constantly seek opportunities to grow and make a meaningful impact in the tech industry.</p>
            </div>
        </div>
    </div>
</section>
<!-- Author Section -->

  <!-- Top contributors -->
  <!-- https://api.github.com/repos/rezwanahmedsami/routemamba/contributors?q=contributions&order=desc&per_page=10 -->
  <div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
      <div class="max-w-2xl">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Top contributors</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">Recognizing the passionate developers whose invaluable contributions have shaped RouteMamba's success. Join our community and be part of the driving force behind a thriving ecosystem of innovation and collaboration.</p>
        <a href="#" class="text-sm font-bold leading-6 text-sky-500">Contribute Now<span
          aria-hidden="true">&rarr;</span></a>
      </div>
      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <?php
          $contributors = getGitHubContributors($owner, $repo);

          foreach ($contributors as $key => $con) {
            ?>
                <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="<?php echo $con["avatar_url"]; ?>" alt="">
                    <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-white"><?php echo $con["login"]; ?></h3>
                    </div>
                </div>
                </li>
            <?php
          }
        ?>

        <!-- <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="https://avatars.githubusercontent.com/u/76748049?v=4" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Rezwan Ahmed Sami</h3>
            </div>
          </div>
        </li>

        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="https://avatars.githubusercontent.com/u/79096707?v=4" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Azaz Ahmed Lipu</h3>
            </div>
          </div>
        </li> -->
  
        <!-- More people... -->
      </ul>
    </div>
  </div>
  <!-- Top contributors -->  


  <footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <p>© 2023 Routemamba. All rights reserved.</p>
            </div>
            <div class="flex items-center space-x-4">
                <a href="https://discord.gg/7HbVtssu" class="hover:text-sky-500">Join Discord</a>
            </div>
        </div>
    </div>
</footer>


</body>

</html>