<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
     
<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>
<?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        if (is_numeric($result1) && is_numeric($result2)) {
            switch ($operator) {
                case "add":
                    echo $result1 + $result2;
                    break;
                case "subtract":
                    echo $result1 - $result2;
                    break;
                case "multiply":
                    echo $result1 * $result2;
                    break;
                case "divide":
                    if ($result2 != 0) {
                        echo $result1 / $result2;
                    } else {
                        echo "Error: Division by zero is not allowed.";
                    }
                    break;
                default:
                    echo "Error: Invalid operator selected.";
                    break;
            }
        } else {
            echo "Error: Please enter valid numeric values.";
        }
    } else {
        echo "Please fill out the form and submit to see the result.";
    }
?>

?>

</body>

</html>