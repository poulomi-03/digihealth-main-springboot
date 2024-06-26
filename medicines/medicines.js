// document.addEventListener("DOMContentLoaded", function() {
//     const navItems = document.querySelectorAll(".nav-items");

//     function clearActiveStates() {
//         navItems.forEach(item => {
//             item.style.backgroundColor = "";
//         });
//     }

//     navItems.forEach(item => {
//         item.addEventListener("click", function() {
//             clearActiveStates();
//             this.style.backgroundColor = "#75E6DA";
//         });
//     });
// });


// document.addEventListener('DOMContentLoaded', function() {
//     const navItems = document.querySelectorAll('.nav-items');
//     const productOuters = document.querySelectorAll('.product-outer');

//     navItems.forEach(navItem => {
//         navItem.addEventListener('click', function() {
//             const id = this.id;

//             productOuters.forEach((productOuter, index) => {
//                 if (id === 'allMedicines') {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'analgesics' && index === 0) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'antibiotics' && index === 1) {
//                     productOuter.style.display = 'flex';
//                 } else if (id === 'antidepressants' && index === 2) {
//                     productOuter.style.display = 'flex';
//                 } else if (id === 'antihistamines' && index === 3) {
//                     productOuter.style.display = 'flex';
//                 } else if (id === 'diabetesMedications' && index === 4) {
//                     productOuter.style.display = 'flex';
//                 } else if (id === 'bronchodilators' && index === 5) {
//                     productOuter.style.display = 'flex';
//                 } else if (id === 'vitaminsAndSupplements' && index === 6) {
//                     productOuter.style.display = 'flex';
//                 } else if (id === 'coughEyeCare' && index === 7) {
//                     productOuter.style.display = 'flex';
//                 } else {
//                     productOuter.style.display = 'grid';
//                 }
//             });
//         });
//     });
// });


// const analgesicsLog = document.getElementById("analgesicsLog");
// const antibiotics = document.getElementById("antibiotics");
// const antidepressants = document.getElementById("antidepressants");
// const antihistamines = document.getElementById("antihistamines");
// const diabetesMedications = document.getElementById("diabetesMedications");
// const bronchodilators = document.getElementById("bronchodilators");
// const vitaminsAndSupplements = document.getElementById("vitaminsAndSupplements");
// const eyeCare = document.getElementById("eyeCare");

// document.addEventListener("DOMContentLoaded", function() {
//     const navItems = document.querySelectorAll(".nav-items");
//     const productOuters = document.querySelectorAll(".product-outer");

//     function clearActiveStates() {
//         navItems.forEach(item => {
//             item.style.backgroundColor = "";
//         });
//     }

//     navItems.forEach(navItem => {
//         navItem.addEventListener("click", function() {
//             clearActiveStates();
//             this.style.backgroundColor = "#75E6DA";
            
//             const id = this.id;

//             productOuters.forEach((productOuter, index) => {
//                 if (id === 'allMedicines') {
//                     // productOuter.style.display = 'grid';
//                     analgesicsLog.style.display = 'grid';
//                     analgesicsLog.style.backgroundColor = 'red';
//                 } else if (id === 'analgesics' && index === 0) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'antibiotics' && index === 1) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'antidepressants' && index === 2) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'antihistamines' && index === 3) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'diabetesMedications' && index === 4) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'bronchodilators' && index === 5) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'vitaminsAndSupplements' && index === 6) {
//                     productOuter.style.display = 'grid';
//                 } else if (id === 'coughEyeCare' && index === 7) {
//                     productOuter.style.display = 'grid';
//                 } else {
//                     productOuter.style.display = 'grid';
//                 }
//             });
//         });
//     });
// });



const analgesicsLog = document.getElementById("analgesicsLog");
const antibioticsLog = document.getElementById("antibioticsLog");
const antidepressantsLog = document.getElementById("antidepressantsLog");
const antihistaminesLog = document.getElementById("antihistaminesLog");
const diabetesMedicationsLog = document.getElementById("diabetesMedicationsLog");
const bronchodilatorsLog = document.getElementById("bronchodilatorsLog");
const vitaminsAndSupplementsLog = document.getElementById("vitaminsAndSupplementsLog");
const eyeCareLog = document.getElementById("eyeCareLog");

document.addEventListener("DOMContentLoaded", function() {
    const navItems = document.querySelectorAll(".nav-items");
    const productOuters = document.querySelectorAll(".product-outer");
    const allMedicines = document.getElementById("allMedicines");

    function clearActiveStates() {
        navItems.forEach(item => {
            item.style.backgroundColor = "";
        });
    }

    function handleNavClick(navItem) {
        clearActiveStates();
        navItem.style.backgroundColor = "#75E6DA";
        
        const id = navItem.id;

        productOuters.forEach((productOuter, index) => {
            if (id === 'allMedicines') {
                productOuter.style.display = 'grid';
            } else {
                productOuter.style.display = 'none';
            }
        });

        if (id === 'allMedicines') {
            productOuters.forEach(productOuter => {
                productOuter.style.display = 'grid';
            });
        } else if (id === 'analgesics') {
            analgesicsLog.style.display = 'grid';
            // analgesicsLog.style.border = '4px solid blue';
        } else if (id === 'antibiotics') {
            antibioticsLog.style.display = 'grid';
            // antibioticsLog.style.border = '4px solid yellow';
        } else if (id === 'antidepressants') {
            antidepressantsLog.style.display = 'grid';
            // antidepressantsLog.style.border = '4px solid pink';
        } else if (id === 'antihistamines') {
            antihistaminesLog.style.display = 'grid';
            // antihistaminesLog.style.border = '4px solid voilet';
        } else if (id === 'diabetesMedications') {
            diabetesMedicationsLog.style.display = 'grid';
            // diabetesMedicationsLog.style.border = '4px solid green';
        } else if (id === 'bronchodilators') {
            bronchodilatorsLog.style.display = 'grid';
            // bronchodilatorsLog.style.border = '4px solid red';
        } else if (id === 'vitaminsAndSupplements') {
            vitaminsAndSupplementsLog.style.display = 'grid';
            // vitaminsAndSupplementsLog.style.border = '4px solid grey';
        } else if (id === 'eyeCare') {
            eyeCareLog.style.display = 'grid';
            // eyeCareLog.style.border = '4px solid crimson';
        }
    }

    navItems.forEach(navItem => {
        navItem.addEventListener("click", function() {
            handleNavClick(this);
        });
    });

    // Trigger click on "allMedicines" by default
    handleNavClick(allMedicines);
});
