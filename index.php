<?php
$site_title = "Dalang Pelo";
$site_desc  = "Dalang Pelo adalah IP animasi Indonesia yang membawa tawa dan kebahagiaan lewat petualangan Acil, si bocah berkepala jamur, bersama sahabat-sahabatnya.";
$site_url   = "https://dalangpelo.page.gd";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?> - IP Animasi & Konten Kreatif Indonesia</title>
    <meta name="description" content="<?php echo $site_desc; ?>">
    <meta name="keywords" content="Dalang Pelo, dalangpelo, animasi Indonesia, Acil, komik strip, maskot design, animation studio Indonesia">
    <link rel="canonical" href="<?php echo $site_url; ?>/">
    <link rel="icon" type="image/png" href="assets/img/logo/logo-dalangpelo.png">
    <meta name="google-site-verification" content="google5dd67402ae2dff85.html" />

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $site_title; ?>">
    <meta property="og:description" content="<?php echo $site_desc; ?>">
    <meta property="og:image" content="<?php echo $site_url; ?>/assets/img/hero/heros-1.png">
    <meta property="og:url" content="<?php echo $site_url; ?>/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="<?php echo $site_title; ?>">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Structured Data: Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Dalang Pelo",
      "alternateName": "Studio Dalang Pelo",
      "url": "<?php echo $site_url; ?>/",
      "logo": "<?php echo $site_url; ?>/assets/img/logo/logo-dalangpelo.png",
      "description": "<?php echo $site_desc; ?>",
      "sameAs": [
        "https://www.youtube.com/c/DalangPelo",
        "https://www.instagram.com/dalang.pelo/",
        "https://tiktok.com/@dalangpeloreal"
      ]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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