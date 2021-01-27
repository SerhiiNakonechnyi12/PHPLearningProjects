<?php
$this->load->view("header");
if(isset($error)){
    echo "<h3/><span style='color: red'>" . $error . "</span><h3/>";
}
else if(isset($result))
{
    echo "<h3/><span style='color: green'>" . $result . "</span><h3/>";
}
echo form_open_multipart("home/selectImage", array("class"=>"form-inline offset-md-1"));

echo form_label("Выберите изображение", "image");
echo form_upload(array("name"=>"image", "class"=>"form-control"));
echo form_submit(array("name"=>"send", "class"=>"btn btn-sm btn-success"), "Загрузить");
echo form_close();
$this->load->view("footer");