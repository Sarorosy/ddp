<section
  class="banner flex items-center justify-center h-92 bg-cover bg-center relative"
  style="background-image: url(<?php echo base_url('assets/images/jp-bg.jpg') ?>)">
  <!-- White Overlay -->
  <div class="absolute inset-0 bg-white opacity-70"></div>

  <div
    class="text-center text-black p-8 rounded w-full max-w-3xl mx-auto relative z-10">
    <h1 class="text-5xl font-bold text-red-600 arigato">
      Digital Dragon Tactics
    </h1>
    <p class="mt-2 text-lg">Our High-Impact Marketing Services</p>
    <div class="text-sm mt-4">
      <a href="/" class="hover:underline text-black">Home</a>
      <span class="mx-2">/</span>
      <span class="text-black">Services</span>
    </div>

    <!-- Social Icons -->
    <div class="flex flex-col md:flex-row items-center justify-around mt-3">
      <!-- Social Icons -->
      <div class="flex justify-center space-x-4 mt-6 md:mt-0">
        <a
          href="https://facebook.com"
          target="_blank"
          class="text-gray-900 hover:text-blue-500">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a
          href="https://twitter.com"
          target="_blank"
          class="text-gray-900 hover:text-blue-400">
          <i class="fab fa-twitter"></i>
        </a>
        <a
          href="https://linkedin.com"
          target="_blank"
          class="text-gray-900 hover:text-blue-700">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a
          href="https://instagram.com"
          target="_blank"
          class="text-gray-900 hover:text-pink-500">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

      <!-- Request a Quote Button -->
      <div class="mt-8 md:mt-0">
        <a
          href="<?php echo base_url('request-a-quote') ?>/"
          class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Request a Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="py-16" id="services">

  <div class="container mx-auto px-4">
    <!-- Business Strategy Development -->
    <div class="flex flex-col lg:flex-row items-center mb-16 rounded-xl py-2" id="business-strategy">
      <div class="relative w-full lg:w-1/2 rounded-lg shadow-lg max-w-xs mx-auto">
        <img
          src="<?php echo base_url('assets/images/businessman-with-sword.jpg') ?>"
          alt="Business Strategy Development"
          class="w-full rounded-lg shadow-lg" />
        <img
          src="<?php echo base_url('assets/images/business-strategy.jpg') ?>"
          alt="Another Image"
          class="absolute transition-transform duration-300 ease-in-out hover:scale-150 bottom-0 right-0 transform translate-y-4 translate-x-4 w-1/2 mx-auto rounded-lg shadow-lg" />
      </div>
      <div class="lg:w-1/2 lg:pl-8 mt-8 lg:mt-0">
        <h2 class="text-2xl font-bold mb-8">Business Strategy Development</h2>
        <ul class="list-none space-y-4">
          <!-- Card 1 - Dragon Vision Planning -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('dragon-vision')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Dragon Vision Planning</strong>
              </div>
              <span id="dragon-vision-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="dragon-vision" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We analyze your market position and craft a tailored roadmap to achieve dominance.
              </p>
              <!-- Form for Learn More button -->
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="dragon_vision_planning">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Card 2 - Competitive Edge Engineering -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('competitive-edge')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Competitive Edge Engineering</strong>
              </div>
              <span id="competitive-edge-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="competitive-edge" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We define and refine your unique value proposition to stay ahead.
              </p>
              <!-- Form for Learn More button -->
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="competitive_edge_engineering">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Card 3 - Brand Storycrafting -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('brand-storycrafting')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Brand Storycrafting</strong>
              </div>
              <span id="brand-storycrafting-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="brand-storycrafting" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We develop compelling narratives that fuel your brand’s growth and connect deeply with your audience.
              </p>
              <!-- Form for Learn More button -->
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="brand_storycrafting">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>


    <!-- Digital Marketing Services -->
    <div class="flex flex-col lg:flex-row-reverse items-center mb-16" id="digital-marketing">
      <div class="relative w-full lg:w-1/2 rounded-lg shadow-lg max-w-xs mx-auto">
        <img
          src="<?php echo base_url('assets/images/digital Solutions 1.jpg') ?>"
          alt="Business Strategy Development"
          class="w-full rounded-lg shadow-lg" />
        <img
          src="<?php echo base_url('assets/images/AdobeStock_167950678.jpeg') ?>"
          alt="Another Image"
          class="hidden md:block absolute transition-transform duration-300 ease-in-out hover:scale-150 bottom-0 right-0 transform translate-y-4 translate-x-4 w-1/2 mx-auto rounded-lg shadow-lg" />
      </div>
      <div class="lg:w-1/2 lg:pr-8">
        <h2 class="text-2xl font-bold mb-4">Digital Marketing Services</h2>
        <ul class="list-none space-y-4">
          <!-- Card 1 - SEO Dominance -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('seo-dominance')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">SEO Dominance</strong>
              </div>
              <span id="seo-dominance-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="seo-dominance" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We blaze your path to the top of search engine rankings, leaving your competitors trailing in the smoke.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="seo_dominance">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Card 2 - Content Power Strikes -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('content-power-strikes')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Content Power Strikes</strong>
              </div>
              <span id="content-power-strikes-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="content-power-strikes" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                Our team crafts content that engages, informs, and leaves a memorable impact.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="content_power_strikes">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Card 3 - Social Media Surge -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('social-media-surge')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Social Media Surge</strong>
              </div>
              <span id="social-media-surge-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="social-media-surge" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We deploy powerful social media strategies that elevate your brand above the noise.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="social_media_surge">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Card 4 - Precision Paid Advertising -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('precision-paid-advertising')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Precision Paid Advertising</strong>
              </div>
              <span id="precision-paid-advertising-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="precision-paid-advertising" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                Our campaigns hit their mark with laser-focused targeting and impactful execution.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="precision_paid_advertising">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Card 5 - Brand Identity Transformation -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('brand-identity-transformation')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Brand Identity Transformation</strong>
              </div>
              <span id="brand-identity-transformation-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="brand-identity-transformation" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We build bold visual identities that resonate and command attention.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="brand_identity_transformation">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Digital Business Operations -->
    <div class="flex flex-col lg:flex-row-reverse items-center mb-16" id="digital-operations">

      <div class="lg:w-1/2 lg:pr-8">
        <h2 class="text-2xl font-bold mb-4">Digital Business Operations</h2>
        <ul class="list-none space-y-4">

          <!-- Accordion Item 1 -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('technical-optimization')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Technical Optimization</strong>
              </div>
              <span id="technical-optimization-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="technical-optimization" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We ensure your digital platforms perform flawlessly, optimizing speed and usability.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="technical_optimization">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Accordion Item 2 -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('data-driven-adjustments')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Data-Driven Adjustments</strong>
              </div>
              <span id="data-driven-adjustments-icon" class="text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="data-driven-adjustments" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We analyze the data continuously, refining strategies to maximize performance.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="data_driven_adjustments">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

          <!-- Accordion Item 3 -->
          <li class="bg-white rounded-lg shadow-md px-6 py-3">
            <div class="flex items-start justify-between cursor-pointer" onclick="toggleAccordion('lead-generation-mastery')">
              <div class="flex items-start">
                <img
                  src="<?php echo base_url('assets/images/ninja-star.png') ?>"
                  height="20"
                  width="20"
                  alt="Shuriken"
                  class="mr-4 pt-2" />
                <strong class="block mb-2 text-black">Lead Generation Mastery</strong>
              </div>
              <span id="lead-generation-mastery-icodivclass=" text-xl text-red-800"><i class="fas fa-chevron-down"></i></span>
            </div>
            <div id="lead-generation-mastery" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
              <p class="text-gray-700 mt-2">
                We attract and convert qualified leads to fuel your growth.
              </p>
              <form action="<?php echo base_url('request-a-quote') ?>" method="POST">
                <input type="hidden" name="service_name" value="lead_generation_mastery">
                <button type="submit" class="mt-4 text-red-600 hover:text-red-800 font-semibold flex items-center">
                  Learn More
                </button>
              </form>
            </div>
          </li>

        </ul>
      </div>
      <div class="relative w-full lg:w-1/2 rounded-lg shadow-lg max-w-xs mx-auto">
        <img
          src="<?php echo base_url('assets/images/Technology-environments_05HR.jpg') ?>"
          alt="Business Strategy Development"
          class="w-full rounded-lg shadow-lg" />
        <img
          src="<?php echo base_url('assets/images/AdobeStock_53254892.jpeg') ?>"
          alt="Another Image"
          class="absolute transition-transform duration-300 ease-in-out hover:scale-150 bottom-0 right-0 transform translate-y-4 translate-x-4 w-1/2 mx-auto rounded-lg shadow-lg" />
      </div>
    </div>

  </div>
