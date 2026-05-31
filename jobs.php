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
    <h1>Welcome To Jobs</h1>
    <p>
        This is the jobs section.
        apply for a new job.
        learn what it takes.
        remote worker.
    </p>
    <h2>
        Available: Jobs(remote)
    </h2>
    <p>
        This is where the jobs are located ?
    </p>
    <h2>Jobs/Listed</h2>
    <ul>
        <li>
            Remote Worker A <a href="#">worker remote 1</a>
        </li>
        <li>
            Remote Worker B <a href="#">worker remote 2</a>
        </li>
        <li>
            Remote Worker C <a href="#">worker remote 3</a>
        </li>
    </ul>
</main>

<footer>
    &copy; <?= date("Y") ?> Development Jobs Team -- All Rights Reserved
</footer>

</body>
</html>
