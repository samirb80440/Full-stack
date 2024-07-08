// Get HTML elements by their IDs
var precedent = document.getElementById("precedent");
var suivant = document.getElementById("suivant");

// Initially, hide the second page
document.getElementById("page2").style.display = "none";

// Initialize the current page to 1
var page = 1;

// Add an event listener to the "suivant" button
suivant.addEventListener("click", function suivant() {
  // Increment the page number
  page++;
  
  // If the page number exceeds 2, reset it to 1
  if (page > 2) {
    page = 1;
  }
  
  // Call the pages function to update the page display
  pages(page);
});

// Add an event listener to the "precedent" button
precedent.addEventListener("click", function precedent() {
  // Decrement the page number
  page--;
  
  // If the page number is less than 1, reset it to 2
  if (page < 1) {
    page = 2;
  }
  
  // Call the pages function to update the page display
  pages(page);
});

// Function to update the page display based on the current page number
function pages(page) {
  // If the current page is 1, show page 1 and hide page 2
  if (page == 1) {
    document.getElementById("page1").style.display = "block";
    document.getElementById("page2").style.display = "none";
  }
  // If the current page is 2, show page 2 and hide page 1
  else if (page == 2) {
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "block";
  }
}