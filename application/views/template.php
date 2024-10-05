<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dragon Digital Punch</title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="<?php echo base_url('assets/favicon/apple-touch-icon.png') ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="<?php echo base_url('assets/favicon/android-chrome-192x192.png') ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="512x512"
      href="<?php echo base_url('assets/favicon/android-chrome-512x512.png') ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>"
    />
    <link rel="manifest" href="<?php base_url('assets/favicon/site.webmanifest') ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script>(function(w, d) { w.CollectId = "66e2b53af4318a97acfbb792"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
  <style>
    /* Add this to your existing CSS */
nav {
  transition: top 0.3s;
}

  </style>
  </head>

  <body>
    <div id="preloader">
      <a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="Loading..." /></a>
    </div>

    <!-- Navbar -->
    <nav class=" text-white flex justify-between items-center p-4 md:px-12 uppercase fixed top-0 w-full bg-[#2d0606] z-50">
        <div class="flex items-center">
          <a href="<?php echo base_url()?>"><img
            src="<?php echo base_url('assets/images/logo.png') ?>"
            alt="Dragon Digital Punch Logo"
            class="h-10 md:h-16"
          /></a>
          
        </div>
        <ul class="hidden md:flex space-x-6">
          <li><a href="<?php echo base_url()?>" class="hover:text-gray-300 hover:font-bold">Home</a></li>
          <li><a href="<?php echo base_url('services')?>" class="hover:text-gray-300 hover:font-bold">Services</a></li>
          <li><a href="<?php echo base_url('about-us')?>" class="hover:text-gray-300 hover:font-bold">About Us</a></li>
          <li><a href="<?php echo base_url('solutions')?>" class="hover:text-gray-300 hover:font-bold">Solutions</a></li>
        </ul>
        <div>
          <a
            href="<?php echo base_url('contact-us')?>"
            class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-300 hover:text-black hover:font-bold"
            >Contact</a
          >
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
          class="absolute top-16 left-0 w-full bg-black text-white hidden flex-col space-y-4 p-4 md:hidden z-50"
        >
          <li><a href="<?php echo base_url()?>" class="hover:text-gray-300">Home</a></li>
          <li><a href="<?php echo base_url('services')?>" class="hover:text-gray-300">Services</a></li>
          <li><a href="<?php echo base_url('about-us')?>" class="hover:text-gray-300">About Us</a></li>
          <li><a href="<?php echo base_url('solutions')?>" class="hover:text-gray-300">Solutions</a></li>
          <li><a href="<?php echo base_url('contact-us')?>" class="hover:text-gray-300">Contact</a></li>
        </ul>
      </nav>

      <main class="pt-16 md:pt-20">
  <?php $this->load->view($main); ?>
</main>

      <!-- Footer -->
    <footer class="bg-black text-white py-10">
      <div
        class="container mx-auto px-4 flex flex-col md:flex-row md:justify-around space-y-8 md:space-y-0"
      >
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
                class="ml-2 mr-2"
              />
              <a href="<?php echo base_url('about-us')?>" class="hover:text-gray-400">About</a>
            </li>
            <li class="flex items-center">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />
              <a href="<?php echo base_url('services')?>" class="hover:text-gray-400">Services</a>
            </li>
            <li class="flex items-center">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />
              <a href="<?php echo base_url('solutions')?>" class="hover:text-gray-400">Solutions</a>
            </li>
            <li class="flex items-center">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />
              <a href="<?php echo base_url('blog')?>" class="hover:text-gray-400">Blog</a>
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
                class="ml-2 mr-2"
              />
              <a href="<?php echo base_url('services')?>#business-strategy" class="hover:text-gray-400"
                >Business Strategy Development</a
              >
            </li>
            <li class="flex items-center">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />
              <a href="<?php echo base_url('services')?>#digital-marketing" class="hover:text-gray-400"
                >Digital Marketing Services</a
              >
            </li>
            <li class="flex items-center">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />
              <a
                href="<?php echo base_url('services')?>#digital-operations"
                class="hover:text-gray-400"
                >Digital Business Operations</a
              >
            </li>
            <li class="flex items-center">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />
              <a
                href="<?php echo base_url('solutions')?>"
                class="hover:text-gray-400"
                >View More</a
              >
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
                class="ml-2 mr-2"
              /><img
                src="https://img.freepik.com/free-vector/illustration-india-flag_53876-27130.jpg?w=900&t=st=1727935289~exp=1727935889~hmac=f2b044d22417f099a8befeadc4586acc836bf199d335b37c59ada8f15b547fbd"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />
            </li>
            <li class="flex items-center mb-2">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              />info@dragondigitalpunch.com
            </li>
            <li class="flex items-center mb-2">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              /><a href="<?php echo base_url('contact-us')?>" class="hover:text-gray-400"
                >Contact Us</a
              >
            </li>
            <li class="flex items-center">
              <img
                src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                alt="Image by juicy_fish on Freepik"
                height="20"
                width="20"
                class="ml-2 mr-2"
              /><a href="<?php echo base_url('sitemap')?>" class="hover:text-gray-400">Sitemap</a>
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
                    class="h-6 w-6"
                  >
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
                    class="h-6 w-6"
                  >
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
                    class="h-6 w-6"
                  >
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
                    class="h-6 w-6"
                  >
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
              href="<?php echo base_url('request-a-quote')?>/"
              class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
              >Request a Quote</a
            >
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
      class="fixed bottom-10 left-10 z-50 p-3 bg-white rounded-full shadow-lg hover:bg-red-600 hidden"
    >
      <img src="<?php echo base_url('assets/images/fire.png') ?>" alt="Image by Freepik" class="w-9 h-9" />
    </button>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      window.addEventListener("load", function () {
        setTimeout(function () {
          document.getElementById("preloader").style.display = "none";
        }, 2500);
      });
      AOS.init();
      window.addEventListener("scroll", function () {
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
        .addEventListener("click", function () {
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

window.addEventListener("scroll", function () {
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

  </body>
</html>
