<!-- Write a PHP script that creates an array of five integers. Sort the array in ascending order, then in descending order, and print both versions. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array in PHP</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Array Sorting Example</h2>
        <?php
        // Create an array of five integers
        $array = [42, 15, 8, 23, 4];

        // Sort the array in ascending order
        sort($array);
        echo "<div class='array'>Ascending Order: " . implode(", ", $array) . "</div>";

        // Sort the array in descending order
        rsort($array);
        echo "<div class='array'>Descending Order: " . implode(", ", $array) . "</div>";
        ?>
    </div>
</body>
</html>
