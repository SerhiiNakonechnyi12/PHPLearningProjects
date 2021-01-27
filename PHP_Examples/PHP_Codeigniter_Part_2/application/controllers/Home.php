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

    public function showUserForm(){
        $this->load->view("form_user_id");
    }

    public function getUser(){
        $send = $this->input->post("send");
        if($send){
            $userid = $this->input->post("userid");
            $data["user"] = $this->home_model->getUserById($userid);
            $this->load->view("showUser", $data);
        }
        else
        $this->load->view("form_user_id");
    }

    public function showUserForm2(){
        $data["customers"] =$this->home_model->getCustomers();
        $this->load->view("form_user_id2", $data);
    }

    public  function selectImage()
    {
        $send = $this->input->post("send");
        if(!isset($send)){
            $this->load->view("form_upload");
        }
        else
        {
            $config["upload_path"] = "./assets/images/";
            $config["max_size"] = 2048;
            $config["allowed_types"] = "jpg|png|gif";
            $config["max_width"] = 1024;
            $config["max_height"] = 768;
            $this->load->library("upload", $config);
            if(!$this->upload->do_upload("image")){
                $data["error"] = $this->upload->display_errors();
                $this->load->view("form_upload", $data);
            }
            else
            {
                $info["upload_data"] = $this->upload->data();
                $path = "assets/images/";
                $data = array("itemId"=>1, "imagepath"=>$path.$info["upload_data"]["file_name"]);
                $id = $this->home_model->addImage($data);
                if($id){
                    $data["result"] = "Изображение успешно загружено";
                    $this->load->view("form_upload", $data);
                }
                else
                $this->load->view("form_upload");
                
            }
        }
        
    }
}