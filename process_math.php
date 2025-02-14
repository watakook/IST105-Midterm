<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = escapeshellarg($_POST["input1"]);
    $input2 = escapeshellarg($_POST["input2"]);
    $operation = escapeshellarg($_POST["operation"]);

    $command = "python3 math_operations.py $input1 $input2 $operation";
    $output = shell_exec($command);
    echo"<h1>IST105-Midterm</h1>";
    echo"<h2>Wataru Okada - CT1010492</h2>";    
    echo "<h2>Result:</h2>";
    echo $output;
}
?>