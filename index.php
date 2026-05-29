<?php
$site_title = "Dalang Pelo - Official Company Profile";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>

    <meta property="og:title" content="<?php echo $site_title; ?>">
    <meta property="og:description" content="Membawa tawa dan kebahagiaan lewat petualangan animasi yang absurd dan relatable bagi seluruh masyarakat Indonesia.">
    <meta property="og:image" content="https://domainlu.com/assets/img/hero/heros-1.png">
    <meta property="og:url" content="https://domainlu.com/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'components/header.php'; ?>
<?php include 'components/hero.php'; ?>

<div class="blue-sections-wrapper">
    <?php include 'components/about.php'; ?>
    <?php include 'components/characters.php'; ?>
    <?php include 'components/services.php'; ?>
    <?php include 'components/brands.php'; ?>
    <?php include 'components/credentials.php'; ?>
</div>

<?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>