<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_page extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        //$this->load->view('home_view');
        $this->load->helper('url');
        $this->load->view('home_view');
    }
    public function search_employee()
    {
        //$this->load->view('home_view');
        $this->load->helper('url');
        $this->load->view('search_view');
    }

    public function add_employee()
    {
        //$this->load->view('home_view');
        $this->load->helper('url');
        $this->load->view('add_employee_view');
    }

    public function delete_employee()
    {
        //$this->load->view('home_view');
        $this->load->helper('url');
        $this->load->view('delete_employee_view');
    }

    public function promote_employee()
    {
        //$this->load->view('home_view');
        $this->load->helper('url');
        $this->load->view('promote_view');
    }

    public function demote_employee()
    {
        //$this->load->view('home_view');
        $this->load->helper('url');
        $this->load->view('demote_view');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */