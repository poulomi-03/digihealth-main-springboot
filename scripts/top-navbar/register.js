const registerForm = document.getElementById('registerForm');
const registerLink = document.getElementById('registerLink');
const closeForm = document.getElementById('closeForm');
const homeWrapper = document.getElementsByClassName('home-wrapper');

// Add click event listener to loginRegister
registerLink.addEventListener('click', function () {
    // Toggle the display style of loginForm
    if (registerForm.style.display === 'none' || registerForm.style.display === '') {
        registerForm.style.display = 'block';
        registerLink.style.color = '#189AB4';
        for (let i = 0; i < homeWrapper.length; i++) {
            homeWrapper[i].style.opacity = '0.3';
        }
    } else {
        registerForm.style.display = 'none';
        for (let i = 0; i < homeWrapper.length; i++) {
            homeWrapper[i].style.opacity = '1';
        }
    }
});

// Add click event listener to closeForm
closeForm.addEventListener('click', function () {
    // Toggle the display style of loginForm
    if (registerForm.style.display === 'block') {
        registerForm.style.display = 'none';
        registerLink.style.color = '#fff';
        for (let i = 0; i < homeWrapper.length; i++) {
            homeWrapper[i].style.opacity = '1';
        }
    } else {
        registerForm.style.display = 'block';
    }
});