</section>
<section class="py-24 bg-gradient-to-b from-white to-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-12 flex justify-center items-center relative" style="background-image: url(<?php echo base_url('assets/images/dragon-eyes.jpeg') ?>); background-size: cover; background-position: center; height: 200px; color: white;">
      <div class="absolute inset-0 bg-red-500 opacity-50"></div>
      <span class="relative z-10">Dragon Vision Planning</span>
    </h2>





    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

      <!-- Card 1: Market Analysis -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl">
        <div class="relative h-48">
          <img src="<?php echo base_url('assets/images/serv1.jpeg'); ?>" alt="Market Analysis" class="object-cover w-full h-full">
          <div class="absolute inset-0 bg-blue-600 opacity-20"></div>
          <div class="absolute top-4 left-4 bg-white rounded-full p-2">
            <!-- BarChart Icon Placeholder -->
            <img src="<?php echo base_url('assets/images/shield-check-svgrepo-com.svg'); ?>" alt="vector" class="w-10 h-10">
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-4 text-blue-900">Comprehensive Market Analysis</h3>
          <p class="text-gray-600">
            Dragon Vision Planning provides comprehensive market analysis and strategic planning designed to elevate your business to the forefront of your industry. Our expert team evaluates your current market position and crafts a customised, data-driven roadmap for achieving long-term growth and competitive advantage. We guide your company through key decision-making processes, ensuring alignment with your business goals. Our strategies are designed to enhance operational efficiency and in a competitive marketplace. Partner with us to transform your vision into a reality and dominate your market.
          </p>

        </div>
        <a href="<?php echo base_url('contact-us'); ?>" class="w-56 mx-auto my-1 flex items-center inline-block bg-white text-red-600 font-semibold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out hover:shadow-xl hover:text-red-800 focus:outline-none group">
          Talk to Our Team
          <span class="ml-2 text-red-600 transition duration-300 ease-in-out group-hover:rotate-0 -rotate-45">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.5" d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75V11.25ZM4 12.75H20V11.25H4V12.75Z" fill="#1C274C" />
              <path d="M14 6L20 12L14 18" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
        </a>


      </div>

      <!-- Card 2: Competitive Edge -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl">
        <div class="relative h-48">
          <img src="<?php echo base_url('assets/images/serv2.jpeg'); ?>" alt="Strategic Planning" class="object-cover w-full h-full">
          <div class="absolute inset-0 bg-green-600 opacity-20"></div>
          <div class="absolute top-4 left-4 bg-white rounded-full p-2">
            <img src="<?php echo base_url('assets/images/bolt-circle-svgrepo-com.svg'); ?>" alt="vector" class="w-10 h-10">
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-4 text-green-900">Competitive Edge Engineering</h3>
          <p class="text-gray-600">
            Competitive Edge Engineering focuses on defining and refining your unique value proposition to ensure your business stays ahead of the competition. Our team works closely with you to identify your key strengths, differentiate your brand, and develop strategies that maximise market potential. Through targeted analysis and strategic adjustments, we position your business to stand out in a crowded marketplace. Our approach is designed to continually enhance your competitive advantage, ensuring long-term growth and success. Partner with us to maintain a leading edge in your industry.
          </p>
        </div>
        <a href="<?php echo base_url('contact-us'); ?>" class="w-56 mx-auto my-1 flex items-center inline-block bg-white text-red-600 font-semibold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out hover:shadow-xl hover:text-red-800 focus:outline-none group">
          Talk to Our Team
          <span class="ml-2 text-red-600 transition duration-300 ease-in-out group-hover:rotate-0 -rotate-45">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.5" d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75V11.25ZM4 12.75H20V11.25H4V12.75Z" fill="#1C274C" />
              <path d="M14 6L20 12L14 18" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
        </a>
      </div>

      <!-- Card 3: Brand Narratives -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl">
        <div class="relative h-48">
          <img src="<?php echo base_url('assets/images/serv3.jpeg'); ?>" alt="Brand Storytelling" class="object-cover w-full h-full">
          <div class="absolute inset-0 bg-purple-600 opacity-20"></div>
          <div class="absolute top-4 left-4 bg-white rounded-full p-2">
            <img src="<?php echo base_url('assets/images/atom-svgrepo-com.svg'); ?>" alt="vector" class="w-10 h-10">
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-4 text-purple-900">Compelling Brand Narratives</h3>
          <p class="text-gray-600">
            We specialize in crafting compelling brand narratives that drive growth and foster meaningful connections with your audience. Our storytelling approach ensures your brand's message resonates on an emotional level, engaging customers and building lasting loyalty. By blending creativity with strategic insights, we create narratives that not only reflect your brand's core values but also inspire action. Whether through digital content, social media, or campaigns, we ensure your story is consistently delivered across all touchpoints. Let us help you turn your brand's story into a powerful engine for growth.
          </p>
        </div>
        <a href="<?php echo base_url('contact-us'); ?>" class="w-56 mx-auto my-1 flex items-center inline-block bg-white text-red-600 font-semibold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out hover:shadow-xl hover:text-red-800 focus:outline-none group">
          Talk to Our Team
          <span class="ml-2 text-red-600 transition duration-300 ease-in-out group-hover:rotate-0 -rotate-45">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.5" d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75V11.25ZM4 12.75H20V11.25H4V12.75Z" fill="#1C274C" />
              <path d="M14 6L20 12L14 18" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
        </a>
      </div>

    </div>
  </div>
