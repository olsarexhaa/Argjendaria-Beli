document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login');
  
    loginForm.addEventListener('submit', function (event) {
      // Prevent the form from submitting
      event.preventDefault();
  
      // Validate and display errors
      validateForm();
    });
  
    function validateForm() {
      const emailInput = document.querySelector('#login .forminput[type="text"]');
      const passwordInput = document.querySelector('#login .forminput[type="password"]');
      
      const emailError = document.querySelector('#login .forminputerror');
      const passwordError = document.querySelector('#login .forminputerror');
  
      // Reset previous error messages
      resetErrors([emailError, passwordError]);
  
      // Validate email
      if (!emailInput.value.trim()) {
        displayError(emailError, 'Please enter your email.');
        return;
      } else if (!isValidEmail(emailInput.value)) {
        displayError(emailError, 'Please enter a valid email address.');
        return;
      }
  
      // Validate password
      if (!passwordInput.value.trim()) {
        displayError(passwordError, 'Please enter your password.');
        return;
      } else if (passwordInput.value.length < 6) {
        displayError(passwordError, 'Password must be at least 6 characters.');
        return;
      }
  
      // If the form is valid, you can proceed with other actions (e.g., submitting the form)
      alert('Login successful!'); // Replace this with your actual login logic
    }
  
    function displayError(element, message) {
      element.textContent = message;
      element.style.color = 'red';
    }
  
    function resetErrors(elements) {
      elements.forEach(element => {
        element.textContent = '';
        element.style.color = '';
      });
    }
  
    function isValidEmail(email) {
      // A simple email validation regex
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  });
  