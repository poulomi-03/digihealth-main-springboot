// by class

document.addEventListener("DOMContentLoaded", function() {
    const navItems = document.querySelectorAll(".nav-items");

    function clearActiveStates() {
        navItems.forEach(item => {
            item.style.backgroundColor = "";
        });
    }

    navItems.forEach(item => {
        item.addEventListener("click", function() {
            clearActiveStates();
            this.style.backgroundColor = "#75E6DA";
        });
    });
});




// By ids -----------

// document.addEventListener("DOMContentLoaded", function() {
//     const ids = [
//         "allMedicines",
//         "analgesics",
//         "antibiotics",
//         "antidepressants",
//         "antihistamines",
//         "diabetesMedications",
//         "bronchodilators",
//         "vitaminsAndSupplements",
//         "coughAndColdMedications"
//     ];

//     function clearActiveStates() {
//         ids.forEach(id => {
//             document.getElementById(id).style.backgroundColor = "";
//         });
//     }

//     ids.forEach(id => {
//         const item = document.getElementById(id);
//         item.addEventListener("click", function() {
//             clearActiveStates();
//             this.style.backgroundColor = "#75E6DA";
//         });
//     });
// });




// <======================conditions======================>

// document.addEventListener("DOMContentLoaded", function() {
//     const ids = [
//         "allMedicines",
//         "analgesics",
//         "antibiotics",
//         "antidepressants",
//         "antihistamines",
//         "diabetesMedications",
//         "bronchodilators",
//         "vitaminsAndSupplements",
//         "coughAndColdMedications"
//     ];

//     function clearActiveStates() {
//         ids.forEach(id => {
//             document.getElementById(id).style.backgroundColor = "";
//         });
//     }

//     ids.forEach(id => {
//         const item = document.getElementById(id);
//         item.addEventListener("click", function() {
//             clearActiveStates();
            
//             // Set the background color based on the clicked ID using if-else conditions
//             if (id === "analgesics") {
//                 this.style.backgroundColor = "red";
//             } else if (id === "antibiotics") {
//                 this.style.backgroundColor = "blue";
//             } else if (id === "antidepressants") {
//                 this.style.backgroundColor = "green";
//             } else if (id === "antihistamines") {
//                 this.style.backgroundColor = "purple";
//             } else if (id === "diabetesMedications") {
//                 this.style.backgroundColor = "orange";
//             } else if (id === "bronchodilators") {
//                 this.style.backgroundColor = "yellow";
//             } else if (id === "vitaminsAndSupplements") {
//                 this.style.backgroundColor = "pink";
//             } else if (id === "coughAndColdMedications") {
//                 this.style.backgroundColor = "cyan";
//             } else {
//                 this.style.backgroundColor = "#75E6DA"; // Default color for allMedicines and any others
//             }
//         });
//     });
// });
