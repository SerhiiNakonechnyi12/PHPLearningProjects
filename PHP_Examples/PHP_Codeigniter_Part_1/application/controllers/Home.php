<?php
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("home_model");
    }
    
    public function index()
    {
        //echo "Привет, мир CodeIgniter!";
        $data["title"] = "Тестовая страница";
        $data["text"] = "Этот текст получен из метода Index контроллера Home";
        $data["countries"] = array("Украина", "Китай", "США", "Швеция");
        $this->load->view("page1.php", $data);
    }

    public function getusers(){
        $data["customers"] =$this->home_model->getCustomers();
        $this->load->view("showCustomers", $data);

    }
}