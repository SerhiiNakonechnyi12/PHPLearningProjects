<?php
class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("home model");
    }

    public function getitems()
    {
        $data["items"] = $this->catalog_model->getItems();
        $this->load->view("showItems", $data);
    }
}