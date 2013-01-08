<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Find extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('findlib');
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->view('home_view');
    }


    function findemp()
    {
        $emp_no = $this->input->get('empno');
        $first_name = $this->input->get('firstname');
        $last_name = $this->input->get('lastname');
        $dept = $this->input->get('dept');
        $job_title = $this->input->get('jobtitle');
        $delete_emp = $this->input->get('inputemp');


        if (empty($emp_no) && empty($first_name) && empty($last_name) && empty($dept) && empty($job_title)) {
            echo json_encode("wrong");
        }
        if (!empty($emp_no) && empty($first_name) && empty($last_name) && empty($dept) && empty($job_title)) {

            $res_emp_no = $this->findlib->getByEmp_no($emp_no);
            echo json_encode($res_emp_no); // we turn the PHP array into a JSON string

        }
        if (empty($emp_no) && !empty($first_name) && empty($last_name) && empty($dept) && empty($job_title)) {

            $res_first_name = $this->findlib->getByFirstname($first_name);
            echo json_encode($res_first_name);

        }
        if (empty($emp_no) && empty($first_name) && !empty($last_name) && empty($dept) && empty($job_title)) {

            $res_last_name = $this->findlib->getByLastname($last_name);
            echo json_encode($res_last_name);

        }
        if (empty($emp_no) && empty($first_name) && empty($last_name) && !empty($dept) && empty($job_title)) {

            $res_department = $this->findlib->getByDepartment($dept);
            echo json_encode($res_department);

        }
        if (empty($emp_no) && empty($first_name) && empty($last_name) && empty($dept) && !empty($job_title)) {

            $res_job_title = $this->findlib->getByJobtitle($job_title);
            echo json_encode($res_job_title);

        }
        if (empty($emp_no) && !empty($first_name) && !empty($last_name) && empty($dept) && empty($job_title)) {

            $res_first_name_last_name = $this->findlib->getByFirstname_Lastname($first_name, $last_name);
            echo json_encode($res_first_name_last_name);
        }
        if (!empty($delete_emp)) {

            $res = $this->findlib->delete_emp($delete_emp);
            if ($res === true) {
                echo json_encode(" deleted"); // we turn the PHP array into a JSON string
            }
        }

        /*if ( !empty($first_name) && !empty($last_name) && !empty($dept) && !empty($job_title)) {

        $res_all = $this->findlib->getByAll($first_name, $last_name,$dept,$job_title);
        echo json_encode($res_all);
        }*/


    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */