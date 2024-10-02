<!-- Create a PHP script that accepts a user's name, email, and age through a form. Validate the input (e.g., ensure the email is valid, the age is a number, and the name is not empty) and display the entered data back to the user.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            display: block;
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your Name">
            
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your Email">
            
            <label for="age">Age</label>
            <input type="text" id="age" name="age" placeholder="Enter your Age">
            
            <input type="submit" value="Submit">
        </form>

        <?php
        // Initialize variables to store errors and success messages
        $nameErr = $emailErr = $ageErr = $successMsg = "";
        $name = $email = $age = "";

        // Check if form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required.";
            } else {
                $name = htmlspecialchars($_POST["name"]);
            }

            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required.";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format.";
            } else {
                $email = htmlspecialchars($_POST["email"]);
            }

            // Validate age
            if (empty($_POST["age"])) {
                $ageErr = "Age is required.";
            } elseif (!is_numeric($_POST["age"])) {
                $ageErr = "Age must be a number.";
            } elseif ($_POST["age"] < 0 || $_POST["age"] > 120) {
                $ageErr = "Please enter a valid age between 0 and 120.";
            } else {
                $age = htmlspecialchars($_POST["age"]);
            }

            // If no errors, display success message and user data
            if (empty($nameErr) && empty($emailErr) && empty($ageErr)) {
                $successMsg = "Form submitted successfully!";
                echo "<div class='success'>$successMsg</div>";
                echo "<div><strong>Name:</strong> $name</div>";
                echo "<div><strong>Email:</strong> $email</div>";
                echo "<div><strong>Age:</strong> $age</div>";
            } else {
                // Display errors if any
                echo "<div class='error'>$nameErr</div>";
                echo "<div class='error'>$emailErr</div>";
                echo "<div class='error'>$ageErr</div>";
            }
        }
        ?>
    </div>
</body>
</html>
