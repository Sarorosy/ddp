<style>
  .contact-section {
    background: linear-gradient(rgba(255, 9, 9, 0.4), rgba(255, 255, 255, 0.4)), 
                url(<?php echo base_url('assets/images/eyes.png') ?>) no-repeat center center fixed;
    background-position:center;
    background-size: cover;
    color: #333; /* White text */
    text-align: center; /* Centered text */
    padding: 40px 20px; /* Padding for spacing */
    border-radius: 20px; /* Rounded corners */
    margin: 40px 40px; /* Margin above and below the section */

}

#temple-bg {
    position: relative; /* Allow absolute positioning of overlay */
    height: auto; /* Full viewport height */
    display: flex; /* Center content */
    flex-direction: column; /* Stack content vertically */
    align-items: center; /* Center horizontally */
    justify-content: center; /* Center vertically */
    color: #333; /* Text color */
    padding: 20px; /* Padding around content */
    overflow: hidden; /* Prevent overflow */
}

#temple-bg::before {
    content: ''; /* Empty content for the overlay */
    position: absolute; /* Position it absolutely */
    top: 0; /* Align to the top */
    left: 0; /* Align to the left */
    right: 0; /* Stretch to the right */
    bottom: 0; /* Stretch to the bottom */
    background: url('<?php echo base_url('assets/images/mtfuji2.jpg') ?>') no-repeat center; /* Background image */
    background-size: cover; /* Cover the area */
    background-position: center;
    width: 100%; /* Set width to 20% */
    height: 100%; /* Full height */
    z-index: 1; /* Position it below the overlay */
}

#temple-bg::after {
    content: ''; /* Empty content for the overlay */
    position: absolute; /* Position it absolutely */
    top: 0; /* Align to the top */
    left: 0; /* Align to the left */
    right: 0; /* Stretch to the right */
    bottom: 0; /* Stretch to the bottom */
    background: rgba(255, 255, 255, 0.8); /* White overlay with 80% opacity */
    z-index: 2; /* Position it above the image */
}

#koi-bg {
    position: relative; /* Allow absolute positioning of overlay */
    height: auto; /* Full viewport height */
    display: flex; /* Center content */
    flex-direction: column; /* Stack content vertically */
    align-items: center; /* Center horizontally */
    justify-content: center; /* Center vertically */
    color: #333; /* Text color */
    padding: 20px; /* Padding around content */
    overflow: hidden; /* Prevent overflow */
}

#koi-bg::before {
    content: ''; /* Empty content for the overlay */
    position: absolute; /* Position it absolutely */
    top: 0; /* Align to the top */
    left: 0; /* Align to the left */
    right: 0; /* Stretch to the right */
    bottom: 0; /* Stretch to the bottom */
    background: url('<?php echo base_url('assets/images/koi-bg.jpg') ?>') no-repeat center; /* Background image */
    background-size: cover; /* Cover the area */
    background-position: center;
    width: 100%; /* Set width to 20% */
    height: 100%; /* Full height */
    z-index: 1; /* Position it below the overlay */
}

