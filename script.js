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


document.addEventListener("DOMContentLoaded", function() {
    // Hide preloader and show content after a delay
    var preloader = document.querySelector(".preloader-container");
    var content = document.getElementById("content");
  
    // Hide preloader after 3 seconds (adjust delay as needed)
    setTimeout(function() {
      preloader.style.display = "none";
      content.style.display = "block";
    }, 3000); // 3000 milliseconds = 3 seconds
  });