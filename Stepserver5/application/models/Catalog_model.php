<?php
class Catalog_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function getItems()
    {
        $res = $this->db->set("items");
        return $res->res->result_array();
    }
}