const loginForm = document.getElementById('loginForm');
const loginRegister = document.getElementById('loginRegister');
const closeForm = document.getElementById('closeForm');
const homeWrapper = document.getElementsByClassName('home-wrapper');

// Add click event listener to loginRegister
loginRegister.addEventListener('click', function () {
    // Toggle the display style of loginForm
    if (loginForm.style.display === 'none' || loginForm.style.display === '') {
        loginForm.style.display = 'block';
        loginRegister.style.color = '#189AB4';
        for (let i = 0; i < homeWrapper.length; i++) {
            homeWrapper[i].style.opacity = '0.3';
        }
    } else {
        loginForm.style.display = 'none';
        for (let i = 0; i < homeWrapper.length; i++) {
            homeWrapper[i].style.opacity = '1';
        }
    }
});

// Add click event listener to closeForm
closeForm.addEventListener('click', function () {
    // Toggle the display style of loginForm
    if (loginForm.style.display === 'block') {
        loginForm.style.display = 'none';
        loginRegister.style.color = '#fff';
        for (let i = 0; i < homeWrapper.length; i++) {
            homeWrapper[i].style.opacity = '1';
        }
    } else {
        loginForm.style.display = 'block';
    }
});
