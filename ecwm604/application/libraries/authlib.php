<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authlib {

    function __construct()
    {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('user');

    }

    public function register($emp_id, $first_name, $last_name, $hire_date,$password,$conf_pwd)
    {
        if ($emp_id == '' || $first_name == '' || $last_name == '' || $hire_date == '' || $password == '' || $conf_pwd == '') {
            return 'Missing field';
        }
        if ($password != $conf_pwd) {
            return "Passwords do not match";
        }
        return $this->ci->user->register($emp_id,$first_name,$last_name,$hire_date,$password);
    }

    public function set_password($emp_id, $first_name, $last_name, $hire_date,$password,$conf_pwd)
    {
//        if ($emp_id == '' || $first_name == '' || $last_name == '' || $hire_date == '' || $password == '' || $conf_pwd == '') {
//            return 'Missing field';
//        }
//        if ($password != $conf_pwd) {
//            return "Passwords do not match";
//        }
        return $this->ci->user->set_password($emp_id,$first_name,$last_name,$hire_date,$password);
    }

    public function login($user,$pwd)
    {
        if ($user == '' || $pwd == '') {
           return false;
        }
        return $this->ci->user->login($user,$pwd);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */