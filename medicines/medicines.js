// Left-Navigation Bar starts

const analgesicsLog = document.getElementById("analgesicsLog");
const antibioticsLog = document.getElementById("antibioticsLog");
const antidepressantsLog = document.getElementById("antidepressantsLog");
const antihistaminesLog = document.getElementById("antihistaminesLog");
const diabetesMedicationsLog = document.getElementById(
  "diabetesMedicationsLog"
);
const bronchodilatorsLog = document.getElementById("bronchodilatorsLog");
const vitaminsAndSupplementsLog = document.getElementById(
  "vitaminsAndSupplementsLog"
);
const eyeCareLog = document.getElementById("eyeCareLog");

document.addEventListener("DOMContentLoaded", function () {
  const navItems = document.querySelectorAll(".nav-items");
  const productOuters = document.querySelectorAll(".product-outer");
  const allMedicines = document.getElementById("allMedicines");

  function clearActiveStates() {
    navItems.forEach((item) => {
      item.style.backgroundColor = "";
    });
  }

  function handleNavClick(navItem) {
    clearActiveStates();
    navItem.style.backgroundColor = "#75E6DA";

    const id = navItem.id;

    productOuters.forEach((productOuter, index) => {
      if (id === "allMedicines") {
        productOuter.style.display = "grid";
      } else {
        productOuter.style.display = "none";
      }
    });

    if (id === "allMedicines") {
      productOuters.forEach((productOuter) => {
        productOuter.style.display = "grid";
      });
    } else if (id === "analgesics") {
      analgesicsLog.style.display = "grid";
      // analgesicsLog.style.border = '4px solid blue';
    } else if (id === "antibiotics") {
      antibioticsLog.style.display = "grid";
      // antibioticsLog.style.border = '4px solid yellow';
    } else if (id === "antidepressants") {
      antidepressantsLog.style.display = "grid";
      // antidepressantsLog.style.border = '4px solid pink';
    } else if (id === "antihistamines") {
      antihistaminesLog.style.display = "grid";
      // antihistaminesLog.style.border = '4px solid voilet';
    } else if (id === "diabetesMedications") {
      diabetesMedicationsLog.style.display = "grid";
      // diabetesMedicationsLog.style.border = '4px solid green';
    } else if (id === "bronchodilators") {
      bronchodilatorsLog.style.display = "grid";
      // bronchodilatorsLog.style.border = '4px solid red';
    } else if (id === "vitaminsAndSupplements") {
      vitaminsAndSupplementsLog.style.display = "grid";
      // vitaminsAndSupplementsLog.style.border = '4px solid grey';
    } else if (id === "eyeCare") {
      eyeCareLog.style.display = "grid";
      // eyeCareLog.style.border = '4px solid crimson';
    }
  }

  navItems.forEach((navItem) => {
    navItem.addEventListener("click", function () {
      handleNavClick(this);
    });
  });

  // Trigger click on "allMedicines" by default
  handleNavClick(allMedicines);
});

// Left-Navigation Bar ends



// for user-cart starts

document.getElementById("cart-icon").addEventListener("click", function () {
  // Hide elements with class 'content-change'
  document.querySelectorAll(".content-change").forEach(function (element) {
    element.style.display = "none";
  });

  // Display elements with class 'user-cart' as flex
  document.querySelectorAll(".user-cart").forEach(function (element) {
    element.style.display = "flex";
  });
});


// back to medicines
document.getElementById("back-icon").addEventListener("click", function () {
  // Hide elements with class 'content-change'
  document.querySelectorAll(".content-change").forEach(function (element) {
    element.style.display = "grid";
  });

  // Display elements with class 'user-cart' as flex
  document.querySelectorAll(".user-cart").forEach(function (element) {
    element.style.display = "none";
  });
});


// for user-cart ends

