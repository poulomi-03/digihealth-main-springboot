const loginForm = document.getElementById('loginForm');
const loginRegister = document.getElementById('loginRegister');
const closeForm = document.getElementById('closeForm')


// Add click event listener to loginRegister
loginRegister.addEventListener('click', function () {
    // Toggle the display style of loginForm
    if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        loginRegister.style.color = '#189AB4'
    } else {
        loginForm.style.display = 'none';
    }
});

// Add click event listener to loginRegister
closeForm.addEventListener('click', function () {
    // Toggle the display style of loginForm
    if (loginForm.style.display === 'block') {
        loginForm.style.display = 'none';
        loginRegister.style.color = '#fff'
    } else {
        loginForm.style.display = 'block';
    }
});



