// Query all next and previous buttons
let nextButtons = document.querySelectorAll('.next');
let prevButtons = document.querySelectorAll('.prev');

// Loop through all next buttons
nextButtons.forEach(nextButton => {
    nextButton.addEventListener('click', function(){
        let items = this.closest('.popup-container').querySelectorAll('.item');
        this.closest('.popup-container').querySelector('.sld').appendChild(items[0]);
    });
});

// Loop through all previous buttons
prevButtons.forEach(prevButton => {
    prevButton.addEventListener('click', function(){
        let items = this.closest('.popup-container').querySelectorAll('.item');
        this.closest('.popup-container').querySelector('.sld').prepend(items[items.length - 1]);
    });
});

// Get all elements with class "popupBtn"
const popupButtons = document.querySelectorAll('.popupBtn');

// Loop through each button and attach click event listener
popupButtons.forEach(button => {
    button.addEventListener('click', function() {
        // Find the corresponding popup container
        const popupContainer = this.nextElementSibling;

        // Toggle display of the popup container
        popupContainer.style.display = popupContainer.style.display === 'block' ? 'none' : 'block';
    });
});

// Get all elements with class "close-btn"
const closeButtons = document.querySelectorAll('.close-btn');

// Loop through each close button and attach click event listener
closeButtons.forEach(closeButton => {
    closeButton.addEventListener('click', function() {
        // Hide the parent popup container when close button is clicked
        const popupContainer = this.closest('.popup-container');
        popupContainer.style.display = 'none';
    });
});
