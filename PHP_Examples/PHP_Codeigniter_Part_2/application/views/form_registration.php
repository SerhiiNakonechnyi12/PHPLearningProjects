<?php

$this->load->view("header");
echo form_open("home/register", array("class='col-10 offset-1'"));

echo "<div class='form-group'>";
echo form_label("Логин:", "login");
echo form_input(array("type" => "text", "name"=>"login", "class" => "form-control"));
echo "</div>";
echo "<div class='form-group'>";
echo form_label("Пароль:", "pass1");
echo form_input(array("type" => "password", "name"=>"pass1", "class" => "form-control"));
echo "</div>";
echo "<div class='form-group'>";
echo form_label("Подтвердите пароль:", "pass2");
echo form_input(array("type" => "password", "name"=>"pass2", "class" => "form-control"));
echo "</div>";
echo "<div class='form-group'>";
echo form_label("Email:", "email");
echo form_input(array("type" => "text", "name"=>"login", "class" => "form-control"));
echo "</div>";

echo form_close();
$this->load->view("footer");