<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page Application</title>
    <link rel="stylesheet" href="css/page.css">
</head>
<body>
    <nav>
        <button>
            <!-- Calls showPage() when clicked to switch sub-page -->
            <a onclick="showPage(pages[0]);">JPG</a>
        </button>
        <button>
            <a onclick="showPage(pages[1]);">PNG</a>
        </button>
        <button>
            <a onclick="showPage(pages[2]);">WEBP</a>
        </button>
    </nav>
    <div id="jpg" class="page">
        <h2>JPG Image gallery</h2>
        <div class="imageGroup"></div>
    </div>
    <div id="png" class="page">
        <h2>PNG Image gallery</h2>
        <div class="imageGroup"></div>
    </div>
    <div id="webp" class="page">
        <h2>WEBP Image gallery</h2>
        <div class="imageGroup"></div>
    </div>
</body>
    <script src="scripts/SPA.js"></script>
</html>