<?php
$months = array("January", "Februray", "match", "april", "may", "june", "july", "argust", "september", "octorber", "decemeber");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" class="flex justify-center items-center flex-col gap-5">
        <fieldset>
            <legend>Student Registration Form</legend>
            <div class="field">
                <label for="FirstName">FirstName:</label>
                <input type="text" name="firstname" required>
            </div>
            <div class="field">
                <label for="lastName">LastName:</label>
                <input type="text" name="lastname" required>
            </div>
            <div class="field">
                <label for="id">Email:</label>
                <input type="text" name="email" required>
            </div>
            <div class="field">
                <label for="id">Phone:</label>
                <input type="text" name="phone" required>
            </div>
            <div class="field">
                <label for="gender">Gender:</label>
                <input type="radio" value="1" name="male" required>
                <label for="male">Male</label>
                <input type="radio" value="0" checked name="female" required>
                <label for="Female">Female</label>
            </div>
            <div class="field">
                <label for="id">Date of birth:</label>
                <select name="dateOfBirth" id="">
                    <option value="">day</option>
                    <?php
                    for ($i = 0; $i < 31; $i++) {

                    ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php
                    }
                    ?>
                </select>
                <select name="dateOfBirth" id="">
                    <option value="">month</option>
                    <?php foreach ($months as $m): ?>
                        <option value=""><?= $m ?></option>
                    <?php endforeach ?>

                </select>

            </div>
        </fieldset>
    </form>

</body>


</html>