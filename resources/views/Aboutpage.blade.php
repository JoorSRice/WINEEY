<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header { background: #5c6bc0; color: white; padding: 20px; text-align: center; }
        nav { background: #eee; padding: 10px; text-align: center; }
        nav a { margin: 0 15px; color: #333; text-decoration: none; font-weight: bold; }
        .container { padding: 40px; }
        ul { line-height: 1.8; }
        .footer { text-align: center; padding: 20px; background: #ddd; margin-top: 40px; }
    </style>
</head>
<body>

<header>
    <h1>About Us</h1>
    <p>Learn more about our purpose and values</p>
</header>

<nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ url('/contact') }}">Contact</a>
</nav>

<div class="container">
    <h2>Who We Are</h2>
    <p>We are a simple Laravel demo application built to help beginners learn routing and Blade templates.</p>

    <h3>What We Do</h3>
    <ul>
        <li>Create beginner-friendly Laravel examples</li>
        <li>Provide clean and readable code</li>
        <li>Help new developers understand structure and layout</li>
    </ul>

    <h3>Our Values</h3>
    <p>We believe in clarity, simplicity, and helpfulness in development.</p>
</div>

<div class="footer">
    © 2025 My Laravel App
</div>

</body>
</html>
