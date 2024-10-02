<!-- Create a PHP script that accepts five integers from the user through a web form. Once the user submits the form, the script should validate the input to ensure that all entries are integers. After validation, display the following to the user:

1. The numbers that were entered.
2. The numbers sorted in ascending order.
3. The numbers sorted in descending order. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array with User Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .array {
            margin: 10px 0;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Five Integers</h2>
        <form action="" method="POST">
            <input type="number" name="numbers[]" placeholder="Enter integer 1" required>
            <input type="number" name="numbers[]" placeholder="Enter integer 2" required>
            <input type="number" name="numbers[]" placeholder="Enter integer 3" required>
            <input type="number" name="numbers[]" placeholder="Enter integer 4" required>
            <input type="number" name="numbers[]" placeholder="Enter integer 5" required>
            <input type="submit" value="Sort">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numbers'])) {
            // Retrieve user input
            $array = $_POST['numbers'];

            // Real Numbers
            echo "<div class='array'>Real Numbers: " . implode(", ", $array) . "</div>";

            // Sort the array in ascending order
            sort($array);
            echo "<div class='array'>Ascending Order: " . implode(", ", $array) . "</div>";

            // Sort the array in descending order
            rsort($array);
            echo "<div class='array'>Descending Order: " . implode(", ", $array) . "</div>";
        }
        ?>
    </div>
</body>
</html>
