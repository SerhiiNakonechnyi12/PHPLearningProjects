<?php
$this->load->view("header");
echo "<h3>". $user[0]["id"].". ".$user[0]["login"] ."</h3>";
echo "<div>" . $user[0]["pass"] ."</div>";
echo "<div>" . $user[0]["imagepath"] ."</div>";
$this->load->view("footer");