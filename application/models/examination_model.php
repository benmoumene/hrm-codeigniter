<?php

class Examination_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function create_exam($data) {

        $this->db->insert('examination', $data);
    }
    
    function list_exam() {

        $str = "SELECT examination_id, COUNT( question_id ) AS items , examination_name, date_modified
            FROM examination
            LEFT OUTER JOIN questions ON examination.examination_id = questions.exam_id 
            GROUP BY examination_id";
        $query = $this->db->query($str);
        return $query->result();

    }


    function add_item($data) {

        $this->db->insert('questions', $data);
    }

    function load_items() {

        $str = "SELECT * FROM questions WHERE exam_id=".$this->session->userdata("eid");
        $query = $this->db->query($str);
        return $query->result();
    }
}  