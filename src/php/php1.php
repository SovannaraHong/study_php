<?php
$colors = ["red", "green", "blue", "yellow", "gray", "white"];

$lists = array(
    array("id" => 1, "name" => "Akira", "gender" => "male", "phone" => "0345479345"),
    array("id" => 2, "name" => "thida", "gender" => "female", "phone" => "04685564"),
    array("id" => 3, "name" => "kanha", "gender" => "male", "phone" => "04594875"),
    array("id" => 4, "name" => "kaknyka", "gender" => "female", "phone" => "035726387654"),
    array("id" => 5, "name" => "lin", "gender" => "female", "phone" => "03534986793")
);


$people = array("id" => 1, "name" => "Akira", "gender" => "male", "phone" => "0345479345");


$imagesString = "../assets/images/p1.jpg ../assets/images/p2.jpg ../assets/images/p3.jpg ../assets/images/p4.jpg ../assets/images/p5.jpg";
$img = explode(" ", $imagesString);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <link rel="stylesheet" href="../style/output.css">
</head>

<body>
    <main>

        <div>
            <h1 class="uppercase text-2xl font-bold mb-4  border-b-4 border-b-gray-400 w-100"> array 1</h1>
            <div class="flex justify-center items-center gap-5">
                <?php foreach ($colors as $color) {
                ?>
                    <div style="background-color: <?= $color ?> ;" class="   w-[100px] h-[100px] flex justify-center items-center ">
                        <p><?= $color ?></p>
                    </div>

                <?php
                } ?>
            </div>
        </div>
        <h1 class="uppercase text-2xl font-bold mb-4 border-b-4 border-b-gray-400 w-100">Array 2</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm">Id</th>
                        <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm">Name</th>
                        <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm">Gender</th>
                        <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm">Phone</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach ($lists as $key => $value): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2"><?= $value['id'] ?></td>
                            <td class="px-4 py-2"><?= $value['name'] ?></td>
                            <td class="px-4 py-2"><?= $value['gender'] ?></td>
                            <td class="px-4 py-2"><?= $value['phone'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <h1 class="uppercase text-2xl font-bold mb-4 border-b-4 border-b-gray-400 w-100">Array 3</h1>
        <?php foreach ($people as $key => $val): ?>
            <h1><?= $val ?></h1>
        <?php endforeach ?>

        <h1 class="uppercase text-2xl font-bold mb-4 border-b-4 border-b-gray-400 w-100">Array 4</h1>
        <div class="flex justify-center items-center gap-5">
            <?php foreach ($img as $pic): ?>
                <img class="w-70 h-70" src="<?= $pic ?>" alt="">

            <?php endforeach ?>
        </div>

    </main>

</body>

</html>