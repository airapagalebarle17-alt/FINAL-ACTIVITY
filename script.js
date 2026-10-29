
document.addEventListener("DOMContentLoaded", function () {

    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    togglePassword.addEventListener("click", function () {

        if (passwordInput.type === "password") {

            passwordInput.type = "text";
            togglePassword.textContent = "🙈";
            togglePassword.setAttribute("aria-label", "Hide password");

        } else {

            passwordInput.type = "password";
            togglePassword.textContent = "👁️";
            togglePassword.setAttribute("aria-label", "Show password");

        }

    });

});
