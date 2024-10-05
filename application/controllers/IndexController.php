<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

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
