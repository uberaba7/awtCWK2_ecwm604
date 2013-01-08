<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_employee extends CI_Controller {

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
        $this->load->view('add_employee_view');
    }

    function __construct()
    {
        parent::__construct();
        $this->load->library('addlib');
        $this->load->helper('url');
    }

    public function add_emp()
    {
        $emp_no = $this->input->get('empno');
        $first_name = $this->input->get('firstname');
        $last_name = $this->input->get('lastname');
        $birthday = $this->input->get('birthday');
        $gender = $this->input->get('gender');
        $hired_from_date = $this->input->get('hiredfromdate');
        $hired_to_date = $this->input->get('hiredtodate');
        $job_title = $this->input->get('jobtitle');
        $department = $this->input->get('department');
        $salary = $this->input->get('salary');

        $result = $this->addlib->check_emp($emp_no,$first_name,$last_name,$birthday,$gender,$hired_from_date,$hired_to_date,$job_title,$department,$salary);
        echo json_encode($result);

    }




}
