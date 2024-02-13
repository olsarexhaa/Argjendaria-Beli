<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="login1.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <title>Argjendaria Beli</title>
</head>
<header>
    <div class="logos">
        <button class="button1">
            <span>
                <ion-icon name="cart-outline" class="icon"></ion-icon>
            </span>
        </button>
        <button class="loginform">
            <a href="baza.php">
                <span class="icon1">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
            </a>
        </button>
    </div>
</header>
<body>
    <form action="conect.php" method="post">
    <div class="container">
        <h1 class="formtitle">Create account</h1>
        <div class="formmessageerror"></div>
        <form id="registrationForm">
            <div class="formgroup">
                <input type="text" class="forminput" id="username" name="username" placeholder="Username">
                <div class="forminputerror" id="usernameError"></div>
            </div>
            <div class="formgroup">
                <input type="text" class="forminput" id="email" name="email" placeholder="Email Address">
                <div class="forminputerror" id="emailError"></div>
                <div class="formgroup">
                    <input type="number" class="forminput" id="number" name="number" placeholder="Phone number">
                    <div class="forminputerror" id="numberError"></div>
                </div>
            </div>
            <div class="formgroup">
                <input type="password" class="forminput" id="password" name="password" placeholder="Password">
                <div class="forminputerror" id="passwordError"></div>
                <input type="password" class="forminput" id="confirmPassword" name="confrimpassword" placeholder="Confirm Password">
                <div class="forminputerror" id="confirmPasswordError"></div>
            </div>
            <button class="formbutton" type="submit" name="continue" onclick="validateForm()">Continue</button>
            <p class="formtext">
                <a href="login.php" id="linkLogin" class="formlink">Already have an account? Log in</a>
            </p>
        </form>
    </div>

    <script>
        function validateForm() {
            // Reset previous error messages
            document.getElementById('usernameError').innerText = '';
            document.getElementById('emailError').innerText = '';
            document.getElementById('passwordError').innerText = '';
            document.getElementById('confirmPasswordError').innerText = '';

            // Get form values
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            // Validate each field
            if (username === '') {
                document.getElementById('usernameError').innerText = 'Username is required';
            }

            if (email === '') {
                document.getElementById('emailError').innerText = 'Email is required';
            } else if (!isValidEmail(email)) {
                document.getElementById('emailError').innerText = 'Invalid email format';
            }

            if (password === '') {
                document.getElementById('passwordError').innerText = 'Password is required';
            }

            if (confirmPassword === '' || confirmPassword !== password) {
                document.getElementById('confirmPasswordError').innerText = 'Passwords do not match';
            }
        }

        function isValidEmail(email) {
            // Simple email validation using a regular expression
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
</body>
</html>
