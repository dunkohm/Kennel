document.addEventListener("DOMContentLoaded", function() {
    var videos = ["Images/vid1.mp4.mp4", "Images/vid2.mp4.mp4", "Images/vid3.mp4.mp4"]; // Array of video sources
    var videoPlayer = document.getElementById("videoPlayer");
    var currentVideoIndex = 1;

   // Function to handle looping through videos
   function nextVideo() {
    currentVideoIndex = (currentVideoIndex + 1) % videos.length;
    videoPlayer.src = videos[currentVideoIndex];
    videoPlayer.play();
}
    // Change video with smooth transition when the current video ends
    videoPlayer.addEventListener("ended", function() {
        videoPlayer.style.opacity = 0; // Fade out current video
        setTimeout(function() {
            nextVideo(); // Switch to the next video
            videoPlayer.style.opacity = 1; // Fade in new video
        }, 500); // Adjust this delay to match the transition duration in CSS
});

// Start the slideshow
videoPlayer.src = videos[currentVideoIndex];
videoPlayer.play();
});

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

function toggleSearch() {
    var searchBar = document.querySelector('.search-bar');
    searchBar.style.display = (searchBar.style.display === 'none' || searchBar.style.display === '') ? 'block' : 'none';
}

function search() {
    // Add your search functionality here
    var searchInput = document.getElementById('searchInput').value;
    console.log("Searching for: " + searchInput);
}
function showSuggestions(input) {
    var suggestionsContainer = document.getElementById('suggestions');
    // Clear previous suggestions
    suggestionsContainer.innerHTML = '';

    // You can implement your suggestion logic here based on the input
    // For demonstration purposes, let's show some dummy suggestions
    var suggestions = ['Golden Retriever', 'Labrador Retriever', 'German Shepherd', 'Beagle'];
    
    // Filter suggestions based on input
    var filteredSuggestions = suggestions.filter(function(suggestion) {
        return suggestion.toLowerCase().includes(input.toLowerCase());
    });

    // Display filtered suggestions
    filteredSuggestions.forEach(function(suggestion) {
        var suggestionElement = document.createElement('div');
        suggestionElement.classList.add('suggestion');
        suggestionElement.textContent = suggestion;
        suggestionsContainer.appendChild(suggestionElement);
    });

    // Show or hide suggestions container based on whether there are suggestions
    suggestionsContainer.style.display = filteredSuggestions.length > 0 ? 'block' : 'none';
}

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

  document.addEventListener('DOMContentLoaded', function() {
    const postContainer = document.querySelector('.pst');
    const arrow = document.createElement('i');
    arrow.classList.add('fas', 'fa-chevron-right', 'arrow');
    postContainer.appendChild(arrow);
  
    const postBoxes = document.querySelectorAll('.pst-box');
    let currentIndex = 0;
  
    function togglePostBoxes() {
      for (let i = 0; i < postBoxes.length; i++) {
        if (i >= currentIndex && i < currentIndex + 3) {
          postBoxes[i].style.display = 'block';
        } else {
          postBoxes[i].style.display = 'none';
        }
      }
    }
  
    togglePostBoxes();
  
    arrow.addEventListener('click', function() {
      currentIndex += 3;
      if (currentIndex >= postBoxes.length) {
        currentIndex = 0; // Reset index to show first set of post boxes
      }
      togglePostBoxes();
    });
  });

  document.getElementById('check').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
});


function showSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'flex'
}
function hideSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'none'
}