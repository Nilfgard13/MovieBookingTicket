<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Home' ?></title>
    <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" /> -->
    <link rel="stylesheet" href="../../app/assets/css/styles.min.css" />

    <!-- Website Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../app/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../app/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../app/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <main>
        <?php flash() ?>