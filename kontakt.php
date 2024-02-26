<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="kontakt.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argjendaria Beli</title>
    <div class="logos">
        <button class="button1">
            <span>
                <ion-icon name="cart-outline" class="icon"></ion-icon>
            </span>
        </button>
        <button class="loginform">
            <a href="index.php">
                <span class="icon1">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
            </a>
        </button>
    </div>
</head>
<body>
    <form action="contact.php" method="post">
    <div class="forms">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <input type="text" class="emri" id="nameInput" placeholder="Name" name="name" required><br>
            <input type="text" class="mbiemri" id="surnameInput" placeholder="Surname" name="surname"  required><span id="surnameError" style="color: red;"></span><br>
            <input type="email" class="email" id="emailInput" placeholder="E-mail"  name="email" required><span id="emailError" style="color: red;"></span><br>
            <textarea class="text" id="messageInput" placeholder="Message Us" name="message" required></textarea><span id="messageError" style="color: red;"></span><br>
            <button class="formbutton" type="submit" onclick="validateAndSubmit()" required>Submit</button>
        </form>
    </div>
    </form>
    <script>
        function validateEmail(email) {
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return emailRegex.test(email);
        }

        function validateAndSubmit() {
            var nameInput = document.getElementById("nameInput").value;
            var surnameInput = document.getElementById("surnameInput").value;
            var emailInput = document.getElementById("emailInput");
            var messageInput = document.getElementById("messageInput").value;
            var emailError = document.getElementById("emailError");
            var surnameError = document.getElementById("surnameError");
            var messageError = document.getElementById("messageError");


            if (nameInput.trim() === "") {
                alert("Name is required!");
                return;
            }

            if (surnameInput.trim() === "") {
                surnameError.textContent = "Surname is required.";
                document.getElementById("surnameInput").style.borderColor = "red";
                return;
            } else {
                surnameError.textContent = "";
                document.getElementById("surnameInput").style.borderColor = "";
            }

            if (!validateEmail(emailInput.value)) {
                emailError.textContent = "Please enter a valid email address.";
                emailInput.style.borderColor = "red";
            } else {
                emailError.textContent = "";
                emailInput.style.borderColor = "";

                if (messageInput.trim() === "") {
                    messageError.textContent = "Message is required.";
                    document.getElementById("messageInput").style.borderColor = "red";
                    return;
                } else {
                    messageError.textContent = "";
                    document.getElementById("messageInput").style.borderColor = "";
                }

                alert("Message sent successfully!");
            }
        }
    </script>
</body>
</html>
