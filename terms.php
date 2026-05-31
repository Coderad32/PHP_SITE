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
    <title>Project Terms (TOS)</title>

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
    <h1>Welcome to the Terms</h1>
<p>
    We resepect our rights to privacy. here-in. Terms[TOS]
</p>   
    </main>

<footer>
    &copy; <?= date("Y") ?> Terms.php | TOS | Open Source Crafted.
</footer>

</body>
</html>
