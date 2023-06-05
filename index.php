<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style type="text/css">
        body{
            text-align:center;
            font-family: verdana;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h2>Simple PHP Calculator By Waqar Ahmed</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter number 2" required>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Error: Division by zero is not allowed.";
                }
                break;
            default:
                echo "Invalid operator.";
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
