<!-- Folder Handling -->

<?php
if (isset($_GET['name'])) {
    $fileName = $_GET['name'];
    if (file_exists("img/$fileName")) {
        unlink("img/$fileName");
    }
}



$path = 'img/';
if (is_dir($path)) {
    $files = scandir($path);

?>
    <div style="display: flex; justify-content: center; gap: 10px; align-items: center;">

        <?php
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "file: "  . "<br>";
        ?>
                <div>
                    <img style="width: 200px;" src="<?= $path . $file ?>" alt="">
                    <a href="Folder.php?name=<?= $file ?>">Delete</a>

                </div>
    <?php
            }
        }
    }

    ?>

    </div>

    <!-- Create folder -->

    <?php

    $errorFileUploading = "";
    $success = "";

    if (isset($_POST['submit'])) {

        foreach ($_FILES['myImage']['name'] as $key => $fileName) {


            $error = $_FILES['myImage']['error'][$key];
            // $fileName = $_FILES['myImage']['name'];
            $fileType = $_FILES['myImage']['type'][$key];
            $fileSize = ($_FILES['myImage']['size'][$key] / 1024) / 1024;

            $source = $_FILES['myImage']['tmp_name'][$key];
            $destination = "img/" . $fileName;

            if (
                $fileType == "image/png" ||
                $fileType == "image/jpeg" ||
                $fileType == "image/gif" ||
                $fileType == "image/jpg" ||
                $fileType == "image/webp"
            ) {

                if ($fileSize <= 50) {

                    if ($error == 0) {

                        if (move_uploaded_file($source, $destination)) {
                            $success = "Your file has uploaded successfully.";
                        }
                    } else {

                        $errorFileUploading = "An error has occurred while uploading your file. Error number is: $error";
                    }
                } else {

                    $errorFileUploading = "Your file size has exceeded 50MB";
                }
            } else {

                $errorFileUploading = "Invalid file format.";
            }
        }
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <label>ជ្រើសរើសរូបភាព៖</label>
        <input type="file" name="myImage[]" multiple>
        <button type="submit" name="submit">បង្ហោះរូបភាព</button>
    </form>

    <?php
    echo $success;
    echo $errorFileUploading;
    ?>