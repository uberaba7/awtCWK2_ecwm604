<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addlib {

    function __construct()
    {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('employee');

    }

    public function check_emp($emp_no,$first_name,$last_name,$birthday,$gender,$hired_from_date,$hired_to_date,$job_title,$department,$salary)
    {
        if (empty($emp_no) && empty($first_name) && empty($last_name) && empty($birthday) &&
            empty($gender) && empty($hired_from_date) && empty($hired_to_date) && empty($job_title)
            && empty($department) && empty($salary)) {
            return null;
        }
        //return $emp_no . $first_name . $last_name . $birthday . $gender.$hired_from_date.$hired_to_date.$job_title.$department.$salary;
        return $this->ci->employee->add_emp($emp_no,$first_name,$last_name,$birthday,$gender.$hired_from_date,$hired_to_date,$job_title,$department,$salary);
    }



}