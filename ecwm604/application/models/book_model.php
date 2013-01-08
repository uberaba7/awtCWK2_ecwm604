<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class User extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function register($username,$pwd)
    {





        // is username unique?
        $res = $this->db->get_where('employees',array('emp_no' => $username));
        if ($res->num_rows() > 0) {
            //return 'Username already exists';

            // username is unique
            $hashpwd = sha1($pwd);
            $data = array( 'password' => $hashpwd);
            $this->db->where('emp_no', $username);
            $this->db->update('employees', $data);
            //$this->db->insert('employees',$data);



            return null; // no error message because all is ok

        }else

        {
            return 'Username already exists';
        }
    }



    function login($username,$pwd)
    {
        $this->db->where(array('emp_no' => $username,'password' => sha1($pwd)));
        $res = $this->db->get('employees',array('emp_no'));
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
            return false;
        }

        // remember login
        $session_id = $this->session->userdata('session_id');
        // remember current login
        $row = $res->row_array();
        $this->db->insert('logins',array('name' => $row['emp_no'],'session_id' => $session_id));
        return $res->row_array();
    }

    function is_loggedin()
    {
        $session_id = $this->session->userdata('session_id');
        $res = $this->db->get_where('logins',array('session_id' => $session_id));
        if ($res->num_rows() == 1) {
            $row = $res->row_array();
            return $row['name'];
        }
        else {
            return false;
        }
    }



}


