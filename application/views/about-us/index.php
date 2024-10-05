<style>
  #about h1 {
    letter-spacing: 2px;
  }

  #dragon-bg {
    background-image: url(<?php echo base_url('assets/images/flat-design-dragon-silhouette.png') ?>);
  }
  .counter {
  transition: count 2s ease-in-out; /* You can customize the duration */
}

  
</style>

<section class="w-full h-auto py-4 md:h-[80vh] md:py-0 flex items-start justify-center relative" style="background: url(<?php echo base_url('assets/images/digital-art-fire.jpg') ?>); background-size: cover;" id="about">
  <div class="absolute inset-0 bg-red-700 opacity-80"></div> <!-- Overlay -->
  <div class="container px-4 md:px-6 text-center space-y-4 relative z-10"> <!-- Content container -->
    <h1 class="text-4xl md:text-7xl font-semibold arigato mb-12 mt-8">The Dragon Masters</h1> <!-- Responsive heading size -->
    <div class="flex flex-col md:flex-row items-center justify-center gap-4 text-primary-foreground mt-2"> <!-- Responsive flex direction -->
      <div class="flex flex-col items-center gap-2">
        <span class="relative flex h-36 w-36 md:h-48 md:w-48 shrink-0 overflow-hidden rounded-full border border-2xl border-black"> <!-- Responsive image size -->
          <img class="aspect-square h-full w-full" alt="Kavin G" src="<?php echo base_url('assets/images/kavin.umar.jpg') ?>" />
        </span>
        <div class="text-center">
          <h3 class="text-2xl md:text-3xl font-bold">Kavin G</h3> <!-- Responsive name size -->
          <p class="text-sm">Seasoned marketer and champion Thai boxer</p>
        </div>
      </div>
      <p class="max-w-[700px] text-primary-foreground/90 text-lg md:text-xl text-center"> <!-- Responsive paragraph size -->
        Founded by a team of passionate marketers and martial artists, The Dragon Masters is a company that embodies the spirit of fierce competition and unwavering determination.
      </p>
    </div>
  </div>
</section>
<section class="w-full py-12 bg-gray-100" id="strategy-dojo">
  <div class="container mx-auto px-4 md:px-6">
  <div class="flex  justify-center items-center">
    <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 text-black nuku mr-5">Our Strategy Dojo</h2>
    <svg height="50px" width="50px" viewBox="0 0 32 32" id="OBJECT" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:#750000;}</style></defs><title></title><path class="cls-1" d="M18.63,5.46A4.6,4.6,0,0,0,14,1a1,1,0,0,0-1,1V5.09L6.68,8.21A3,3,0,0,0,5,10.9v1.53a1,1,0,0,0,.31.72,1,1,0,0,0,.75.28l3.12-.18A4.89,4.89,0,0,0,12.94,15h.12v2.52L9.29,21.29A1,1,0,0,0,9,22v3a1,1,0,0,0,1,1H24a1,1,0,0,0,1-1V17.52A14.51,14.51,0,0,0,18.63,5.46Z"></path><path d="M20,26a1,1,0,0,1-1-1V19.54a1,1,0,0,1,2,0V25A1,1,0,0,1,20,26Z"></path><path d="M24,24H10a3,3,0,0,0-3,3v3a1,1,0,0,0,1,1H26a1,1,0,0,0,1-1V27A3,3,0,0,0,24,24Z"></path></g></svg>
    </div>
    <p class="text-lg text-gray-700 text-center mb-6">
      Our workspace is more than just an office. it’s a creative dojo where innovative ideas come to life.
      We thrive on collaboration, push boundaries, and constantly sharpen our skills to stay ahead in this
      dynamic digital landscape.
    </p>
    <div class="w-full h-1 bg-red-600 my-8 rounded-xl"></div>
    <div class="flex  justify-center items-center">
    <h3 class="text-3xl md:text-4xl font-bold text-center mb-4 text-black nuku mr-5">Our Approach</h3>
    <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#ff0000;" d="M256,16c118.097,0,213.832,95.736,213.832,213.832S374.096,443.664,256,443.664 S42.168,347.928,42.168,229.832l0,0C42.3,111.791,137.959,16.132,256,16 M256,0C129.067,0,26.168,102.899,26.168,229.832 S129.067,459.663,256,459.663s229.833-102.898,229.833-229.832l0,0C485.832,102.899,382.933,0,256,0z"></path> <circle style="fill:#750000;" cx="255.997" cy="229.835" r="108.941"></circle> <g style="opacity:0.25;"> <circle style="fill:#FFFFFF;" cx="255.997" cy="229.835" r="45.144"></circle> </g> <circle style="fill:#FFFFFF;" cx="255.997" cy="459.669" r="48.336"></circle> <path style="fill:#750000;" d="M256,415.328c24.486,0,44.335,19.849,44.335,44.335S280.486,503.999,256,503.999 c-24.486,0-44.335-19.849-44.335-44.336l0,0C211.695,435.19,231.527,415.359,256,415.328 M256,407.328 c-28.904,0-52.336,23.432-52.336,52.336C203.664,488.568,227.096,512,256,512s52.336-23.432,52.336-52.336 C308.335,430.759,284.904,407.328,256,407.328L256,407.328z"></path> <circle style="fill:#FFFFFF;" cx="55.894" cy="120.893" r="48.336"></circle> <path style="fill:#750000;" d="M55.896,76.56c24.486,0,44.335,19.849,44.335,44.335s-19.849,44.335-44.335,44.335 S11.56,145.383,11.56,120.895l0,0C11.586,96.421,31.421,76.587,55.896,76.56 M55.896,68.56c-28.904,0-52.336,23.432-52.336,52.336 s23.432,52.336,52.336,52.336s52.336-23.432,52.336-52.336l0,0C108.232,91.992,84.801,68.56,55.896,68.56z"></path> <circle style="fill:#FFFFFF;" cx="456.101" cy="120.893" r="48.336"></circle> <path style="fill:#750000;" d="M456.104,76.56c24.486,0,44.336,19.849,44.336,44.335s-19.849,44.335-44.336,44.335 c-24.486,0-44.335-19.849-44.335-44.335l0,0C411.795,96.421,431.629,76.587,456.104,76.56 M456.104,68.56 c-28.905,0-52.336,23.432-52.336,52.336s23.432,52.336,52.336,52.336c28.904,0,52.336-23.432,52.336-52.336 S485.008,68.56,456.104,68.56L456.104,68.56z"></path> </g></svg>
    
    </div>
    <p class="text-lg text-gray-700 text-center">
      We believe every brand has its unique roar. That’s why we craft tailored strategies to match your
      goals and challenges. We don't follow trends; we set them, taking calculated risks that drive market
      disruption and elevate your brand.
    </p>
  </div>
