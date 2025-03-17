// Identify the three pages
const jpg = document.getElementById("jpg");
const png = document.getElementById("png");
const webp = document.getElementById("webp");
// Put them in an array for easy access and handling
const pages = [jpg, png, webp];
// Switches pages by looping through all pages.
// Switching sites happens through calling the function, ex. via an onclick. Parameter must contain a sub-page.
function showPage(currentPage) {
    // Hides all pages
    pages.forEach(unselectedPage => unselectedPage.style.display = "none"); 
    // Shows the selected page (passed parameter)
    currentPage.style.display = "block";
}