<h1>IST105-Midterm</h1>
<h2>Wataru Okada - CT1010492</h2>

<form action="process_math.php" method="POST">
    Number 1: <input type="number" name="input1" required><br>
    Number 2: <input type="number" name="input2" required><br>
    Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br>
    <input type="submit" value="Calculate">
</form>

<p>Attention:</p>
<ul>
    <li>If the result of the operation is greater than 100, multiply the result by 2.</li>
    <li>If the result is less than 0, add 50 to the result.</li>
</ul>