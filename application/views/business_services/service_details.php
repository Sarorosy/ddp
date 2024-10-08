<div class="service-details-container py-16 px-8 bg-[#770b0b] text-white">
    <h1 class="text-6xl font-extrabold text-center mb-12 drop-shadow-lg"><?php echo $service['name']; ?></h1>

    <div class="flex flex-col md:flex-row md:space-x-10">
        <!-- Main Service Details -->
        <div class="service-details bg-white shadow-2xl rounded-3xl overflow-hidden md:w-2/3 mb-6 md:mb-0">
            <img
                src="<?php echo base_url('assets/images/services/' . $service['image']); ?>"
                alt="<?php echo $service['name']; ?>"
                class="w-full h-80 object-cover">
            <div class="p-10">
                <h2 class="text-5xl font-bold text-gray-800 mb-6"><?php echo $service['name']; ?></h2>
                <p class="text-gray-700 mb-8 leading-relaxed text-xl"><?php echo $service['description']; ?></p>
            </div>
        </div>

        <!-- Sidebar for Other Services -->
        <div class="other-services bg-white shadow-lg rounded-3xl p-8 md:w-1/3">
            <h2 class="text-4xl font-semibold text-gray-800 mb-6">Other Services</h2>
            <ul class="list-disc pl-5">
                <?php if (!empty($other_services)): ?>
                    <?php foreach ($other_services as $other_service): ?>
                        <li class="mb-3">
                            <a href="<?php echo site_url('services/' . $other_service['slug']); ?>" class="text-red-800 hover:underline"><?php echo $other_service['name']; ?></a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="text-gray-600">No other services available.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <!-- Inquiry Form -->
    <div class="inquiry-form bg-white shadow-lg rounded-3xl mt-12 p-10">
        <h2 class="text-4xl font-semibold text-gray-800 mb-6">Inquiry Form</h2>
        <form action="<?php echo site_url('submit_inquiry'); ?>" method="POST">
            <div class="mb-6">
                <label for="name" class="block text-gray-700 text-lg font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" required class="border border-gray-300 rounded-lg p-4 w-full focus:outline-none focus:ring-2 focus:ring-red-700" placeholder="Your Name">
            </div>
            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-lg font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="border border-gray-300 rounded-lg p-4 w-full focus:outline-none focus:ring-2 focus:ring-red-700" placeholder="Your Email">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 text-lg font-semibold mb-2">Message</label>
                <textarea id="message" name="message" required rows="4" class="border border-gray-300 rounded-lg p-4 w-full focus:outline-none focus:ring-2 focus:ring-red-700" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="bg-[#770b0b] text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-200">
                Send Inquiry
            </button>
        </form>
    </div>

    <!-- Slider for Other Services -->
    <div class="other-services-slider mt-12">
        <h2 class="text-5xl font-bold text-white mb-6">Explore More Services</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if (!empty($other_services)): ?>
                    <?php foreach ($other_services as $service): ?>
                        <div class="swiper-slide">
                            <div class="service-card bg-white shadow-lg rounded-lg p-6">
                                <img src="<?php echo base_url('assets/images/services/' . $service['image']); ?>" alt="<?php echo $service['name']; ?>" class="h-48 w-full object-cover mb-4 rounded">
                                <h3 class="text-2xl font-semibold mb-2"><?php echo $service['name']; ?></h3>
                                <p class="text-gray-600 mb-4"><?php echo trim(substr($service['description'], 0, 60)) . '...'; ?></p>
                                <a href="<?php echo site_url('services/' . $service['slug']); ?>" class="text-red-800 font-semibold">View Details</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-gray-600">No additional services available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<style>
    .service-details-container {
        background: #770b0b; /* Changed to reddish */
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .service-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .service-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Include Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>
