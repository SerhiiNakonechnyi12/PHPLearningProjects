<?php
class Home_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function getCustomers()
    {
        $res = $this->db->get("customers");
        return $res->result_array();
    }
}
