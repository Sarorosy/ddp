<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dragon Digital Punch</title>
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="<?php echo base_url('assets/favicon/apple-touch-icon.png') ?>" />
  <link
    rel="icon"
    type="image/png"
    sizes="192x192"
    href="<?php echo base_url('assets/favicon/android-chrome-192x192.png') ?>" />
  <link
    rel="icon"
    type="image/png"
    sizes="512x512"
    href="<?php echo base_url('assets/favicon/android-chrome-512x512.png') ?>" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>" />
  <link rel="manifest" href="<?php base_url('assets/favicon/site.webmanifest') ?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <style>
    /* Add this to your existing CSS */
    nav {
      transition: top 0.3s;
    }
  </style>
</head>

<body>
  <!-- <div id="preloader">
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="Loading..." /></a>
    </div> -->

  <!-- Navbar -->
  <nav class=" text-white   md:px-12 uppercase fixed top-0 w-full  z-50" id="main-nav">
    <div class="bg-[#770b0b] px-4 rounded-xl w-full flex justify-between items-center my-5">
      <div class="flex items-center">
        <a href="<?php echo base_url() ?>"><img
            src="<?php echo base_url('assets/images/logo.png') ?>"
            alt="Dragon Digital Punch Logo"
            class="h-10 md:h-16" /></a>

      </div>
      <ul class="hidden md:flex space-x-6">
        <li><a href="<?php echo base_url() ?>" class="hover:text-gray-300 hover:font-bold">Home</a></li>
        <li id="services-item" class="relative">
          <a href="#" class="hover:text-gray-300 hover:font-bold">Services</a>

          <!-- Floating Div -->
          <div class="hidden absolute left-1/2 transform -translate-x-1/2 bg-white text-black w-[700px] p-4 shadow-lg rounded-lg top-full mt-2 z-10" id="services-dropdown">
            <!-- Flex container for two services -->
            <div class="flex justify-between">

              <!-- Digital Services (left) -->
              <a href="<?php echo base_url('services') ?>">
                <div class="hover:bg-red-100 px-2 py-3 rounded cursor-pointer">
                  <!-- Icon for Digital Services -->
                  <div class="flex items-center mb-2">
                    <svg height="30px" width="30px" fill="#750000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#750000" stroke-width="0.00032">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <title>globe</title>
                        <path d="M22.658 10.988h5.172c0.693 1.541 1.107 3.229 1.178 5.012h-5.934c-0.025-1.884-0.181-3.544-0.416-5.012zM20.398 3.896c2.967 1.153 5.402 3.335 6.928 6.090h-4.836c-0.549-2.805-1.383-4.799-2.092-6.090zM16.068 9.986v-6.996c1.066 0.047 2.102 0.216 3.092 0.493 0.75 1.263 1.719 3.372 2.33 6.503h-5.422zM9.489 22.014c-0.234-1.469-0.396-3.119-0.421-5.012h5.998v5.012h-5.577zM9.479 10.988h5.587v5.012h-6.004c0.025-1.886 0.183-3.543 0.417-5.012zM11.988 3.461c0.987-0.266 2.015-0.435 3.078-0.469v6.994h-5.422c0.615-3.148 1.591-5.265 2.344-6.525zM3.661 9.986c1.551-2.8 4.062-4.993 7.096-6.131-0.715 1.29-1.559 3.295-2.114 6.131h-4.982zM8.060 16h-6.060c0.066-1.781 0.467-3.474 1.158-5.012h5.316c-0.233 1.469-0.39 3.128-0.414 5.012zM8.487 22.014h-5.29c-0.694-1.543-1.139-3.224-1.204-5.012h6.071c0.024 1.893 0.188 3.541 0.423 5.012zM8.651 23.016c0.559 2.864 1.416 4.867 2.134 6.142-3.045-1.133-5.557-3.335-7.11-6.142h4.976zM15.066 23.016v6.994c-1.052-0.033-2.067-0.199-3.045-0.46-0.755-1.236-1.736-3.363-2.356-6.534h5.401zM21.471 23.016c-0.617 3.152-1.592 5.271-2.344 6.512-0.979 0.271-2.006 0.418-3.059 0.465v-6.977h5.403zM16.068 17.002h5.998c-0.023 1.893-0.188 3.542-0.422 5.012h-5.576v-5.012zM22.072 16h-6.004v-5.012h5.586c0.235 1.469 0.393 3.126 0.418 5.012zM23.070 17.002h5.926c-0.066 1.787-0.506 3.468-1.197 5.012h-5.152c0.234-1.471 0.398-3.119 0.423-5.012zM27.318 23.016c-1.521 2.766-3.967 4.949-6.947 6.1 0.715-1.276 1.561-3.266 2.113-6.1h4.834z"></path>
                      </g>
                    </svg>
                    <h1 class="font-bold text-xl mb-1 text-[#770000] ml-5">Digital Services</h1>
                  </div>
                  <p class="text-gray-900 font-sans text-sm">Our digital services include website development, app development, SEO, and digital marketing. We aim to create impactful digital experiences for your business.</p>
                </div>


                <!-- Business Services (right) -->
                <a href="<?php echo base_url('business_services') ?>">
                  <div class="hover:bg-red-100 px-2 py-3 rounded cursor-pointer">
                    <!-- Icon for Business Services -->
                    <div class="flex items-center mb-2">
                      <svg height="40px" width="40px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path d="M326.5625 301.0625l-1.21875-93.28125c-0.1875-14.25 11.34375-25.875 25.59375-25.875h322.125c14.15625 0 25.59375 11.4375 25.59375 25.59375v93.1875h-65.625v-53.15625H391.53125l0.65625 52.78125-65.625 0.75z" fill="#750000"></path>
                          <path d="M404.09375 335.75h-91.59375c-1.59375 0-3-1.3125-3-3v-30.1875c0-1.59375 1.3125-3 3-3h91.59375c1.59375 0 3 1.3125 3 3v30.1875c0 1.6875-1.40625 3-3 3zM711.40625 335.75h-91.125c-1.78125 0-3.1875-1.40625-3.1875-3.1875V302.9375c0-1.78125 1.40625-3.1875 3.1875-3.1875h91.125c1.78125 0 3.1875 1.40625 3.1875 3.1875v29.625c0.09375 1.78125-1.40625 3.1875-3.1875 3.1875z" fill="#000000"></path>
                          <path d="M862.90625 932.1875H162.96875c-38.71875 0-70.125-31.40625-70.125-70.125V402.3125c0-38.71875 31.40625-70.125 70.125-70.125h699.84375c38.71875 0 70.125 31.40625 70.125 70.125v459.75c0.09375 38.71875-31.3125 70.125-70.03125 70.125z" fill="#750000"></path>
                          <path d="M234.575 332.298125l75-0.215625 1.726875 599.34375-75 0.215625zM714.670625 332.298125l75-0.215625 1.726875 599.34375-75 0.215625z" fill="#000000"></path>
                        </g>
                      </svg>
                      <h1 class="font-bold text-xl mb-1 text-[#770000] ml-5">Business Services</h1>
                    </div>
                    <p class="text-gray-900 font-sans text-sm">Our business services help streamline your operations and enhance productivity with consulting, management tools, and tailored solutions.</p>
                  </div>
                </a>

            </div>
          </div>
        </li>






        <li><a href="<?php echo base_url('about-us') ?>" class="hover:text-gray-300 hover:font-bold">About Us</a></li>
        <li><a href="<?php echo base_url('solutions') ?>" class="hover:text-gray-300 hover:font-bold">Solutions</a></li>
      </ul>
      <div>
        <a
          href="<?php echo base_url('contact-us') ?>"
          class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-300 hover:text-black hover:font-bold">Contact</a>
      </div>

      <!-- Mobile menu icon -->
      <div class="md:hidden">
        <button id="menu-toggle" class="focus:outline-none">
          <!-- Add your menu icon here (e.g., a burger icon) -->
          <!-- <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16m-7 6h7"
              ></path>
            </svg> -->
          <h1 class="text-5xl text-white font-extralight">拳</h1>
        </button>
      </div>

      <!-- Mobile Menu -->
      <ul
        id="mobile-menu"
        class="absolute top-16 left-0 w-full bg-black text-white hidden flex-col space-y-4 p-4 md:hidden z-50">
        <li><a href="<?php echo base_url() ?>" class="hover:text-gray-300">Home</a></li>
        <li><a href="<?php echo base_url('services') ?>" class="hover:text-gray-300">Services</a></li>
        <li><a href="<?php echo base_url('about-us') ?>" class="hover:text-gray-300">About Us</a></li>
        <li><a href="<?php echo base_url('solutions') ?>" class="hover:text-gray-300">Solutions</a></li>
        <li><a href="<?php echo base_url('contact-us') ?>" class="hover:text-gray-300">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main class="pt-16 md:pt-24">
    <?php $this->load->view($main); ?>
  </main>

  <!-- Footer -->
  <footer class="bg-black text-white py-10">
    <div
      class="container mx-auto px-4 flex flex-col md:flex-row md:justify-around space-y-8 md:space-y-0">
      <!-- Explore Section -->
      <div>
        <h3 class="text-lg font-bold mb-4">Explore</h3>
        <ul>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a href="<?php echo base_url('about-us') ?>" class="hover:text-gray-400">About</a>
          </li>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a href="<?php echo base_url('services') ?>" class="hover:text-gray-400">Services</a>
          </li>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a href="<?php echo base_url('solutions') ?>" class="hover:text-gray-400">Solutions</a>
          </li>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a href="<?php echo base_url('blog') ?>" class="hover:text-gray-400">Blog</a>
          </li>
        </ul>
      </div>
      <!-- Services Section -->
      <div>
        <h3 class="text-lg font-bold mb-4">Services</h3>
        <ul>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a href="<?php echo base_url('services') ?>#business-strategy" class="hover:text-gray-400">Business Strategy Development</a>
          </li>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a href="<?php echo base_url('services') ?>#digital-marketing" class="hover:text-gray-400">Digital Marketing Services</a>
          </li>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a
              href="<?php echo base_url('services') ?>#digital-operations"
              class="hover:text-gray-400">Digital Business Operations</a>
          </li>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <a
              href="<?php echo base_url('solutions') ?>"
              class="hover:text-gray-400">View More</a>
          </li>
        </ul>
      </div>
      <!-- Get in Touch Section -->
      <div>
        <h3 class="text-lg font-bold mb-4">Get in Touch</h3>
        <ul>
          <li class="flex items-center mb-2">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" /><img
              src="https://img.freepik.com/free-vector/illustration-india-flag_53876-27130.jpg?w=900&t=st=1727935289~exp=1727935889~hmac=f2b044d22417f099a8befeadc4586acc836bf199d335b37c59ada8f15b547fbd"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" class="w-6 h-4">
              <rect width="12" height="2" fill="#00732f" />
              <rect width="12" height="2" y="2" fill="#fff" />
              <rect width="12" height="2" y="4" fill="#000" />
              <rect width="3" height="6" fill="#f00" />
            </svg>
          </li>
          <li class="flex items-center mb-2">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" />info@dragondigitalpunch.com
          </li>
          <li class="flex items-center mb-2">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" /><a href="<?php echo base_url('contact-us') ?>" class="hover:text-gray-400">Contact Us</a>
          </li>
          <li class="flex items-center">
            <img
              src="<?php echo base_url('assets/images/ninja-star.png') ?>"
              alt="Image by juicy_fish on Freepik"
              height="20"
              width="20"
              class="ml-2 mr-2" /><a href="<?php echo base_url('sitemap') ?>" class="hover:text-gray-400">Sitemap</a>
          </li>
          <li class="my-5">
            <div class="flex gap-2">
              <a class="text-primary hover:text-primary-foreground" href="#" rel="ugc">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="#ffffff"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-6 w-6">
                  <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                </svg>
              </a>
              <a class="text-primary hover:text-primary-foreground" href="#" rel="ugc">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="#ffffff"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-6 w-6">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
              </a>
              <a class="text-primary hover:text-primary-foreground" href="#" rel="ugc">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="#ffffff"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-6 w-6">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                </svg>
              </a>
              <a class="text-primary hover:text-primary-foreground" href="#" rel="ugc">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="#ffffff"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-6 w-6">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect width="4" height="12" x="2" y="9"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </a>
            </div>
          </li>
        </ul>
        <div class="mt-4">
          <a
            href="<?php echo base_url('request-a-quote') ?>/"
            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Request a Quote</a>
        </div>

      </div>
    </div>


    <!-- Copyright Section -->
    <div class="border-t border-gray-700 mt-10 pt-4 text-center text-sm">
      &copy; 2024 Dragon Digital Punch. All Rights Reserved.
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button
    id="backToTop"
    class="fixed bottom-10 left-10 z-50 p-3 bg-white rounded-full shadow-lg hover:bg-red-600 hidden">
    <img src="<?php echo base_url('assets/images/fire.png') ?>" alt="Image by Freepik" class="w-9 h-9" />
  </button>

  <!-- <div id="small-dot"></div>

  <div id="large-circle">
    <span class="circle-text">VIEW</span>
  </div> -->


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    window.addEventListener("load", function() {
      setTimeout(function() {
        document.getElementById("preloader").style.display = "none";
      }, 2500);
    });
    AOS.init();
    window.addEventListener("scroll", function() {
      const backToTopButton = document.getElementById("backToTop");
      if (window.scrollY > window.innerHeight * 1.5) {
        backToTopButton.classList.remove("hidden");
      } else {
        backToTopButton.classList.add("hidden");
      }
    });
    // Scroll to top functionality
    document
      .getElementById("backToTop")
      .addEventListener("click", function() {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="https://cdn.rawgit.com/mrdoob/three.js/r128/examples/js/loaders/GLTFLoader.js"></script>

  <script>
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    menuToggle.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
    let lastScrollTop = 0;
    const navbar = document.querySelector("nav");

    window.addEventListener("scroll", function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop) {
        // Scrolling down
        navbar.style.top = "-80px"; // Adjust based on the height of your navbar
      } else {
        // Scrolling up
        navbar.style.top = "0";
      }

      lastScrollTop = scrollTop;
    });
  </script>
  <!-- <audio id="background-music" src="<?php echo base_url("assets/images/japan-mp3.opus") ?>" type="audio/ogg"></audio> -->

  <script>
    const audio = document.getElementById('background-music');

    // Function to play audio
    const playAudio = () => {
      audio.play().catch(error => {
        console.log("Autoplay is not allowed. Interact with the page to play audio.");
      });

    };
    playAudio();
    // Set an event listener for any user interaction (mouse move or touch)
    document.addEventListener('click', () => {
      playAudio();
    });

    // Alternatively, you can also use mousemove or touchstart for better coverage
    document.addEventListener('mousemove', () => {
      playAudio();
    });

    // Uncomment the following line if you want to use touch events for mobile devices
    // document.addEventListener('touchstart', () => { playAudio(); });
  </script>
  <script>
    const nav = document.getElementById('main-nav');
    const servicesItem = document.getElementById('services-item');
    const servicesDropdown = document.getElementById('services-dropdown');

    // Show the dropdown when hovering over Services link
    servicesItem.addEventListener('mouseenter', () => {
      servicesDropdown.classList.remove('hidden');
    });

    // Keep showing the dropdown when hovering over it
    servicesDropdown.addEventListener('mouseenter', () => {
      servicesDropdown.classList.remove('hidden');
    });

    // Hide the dropdown when leaving the entire nav (including the dropdown)
    nav.addEventListener('mouseleave', () => {
      servicesDropdown.classList.add('hidden');
    });
  </script>
  <script>
    // JavaScript for the cursor follow effect
    const smallDot = document.getElementById('small-dot');
    const largeCircle = document.getElementById('large-circle');
    let mouseX = 0;
    let mouseY = 0;
    let circleX = 0;
    let circleY = 0;

    // Speed for the large circle follow (adjust for smoother effect)
    const circleSpeed = 0.2; // Lower values = slower, higher values = faster

    // Initial opacity is hidden
    smallDot.style.opacity = "0";
    largeCircle.style.opacity = "0";

    // Function to smoothly follow the cursor
    document.addEventListener('mousemove', function(e) {
      mouseX = e.clientX;
      mouseY = e.clientY;

      // Ensure visibility of the cursors when mouse moves
      smallDot.style.opacity = "0.8";
      largeCircle.style.opacity = "0.6";

      // Directly position the small dot to mouse position
      smallDot.style.left = `${mouseX}px`;
      smallDot.style.top = `${mouseY}px`;
    });

    // Smoothly animate the large circle to follow the mouse
    function animateCircle() {
      circleX += (mouseX - circleX) * circleSpeed;
      circleY += (mouseY - circleY) * circleSpeed;

      largeCircle.style.left = `${circleX}px`;
      largeCircle.style.top = `${circleY}px`;

      requestAnimationFrame(animateCircle);
    }

    // Start the animation loop
    animateCircle();

    // Hover effect on links
    const links = document.querySelectorAll('a');
    links.forEach(link => {
      link.addEventListener('mouseenter', () => {
        largeCircle.classList.add('hovered'); // Add class to apply styles
        smallDot.classList.add('hide'); // Hide small dot by adding class
      });

      link.addEventListener('mouseleave', () => {
        largeCircle.classList.remove('hovered'); // Remove class to reset styles
        smallDot.classList.remove('hide'); // Show small dot again by removing class
      });
    });


    // Hide cursor when mouse leaves the window (mouseleave)
    document.addEventListener('mouseleave', () => {
      smallDot.style.transition = "opacity 0.3s";
      largeCircle.style.transition = "opacity 0.3s";
      smallDot.style.opacity = "0";
      largeCircle.style.opacity = "0";
    });

    // Show cursor when mouse enters the window (mouseenter)
    document.addEventListener('mouseenter', () => {
      smallDot.style.transition = "opacity 0.3s";
      largeCircle.style.transition = "opacity 0.3s";
      smallDot.style.opacity = "0.8";
      largeCircle.style.opacity = "0.6";
    });
  </script>


  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/6703b5db02d78d1a30ed9458/1i9j7spdu';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->

</body>

</html>