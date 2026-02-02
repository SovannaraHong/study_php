<?php


session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../php/php3.php");
    exit();
}
$_SESSION['user'];
if (isset($_GET['logout'])) {
    header("Location: ../php/php3.php");
    unset($_SESSION['user']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Shop Boutique</title>
    <style>
        /* --- GLOBAL STYLES --- */
        :root {
            --primary-pink: #f06292;
            --soft-pink: #fce4ec;
            --accent-pink: #ff80ab;
            --text-dark: #444;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #fff;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* --- FALLING PETALS ANIMATION --- */
        .petal {
            position: fixed;
            background-color: var(--soft-pink);
            border-radius: 150% 0 150% 0;
            top: -20px;
            z-index: 999;
            pointer-events: none;
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* --- HEADER & NAV --- */
        header {
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .top-bar {
            background: #fdfdfd;
            font-size: 12px;
            padding: 10px 10%;
            display: flex;
            justify-content: space-between;
            color: #888;
        }

        .logo-section {
            padding: 30px 0;
        }

        .logo-section h1 {
            font-family: 'Georgia', serif;
            color: var(--primary-pink);
            font-size: 45px;
            margin: 0;
            font-style: italic;
        }

        nav {
            background-color: var(--primary-pink);
            padding: 12px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover {
            color: var(--soft-pink);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 450px;
            background: url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 10%;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.2);
        }

        .hero-text {
            position: relative;
            z-index: 2;
            max-width: 400px;
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero-text h2 {
            font-size: 48px;
            color: var(--primary-pink);
            margin: 0;
            font-family: 'Georgia', serif;
        }

        /* --- PRODUCT GRID --- */
        .container {
            width: 80%;
            margin: 50px auto;
            text-align: center;
        }

        .featured-header {
            font-size: 24px;
            margin-bottom: 30px;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .product-card {
            position: relative;
            background: white;
            border: 1px solid #f9f9f9;
            padding: 15px;
            transition: 0.4s;
            cursor: pointer;
        }

        .product-card:hover {
            box-shadow: 0 10px 20px rgba(240, 98, 146, 0.15);
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }

        /* --- BADGES (New/Sale) --- */
        .badge {
            position: absolute;
            top: 10px;
            left: -5px;
            color: white;
            padding: 5px 15px;
            font-size: 12px;
            font-weight: bold;
            transform: rotate(-45deg);
        }

        .badge-new {
            background: #ff80ab;
        }

        .badge-sale {
            background: #f06292;
        }
    </style>
</head>

<body>

    <div class="petal" style="width: 10px; height: 10px; left: 10%; animation-duration: 7s;"></div>
    <div class="petal" style="width: 14px; height: 14px; left: 30%; animation-duration: 9s; animation-delay: 2s;"></div>
    <div class="petal" style="width: 8px; height: 8px; left: 55%; animation-duration: 6s; animation-delay: 1s;"></div>
    <div class="petal" style="width: 12px; height: 12px; left: 80%; animation-duration: 10s; animation-delay: 3s;"></div>

    <header>
        <div class="top-bar">
            <div>Language: English | Currency: USD</div>
            <div>Login | My Account | Wishlist | Cart (0)</div>
        </div>
        <div class="logo-section">
            <h1>Gift Shop</h1>
        </div>
        <nav>
            <a href="#">HOME</a>
            <a href="#">SHOP</a>
            <a href="#">PAGES</a>
            <a href="#">MEGA MENU</a>
            <a href="#">BUY IT!</a>
            <a href="WeddingPage.php?logout">Logout</a>

        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h2>Wedding Flower</h2>
            <p>The World's largest boutique store</p>
            <button style="background: var(--primary-pink); color: white; border: none; padding: 12px 25px; cursor: pointer;">Shop Now - 15% OFF</button>
        </div>
    </section>

    <div class="container">
        <h3 class="featured-header">Featured Products</h3>
        <div class="grid">
            <div class="product-card">
                <span class="badge badge-new">NEW</span>
                <img src="https://cdn-icons-png.flaticon.com/512/1047/1047461.png" alt="Basket">
                <h4>Easter Basket</h4>
                <p style="color: var(--primary-pink); font-weight: bold;">$45.00</p>
            </div>
            <div class="product-card">
                <span class="badge badge-sale">SALE</span>
                <img src="https://cdn-icons-png.flaticon.com/512/3081/3081912.png" alt="Teddy Bear">
                <h4>XOXO Teddy Bear</h4>
                <p style="color: var(--primary-pink); font-weight: bold;">$25.00</p>
            </div>
            <div class="product-card">
                <span class="badge badge-new">NEW</span>
                <img src="https://cdn-icons-png.flaticon.com/512/2913/2913520.png" alt="Pen Set">
                <h4>Elegant Pen Set</h4>
                <p style="color: var(--primary-pink); font-weight: bold;">$15.00</p>
            </div>
            <div class="product-card">
                <span class="badge badge-sale">SALE</span>
                <img src="https://cdn-icons-png.flaticon.com/512/2279/2279013.png" alt="Watch">
                <h4>Rose Pink Watch</h4>
                <p style="color: var(--primary-pink); font-weight: bold;">$89.00</p>
            </div>
        </div>
    </div>

</body>

</html>