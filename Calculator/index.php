<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="name01" placeholder='Number One' required>
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>  
        </select>
        <input type="number" name="name02" placeholder='Number Two' required>
        <button>Calculate</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['name01'];
            $num2 = $_POST['name02'];
            $operator = $_POST['operator'];

            switch ($operator) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'sub':
                    $result = $num1 - $num2;
                    break;
                case 'mul':
                    $result = $num1 * $num2;
                    break;
                case 'div':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operator";
            }
            echo "<h3>Result: " . htmlspecialchars($result) . "</h3>";
        }
    ?>
</body>
</html>
