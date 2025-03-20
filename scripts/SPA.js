// Identify the three pages
const jpg = document.getElementById("jpg");
const png = document.getElementById("png");
const webp = document.getElementById("webp");
// Put them in an array for easy access and handling
const pages = [jpg, png, webp];
// Switches pages by looping through all pages.
// Switching sites happens through calling the function, ex. via an onclick. Parameter must contain a sub-page.
function showPage() {
    pages.forEach(unselectedPage => {
        if (unselectedPage) unselectedPage.style.display = "none";
    });

    let params = new URLSearchParams(window.location.search);
    if (params.has("type")) { 
        switch (params.get("type")) {  
            case "JPG":
                if (jpg) jpg.style.display = "block";
                break;
            case "PNG":
                if (png) png.style.display = "block";
                break;
            case "WEBP":
                if (webp) webp.style.display = "block";
                break;
            default:
                if (jpg) jpg.style.display = "block"; 
                break;
        }
    }
}

document.addEventListener("DOMContentLoaded", showPage);