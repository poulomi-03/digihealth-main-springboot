// const aServices = document.getElementById('aServices');
// const servicesContainer = document.getElementById('servicesContainer');

// aServices.addEventListener('mouseover', function () {
//     // Toggle the display style of loginForm
//     if (servicesContainer.style.display === 'none') {
//         servicesContainer.style.display = 'block';
//         // aServices.style.color = '#189AB4'
//     } else {
//         servicesContainer.style.display = 'none';
//     }
// });

// Get the link and the hidden div
const link = document.getElementById('aServices');
const hiddenDiv = document.getElementById('servicesContainer');

// Add event listener for when the link is hovered
link.addEventListener('mouseenter', function() {
  // Display the hidden div
  hiddenDiv.style.display = 'block';
});

// Add event listener for when the link is hovered out
link.addEventListener('mouseleave', function(e) {
  // Check if the mouse is leaving the link to enter the hidden div
  if (!e.relatedTarget || !hiddenDiv.contains(e.relatedTarget)) {
    // Hide the hidden div
    hiddenDiv.style.display = 'none';
  }
});

// Add event listener for when the mouse enters the hidden div
hiddenDiv.addEventListener('mouseenter', function() {
  // Prevent hiding the div
  hiddenDiv.style.display = 'block';
});

// Add event listener for when the mouse leaves the hidden div
hiddenDiv.addEventListener('mouseleave', function(e) {
  // Check if the mouse is leaving the hidden div to enter the link
  if (!e.relatedTarget || !link.contains(e.relatedTarget)) {
    // Hide the hidden div
    hiddenDiv.style.display = 'none';
  }
});