<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Model
{


    public function getByEmp_no($emp_no)
    {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->where('employees.emp_no', $emp_no);
        $this->db->join('titles', 'employees.emp_no = titles.emp_no');
        $this->db->join('dept_emp', 'titles.emp_no = dept_emp.emp_no');
        $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
        //$this->db->count_all_results();
        $query = $this->db->get();
        $row_count = $query->num_rows();

        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            $result[] = array("firstname" => $row['first_name'], "lastname" => $row['last_name'], "dept" => $row['dept_name'], "title" => $row['title']);
        }
        return array("count" => $row_count, "results" => $result);
    }

    public function getByFirstname($firstname)
    {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->where('first_name', $firstname);
        $this->db->where('titles.to_date', '9999-01-01');
        $this->db->where('dept_emp.to_date', '9999-01-01');
        $this->db->join('titles', 'employees.emp_no = titles.emp_no');
        $this->db->join('dept_emp', 'titles.emp_no = dept_emp.emp_no');
        $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
        $this->db->limit(1000);
        $query = $this->db->get();
        $row_count = $query->num_rows();

        foreach ($query->result_array() as $row) {
            $res1[] = array('firstname' => $row['first_name'], 'lastname' => $row['last_name'], 'dept' => $row['dept_name'], 'title' => $row['title']);
        }
        return array("count" => $row_count, "results" => $res1);

        $query->free_result();

        //return array('firstname' => $fname,'lastname' => $lastname);

    }

    public function getByLastname($lastname)
    {
        $this->db->select('*');
        $this->db->from('employees');
        $this->db->where('last_name', $lastname);
        $this->db->where('titles.to_date', '9999-01-01');
        $this->db->where('dept_emp.to_date', '9999-01-01');
        $this->db->join('titles', 'employees.emp_no = titles.emp_no');
        $this->db->join('dept_emp', 'titles.emp_no = dept_emp.emp_no');
        $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
        $this->db->limit(1000);
        $query = $this->db->get();
        $row_count = $query->num_rows();

        foreach ($query->result_array() as $row) {
            $res2[] = array('firstname' => $row['first_name'], 'lastname' => $row['last_name'], 'dept' => $row['dept_name'], 'title' => $row['title']);
        }
        return array("count" => $row_count, "results" => $res2);

        $query->free_result();

        //return array('firstname' => $fname,'lastname' => $lastname);

    }

    public function getByDepartment($department)
    {
        $this->db->select('*');
        $this->db->from('departments');
        $this->db->where('dept_name', $department);
        $this->db->where('titles.to_date', '9999-01-01');
        $this->db->where('dept_emp.to_date', '9999-01-01');
        $this->db->join('dept_emp', 'departments.dept_no = dept_emp.dept_no');
        $this->db->join('employees', 'dept_emp.emp_no = employees.emp_no');
        $this->db->join('titles', 'employees.emp_no = titles.emp_no');
        $this->db->limit(1000);
        $query = $this->db->get();
        $row_count = $query->num_rows();


        foreach ($query->result_array() as $row) {
            $res3[] = array('firstname' => $row['first_name'], 'lastname' => $row['last_name'], 'dept' => $row['dept_name'], 'title' => $row['title']);
        }
        return array("count" => $row_count, "results" => $res3);
        $query->free_result();

        //return array('firstname' => $fname,'lastname' => $lastname)
    }


    public function getByJobtitle($jobtitle)
    {
        $this->db->select('*');
        $this->db->from('titles');
        $this->db->where('title', $jobtitle);
        $this->db->where('titles.to_date', '9999-01-01');
        $this->db->where('dept_emp.to_date', '9999-01-01');
        //$this->db->join('titles', 'employees.emp_no = titles.emp_no');
        $this->db->join('employees', 'titles.emp_no = employees.emp_no');
        $this->db->join('dept_emp', 'employees.emp_no = dept_emp.emp_no');
        $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
        $this->db->limit(1000);
        $query = $this->db->get();
        $row_count = $query->num_rows();


        foreach ($query->result_array() as $row) {
            $res4[] = array('firstname' => $row['first_name'], 'lastname' => $row['last_name'], 'dept' => $row['dept_name'], 'title' => $row['title']);
        }
        return array("count" => $row_count, "results" => $res4);
        $query->free_result();

        //return array('firstname' => $fname,'lastname' => $lastname);

    }

    public function getByFirstname_Lastname($firstname, $lastname)
    {
        $this->db->select('*');
        $this->db->from('employees');
        $this->db->where('first_name', $firstname);
        $this->db->where('last_name', $lastname);
        $this->db->where('titles.to_date', '9999-01-01');
        $this->db->where('dept_emp.to_date', '9999-01-01');
        $this->db->join('titles', 'employees.emp_no = titles.emp_no');
        $this->db->join('dept_emp', 'titles.emp_no = dept_emp.emp_no');
        $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
        $query = $this->db->get();
        $row_count = $query->num_rows();


        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            $res5[] = array('firstname' => $row['first_name'], 'lastname' => $row['last_name'], 'dept' => $row['dept_name'], 'title' => $row['title']);
        }
        return array("count" => $row_count, "results" => $res5);
        $query->free_result();

        //return array('firstname' => $fname,'lastname' => $lastname);
    }

    public function add_emp($emp_no, $first_name, $last_name, $birthday, $gender, $hired_from_date, $hired_to_date, $job_title, $department, $salary)
    {

        $employees = array(
            'emp_no' => $emp_no,
            'birth_date' => $birthday,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'hire_date' => $hired_from_date
        );

        $salaries = array(
            'emp_no' => $emp_no,
            'salary' => $salary,
            'from_date' => $hired_from_date,
            'to_date' => $hired_to_date,

        );

        $title = array(
            'emp_no' => $emp_no,
            'title' => $job_title,
            'from_date' => $hired_from_date,
            'to_date' => $hired_to_date,
        );

        $dept_emp = array(
            'emp_no' => $emp_no,
            'dept_no' => $department,
            'from_date' => $hired_from_date,
            'to_date' => $hired_to_date,
        );


        $this->db->insert('employees', $employees);
        $this->db->insert('salaries', $salaries);
        $this->db->insert('titles', $title);
        $this->db->insert('dept_emp', $dept_emp);


    }

    public function delete_emp($delete_emp)
    {

        $this->db->where('emp_no', $delete_emp);
        $this->db->delete('employees');
        return true;

    }

    /* public function getByAll($firstname,$lastname , $department ,$title)
     {

         $this->db->select('*');
         $this->db->from('employees');
         $this->db->join('titles', 'employees.emp_no = titles.emp_no');
         $this->db->join('dept_emp', 'titles.emp_no = dept_emp.emp_no');
         $this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');

         if (!empty($firstname)) {
             $this->db->where('employees.first_name', $firstname);
         }
         if (!empty($lastname)) {
             $this->db->where('employees.last_name', $lastname);
         }
         if (!empty($department)) {
             $this->db->where('departments.dept_name', $department);
         }
         if (!empty($title)) {
             $this->db->where('titles.title', $title);
         }

         $query = $this->db->get();
         $row_count = $query->num_rows();

         foreach ($query->result_array() as $row)
         {
             $res4[] = array('firstname' => $row['first_name'], 'lastname' => $row['last_name'] , 'dept' => $row['dept_name'], 'title' => $row['title']);
         }
         return array("count" => $row_count, "results" => $res4);*/


    //$query->free_result();
    //}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */