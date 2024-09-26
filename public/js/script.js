
// underline under active navbar link
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".navbar-anchor-links");
    const currentPage = window.location.pathname;
  
    links.forEach((link) => {
      if (link.getAttribute("href") === currentPage) {
        link.classList.add("active");
      }
    });
  });

// mobile responsive navbar
const openMobileNavButton = document.getElementById("open-mobile-nav");
if (openMobileNavButton) {
  openMobileNavButton.addEventListener("click", function () {
    document.getElementById("mobile-sidebar").classList.add("show");
  });
}

const closeMobileNavButton = document.getElementById("close-mobile-nav");
if (closeMobileNavButton) {
  closeMobileNavButton.addEventListener("click", function () {
    document.getElementById("mobile-sidebar").classList.remove("show");
  });
}

const closeMobileNavBlankRight = document.getElementById(
  "mobile-sidebar-right"
);
if (closeMobileNavBlankRight) {
  closeMobileNavBlankRight.addEventListener("click", function () {
    document.getElementById("mobile-sidebar").classList.remove("show");
  });
}

function handleClick(clickedButton) {
  // Remove 'bg-blue' and 'text-white' classes from all buttons
  const buttons = document.querySelectorAll("#areas-category button");
  buttons.forEach((button) => {
    button.classList.remove("bg-blue", "text-white");
    button.classList.add("text-blue"); // Re-add the default text color
  });

  // Add 'bg-blue' and 'text-white' classes to the clicked button
  clickedButton.classList.add("bg-blue", "text-white");
  clickedButton.classList.remove("text-blue"); // Remove the default text color
}
