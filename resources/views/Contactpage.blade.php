<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header { background: #00897b; color: white; padding: 20px; text-align: center; }
        nav { background: #eee; padding: 10px; text-align: center; }
        nav a { margin: 0 15px; color: #333; text-decoration: none; font-weight: bold; }
        .container { padding: 40px; }
        form { max-width: 500px; margin: 0 auto; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; }
        button { padding: 10px 20px; background: #00897b; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .footer { text-align: center; padding: 20px; background: #ddd; margin-top: 40px; }
    </style>
</head>
<body>

<header>
    <h1>Contact Us</h1>
    <p>We'd love to hear from you!</p>
</header>

<nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ url('/contact') }}">Contact</a>
</nav>

<div class="container">
    <h2>Send Us a Message</h2>
    <form method="POST" action="#">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

<div class="footer">
    © 2025 My Laravel App
</div>

</body>
</html>
