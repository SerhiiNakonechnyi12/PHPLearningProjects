<h2>Gallery</h2>
<form action="index.php?page=3" method="POST">
    <p>Выберите расширение для отображения картинок</p>
    <select name="ext">
        <?
        $path = "images/";
        if($dir = opendir($path)){
            $arr = array();
            while(($file = readdir($dir)) !== false){
                if($file == "." || $file == "..") continue;
                $file = $path . $file;
                // if(is_file($file)){
                    $pos = strpos($file, ".");
                    $ext = substr($file, $pos + 1);
                    $ext = strtolower($ext);
                // }
                if(!in_array($ext, $arr)){
                    $arr[] = $ext;
                    echo "<option>$ext</option>";
                }
            }
        }
        ?>
    </select>
    <input type="submit" name="showimg" value="Показать">
</form>
<br/>
<?
if(isset($_POST["showimg"])){
    $ext = $_POST["ext"];
    $arr = glob($path."*.".$ext);
    echo "<div class='card border-secondary mb-3'>";
    echo "<div class='card-header'>Gallery Content</div>";
    echo "<div class='card-body'>";
    foreach($arr as $item){
        echo "<a href='.".$item."'target='_blank'><img src='".$item."' style='width: 100px' alt='picture' class='imgGallery'></a>";
    }
    echo "</div></div>";
}
?>
