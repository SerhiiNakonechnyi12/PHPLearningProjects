<?php
class Catalog_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function getItems()
    {
        $res = $this->db->get("items");
        return $res->result_array();
    }
}