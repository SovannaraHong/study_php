<?php

$hubbies = ["Drawing", "Singing", "Dancing", "Skating"];
$qualifications = ["High School", "Higher School", "Graduation", "Post Graduation", "PhD"];
$months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];
$courses = [
    "BCA(Bachelor of ComputerApplication)",
    "B.Com(Bachelor of Commerce)",
    "B.Sc(Bachelor of Science)",
    "BA(Bachelor Of Art)",
    "MCA(Master Of Computer Application)",
    "M.Com(Mater of Commerce)"
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="./CSS/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


    <style>
        /* ── SNOW CANVAS (sits on top of everything, no pointer events) ── */
        #snow-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }
    </style>
</head>

<body class="bg-[#f5f5f5] p-5 font-jerry tracking-wide">

    <!-- Snow overlay -->
    <canvas id="snow-canvas"></canvas>

    <div id="wrapper"
        class="flex flex-row gap-3 p-3 w-full bg-[#C9BEFF] hover:bg-[#C9BEFF] rounded-2xl border border-gray-400 shadow-lg shadow-[#ffa0d1]">

        <div id="left" class="w-1/4 min-h-[350px] p-3 bg-white border-4 border-[#FFDBFD] rounded-2xl">
        </div>

        <div id="right"
            class="w-3/4 min-h-[350px] p-3 bg-white border-4 border-[#FFDBFD] rounded-2xl flex flex-col gap-3">

            <div id="title"
                class="min-h-[60px] bg-[#C9BEFF] shadow-lg shadow-[#8494FF] text-white rounded-2xl border-4 border-[#FFDBFD] flex justify-center items-center">
                <span class="text-[28px] font-normal font-press-start-2p-regular">
                    <span>𑣲</span>Student <span class="text-[#ffc5ef]">Registration</span> Form <span>‧₊˚❀༉‧₊˚.</span>
                </span>
            </div>

            <div id="toolbar" class="min-h-[40px] bg-[#C9BEFF] border-4 border-[#FFDBFD] rounded-2xl">
            </div>

            <div id="content">
                <form class="w-full" action="" method="post" enctype="multipart/form-data">
                    <fieldset class="bg-[#fcfafc] border-4 border-[#FFDBFD] rounded-2xl px-5 pb-5">

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="text-sm font-normal text-[20px]"> First Name :</label>
                            <input name="txt-fistName" type="text" class="p-2.5 w-full outline-[#C9BEFF] transition duration-200 outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear bg-[#FFDBFD] rounded-lg border border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="text-sm font-normal text-[20px]"> Last Name :</label>
                            <input name="txt-lastName" type="text" class="p-2.5 w-full outline-[#C9BEFF] transition duration-200 outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear rounded-lg border bg-[#FFDBFD] border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Email ID :</label>
                            <input name="txt-email" type="email" class="p-2.5 w-full rounded-lg transition duration-200 outline-[#C9BEFF] outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear border bg-[#FFDBFD] border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Mobile Number :</label>
                            <input name="txt-phone" type="text" class="p-2.5 w-full rounded-lg transition duration-200 outline-[#C9BEFF] outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear border bg-[#FFDBFD] border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field font-normal text-[20px]">
                            <label class="font-normal text-[20px]">Gender :</label>
                            <div class="flex gap-6">
                                <label class="flex gap-2 items-center">
                                    <input type="radio" class="bg-[#FFDBFD] transition duration-200 font-normal text-[20px]" name="gender"> Male
                                </label>
                                <label class="flex gap-2 items-center">
                                    <input type="radio" class="bg-[#FFDBFD] transition duration-200 font-normal text-[20px]" name="gender"> Female
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Date of Birth :</label>
                            <div class="flex gap-3">
                                <select name="dob" class="p-2 rounded-lg border border-gray-400">
                                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>

                                <select name="month" class="p-2 rounded-lg border font-normal text-[20px] border-gray-400">
                                    <option value="">--Month--</option>
                                    <?php foreach ($months as $index => $month) : ?>
                                        <option value="<?= $index + 1 ?>"><?= $month ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <select name="year" class="p-2 rounded-lg border border-gray-400">
                                    <option value="">--Year--</option>
                                    <?php
                                    $currentYear = date("Y");
                                    for ($y = $currentYear; $y >= 1900; $y--) : ?>
                                        <option value="<?= $y ?>"><?= $y ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Address :</label>
                            <textarea name="txt-address" class="p-2.5 outline-[#C9BEFF] transition text-[20px] duration-200 outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear bg-[#FFDBFD] rounded-lg border border-gray-400"></textarea>
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">City :</label>
                            <input name="city" type="text" class="p-2.5 transition duration-200 rounded-lg border outline-[#C9BEFF] outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear bg-[#FFDBFD] border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Pin Code :</label>
                            <input name="txt-pinCode" type="text" class="p-2.5 transition duration-200 rounded-lg border outline-[#C9BEFF] outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear bg-[#FFDBFD] border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Province :</label>
                            <input name="province" type="text" class="transition duration-200 p-2.5 rounded-lg border bg-[#FFDBFD] outline-[#C9BEFF] outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Country :</label>
                            <input name="country" type="text" class="transition duration-200 p-2.5 rounded-lg border outline-[#C9BEFF] outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear bg-[#FFDBFD] border-gray-400">
                        </div>

                        <div class="flex gap-2 items-center mb-4 field">
                            <label class="font-normal text-[25px]">Hobbies :</label>
                            <div class="flex flex-wrap gap-4 font-normal text-[20px]">
                                <?php foreach ($hubbies as $hobby) : ?>
                                    <label class="font-semibold uppercase font-space text-[15px]">
                                        <input name="hub" type="checkbox"> <?= $hobby ?>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <input name="txt" type="text" placeholder="Other" class="p-2.5 rounded-lg border bg-[#FFDBFD] outline-[#C9BEFF] outline-2 hover:shadow-lg hover:shadow-[#C9BEFF] ease-linear border-gray-400">
                        </div>

                        <div class="flex flex-col gap-2 mb-4 field">
                            <label class="font-normal text-[20px]">Your Photo :</label>
                            <input name="picture" class="bg-[#C9BEFF] text-white rounded-[3px] px-[6px] py-[8px] w-fit outline-[#C9BEFF] outline-2 hover:shadow-[#C9BEFF] ease-linear" type="file">
                        </div>

                        <div class="flex gap-2 items-center mb-4 field">
                            <label class="font-normal text-[25px]">Qualification :</label>
                            <?php foreach ($qualifications as $qual) : ?>
                                <label class="font-semibold uppercase font-space text-[15px]">
                                    <input type="radio" class="bg-[#FFDBFD]" name="qualification"> <?= $qual ?>
                                </label>
                            <?php endforeach; ?>
                        </div>

                        <div class="grid grid-cols-4 gap-2 items-center mb-4 field">
                            <label class="font-normal text-[25px] flex items-center">
                                Courses Applies For :
                            </label>
                            <?php foreach ($courses as $course) : ?>
                                <label class="font-semibold uppercase font-space text-[15px] flex items-center gap-1">
                                    <input type="radio" class="bg-[#FFDBFD]" name="course">
                                    <?= $course ?>
                                </label>
                            <?php endforeach; ?>
                        </div>

                        <div class="flex gap-4 mt-4 field">
                            <input type="submit" value="Submit" name="btn-submit"
                                class="px-6 py-2 text-white font-normal grow bg-linear-to-b from-pink-400 to-[#FFDBFD] text-[20px] bg-green-500 rounded-lg cursor-pointer hover:bg-green-600">
                            <input type="reset" value="Reset"
                                class="px-6 py-2 text-white font-normal grow bg-linear-to-b from-pink-400 to-[#FFDBFD] text-[20px] bg-gray-400 rounded-lg cursor-pointer hover:bg-gray-500">
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <script src="./JS/snow.js"></script>
</body>

</html>

<?php
if (isset($_POST['btn-submit'])) {
    $firstName   = $_POST['txt-fistName'];
    $lastName    = $_POST['txt-lastName'];
    $email       = $_POST['txt-email'];
    $phone       = $_POST['txt-phone'];
    $dob         = $_POST['dob'];
    $gender      = $_POST['gender'];
    $address     = $_POST['txt-address'];
    $city        = $_POST['city'];
    $province    = $_POST['province'];
    $postalCode  = $_POST['txt-pinCode'];
    $country     = $_POST['country'];
    $hubbies     = $_POST['hub'];
    $picture     = $_FILES['picture'];
    $qualification = $_POST['qualification'];
    $course      = $_POST['course'];

    echo "firstName = " . $firstName . "<br>";
    echo "lastName = " . $lastName . "<br>";
    echo "email = " . $email . "<br>";
    echo "phone = " . $phone . "<br>";
    echo "dob = " . $dob . "<br>";
    echo "gender = " . $gender . "<br>";
    echo "address = " . $address . "<br>";
    echo "city = " . $city . "<br>";
    echo "province = " . $province . "<br>";
    echo "postalCode = " . $postalCode . "<br>";
    echo "country = " . $country . "<br>";
    if (is_array($hubbies)) {
        echo "hubbies = " . implode(", ", $hubbies) . "<br>";
    } else {
        echo "hubbies = " . $hubbies . "<br>";
    }
    if (isset($picture['name'])) {
        echo "picture = " . $picture['name'] . "<br>";
    }
    echo "qualification = " . $qualification . "<br>";
    echo "course = " . $course . "<br>";
}
?>