</section>
<div class="w-full h-1 bg-red-600 rounded-xl"></div>
<section class="w-full py-12 bg-gray-100" id="achievements">
  <div class="container mx-auto px-4 md:px-6">
    <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 text-black nuku flex items-center justify-center mx-auto">Our Milestones 

    <svg width="40px" height="40px" class="ml-2" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <title>target [#750000]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -4759.000000)" fill="#a80000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M176,4609 C176,4610.105 175.105,4611 174,4611 C172.895,4611 172,4610.105 172,4609 C172,4607.895 172.895,4607 174,4607 C175.105,4607 176,4607.895 176,4609 M174,4613 C171.794,4613 170,4611.206 170,4609 C170,4606.794 171.794,4605 174,4605 C176.206,4605 178,4606.794 178,4609 C178,4611.206 176.206,4613 174,4613 M174,4603 C170.686,4603 168,4605.686 168,4609 C168,4612.314 170.686,4615 174,4615 C177.314,4615 180,4612.314 180,4609 C180,4605.686 177.314,4603 174,4603 M174,4617 C169.589,4617 166,4613.411 166,4609 C166,4604.589 169.589,4601 174,4601 C178.411,4601 182,4604.589 182,4609 C182,4613.411 178.411,4617 174,4617 M174,4599 C168.477,4599 164,4603.477 164,4609 C164,4614.523 168.477,4619 174,4619 C179.523,4619 184,4614.523 184,4609 C184,4603.477 179.523,4599 174,4599" id="target-[#750000]"> </path> </g> </g> </g> </g>

</svg>
    </h2>
    <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
      <div class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-xl hover:scale-110">
        <h3 class="text-3xl font-bold text-red-700 arigato counter" data-target="60">0+</h3>
        <p class="text-sm text-gray-700">Clients Served</p>
      </div>
      <div class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-xl hover:scale-110">
        <h3 class="text-3xl font-bold text-red-700 arigato counter" data-target="100000">0+</h3>
        <p class="text-sm text-gray-700">Social Impressions</p>
      </div>
      <div class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-xl hover:scale-110">
        <h3 class="text-3xl font-bold text-red-700 arigato counter" data-target="5">0+</h3>
        <p class="text-sm text-gray-700">Awards Won</p>
      </div>
      <div class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-xl hover:scale-110">
        <h3 class="text-3xl font-bold text-red-700 arigato counter" data-target="3">0+</h3>
        <p class="text-sm text-gray-700">Countries Reached</p>
      </div>
    </div>
  </div>
</section>



<section class="w-full pt-8 md:py-12 lg:py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-white text-4xl font-extrabold mb-8">Meet the Team: The Digital Warriors Behind the Punch</h1>
        <p class="text-white max-w-[800px] mx-auto mb-12 text-lg md:text-xl">At Digital Dragon Punch, our team is made up of marketing masters, creative visionaries, and strategic thinkers who thrive on delivering knockout results. Led by Kavin G, a seasoned marketer and champion Thai boxer, our team brings together expertise from diverse fields, ensuring we can tackle any marketing challenge with precision and power. Each team member is a specialist in their craft, whether it's digital marketing, web development, or traditional marketing strategies. Together, we operate like a well-coordinated martial arts squad—focused, disciplined, and relentless in our pursuit of victory for our clients.</p>
    </div>

    <h2 class="text-white text-3xl nuku text-center font-thin tracking-wide mb-8">Our Dragon Masters</h2>
    <div class="container grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-auto">
        <div class="flex flex-col items-center justify-center max-w-lg mx-2 gap-4 rounded-lg bg-white p-6 text-center shadow-sm transition-all hover:scale-105 text-black">
            <span class="relative flex shrink-0 overflow-hidden rounded-full h-20 w-20">
                <img class="aspect-square h-full w-full" alt="Mohammed Haarun" src="<?php echo base_url('assets/images/team/Mohammed Haarun - Digital Expert.png') ?>" />
            </span>
            <div class="space-y-1">
                <h4 class="text-lg font-semibold text-red-700 arigato">Mohammed Haarun</h4>
                <p class="text-sm text-muted-foreground font-bold">Digital Marketing Expert</p>
                <p class="text-sm text-muted-foreground">A skilled developer focused on building efficient solutions for users.</p>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-lg mx-2 gap-4 rounded-lg bg-white p-6 text-center shadow-sm transition-all hover:scale-105 text-black">
            <span class="relative flex shrink-0 overflow-hidden rounded-full h-20 w-20">
                <img class="aspect-square h-full w-full" alt="Shreelakshmi" src="<?php echo base_url('assets/images/team/Shreelakshmi - HR Head.png') ?>" />
            </span>
            <div class="space-y-1">
                <h4 class="text-lg font-semibold text-red-700 arigato">Shreelakshmi</h4>
                <p class="text-sm text-muted-foreground font-bold">HR Head</p>
                <p class="text-sm text-muted-foreground">An expert in customer relations who understands client needs deeply.</p>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-lg mx-2 gap-4 rounded-lg bg-white p-6 text-center shadow-sm transition-all hover:scale-105 text-black">
            <span class="relative flex shrink-0 overflow-hidden rounded-full h-20 w-20">
                <img class="aspect-square h-full w-full" alt="Saravanan" src="<?php echo base_url('assets/images/team/Web & App Development Expert.png') ?>" />
            </span>
            <div class="space-y-1">
                <h4 class="text-lg font-semibold text-red-700 arigato">Saravanan</h4>
                <p class="text-sm text-muted-foreground font-bold">Web & App Development Expert</p>
                <p class="text-sm text-muted-foreground">A creative thinker passionate about design and innovative solutions.</p>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-lg mx-2 gap-4 rounded-lg bg-white p-6 text-center shadow-sm transition-all hover:scale-105 text-black">
            <span class="relative flex shrink-0 overflow-hidden rounded-full h-20 w-20">
                <img class="aspect-square h-full w-full" alt="Anwar Kaleesha" src="<?php echo base_url('assets/images/team/Anwar Kaleesha - Finance Head.png') ?>" />
            </span>
            <div class="space-y-1">
                <h4 class="text-lg font-semibold text-red-700 arigato">Anwar Kaleesha</h4>
                <p class="text-sm text-muted-foreground font-bold">Finance Head</p>
                <p class="text-sm text-muted-foreground">A strategic marketer who drives brand awareness and engagement.</p>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const counters = document.querySelectorAll('.counter');

  const updateCount = (counter) => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText.replace('+', ''); // Remove '+' before incrementing

    const increment = target / 200; // Adjust this value for speed

    if (count < target) {
      counter.innerText = Math.ceil(count + increment) + "+"; // Append '+' after incrementing
      setTimeout(() => updateCount(counter), 1); // Adjust for performance
    } else {
      counter.innerText = target + "+"; // Ensure it ends at the target with '+'
    }
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      // Check if the entry is intersecting and if its midpoint is visible
      if (entry.isIntersecting) {
        counters.forEach(counter => {
          updateCount(counter);
        });
        // Stop observing once the counters have been updated
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.5 // 50% of the section must be visible
  });

  // Observe the achievements section
  const achievementsSection = document.getElementById('achievements');
  if (achievementsSection) {
    observer.observe(achievementsSection);
  }
});

</script>