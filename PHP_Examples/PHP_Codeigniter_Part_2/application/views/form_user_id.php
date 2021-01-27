<?php
$this->load->view("header");
echo form_open("home/getUser", array("class"=>"form-inline"));
echo "<div class='offset-md-1'>";
echo form_label("Введите идентификатор пользователя", "userid");
echo form_input(array("type"=>"text", "class"=>"form-control", "name"=>"userid"));
echo form_submit(array("name"=>"send", "class"=>"btn btn-sm btn-success"), "Выбрать");
echo "</div>";
echo form_close();
$this->load->view("footer");