<html lang="en">
<head>
   
    <title>File upload</title>
</head>
<body>
    <form action = "fleupload.php"  method="POST" enctype="multipart/form-data">
        Select File to upload
        <input type="file" name="file1"> <br>
        <input type="submit" name="btnsubmit" title="Upload">
    </form>

</body>
</html>
<?php
    $targetdir = "D:Uploadedfile/";
   
    if(isset($_POST["btnsubmit"]))
    {
        $target =   $targetdir . basename($_FILES['file1']['name']);
        echo $_FILES['file1']['name']."<br>";
        echo $_FILES['file1']['type']."<br>";
        echo $_FILES['file1']['tmp_name']."<br>";
        echo $_FILES['file1']['size']."<br>";
        move_uploaded_file($_FILES['file1']['tmp_name'],$target);
        echo "File Uploaded Succesfully";
    }
?>
