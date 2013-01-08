<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Findlib {

    function __construct()
    {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('employee');

    }

    public function getByEmp_no($emp_no)
    {
        if ($emp_no == '') {
            return null;
        }
        return $this->ci->employee->getByEmp_no($emp_no);
    }

    public function getByFirstname($first_name)
    {
        if ($first_name == '') {
            return null;
        }
        return $this->ci->employee->getByFirstname($first_name);
    }

    public function getByLastname($last_name)
    {
        if ($last_name == '') {
            return null;
        }
        return $this->ci->employee->getByLastname($last_name);
    }

    public function getByDepartment($dept)
    {
        if ($dept == '') {
            return null;
        }
        return $this->ci->employee->getByDepartment($dept);
    }

    public function getByJobtitle($jobtitle)
    {
        if ($jobtitle == '') {
            return null;
        }
        return $this->ci->employee->getByJobtitle($jobtitle);
    }

    public function getByFirstname_Lastname($fname , $lname)
    {
        if (empty($fname) && empty($lname)) {
            return "nada";
        }
        return $this->ci->employee->getByFirstname_Lastname($fname , $lname);
    }

    public function delete_emp($delete_emp)
    {
        return $this->ci->employee->delete_emp($delete_emp);
    }

   /* public function getByAll($fname , $lname ,$department , $jtitle)
    {
        return $this->ci->employee->getByAll($fname , $lname , $department, $jtitle);
    }*/



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */