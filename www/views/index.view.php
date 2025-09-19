<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($stylesheets as $sheet): ?>
        <link rel="stylesheet" href="/styles/<?= $sheet ?>.css">
    <?php endforeach; ?>
    <title><?= $title ?></title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="/comingsoon">Coming Soon</a></li>
        </ul>
    </nav>
    <h1>I'm the home page.</h1>
</body>

</html>