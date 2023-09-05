
document.addEventListener("DOMContentLoaded", ()=> {

  togglePasswordField();

  function togglePasswordField() {

    let passwordToggleButton = document.querySelector(".password-toggle-field");
    let passwordToggleButtonText = document.querySelector(".password-toggle-field span");
    let passwordToggleButtonIcon = document.querySelector(".password-toggle-field i");
    let passwordInput = document.querySelector(".form-control input.password-input")

    passwordToggleButton.addEventListener("click", (e)=> {

      e.preventDefault();

      if(passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggleButtonText.innerHTML = "Hide password";
        passwordToggleButtonIcon.classList.remove("fa-eye");
        passwordToggleButtonIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        passwordToggleButtonText.innerHTML = "Show password";
        passwordToggleButtonIcon.classList.remove("fa-eye-slash");
        passwordToggleButtonIcon.classList.add("fa-eye");
      }
    });
  }
});
