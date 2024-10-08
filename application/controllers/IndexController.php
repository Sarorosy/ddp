<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    // Function to display the homepage (index.php) with caching
    public function index() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'index';
        $this->load->view('template', $data); // Views folder: views/index.php
    }

    // Function to display the About Us page (about-us/index.php) with caching
    public function about_us() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'about-us/index';
        $this->load->view('template', $data); // Views folder: views/about-us/index.php
    }

    // Function to display the Contact Us page (contact-us/index.php) with caching
    public function contact_us() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'contact-us/index';
        $this->load->view('template', $data); // Views folder: views/contact-us/index.php
    }

    // Function to display the Services page (services/index.php) with caching
    public function services() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'services/index';
        $this->load->view('template', $data); // Views folder: views/services/index.php
    }
    public function business_services() {
        //$this->output->cache(10); // Cache for 10 minutes

        // Directly query the database to get services
        $query = $this->db->get('tbl_services'); // Get all records from tbl_services
        $data['services'] = $query->result_array(); // Store results in an associative array

        $data['main'] = 'business_services/index'; // Main view file
        $this->load->view('template', $data); // Load template view
    }
    public function service_details($slug) {
        // Query the database to get the service by slug
        $query = $this->db->get_where('tbl_services', array('slug' => $slug));
    
        // Check if service exists
        if ($query->num_rows() == 1) {
            $data['service'] = $query->row_array(); // Fetch the service details
    
            // Get all services except the current one
            $this->db->where('slug !=', $slug);
            $this->db->where('status', 1); // Optional: Ensure only active services are fetched
            $data['other_services'] = $this->db->get('tbl_services')->result_array(); // Fetch other services
    
            $data['main'] = 'business_services/service_details'; // Main view file for the details page
            $this->load->view('template', $data); // Load template view with service details
        } else {
            show_404(); // Display 404 error if service not found
        }
    }
    
    

    public function solutions() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'solutions/index';
        $this->load->view('template', $data); // Views folder: views/solutions/index.php
    }

    // Function to display the Request a Quote page (request-a-quote/index.php) with caching
    public function request_a_quote() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'request-a-quote/index';
        $this->load->view('template', $data); // Views folder: views/request-a-quote/index.php
    }

    public function blog() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'blog/index';
        $this->load->view('template', $data); // Views folder: views/blog/index.php
    }

    // Function to display the Sitemap page (sitemap/index.php) with caching
    public function sitemap() {
        //$this->output->cache(10); // Cache for 10 minutes
        $data['main'] = 'sitemap/index';
        $this->load->view('template', $data); // Views folder: views/sitemap/index.php
    }
}
