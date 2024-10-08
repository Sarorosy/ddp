<div class="services-container py-12 px-6 bg-gray-50">
    <h1 class="text-4xl font-bold text-center mb-10 text-gray-900">Our Business Services</h1>
    <div class="services-list grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php if (!empty($services)): ?>
            <?php foreach ($services as $service): ?>
                <div class="service-item bg-white shadow-xl rounded-xl overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 hover:scale-105">
                    <img
                        src="<?php echo base_url('assets/images/services/' . $service['image']); ?>"
                        alt="<?php echo $service['name']; ?>"
                        class="w-full h-52 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3" style="font-family:'Poppins', sans-serif;"><?php echo $service['name']; ?></h2>
                        <p class="text-gray-700 mb-5 leading-relaxed">
                            <?php
                            // Trim the description to a maximum of 50 characters
                            echo (strlen($service['description']) > 50) ? substr($service['description'], 0, 50) . '...' : $service['description'];
                            ?>
                        </p>
                        <a
                            href="<?php echo site_url('services/' . $service['slug']); ?>"
                            class="inline-block bg-gradient-to-r from-red-600 to-red-400 text-white font-semibold py-2 px-5 rounded-full text-center w-full hover:from-red-500 hover:to-red-300 transition duration-200">
                            Read More
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center text-gray-500">No services found.</p>
        <?php endif; ?>
    </div>
</div>
