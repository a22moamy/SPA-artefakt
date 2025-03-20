// Identify the three pages
const jpg = document.getElementById("jpg");
const png = document.getElementById("png");
const webp = document.getElementById("webp");
// Put them in an array for easy access and handling
const pages = [jpg, png, webp];


// Switching sites happens through calling the function, ex. via an onclick. 
function showPage() {

    // Store the parameter in the URL, if there is one.
    let params = new URLSearchParams(window.location.search);
    if (params.has("type")) { 
        // Check what value the "type" parameter has and show a different sub-page based on its contents. 
        switch (params.get("type")) {  
            // In the case that the URL contains the value "JPG", the JPG sub-page will be displayed.
            // Pages do not need to be hidden since they already have "display: none;" applied in page.css. 
            case "JPG":
                if (jpg) jpg.style.display = "block";
                break;
            case "PNG":
                if (png) png.style.display = "block";
                break;
            case "WEBP":
                if (webp) webp.style.display = "block";
                break;
        }
    // If the URL does not contain a "type" parameter, it will default to displaying the JPG sub-page.
    }else{
        if (jpg) jpg.style.display = "block"; 
    }
}

// When the document has loaded, it will show the right page by executing the showPage() function. 
document.addEventListener("DOMContentLoaded", showPage);