<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banking Webpage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1 style="color:aqua">BANKING</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Services</a>
                    <div class="dropdown-content">
                        <a href="#">Personal Banking</a>
                        <a href="#">Business Banking</a>
                        <a href="#">Loans</a>
                    </div>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h2>Welcome to Your Trusted Bank</h2>
            <p>Your one-stop solution for all banking needs, including personal and business accounts, loans, and more!</p>
        </section>
        
        <section class="services">
            <h3>Our Services</h3>
            <div class="service-boxes">
                <div class="service">
                    <h4>Personal Banking</h4>
                    <p>Manage your savings and checking accounts with ease.</p>
                </div>
                <div class="service">
                    <h4>Business Banking</h4>
                    <p>Solutions tailored to help your business grow.</p>
                </div>
                <div class="service">
                    <h4>Loans</h4>
                    <p>Personal and business loans to meet your needs.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Banking Inc. All rights reserved.</p>
    </footer>
</body>