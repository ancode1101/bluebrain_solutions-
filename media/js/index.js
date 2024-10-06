document.addEventListener("DOMContentLoaded", function () {
  let currentSlide = 1;
  const totalSlides = 6;
  const intervalTime = 3000; // Change slide every 3 seconds

  function changeSlide() {
    document.getElementById(`slide-${currentSlide}`).checked = true;
    currentSlide = (currentSlide % totalSlides) + 1;
  }

  setInterval(changeSlide, intervalTime);
});

// auto slider
// end

const mobileNav = document.querySelector(".mobile-navbar-btn");
const navHeader = document.querySelector(".nav-two");

const toggleNavbar = () => {
  navHeader.classList.toggle("active");
};

mobileNav.addEventListener("click", toggleNavbar);

function toggleMenu() {
  const navbarBtn = document.querySelector(".mobile-navbar-btn");
  navbarBtn.classList.toggle("open");
}

document.querySelector(".search-button").addEventListener("click", function () {
  var input = document.querySelector(".search-input");
  input.classList.toggle("active");
});

document.querySelector(".clear-button").addEventListener("click", function () {
  var input = document.querySelector(".search-input");
  input.value = ""; // Clear the input field
});

document.addEventListener("DOMContentLoaded", function () {
  var dropdowns = document.querySelectorAll(".dropdown");
  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener("mouseleave", function () {
      this.querySelector(".dropdown-content").style.display = "none";
    });
  });
});

// JavaScript code to toggle the dropdown menu
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener("click", function () {
      this.querySelector(".dropdown-content").classList.toggle("show");
    });
  });

  window.addEventListener("click", function (event) {
    if (!event.target.matches(".dropdown")) {
      dropdowns.forEach(function (dropdown) {
        dropdown.querySelector(".dropdown-content").classList.remove("show");
      });
    }
  });
});

// Get the "View all" button element
const viewAllButton = document.querySelector(".button5");

// Add a click event listener to the button
viewAllButton.addEventListener("click", function (event) {
  // Prevent the default behavior of the button (prevents page reload)
  event.preventDefault();

  // Redirect the user to the page that displays all recruiters
  window.location.href = "path/to/all-recruiters-page.html";
});
// search
function darkMode() {
  document.body.classList.remove("light-mode");
  document.body.classList.add("dark-mode");
}

function lightMode() {
  document.body.classList.remove("dark-mode");
  document.body.classList.add("light-mode");
}
// new
document.addEventListener("DOMContentLoaded", () => {
  const readMoreLinks = document.querySelectorAll(".read-more");
  const modal = document.getElementById("modal");
  const modalTitle = document.getElementById("modal-title");
  const modalDescription = document.getElementById("modal-description");
  const closeModal = document.querySelector(".close");

  const content = {
    1: {
      title: "5G RAN and Backhaul",
      description: "Detailed information about 5G RAN and Backhaul...",
    },
    2: {
      title: "Broadband Access Networks",
      description: "Detailed information about Broadband Access Networks...",
    },
    3: {
      title: "Premium Enterprise Connectivity",
      description:
        "Detailed information about Premium Enterprise Connectivity...",
    },
    4: {
      title: "Wholesale & DCI",
      description: "Detailed information about Wholesale & DCI...",
    },
    5: {
      title: "Next-Gen Critical Networks",
      description: "Detailed information about Next-Gen Critical Networks...",
    },
    6: {
      title: "Government And Defence Networks",
      description:
        "Detailed information about Government And Defence Networks...",
    },
  };

  readMoreLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      const id = link.getAttribute("data-id");
      modalTitle.innerText = content[id].title;
      modalDescription.innerText = content[id].description;
      modal.style.display = "block";
    });
  });

  closeModal.addEventListener("click", () => {
    modal.style.display = "none";
  });

  window.addEventListener("click", (event) => {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
});
