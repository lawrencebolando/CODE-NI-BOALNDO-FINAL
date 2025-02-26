document.addEventListener("DOMContentLoaded", function () {
    const signUpButton = document.getElementById("signUpButton");
    const signInButton = document.getElementById("signInButton");
    const guestButton = document.getElementById("guestButton");
    const signInForm = document.getElementById("signIn");
    const signUpForm = document.getElementById("signup");

    if (signUpButton) {
        signUpButton.addEventListener("click", function () {
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        });
    }

    if (signInButton) {
        signInButton.addEventListener("click", function () {
            signInForm.style.display = "block";
            signUpForm.style.display = "none";
        });
    }

    if (guestButton) {
        guestButton.addEventListener("click", function () {
            console.log("Guest button clicked. Redirecting...");
            window.location.href = "homepage.php"; // Redirects guest to dashboard
        });
    }

    // Debugging: Check if the script is correctly detecting the elements
    console.log("Script loaded. Checking elements...");
    console.log("signUpButton:", signUpButton);
    console.log("signInButton:", signInButton);
    console.log("guestButton:", guestButton);
    console.log("signInForm:", signInForm);
    console.log("signUpForm:", signUpForm);
});
