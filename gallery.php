<!DOCTYPE html>
<html>

<head>
    <title>Gallery</title>

    <!-- preconnecting to google fonts to increase loading speed-->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- all third-party script imports -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script> <!-- jquery -->

    <!-- all custom imports -->
    <?php include getcwd() . '/partials/head.php' ?>

    <link rel="stylesheet" href="src/css/gallery.min.css">
</head>

<body>

    <!-- Background cubes for design -->
    <img src="./src/assets/images/cubes.svg" class="cubes top-right">
    <img src="./src/assets/images/cubes.svg" class="cubes bottom-left">

    <!-- Header with logo and back-button -->
    <div class="header">
        <a class="back-button" href="./index.php">
            <img src="./src/assets/images/back-head-white.svg">
        </a>

        <img src="./src/assets/images/logo1.png" class="logo">
    </div>

    <!-- Viewer to display photos of the album -->
    <div class="viewer currAlbum">
        <img src="./src/assets/images/gallery-images/dc.jpg" class="album-image">
        <img src="./src/assets/images/gallery-images/gconvo.jpg" class="album-image">
        <img src="./src/assets/images/gallery-images/bconvo.jpg" class="album-image">
        <img src="./src/assets/images/gallery-images/sconvo.jpg" class="album-image">
    </div>

    <div class="viewer hiddenAlbum">
        <img src="./src/assets/images/gallery-images/cs.jpg" class="album-image">
        <img src="./src/assets/images/gallery-images/ee.jpg" class="album-image">
        <img src="./src/assets/images/gallery-images/mech.jpg" class="album-image">
        <img src="./src/assets/images/gallery-images/btech14-18ch.jpg" class="album-image">
        <img src="./src/assets/images/gallery-images/btech14-18ce.jpg" class="album-image">
    </div>

    <!--overlay divs for images -->
    <div class="overlay right"></div>
    <div class="overlay left"></div>

    <!-- Pull up arrow -->
    <img src="./src/assets/images/back-head-white.svg" class="arrow-icon hide">

    <!-- Album Cover Scroller -->
    <div class="scroller hide">

        <!-- Active album will be displayed in the viewer -->
        <div class="album active">
            <!-- Album cover is what is viewed in the scroller -->
            <img src="./src/assets/images/gallery-images/dc.jpg" class="image-card album-cover">
            <img src="./src/assets/images/gallery-images/gconvo.jpg" class="image-card">
            <img src="./src/assets/images/gallery-images/bconvo.jpg" class="image-card">
            <img src="./src/assets/images/gallery-images/sconvo.jpg" class="image-card">
            <!-- Name of the album -->
            <h3 class="album-title">Graduation Ceremony</h3>
        </div>

        <div class="album">
            <img src="./src/assets/images/gallery-images/cs.jpg" class="image-card album-cover">
            <img src="./src/assets/images/gallery-images/ee.jpg" class="image-card">
            <img src="./src/assets/images/gallery-images/mech.jpg" class="image-card">
            <img src="./src/assets/images/gallery-images/btech14-18ch.jpg" class="image-card">
            <img src="./src/assets/images/gallery-images/btech14-18ce.jpg" class="image-card">
            <h3 class="album-title">Batch Photos '18</h3>
        </div>
    </div>

    <script src="src/js/gallery.js"></script>

</body>

</html>