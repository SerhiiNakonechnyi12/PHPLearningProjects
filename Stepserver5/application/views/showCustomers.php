<?php
$this->load->view("header");
echo "<h3>Список пользователей сайта</h3>";
echo "<table>";
foreach ($customers as $c) {
    echo "<tr>";
    echo "<td>" . $c["id"] . "</td>";
    echo "<td>" . $c["login"] . "</td>";
    echo "<td>" . $c["pass"] . "</td>";
    echo "<td>" . $c["imagepath"] . "</td>";
    echo "<td>" . $c["discount"] . "</td>";
    echo "<td>" . $c["total"] . "</td>";
    echo "</tr>";
}
echo "</table>";
$this->load->view("footer");
