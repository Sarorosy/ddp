<?php
// Check if the form has been submitted and if 'service_name' is set
$selected_service = isset($_POST['service_name']) ? $_POST['service_name'] : '';
?>


<section class="w-full py-12 bg-slate-200 text-black shadow-md">
  <div class="container mx-auto px-4">
    <h2 class="text-5xl font-extralight text-center mb-6 kamikaze text-red-700">Request a Quote</h2>
    <p class="text-center mb-4">Fill out the form below, and you’ll get a reply within <span class="font-semibold text-red-700">10 minutes</span>!</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="flex items-center justify-center">
        <img src="<?php echo base_url('assets/images/quote.jpg') ?>" alt="Request a Quote" class="w-full h-auto max-w-md rounded-lg shadow-lg">
      </div>
      <div>
        <form action="/submit-quote" method="POST" class="bg-gray-100 p-6 rounded-lg shadow-md">
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-200" placeholder="Your Name">
          </div>
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-200" placeholder="Your Email">
          </div>
          <div class="mb-4">
            <label for="service" class="block text-sm font-medium text-gray-700">Service</label>
            <select id="service" name="service" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-200">
                <option value="" disabled <?php echo $selected_service === '' ? 'selected' : ''; ?>>Select a Service</option>
                <option value="dragon_vision_planning" <?php echo $selected_service === 'dragon_vision_planning' ? 'selected' : ''; ?>>Dragon Vision Planning</option>
                <option value="competitive_edge_engineering" <?php echo $selected_service === 'competitive_edge_engineering' ? 'selected' : ''; ?>>Competitive Edge Engineering</option>
                <option value="brand_storycrafting" <?php echo $selected_service === 'brand_storycrafting' ? 'selected' : ''; ?>>Brand Storycrafting</option>
                <option value="seo_dominance" <?php echo $selected_service === 'seo_dominance' ? 'selected' : ''; ?>>SEO Dominance</option>
                <option value="content_power_strikes" <?php echo $selected_service === 'content_power_strikes' ? 'selected' : ''; ?>>Content Power Strikes</option>
                <option value="social_media_surge" <?php echo $selected_service === 'social_media_surge' ? 'selected' : ''; ?>>Social Media Surge</option>
                <option value="precision_paid_advertising" <?php echo $selected_service === 'precision_paid_advertising' ? 'selected' : ''; ?>>Precision Paid Advertising</option>
                <option value="brand_identity_transformation" <?php echo $selected_service === 'brand_identity_transformation' ? 'selected' : ''; ?>>Brand Identity Transformation</option>
                <option value="technical_optimization" <?php echo $selected_service === 'technical_optimization' ? 'selected' : ''; ?>>Technical Optimization</option>
                <option value="data_driven_adjustments" <?php echo $selected_service === 'data_driven_adjustments' ? 'selected' : ''; ?>>Data-Driven Adjustments</option>
                <option value="lead_generation_mastery" <?php echo $selected_service === 'lead_generation_mastery' ? 'selected' : ''; ?>>Lead Generation Mastery</option>
                <option value="other" <?php echo $selected_service === 'other' ? 'selected' : ''; ?>>Other</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea id="message" name="message" required rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-200" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="w-full bg-red-700 text-white font-semibold py-2 rounded-lg hover:bg-red-800 transition">Request a Quote</button>
        </form>
      </div>
    </div>
  </div>
</section>