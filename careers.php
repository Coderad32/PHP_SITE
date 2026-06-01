<?php
// Project configuration setup file
$projectName = "Get Jobs";
$pageTitle = "Welcome to Localhost/dev -- Where you run, build, setup localhost.";
$currentYear = date('Y'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $projectName . " | " . $pageTitle; ?></title>
    <style>
        /* CSS Variables & Global Resets */
        :root {
            --bg-color: #f8f9fa;
            --text-main: #2d3748;
            --text-muted: #718096;
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --jumbo-bg: #1e1b4b;
            --nav-bg: #ffffff;
            --footer-bg: #0f172a;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Utility Components */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: #ffffff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid #ffffff;
            color: #ffffff;
            margin-left: 10px;
        }

        .btn-outline:hover {
            background-color: #ffffff;
            color: var(--jumbo-bg);
        }

        /* 1. Navigation Bar */
        .navbar {
            background-color: var(--nav-bg);
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 1000;
            height: 70px;
            display: flex;
            align-items: center;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 24px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* 2. Jumbotron */
        .jumbotron {
            background: linear-gradient(135deg, var(--jumbo-bg) 0%, #312e81 100%);
            color: #ffffff;
            padding: 80px 0;
            text-align: left;
            margin-bottom: 40px;
        }

        .jumbo-content {
            max-width: 800px;
        }

        .jumbotron h1 {
            font-size: 3rem;
            line-height: 1.2;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .jumbotron p {
            font-size: 1.25rem;
            color: #c7d2fe;
            margin-bottom: 30px;
        }

        /* Main Content Grid */
        .main-content {
            flex: 1; /* Pushes footer to the bottom */
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 100%));
            gap: 30px;
            margin-bottom: 60px;
        }

        .card {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }

        /* 3. Footer */
        footer {
            background-color: var(--footer-bg);
            color: #94a3b8;
            padding: 60px 0 30px 0;
            margin-top: auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 100%));
            gap: 40px;
            border-bottom: 1px solid #334155;
            padding-bottom: 40px;
            margin-bottom: 30px;
        }

        .footer-col h4 {
            color: #ffffff;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-col ul a:hover {
            color: #ffffff;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.875rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .jumbotron h1 { font-size: 2.25rem; }
            .footer-bottom { flex-direction: column; gap: 15px; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo"><?php echo $projectName; ?></a>
            <ul class="nav-links">
                <li><a href="#index">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT WRAPPER -->
    <div class="main-content">
        
        <!-- JUMBOTRON -->
        <header class="jumbotron">
            <div class="container jumbo-content">
                <h1>Build Something Localhost</h1>
                <p>Welcome to your functional development environment. This layout is engineered with clean semantic HTML5, fluid modern CSS custom properties, and dynamic PHP tags.</p>
                <a href="#" class="btn">Get Started Today</a>
                <a href="#" class="btn btn-outline">Documentation</a>
            </div>
        </header>

        <!-- CONTENT BODY -->
        <main class="container">
            <div class="grid">
                
            <section class="card">
                    <h3> Projects | work </h3>
                    <p style="color: var(--text-muted); margin-top: 10px;">
                This section describes projects i work online and tells you about them in more detail.
                You can find more information use the links located in the projects link.    
                </p>
                </section>
                    
                <section class="card">
                    <h3> Services -- Join Today </h3>
                    <p style="color: var(--text-muted); margin-top: 10px;">Services -- About The service we provide here on this site. </p>
                </section>
                   
                <section class="card">
                    <h3> Connect with us ?</h3>
                    <p style="color: var(--text-muted); margin-top: 10px;"> if you are down lets connect please send subject to the contact link. </p>
                </section>
            
            </div>
        </main>
        
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Overview: Legacy Viewport</h4>
                    <ul>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Resources: Source Code MIT 2026</h4>
                    <ul>
                        <li><a href="#">Docs Generally</a></li>
                        <li><a href="#">Privacy Documents</a></li>
                        <li><a href="#">Blockchain Token Supply</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company Info:</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog | ShopTalk</a></li>
                        <li><a href="#">Careers | Join Us</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo $currentYear; ?> <?php echo $projectName; ?>. All rights reserved locally.</p>
                <p style="font-size: 0.8rem;">Built with T/C. </p>
            </div>
        </div>
    </footer>

</body>
</html>