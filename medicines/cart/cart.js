document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productElement = this.closest('.product');
            const imgSrc = productElement.querySelector('img').src;
            const productName = productElement.querySelector('h2').textContent;

            const productData = {
                image: imgSrc,
                name: productName
            };

            fetch('cart/cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(productData)
            })
            .then(response => response.text()) // Change to .text() to debug the actual response
            .then(data => {
                try {
                    const jsonData = JSON.parse(data);
                    if (jsonData.success) {
                        alert('Product added to cart successfully!');
                    } else {
                        alert('Failed to add product to cart: ' + jsonData.message);
                    }
                } catch (e) {
                    console.error('Invalid JSON response', data);
                    alert('An error occurred. Please try again later.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});



// to remove from cart
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".remove-from-cart").forEach((button) => {
      button.addEventListener("click", function () {
        const productId = this.getAttribute("data-product-id");
  
        fetch("remove_from_cart.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({ product_id: productId }),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              this.closest(".product").remove();
            } else {
              alert("Failed to remove product from cart.");
            }
          })
          .catch((error) => console.error("Error:", error));
      });
    });
  });
  