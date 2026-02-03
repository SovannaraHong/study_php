<?php

$picName = $_POST['txt-name'];
$img = $_FILES['txt-file'];
$imgName = $img['name'];
$imgLocation = $img['tmp_name'];
$imgEx = pathinfo($imgName, PATHINFO_EXTENSION);
$randName = rand(0000000, 99999999) . time();
$mainImg = "./" . $randName;
move_uploaded_file($imgLocation, $mainImg . "." . $imgEx);
// echo $imgLocation;
// echo $imgName;
// echo $picName;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Shop | Premium Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #ffffff;
            --surface: #f8f9fa;
            --accent: #000000;
            /* Minimalist Black & White theme */
            --text-main: #1a1a1a;
            --text-muted: #666666;
            --border: #eeeeee;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg);
            color: var(--text-main);
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* NAVIGATION */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            background: white;
            z-index: 1000;
        }

        .logo {
            font-weight: 800;
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .nav-icons {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        /* HERO SECTION */
        .hero {
            padding: 80px 5%;
            background: var(--surface);
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            letter-spacing: -2px;
            margin-bottom: 1rem;
        }

        /* PRODUCT GRID */
        .shop-container {
            padding: 60px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            text-decoration: none;
            color: inherit;
            transition: 0.3s;
        }

        .image-container {
            background: #f1f1f1;
            aspect-ratio: 1/1;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            margin-bottom: 15px;
        }

        /* Placeholder for Product Image */
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .image-container img {
            transform: scale(1.1);
        }

        .badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: white;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .info h3 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .info p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .price {
            font-weight: 800;
            font-size: 1.2rem;
        }

        /* BUTTONS */
        .btn-add {
            width: 100%;
            padding: 12px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            margin-top: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-add:hover {
            opacity: 0.8;
        }

        @media (max-width: 600px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .shop-container {
                grid-template-columns: 1fr 1fr;
                gap: 15px;
            }

            .info h3 {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">CORE<span>SHOP</span></div>
        <div class="nav-icons">
            <a href="#" style="text-decoration:none; color:black;">Search</a>
            <a href="#" style="text-decoration:none; color:black;">Cart (0)</a>
        </div>
    </nav>

    <header class="hero">
        <p style="text-transform: uppercase; font-size: 0.8rem; letter-spacing: 3px; margin-bottom: 10px;">New Collection 2026</p>
        <h1>Essentials for Modern Living</h1>
    </header>

    <main class="shop-container">
        <div class="product-card">
            <div class="image-container">
                <span class="badge">New</span>
                <img src="<?= $mainImg . "." . $imgEx ?>">

            </div>
            <div class="info">
                <h3>Minimalist Watch</h3>
                <p>Matte Black / 40mm</p>
                <span class="price">$149.00</span>
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>

    </main>

</body>

</html>