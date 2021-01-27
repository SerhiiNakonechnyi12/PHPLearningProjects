<?php
$this->load->view("header");
echo form_open("home/getUser", array("class"=>"form-inline offset-md-1"));
echo form_label("Выберите пользователя", "userid");
echo "<select name='userid' class='form-control'>";
foreach ($customers as $c)
{
    echo "<option value='". $c["id"] . "'>" . $c["login"] . "</option>";
}
echo form_submit(array("name"=>"send", "class"=>"btn btn-sm btn-success"), "Выбрать");
echo "</select>";
$this->load->view("footer");