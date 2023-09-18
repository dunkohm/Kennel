window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    const scrollToTopButton = document.getElementById("scrollToTopButton");
    
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
}

document.getElementById("scrollToTopButton").addEventListener("click", function() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
});
