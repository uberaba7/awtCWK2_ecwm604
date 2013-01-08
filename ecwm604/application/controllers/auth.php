<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

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
        redirect('/login'); // url helper function
    }

    function __construct()
    {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
    }

    public function register()
    {
        $this->load->view('register_view',array('errmsg' => ''));
    }

    public function createaccount()
    {
        $emp_id = $this->input->get('emp_id');
        $first_name = $this->input->get('first_name');
        $last_name = $this->input->get('last_name');
        $hire_date = $this->input->get('hire_date');
        $password = $this->input->get('password');
        $conf_password = $this->input->get('conf_pword');

        if (!($errmsg = $this->authlib->register($emp_id,$first_name,$last_name,$hire_date, $password,$conf_password))) {
            redirect('/login');
        }
        else {
            $data['errmsg'] = $errmsg;
            $this->load->view('register_view',$data);
        }

    }

    public function set_password()
    {
        $emp_id = $this->input->post('emp_id');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $hire_date = $this->input->post('hire_date');
        $password = $this->input->post('password');
        $conf_password = $this->input->post('conf_pword');

        if (!($errmsg = $this->authlib->set_password($emp_id,$first_name,$last_name,$hire_date,$password,$conf_password))) {
            redirect('/login');
        }
        else {
            $data['errmsg'] = $errmsg;
            $this->load->view('register_view',$data);
        }

    }

    public function login()
    {
        $data['errmsg'] = '';
        $this->load->view('logging_view',$data);
    }

    public function authenticate()
    {
        $username = $this->input->post('uname');
        $password = $this->input->post('pword');
        $user = $this->authlib->login($username,$password);
        if ($user !== false) {
            $this->load->view('home_view',array('emp_no' => $user['emp_no']));
        }
        else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('home_view',$data);
        }

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */