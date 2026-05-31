<?php
// ------------------------------------------------------------
// Site configuration
// ------------------------------------------------------------
$pages = [
    "Home"      => "index.php",
    "About"     => "about.php",
    "Blog"      => "blog.php",
    "Docs"      => "docs.php",
    "Donate"    => "donate.php",
    "Jobs"      => "jobs.php",
    "Privacy"   => "privacy.php",
    "Terms"     => "terms.php"
];

// Active page detection
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Index</title>

    <!-- Dark-mode friendly baseline -->
    <style>
        body {
            margin: 0;
            font-family: system-ui, sans-serif;
            background: #0d0d0f;
            color: #e6e6e6;
        }
        header {
            background: #111118;
            padding: 1rem 2rem;
            border-bottom: 1px solid #222;
        }
        nav a {
            color: #aaa;
            margin-right: 1.5rem;
            text-decoration: none;
            font-weight: 500;
        }
        nav a.active {
            color: #4df;
            text-shadow: 0 0 6px #4df;
        }
        main {
            padding: 2rem;
            max-width: 900px;
            margin: auto;
        }
        footer {
            margin-top: 4rem;
            padding: 2rem;
            text-align: center;
            color: #666;
            border-top: 1px solid #222;
        }
    </style>
</head>
<body>

<header>
    <nav>
        <?php foreach ($pages as $label => $file): ?>
            <a href="<?= $file ?>" class="<?= $current === $file ? 'active' : '' ?>">
                <?= $label ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>

<main>
    <h1>Welcome Home</h1>
    <p>This is the central index for your site structure. Use the navigation above to explore each section.</p>

    <h2>Components Directory</h2>
    <p>Your <strong>components/</strong> folder can store reusable UI modules, HUD widgets, cards, navbars, and protocol‑driven elements.</p>

    <p>To integrate a component:</p>
    <pre><code>&lt;?php include 'components/your-component.php'; ?&gt;</code></pre>
</main>

<footer>
    &copy; <?= date("Y") ?> PHP Foundation Blockchain Technology Stack
</footer>

</body>
</html>
