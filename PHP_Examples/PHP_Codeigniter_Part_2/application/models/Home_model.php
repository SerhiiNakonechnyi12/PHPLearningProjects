<?php
class Home_model extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }

    public  function getCustomers()
    {
       $res = $this->db->get("customers");
       return $res->result_array();
    }

    public function getUserById($userid){
        $res = $this->db->get_where("customers", array("id"=>$userid));
        return $res->result_array();
    }

    public function addImage($data)
    {
        //INSERT INTO Images (itemid, imagePath) VALUS();
        $insert = $this->db->insert("images", $data);
        if($insert)
        
        return $this->db->insert_id();
        else
        return false;
    }

    
}