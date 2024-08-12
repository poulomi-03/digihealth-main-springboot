document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', function() {
          const productElement = this.closest('.product');
          const imgSrc = productElement.querySelector('img').src;
          const productName = productElement.querySelector('h2').textContent;
          const productPrice = productElement.querySelector('.price-tag span').textContent;

          console.log('Product Image:', imgSrc);
          console.log('Product Name:', productName);
          console.log('Product Price:', productPrice);

          const productData = {
              image: imgSrc,
              name: productName,
              price: productPrice // Ensure this is included
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
              console.log('Response Data:', data); // Log the raw response data
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
