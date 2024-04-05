// Function to toggle the #pop content of the clicked .bx element
function toggle(index) {
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');

    // Get the clicked .bx element
    var bxElements = document.querySelectorAll('.bx');
    var clickedBx = bxElements[index];

    // Close all #pop elements first
    var allPopElements = document.querySelectorAll('.bx #pop');
    allPopElements.forEach(function(pop) {
        pop.classList.remove('active');
        // Set z-index of #pop to 1 by default
        pop.style.zIndex = '1';
    });

    // Get the corresponding #pop element within the clicked .bx
    var pop = clickedBx.querySelector('#pop');
    pop.classList.toggle('active');

    // Set z-index of the clicked #pop to a higher value to display it over other content
    pop.style.zIndex = '9999';
}

// Event listener to close #pop content when clicking outside of .bx elements
document.body.addEventListener('click', function(event) {
    // Check if the clicked element is a .bx or within a .bx or its #pop content
    var isBxClicked = event.target.closest('.bx');
    var isPopContentClicked = event.target.closest('#pop');

    // If not, close all #pop elements
    if (!isBxClicked && !isPopContentClicked) {
        var allPopElements = document.querySelectorAll('.bx #pop');
        allPopElements.forEach(function(pop) {
            pop.classList.remove('active');
        });
    }
});