#koi-bg::after {
    content: ''; /* Empty content for the overlay */
    position: absolute; /* Position it absolutely */
    top: 0; /* Align to the top */
    left: 0; /* Align to the left */
    right: 0; /* Stretch to the right */
    bottom: 0; /* Stretch to the bottom */
    background: rgba(255, 255, 255, 0.6); /* White overlay with 80% opacity */
    z-index: 2; /* Position it above the image */
}
</style>

    
      
    
      
  
      <!-- Hero Section -->
      <section class="hero">
    <video autoplay loop muted playsinline class="w-full h-auto md:h-[85vh] object-cover">
        <source src="<?php echo base_url('assets/images/herovideo.mp4'); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>

   

    <!-- <div class="centered-text">
        <span>昇</span>
        <span>竜</span>
        <span>拳</span>
    </div> -->

    <div class="flex flex-1 text-black">
      <div
        class="w-1/3 bg-[#D94F4F] flex justify-center items-center"
        
      >
        <div class="text-white text-4xl font-black transform -rotate-90">
          大胆な
        </div>
        <img
          src="<?php echo base_url('assets//images/samurai2.png') ?>"
          alt="image from pngtree.com"
          class="mt-8 samurai"
        />
      </div>
      <div
        class="w-2/3 flex flex-col justify-center items-start p-16"
        id="temple-bg"
        
      >
        <h1 class="text-3xl md:text-5xl font-black mb-4">
          Ignite Your Audience with Bold Moves
        </h1>
        <p class="text-black mb-8 font-black">
          Forget the ordinary. We create high-impact campaigns and strategies
          that burn bright and leave a lasting impression. At Digital Dragon
          Punch, we craft compelling stories and digital experiences that
          captivate your audience and make them loyal fans of your brand.
        </p>
      </div>
    </div>
    <div
      class="bg-[#F9F4EE] flex flex-col md:flex-row justify-between items-center p-8 text-black"
      
    >
      <div class="text-3xl md:text-4xl font-black flex items-center">
        69+<span class="text-lg font-black ml-2 text-red-800">Satisfied Clients</span>
      </div>
      <div class="flex items-center space-x-4">
        <img
          src="<?php echo base_url('assets/images/person1.jpg') ?>"
          alt="Customer"
          class="w-12 h-12 rounded-full"
        />
        <p class="text-red-800 font-black">
          "Digital Dragon Punch transformed our online presence with effective
          strategies and impressive results!"
        </p>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="flex flex-1 text-black" >
      <div
        class="w-2/3 flex flex-col justify-center items-start p-16"
        id="koi-bg"
        
      >
        <h1 class="text-3xl md:text-5xl font-black mb-4">Overpower the Competition</h1>
        <p class="text-black mb-8 font-black ">
          Winning in the digital realm is like mastering a powerful dragon
          technique. We train your brand to become unbeatable with SEO tactics
          that breathe fire, social media strategies that claw through the
          noise, and content that scorches the competition.
        </p>
      </div>
      <div
        class="w-1/3 bg-[#D94F4F] flex justify-center items-center"
        
      >
        <div class="text-white text-4xl font-black transform -rotate-90">
          成功
        </div>
        <img
          src="<?php echo base_url('assets/images/koi-fish.png') ?>"
          alt="Image by pikisuperstar on Freepik"
          class="mt-8 samurai"
        />
      </div>
    </div>
    <div
      class="bg-[#F9F4EE] flex flex-col md:flex-row justify-between items-center p-8 text-black"
      style="font-weight: 800;"
    >
      <div class="text-3xl md:text-4xl  flex items-center style="font-weight: 800;"">
        250+<span class="text-lg  ml-2 text-red-800">Projects Delivered</span>
      </div>
      <div class="flex items-center space-x-4">
        <img
          src="<?php echo base_url('assets/images/person-3.jpg') ?>"
          alt="Customer"
          class="w-12 h-12 rounded-full"
        />
        <p class=" text-red-800 " style="font-weight: 800;">
          "Digital Dragon Punch surpassed our expectations with their creative
          and passionate execution!"
        </p>
      </div>
    </div>
    <section class="contact-section">
      <h2 class="text-xl my-2" style="color: transparent;
  -webkit-text-stroke: 1px white; 
  text-stroke: 1px white; 
  font-weight: bold;">Ready to Make Your Move?</h2>
      <div class="contact-img"></div>
      <div class="my-2">
        <span class="nuku text-6xl py-2 text-gray-900">Contact Us Today</span>
        <p class="max-w-xl mx-auto" style="color:white; font-weight:bold;filter:drop-shadow(1px 1px 5px red)">
          Don't hold back! Choose
          <span class=" text-black" style="">Digital Dragon Punch</span> to
          ignite your brand's potential. Contact us today, and let's light the
          fire under your marketing strategy.
        </p>
        <a href="mailto:contact@digitaldragonpunch.com" class="contact-button"
          >Contact Us</a
        >
      </div>
    </section>
    