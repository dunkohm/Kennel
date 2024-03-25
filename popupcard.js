let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.sld').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.sld').prepend(items[items.length - 1])
})

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
