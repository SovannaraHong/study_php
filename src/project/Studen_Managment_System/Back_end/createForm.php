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
    "BCA(Bachelor of Computer Application)",
    "B.Com(Bachelor of Commerce)",
    "B.Sc(Bachelor of Science)",
    "BA(Bachelor Of Art)",
    "MCA(Master Of Computer Application)",
    "M.Com(Master of Commerce)"
];
$firstName = "";
$lastName = "";
$gender = "";
$email = "";
$phone = "";
$day = "";
$month = "";
$year = "";
$address = "";
$city = "";
$province = "";
$postalCode = "";
$country = "";
$hubbiesPost = "";
$picture = "";
$qualification = "";
$course = "";

if (isset($_POST['btn-submit'])) {
    $firstName   = $_POST['txt-fistName'];
    $lastName    = $_POST['txt-lastName'];
    $email       = $_POST['txt-email'];
    $phone       = $_POST['txt-phone'];
    $day         = $_POST['day'];
    $month       = $_POST['month'];
    $year        = $_POST['year'];
    $gender      = $_POST['gender'];
    $address     = $_POST['txt-address'];
    $city        = $_POST['city'];
    $province    = $_POST['province'];
    $postalCode  = $_POST['txt-pinCode'];
    $country     = $_POST['country'];
    $hubbiesPost = implode(", ", $_POST['hub']);
    $picture     = $_FILES['picture'];
    $qualification = $_POST['qualification'];
    $course      = $_POST['course'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="./CSS/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background: #d6eaf5;
        }

        /* ── RAIN CANVAS ── */
        #rain-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }

        /* ── COLOUR PALETTE ── */
        :root {
            --rain-deep: #4a7fa5;
            --rain-mid: #7eb8d4;
            --rain-light: #b8dced;
            --rain-pale: #dff0f8;
            --rain-mist: #eaf6fb;
            --rain-accent: #5ba3c9;
            --rain-teal: #3d8a8a;
            --rain-soft: #a8d5e2;
            --rain-fog: #f0f8fc;
            --shadow-rain: rgba(74, 127, 165, 0.25);
        }

        /* Wrapper */
        #wrapper {
            background: linear-gradient(135deg, #c2dff0 0%, #a8cfe0 50%, #b8dced 100%);
            border-color: #90c4d8;
            box-shadow: 0 8px 32px var(--shadow-rain);
        }

        /* Panels */
        #left,
        #right {
            background: var(--rain-fog);
            border-color: var(--rain-light);
        }

        /* Title bar */
        #title {
            background: linear-gradient(135deg, var(--rain-deep) 0%, var(--rain-accent) 50%, var(--rain-teal) 100%);
            border-color: var(--rain-light);
            box-shadow: 0 4px 20px rgba(74, 127, 165, 0.4);
        }

        /* Toolbar */
        #toolbar {
            background: linear-gradient(90deg, var(--rain-mid) 0%, var(--rain-soft) 100%);
            border-color: var(--rain-light);
            position: relative;
            overflow: hidden;
        }

        #toolbar::after {
            content: '🌧️  Rainy Day Registration  ☁️  Fill in your details  🌧️  Rainy Day Registration  ☁️  Fill in your details  🌧️';
            position: absolute;
            white-space: nowrap;
            color: white;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.05em;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            animation: marquee 18s linear infinite;
        }

        @keyframes marquee {
            from {
                transform: translateY(-50%) translateX(0);
            }

            to {
                transform: translateY(-50%) translateX(-50%);
            }
        }

        /* Fieldset */
        fieldset {
            background: var(--rain-mist);
            border-color: var(--rain-light);
        }

        /* Inputs */
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            background: var(--rain-pale);
            border-color: #a0c8de;
            outline-color: var(--rain-accent);
            transition: box-shadow 0.2s ease, border-color 0.2s ease;
        }

        input[type="text"]:hover,
        input[type="email"]:hover,
        textarea:hover,
        select:hover {
            box-shadow: 0 0 0 3px rgba(91, 163, 201, 0.25);
            border-color: var(--rain-accent);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            box-shadow: 0 0 0 3px rgba(91, 163, 201, 0.35);
            border-color: var(--rain-deep);
            background: #ffffff;
        }

        /* File input */
        input[type="file"] {
            background: var(--rain-accent);
        }

        input[type="file"]:hover {
            background: var(--rain-deep);
        }

        /* Buttons */
        .btn-submit {
            background: linear-gradient(135deg, var(--rain-deep), var(--rain-teal));
            transition: all 0.2s ease;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #3a6f95, #2d7a7a);
            box-shadow: 0 4px 16px rgba(74, 127, 165, 0.5);
            transform: translateY(-1px);
        }

        .btn-reset {
            background: linear-gradient(135deg, #7eb8d4, #a8d5e2);
            transition: all 0.2s ease;
        }

        .btn-reset:hover {
            background: linear-gradient(135deg, #6aa8c4, #90c4d2);
            box-shadow: 0 4px 16px rgba(126, 184, 212, 0.5);
            transform: translateY(-1px);
        }

        /* Checkbox / radio accent */
        input[type="checkbox"],
        input[type="radio"] {
            accent-color: var(--rain-deep);
        }

        /* Left panel raindrop deco */
        .raindrop {
            width: 3px;
            background: linear-gradient(to bottom, transparent, var(--rain-mid));
            border-radius: 0 0 3px 3px;
            opacity: 0;
            position: absolute;
            animation: drop-fall linear infinite;
        }

        @keyframes drop-fall {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            10% {
                opacity: 0.7;
            }

            90% {
                opacity: 0.4;
            }

            100% {
                opacity: 0;
                transform: translateY(100%);
            }
        }

        /* Ripple on left panel */
        .ripple {
            border-radius: 50%;
            border: 1.5px solid var(--rain-mid);
            position: absolute;
            animation: ripple-grow 1.5s ease-out infinite;
            opacity: 0;
        }

        @keyframes ripple-grow {
            0% {
                transform: scale(0);
                opacity: 0.6;
            }

            100% {
                transform: scale(3);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="p-5 tracking-wide">

    <canvas id="rain-canvas"></canvas>

    <div id="wrapper"
        class="flex flex-row gap-3 p-3 w-full rounded-2xl border border-gray-400">

        <div id="left" class="w-1/4 min-h-[350px] p-3 font-bold text-[20px] border-4 rounded-2xl relative overflow-hidden"
            style="font-family:'Nunito',sans-serif;">
            <h2>FirstName: <?= $firstName ?></h2>
            <h3>LastName: <?= $lastName ?></h3>
            <p>Email: <?= $email ?></p>
            <p>Phone: <?= $phone ?></p>
            <p>Gender: <?= $gender ?></p>
            <p>DOB: <?= $day ?> <?= $month ?> <?= $year ?></p>
            <p>Address: <?= $address ?></p>
            <p>City: <?= $city ?></p>
            <p>Province: <?= $province ?></p>
            <p>Postal Code: <?= $postalCode ?></p>
            <p>Country: <?= $country ?></p>
            <p>Hobbies: <?= $hubbiesPost ?></p>
            <p>Qualification: <?= $qualification ?></p>
            <p>Course: <?= $course ?></p>



            <div id="left-rain"></div>
        </div>

        <div id="right"
            class="w-3/4 min-h-[350px] p-3 border-4 rounded-2xl flex flex-col gap-3"
            style="background:var(--rain-fog); border-color:var(--rain-light);">

            <div id="title"
                class="min-h-[60px] text-white rounded-2xl border-4 flex justify-center items-center"
                style="border-color:var(--rain-light);">
                <span class="text-[24px] font-bold tracking-widest font-space uppercase">
                    Student <span style="color:#b8e4f7;">Registration</span> Form
                </span>

            </div>

            <div id="toolbar" class="min-h-[38px] border-4 rounded-2xl" style="border-color:var(--rain-light);">


            </div>

            <div id="content">
                <form class="w-full font-space" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <fieldset class="px-5 pb-5 rounded-2xl border-4">

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">First Name :</label>
                            <input name="txt-fistName" type="text" value="<?= $firstName ?>" class="p-2.5 w-full rounded-lg border text-[17px]">
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Last Name :</label>
                            <input name="txt-lastName" type="text" value="<?= $lastName ?>" class="p-2.5 w-full rounded-lg border text-[17px]">
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Email ID :</label>
                            <input name="txt-email" type="email" value="<?= $email ?>" class="p-2.5 w-full rounded-lg border text-[17px]">
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Mobile Number :</label>
                            <input name="txt-phone" type="text" value="<?= $phone ?>" class="p-2.5 w-full rounded-lg border text-[17px]">
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Gender :</label>
                            <div class="flex gap-6 text-[17px]">
                                <label class="flex gap-2 items-center font-medium" style="color:var(--rain-teal);">
                                    <input type="radio" name="gender" checked value="Male"
                                        <?php if (($gender ?? '') == 'Male') echo 'checked'; ?>> Male
                                </label>
                                <label class="flex gap-2 items-center font-medium" style="color:var(--rain-teal);">
                                    <input type="radio" name="gender" value="Female"
                                        <?php if (($gender ?? '') == 'Female') echo 'checked'; ?>> Female
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Date of Birth :</label>
                            <div class="flex gap-3">
                                <select name="day" class="p-2 rounded-lg border text-[16px]">
                                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                                <select name="month" class="p-2 rounded-lg border text-[16px]">
                                    <option value="">--Month--</option>
                                    <?php foreach ($months as $index => $m) : ?>
                                        <option value="<?= $index + 1 ?>" <?= ($month == ($index + 1)) ? 'selected' : '' ?>>
                                            <?= $m ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <select name="year" class="p-2 rounded-lg border text-[16px]">
                                    <option value="">--Year--</option>
                                    <?php
                                    $currentYear = date("Y");
                                    for ($y = $currentYear; $y >= 1900; $y--) : ?>
                                        <option value="<?= $y ?>" <?= ($year == $y) ? 'selected' : '' ?>>
                                            <?= $y ?>
                                        </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Address :</label>
                            <textarea name="txt-address" rows="3" value='<?= $address ?>' class="p-2.5 w-full rounded-lg border text-[17px]"></textarea>
                        </div>
                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">City :</label>
                            <input name="city" type="text" value="<?= $city ?>" class="p-2.5 rounded-lg border text-[17px]">
                        </div>
                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Pin Code :</label>
                            <input name="txt-pinCode" type="text" value="<?= $postalCode ?>" class="p-2.5 rounded-lg border text-[17px]">
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Province :</label>
                            <input name="province" type="text" value="<?= $province ?>" class="p-2.5 rounded-lg border text-[17px]">
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Country :</label>
                            <input name="country" type="text" value="<?= $country ?>" class="p-2.5 rounded-lg border text-[17px]">
                        </div>

                        <div class="flex flex-wrap gap-3 items-center mb-4">
                            <label class="font-semibold text-[20px]" style="color:var(--rain-deep);">Hobbies :</label>
                            <?php foreach ($hubbies as $hobby) : ?>
                                <label class="font-semibold uppercase text-[14px] flex items-center gap-1" style="color:var(--rain-teal);">
                                    <input name="hub[]" value="<?= $hobby ?>" type="checkbox"> <?= $hobby ?>
                                </label>
                            <?php endforeach; ?>
                            <input name="txt" type="text" placeholder="Other" class="p-2 rounded-lg border text-[15px]" style="width:100px;">
                        </div>

                        <div class="flex flex-col gap-2 mb-4">
                            <label class="font-semibold text-[18px]" style="color:var(--rain-deep);">Your Photo :</label>
                            <input name="picture" type="file"
                                class="text-white rounded-lg px-3 py-2 w-fit cursor-pointer text-[15px]"
                                style="background:var(--rain-accent);">
                        </div>

                        <div class="flex flex-wrap gap-3 items-center mb-4">
                            <label class="font-semibold text-[20px]" style="color:var(--rain-deep);">Qualification :</label>
                            <?php foreach ($qualifications as $qual) : ?>
                                <label class="font-semibold uppercase text-[13px] flex items-center gap-1" style="color:var(--rain-teal);">
                                    <input type="radio" value="<?= $qual ?>" name="qualification"> <?= $qual ?>
                                </label>
                            <?php endforeach; ?>
                        </div>

                        <div class="grid grid-cols-4 gap-2 items-start mb-4">
                            <label class="font-semibold text-[18px] flex items-center" style="color:var(--rain-deep);">
                                Courses Applied For :
                            </label>
                            <?php foreach ($courses as $course) : ?>
                                <label class="font-semibold uppercase text-[13px] flex items-start gap-1" style="color:var(--rain-teal);">
                                    <input type="radio" value="<?= $course ?>" name="course" class="mt-1"> <?= $course ?>
                                </label>
                            <?php endforeach; ?>
                        </div>

                        <div class="flex gap-4 mt-4">
                            <input type="submit" value="✦ Submit" name="btn-submit"
                                class="btn-submit px-6 py-2 text-white font-bold grow text-[18px] rounded-xl cursor-pointer">
                            <input type="reset" value="↺ Reset"
                                class="btn-reset px-6 py-2 text-white font-bold grow text-[18px] rounded-xl cursor-pointer">
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <script>
        (function() {
            const canvas = document.getElementById('rain-canvas');
            const ctx = canvas.getContext('2d');

            function resize() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            resize();
            window.addEventListener('resize', resize);

            const DROPS = 220;
            const drops = [];

            for (let i = 0; i < DROPS; i++) {
                drops.push({
                    x: Math.random() * window.innerWidth,
                    y: Math.random() * window.innerHeight,
                    len: Math.random() * 18 + 8,
                    speed: Math.random() * 7 + 5,
                    opacity: Math.random() * 0.35 + 0.08,
                    width: Math.random() * 1.2 + 0.4,
                    angle: Math.PI / 2 + (Math.random() * 0.12 - 0.06),
                });
            }

            function drawRain() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                drops.forEach(d => {
                    ctx.save();
                    ctx.strokeStyle = `rgba(100, 180, 220, ${d.opacity})`;
                    ctx.lineWidth = d.width;
                    ctx.lineCap = 'round';

                    ctx.beginPath();
                    ctx.moveTo(d.x, d.y);
                    ctx.lineTo(
                        d.x + Math.cos(d.angle) * d.len,
                        d.y + Math.sin(d.angle) * d.len
                    );
                    ctx.stroke();
                    ctx.restore();

                    d.y += d.speed;
                    d.x += Math.cos(d.angle) * d.speed * 0.15;

                    if (d.y > canvas.height + 20) {
                        d.y = -20;
                        d.x = Math.random() * canvas.width;
                    }
                    if (d.x > canvas.width + 20) d.x = -20;
                });

                requestAnimationFrame(drawRain);
            }
            drawRain();

            const leftPanel = document.getElementById('left-rain');
            const NUM_LEFT = 10;

            for (let i = 0; i < NUM_LEFT; i++) {
                const drop = document.createElement('div');
                drop.className = 'raindrop';
                const h = Math.random() * 25 + 12;
                const lf = Math.random() * 90 + 5;
                const dur = Math.random() * 1.5 + 1;
                const del = Math.random() * 2;
                drop.style.cssText = `
height:${h}px; left:${lf}%;
top:0; bottom:0;
animation-duration:${dur}s;
animation-delay:${del}s;
`;
                leftPanel.appendChild(drop);
            }

            const leftEl = document.getElementById('left');
            setInterval(() => {
                const r = document.createElement('div');
                r.className = 'ripple';
                const sz = Math.random() * 18 + 8;
                const lf = Math.random() * 80 + 10;
                const tp = Math.random() * 70 + 15;
                r.style.cssText = `
width:${sz}px; height:${sz}px;
left:${lf}%; top:${tp}%;
animation-duration:${Math.random() * 0.8 + 1}s;
animation-delay:0s;
`;
                leftEl.appendChild(r);
                setTimeout(() => r.remove(), 2000);
            }, 400);

        })();
    </script>

</body>

</html>