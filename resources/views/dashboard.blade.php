<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zimou Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav class="sidebar">
            <ul>
                <li><a href="/dashboard" onclick="showContent('home')">Home</a></li>
                <li><a href="#" onclick="showContent('stores')">stores</a></li>
                <li><a href="/packages" onclick="showContent('packages')">packages</a></li>
                <li><a href="#" onclick="showContent('contact')">Contact</a></li>
            </ul>
        </nav>

        <!-- Main Content Area -->
        <div class="main-content">
            <div id="home" class="content active">
                <h2>Welcome to Zimou Dashboard</h2>
                <p>Explore the world with us!</p>
            </div>
        
            <div id="contact" class="content">
                <h2>Contact Us</h2>
                <p>If you have any questions, reach out to us.</p>
            </div>
        </div>
    </div>
</body>
</html>
