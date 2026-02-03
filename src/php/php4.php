<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #45a049;
        }
    </style>
</head>

<body>

    <form class="form-box" action="../components/moveImages/moveImg.php" method="POST" enctype="multipart/form-data">
        <h2>User Form</h2>

        <label>Name</label>
        <input type="text" name="txt-name" placeholder="Enter your name" required>

        <label>Upload Image</label>
        <input type="file" name="txt-file" accept="image/*" required>

        <button type="submit" name="save">Submit</button>
    </form>


    <?php
    if (isset($_POST['save'])) {
        $name = $_POST['txt-name'];
        $pic = $_POST['txt-file'];
    }


    ?>
</body>

</html>