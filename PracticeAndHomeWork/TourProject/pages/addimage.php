<h2>Add Image</h2>
<?
if (!isset($_POST["upldbtn"])){
?>
<form action="index.php?page=2" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="myfile">Select image for upload:</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="<?echo 1024*1024*10?>">
        <input type="file" name="myfile" class="form-control" accept="image/">
        <input type="submit" value="Send image" name="upldbtn">

    </div>
</form>
<?
}
else{
    if($_FILES["myfile"]["error"]!=0){
        echo "<h3><span style='color:red'>Error file upload: ".$_FILES["myfile"]["error"]."</span></h3>";
        exit();
    }
    if(is_uploaded_file($_FILES["myfile"]["tmp_name"])){
        move_uploaded_file($_FILES["myfile"]["tmp_name"], "./images/".$_FILES["myfile"]["name"]);
        echo "<h3><span style='color:green'>File uploaded successfully!</span></h3>";
    }
}
?>

