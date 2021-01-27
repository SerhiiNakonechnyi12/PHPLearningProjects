<?php
class Home extends CI_Controller
{
    public function index()
    {
        // echo "Привет  мир Codeigniter!";
        $this->load->view("page1.php");
    }
}
