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

    mkdir("helloABC");
    rmdir("helloABC");

    ?><form action="Folder.php" method="post" enctype="multipart/form-data">

        <label for="title">Choose picture</label>
        <input type="file" name="img" id="" accept="image/*">
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    $path = 'img/';
    if (isset($_POST['submit'])) {

        $fileName = time() . "_" . $_FILES['img']['name'];
        $tmpName  = $_FILES['img']['tmp_name'];
        $target   = $path . $fileName;

        if (move_uploaded_file($tmpName, $target)) {
            echo "Upload success <br>";
        } else {
            echo "Upload failed <br>";
        }
    }
    ?>