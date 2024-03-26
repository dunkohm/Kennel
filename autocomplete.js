// Array of available breeds for suggestions
const breeds = [
    "Labrador Retriever",
    "German Shepherd",
    "Rottweiler",
    "Bulldog",
    "Golden Retriever",
    "Boxer",
    "Dachshund",
    "Great Dane",
    "Poodle",
    "Siberian Husky"
];

// Function to handle filtering suggestions based on user input
function filterSuggestions(input) {
    // Filter the breeds array based on the input
    const filteredBreeds = breeds.filter(breed =>
        breed.toLowerCase().includes(input.toLowerCase())
    );
    return filteredBreeds;
}

// Function to update suggestions based on user input
function updateSuggestions() {
    // Get the value entered in the search input field
    var searchTerm = document.getElementById("searchInput").value.trim();

    // Get the suggestions container
    var suggestionsContainer = document.getElementById("suggestion");

    // Clear previous suggestions
    suggestionsContainer.innerHTML = "";

    // If search term is not empty
    if (searchTerm !== "") {
        // Filter suggestions based on search term
        const filteredSuggestions = filterSuggestions(searchTerm);

        // Display filtered suggestions
        filteredSuggestions.forEach(suggestion => {
            var suggestionElement = document.createElement("div");
            suggestionElement.textContent = suggestion;
            suggestionElement.classList.add("suggestion");
            suggestionElement.addEventListener("click", function() {
                document.getElementById("searchInput").value = suggestion;
                suggestionsContainer.innerHTML = ""; // Clear suggestions after selection
            });
            suggestionsContainer.appendChild(suggestionElement);
        });
    }
}

// Event listener for input in the search input field
document.getElementById("searchInput").addEventListener("input", updateSuggestions);