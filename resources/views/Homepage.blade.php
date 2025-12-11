<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header { background: #4b79a1; color: white; padding: 20px; text-align: center; }
        nav { background: #eee; padding: 10px; text-align: center; }
        nav a { margin: 0 15px; color: #333; text-decoration: none; font-weight: bold; }
        .container { padding: 40px; }
        .card { background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px; }
        .footer { text-align: center; padding: 20px; background: #ddd; margin-top: 40px; }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Our Website</h1>
    <p>Your simple Laravel demo site</p>
</header>

<nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ url('/contact') }}">Contact</a>
</nav>

<div class="container">
    <div class="card">
        <h2>Latest Updates</h2>
        <p>We’re glad you’re here! Explore our pages to learn more about us.</p>
    </div>

    <div class="card">
        <h2>Our Mission</h2>
        <p>We aim to create clean and simple examples for Laravel beginners.</p>
    </div>
</div>

<div class="footer">
    © 2025 My Laravel App
</div>

</body>
</html>
