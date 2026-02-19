<?php
// This creates a path starting from your website's root
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
?>

<img src="<?php echo $root; ?>Assets/Admins/Pramod-Thakkar.jpg" alt="Pramod">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
  <div class="main">
    <?php include __DIR__ . '/../Includes/Layout/Header.php'; ?>
    <?php include __DIR__ . '/../Includes/hero.php'; ?>
    <?php include __DIR__ . '/../Includes/impact.php'; ?>
    <?php include __DIR__ . '/../Includes/professional.php'; ?>
    <?php include __DIR__ . '/../Includes/advocacy.php'; ?>
    <?php include __DIR__ . '/../Includes/milestone.php'; ?>
    <?php include __DIR__ . '/../Includes/entrepreneur.php'; ?>
    <?php include __DIR__ . '/../Includes/vision.php'; ?>
    <?php include __DIR__ . '/../Includes/Layout/Footer.php'; ?>
</div>
    <script>
        AOS.init({
            once: true,
            duration: 900,
            easing: 'ease-out-cubic'
        });
    </script>
</body>

</html>