<!-- Create a PHP script that reads the content of a text file and displays it on the webpage. If the file doesn't exist, create the file and write some default text to it. -->

<?php
// Define the file name
$filename = 'example.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Read the content of the file
    $content = file_get_contents($filename);
    echo "<h2>Content of '$filename':</h2>";
    echo "<pre>$content</pre>";
} else {
    // Create the file and write default text to it
    $defaultText = "This is the default text written to the file.";
    file_put_contents($filename, $defaultText);
    echo "<h2>File '$filename' did not exist. A new file has been created with the following content:</h2>";
    echo "<pre>$defaultText</pre>";
}
?>
