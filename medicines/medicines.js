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




// Order form starts
document.addEventListener('DOMContentLoaded', function() {
  // Get all 'Buy Now' buttons
  const buyNowButtons = document.querySelectorAll('.buy-now');

  // Get the order-form and its product name display
  const orderForm = document.querySelector('.order-form');
  const orderFormProductName = orderForm.querySelector('.order-form-product-name');

  // Function to show the order form with product name
  function showOrderForm(productName) {
      orderFormProductName.innerHTML = 
          '<span style="color: #189AB4;">' + productName + '</span>';
      orderForm.style.display = 'flex'; // Show the form
  }

  // Attach click event to each 'Buy Now' button
  buyNowButtons.forEach(button => {
      button.addEventListener('click', function() {
          // Find the closest product container to get the product name
          const productContainer = button.closest('.product');
          
          if (productContainer) {
              const productNameElement = productContainer.querySelector('h2'); // Select the h2 element
              if (productNameElement) {
                  const productName = productNameElement.textContent;
                  // Show the order form with the product name
                  showOrderForm(productName);
              } else {
                  console.error('Product name element (h2) not found.');
              }
          } else {
              console.error('Product container element not found.');
          }
      });
  });



  function closeOrderForm() {
    const orderForm = document.querySelector('.order-form');
    if (orderForm) {
        orderForm.style.display = 'none';
    } else {
        console.error('Order form not found.');
    }
}

// Attach the event listener to the button
const closeOrderButton = document.getElementById('closeOrderForm');
if (closeOrderButton) {
    closeOrderButton.addEventListener('click', closeOrderForm);
} else {
    console.error('Close Order Form button not found.');
}
});
  

let pricePerUnit = 100;  // You can adjust the price per unit here

function calculateTotal() {
  const quantity = document.getElementById('quantity').value;
  const total = pricePerUnit * quantity;
  document.getElementById('totalPrice').textContent = `$${total.toFixed(2)}`;
}

function showSecondForm() {
  // Prevent form submission
  event.preventDefault();

  document.getElementById('form1').classList.add('hidden');
  document.getElementById('form2').classList.remove('hidden');
}

// function submitOrder() {
//   const productName = document.getElementById('productName').value;
//   const quantity = document.getElementById('quantity').value;
//   const city = document.getElementById('city').value;
//   const street = document.getElementById('street').value;
//   const phone = document.getElementById('phone').value;
//   const coupon = document.getElementById('coupon').value;
//   const paymentMode = document.getElementById('paymentMode').value;
//   const deliveryTime = document.getElementById('deliveryTime').value;

//   alert(`Order Submitted!
//       Product: ${productName}
//       Quantity: ${quantity}
//       Address: ${street}, ${city}
//       Phone: ${phone}
//       Coupon: ${coupon}
//       Payment Mode: ${paymentMode}
//       Delivery Time: ${deliveryTime}`);
// }



// Order form ends

