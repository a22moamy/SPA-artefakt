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

    <!-- PHP CODE -->
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
                    echo "<img src='images/".$type."/$image'>";
                }
            }
        }
    ?>
    <!-- PHP END -->
     
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
    <div id="jpg" class="page">
        <h2>JPG Image gallery</h2>
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
        <h2>PNG Image gallery</h2>
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
        <h2>WEBP Image gallery</h2>
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