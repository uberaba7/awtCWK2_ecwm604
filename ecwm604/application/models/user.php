<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

//    function register($emp_id , $password)
//    {
//// is username unique?
//        $res = $this->db->get_where('users', array('username' => $emp_id));
//        if ($res->num_rows() > 0) {
//            return 'Username already exists';
//        }
//// username is unique
//        $hashpwd = sha1($password);
//        $data = array('name' => $emp_id, 'username' => $username,
//            'password' => $hashpwd);
//        $this->db->insert('users', $data);
//        return null; // no error message because all is ok
//    }

    function set_password($emp_id, $first_name, $last_name, $hire_date, $password)
    {
// is username unique?
        $res = $this->db->get_where('employees', array('emp_no' => $emp_id, 'first_name' => $first_name,
            'last_name' => $last_name, 'hire_date' => $hire_date));
        if ($res->num_rows() < 0) {

            return 'Username already exists';
        }
        //username is unique
        $hashpwd = sha1($password);
        $data = array( 'password' => $hashpwd);
        $this->db->where('emp_no', $emp_id);
        $this->db->update('employees', $data);
        return null; // no error message because all is ok


    }

    function login($username,$pwd)
    {
        $this->db->where(array('emp_no' => $username,'password' => sha1($pwd)));
        $res = $this->db->get('employees',array('emp_no' , 'password'));
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
            return false;
        }
        return $res->row_array();
    }


}