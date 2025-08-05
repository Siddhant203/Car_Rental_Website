// Simulated user login status
let isLoggedIn = false; // Change to true when a user logs in

function updateNav() {
    if (isLoggedIn=$_SESSION['u_id']) {
        document.getElementById("services").style.display = "inline";
        document.getElementById("cars").style.display = "inline";
        document.getElementById("cart").style.display = "inline";
        document.getElementById("login").style.display = "none";
        document.getElementById("signup").style.display = "none";
        document.getElementById("be-partner").style.display = "none";
    } else {
        document.getElementById("services").style.display = "none";
        document.getElementById("cars").style.display = "none";
        document.getElementById("cart").style.display = "none";
        document.getElementById("login").style.display = "inline";
        document.getElementById("signup").style.display = "inline";
        document.getElementById("be-partner").style.display = "inline";
    }
}

// Call updateNav function initially to set the correct display
updateNav();

// Example function to simulate the log in action
function logIn() {
    isLoggedIn = true;
    updateNav();
}

// Example function to simulate the log out action
function logOut() {
    isLoggedIn = false;
    updateNav();
}