</section>

<?php
// Sample testimonials data
$testimonials = [
  [
    "name" => "Rahul Sharma",
    "country" => "India",
    "description" => "The service provided was exceptional. I couldn't be happier with the results! The service provided was exceptional. I couldn't be happier with the results!",
    "rating" => 5,
  ],
  [
    "name" => "Priya Patel",
    "country" => "India",
    "description" => "Outstanding experience from start to finish. Highly recommended! Outstanding experience from start to finish. Highly recommended!",
    "rating" => 5,
  ],
  [
    "name" => "Ahmed Al Mansouri",
    "country" => "UAE",
    "description" => "Professional and efficient. They exceeded my expectations in every way. Professional and efficient. They exceeded my expectations in every way.",
    "rating" => 4,
  ],
  [
    "name" => "Deepak Gupta",
    "country" => "India",
    "description" => "Incredible attention to detail. The team went above and beyond. Incredible attention to detail. The team went above and beyond.",
    "rating" => 5,
  ],
  [
    "name" => "Fatima Al Hashmi",
    "country" => "UAE",
    "description" => "Excellent communication throughout the project. Very satisfied with the outcome. Excellent communication throughout the project. Very satisfied with the outcome.",
    "rating" => 4,
  ],
  [
    "name" => "Ananya Singh",
    "country" => "India",
    "description" => "Innovative solutions and top-notch quality. I'm impressed! Innovative solutions and top-notch quality. I'm impressed!",
    "rating" => 5,
  ],
  [
    "name" => "Mohammed Al Qasimi",
    "country" => "UAE",
    "description" => "Reliable and trustworthy. I'll definitely be using their services again. Reliable and trustworthy. I'll definitely be using their services again.",
    "rating" => 5,
  ],
  [
    "name" => "Vikram Malhotra",
    "country" => "India",
    "description" => "The team's expertise is unmatched. They delivered beyond my expectations. The team's expertise is unmatched. They delivered beyond my expectations.",
    "rating" => 4,
  ],
  [
    "name" => "Laila Al Maktoum",
    "country" => "UAE",
    "description" => "Prompt and courteous service. A pleasure to work with from start to finish. Prompt and courteous service. A pleasure to work with from start to finish.",
    "rating" => 5,
  ],
];


