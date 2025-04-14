<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page Application</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/page.css">
</head>
<body>
    <?php
        /*  Function that iterates through all files in a directory. 
        For every file it creates an <img> element for that specific image.
        A folder within /images/ is selected by passing a string parameter of the folder name.
        */
        function createImages($type){
            // Scans the "images" directory
            $images = scandir('./images/'.$type);
            // Loops through images to create elements
            foreach($images as $image) {
                // Creates <img> elements with the corresponding paths. 
                // If statement avoids directories getting their own <img>-elements.
                if($image   != ".." && $image != "."){
                    echo "<img src='images/{$type}/{$image}?id=".uniqid()."'>";
                }
            }
        }
    ?>
    <nav>
        <button>
            <!-- Calls showPage() when clicked to switch sub-page -->
            <a href="?type=JPG" onclick="showPage();">JPG</a>
        </button>
        <button>
            <a href="?type=PNG" onclick="showPage();">PNG</a>
        </button>
        <button>
            <a href="?type=WEBP" onclick="showPage();">WEBP</a>
        </button>
    </nav>
    <!-- Displays a heading describing the currently active sub-page. -->
    <?php 
        if(isset($_GET['type'])){
            echo "<h1 class='{$_GET['type']}'>{$_GET['type']} Image gallery</h1>";
        }
    ?>
    <div id="jpg" class="page">
        <div class="imageGroup">
            <?php 
                // Only implement images if the URL is correct (includes the image format as part of the URL)
                // Since the correct URL indicates we are on the correct sub-page
                if (isset($_GET['type']) && $_GET['type'] === 'JPG') {
                    // Implements images from the "JPEG" folder
                    createImages("JPEG");
                }
            ?>
        </div>
    </div>
    <div id="png" class="page">
        <div class="imageGroup">
            <?php 
                // Only implement images if the URL is correct (includes the image format as part of the URL)
                if (isset($_GET['type']) && $_GET['type'] === 'PNG') {
                    // Implements images from the "PNG" folder
                    createImages("PNG");
                }
            ?>
        </div>
    </div>
    <div id="webp" class="page">
        <div class="imageGroup">
            <?php 
                // Only implement images if the URL is correct (includes the image format as part of the URL)
                if (isset($_GET['type']) && $_GET['type'] === 'WEBP') {
                    // Implements images from the "JPEG" folder
                    createImages("WEBP");
                }
            ?>
        </div>
    </div>
</body>
    <script src="scripts/SPA.js"></script>
</html>