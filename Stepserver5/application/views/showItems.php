<?php
$this->load->view("header");
echo "<h3>Каталог</h3>";
echo "<table class='table table-striped'>";
foreach ($items as $itm) {
    echo "<tr>";
    echo "<td>" . $itm["id"] . "</td>";
    echo "<td>" . $itm["itemName"] . "</td>";
    echo "<td>" . $itm["catId"] . "</td>";
    echo "<td>" . $itm["priceIn"] . "</td>";
    echo "<td>" . $itm["priceSale"] . "</td>";
    echo "<td>" . $itm["info"] . "</td>";
    echo "<td>" . $itm["rate"] . "</td>";
    echo "<td>" . $itm["action"] . "</td>";
    echo "<td>" . $itm["imagePath"] . "</td>";
    echo "</tr>";
}
echo "</table>";
$this->load->view("footer");