// Function to return the appropriate flag SVG
function getCountryFlag($country)
{
  if ($country === "India") {
    return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600" class="w-6 h-4"><rect width="900" height="600" fill="#f93"/><rect width="900" height="200" y="200" fill="#fff"/><rect width="900" height="200" y="400" fill="#128807"/><g transform="translate(450,300)" fill="#008"><circle r="92.5" fill="#008"/><circle r="80" fill="#fff"/><circle r="16" fill="#008"/><g id="d"><g id="c"><g id="b"><g id="a"><circle r="4" transform="rotate(7.5) translate(80)"/><path d="M 0,80 0,85 3.5,82.5 0,80"/></g><use href="#a" transform="rotate(15)"/></g><use href="#b" transform="rotate(30)"/></g><use href="#c" transform="rotate(60)"/></g><use href="#d" transform="rotate(120)"/><use href="#d" transform="rotate(-120)"/></g></svg>';
  } elseif ($country === "UAE") {
    return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6" class="w-6 h-4"><rect width="12" height="2" fill="#00732f"/><rect width="12" height="2" y="2" fill="#fff"/><rect width="12" height="2" y="4" fill="#000"/><rect width="3" height="6" fill="#f00"/></svg>';
  }
  return '';
}

// Start rendering the testimonials section
?>
<section class="">
    <div class="bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">
                What Our Clients Say
            </h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="swiper-slide">
                            <div class="bg-white shadow-lg rounded-lg p-6 h-full flex flex-col mx-auto" style="width: 300px;height:300px">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-4">
                                    <img
                class="aspect-square h-full w-full"
                alt="@shadcn"
                src="https://img.freepik.com/premium-vector/vector-flat-illustration-grayscale-avatar-user-profile-person-icon-profile-picture-business-profile-woman-suitable-social-media-profiles-icons-screensavers-as-templatex9_719432-1310.jpg?semt=ais_hybrid" />

                                    </div>
                                    <div>
                                        <h3 class="text-lg font-black text-red-900"><?php echo $testimonial['name']; ?></h3>
                                        <div class="flex items-center">
                                            <?php echo getCountryFlag($testimonial['country']); ?>
                                            <span class="ml-2 text-sm text-gray-600"><?php echo $testimonial['country']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4 flex-grow"><?php echo $testimonial['description']; ?></p>
                                <div class="flex items-center">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <svg class="w-5 h-5 <?php echo $i < $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-800'; ?>" fill="<?php echo $i < $testimonial['rating'] ? 'currentColor' : '#C5C5C5'; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.431 8.22 1.187-5.95 5.667 1.404 8.206L12 18.896l-7.342 3.855 1.404-8.206-5.95-5.667 8.22-1.187z"/></svg>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div id="pagination">
                <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<style>
    /* Additional CSS for styling the slider */
    .swiper {
        width: 100%;
        height: 100%;
        margin: auto;
    }
    .swiper-slide {
        display: flex;
        justify-content: center; /* Center slide contents */
        align-items: center; /* Center slide contents */
    }
    .testimonial-card {
        width: 300px; /* Set specific width for the card */
        height: 300px;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.2s ease-in-out; /* Add a transition effect */
    }

    /* Add hover effect for testimonial card */
    .testimonial-card:hover {
        transform: translateY(-5px); /* Lift card on hover */
    }

    /* Pagination styles */
    .swiper-pagination {
        display: flex;
        justify-content: center; /* Center pagination */
        margin-top: 60px; /* Space above pagination */
    }
    .swiper-pagination-bullet {
        background: #007BFF; /* Primary color */
        opacity: 0.5; /* Semi-transparent */
        width: 12px; /* Bullet width */
        height: 12px; /* Bullet height */
        border-radius: 50%; /* Make bullets round */
        margin: 0 5px; /* Space between bullets */
        transition: opacity 0.3s ease; /* Smooth transition */
    }
    .swiper-pagination-bullet-active {
        opacity: 1; /* Fully opaque active bullet */
    }

    /* Navigation buttons styles */
    .swiper-button-next, .swiper-button-prev {
        color: #007BFF; /* Button color */
        width: 40px; /* Button width */
        height: 40px; /* Button height */
        border-radius: 50%; /* Round buttons */
        background: white; /* Button background */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Add shadow */
        display: flex; /* Center content */
        justify-content: center; /* Center icon */
        align-items: center; /* Center icon */
        transition: background 0.3s ease; /* Transition effect */
    }
    .swiper-button-next:hover, .swiper-button-prev:hover {
        background: #e7f1ff; /* Light background on hover */
    }
    .swiper-button-next:after, .swiper-button-prev:after{
      font-size:small;
    }

    /* Responsive styles */
    @media (max-width: 640px) {
        .testimonial-card {
            width: 90%; /* Responsive width */
        }
        .swiper-button-next, .swiper-button-prev {
            width: 35px; /* Smaller buttons on mobile */
            height: 35px; /* Smaller buttons on mobile */
        }
    }
    
    @media (min-width: 640px) and (max-width: 1024px) {
        .testimonial-card {
            width: 80%; /* Adjust card width for medium screens */
        }
    }

</style>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper
    const swiper = new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        // },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
  function toggleAccordion(id) {
    const content = document.getElementById(id);
    const icon = document.getElementById(`${id}-icon`);

    // Check if the content is collapsed or expanded
    if (content.style.maxHeight) {
      content.style.maxHeight = null; // Collapse
      icon.innerHTML = '<i class="fas fa-chevron-down text-red-800"></i>'; // Change icon to '>>'
    } else {
      content.style.maxHeight = content.scrollHeight + 'px'; // Expand smoothly
      icon.innerHTML = '<i class="fas fa-chevron-up text-red-800"></i>'; // Change icon to '<<'
    }
  }
</script>