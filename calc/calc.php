<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .calculator {
            margin: 50px auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        #display {
            height: 50px;
            font-size: 24px;
            text-align: right;
            margin-bottom: 10px;
        }
        button {
            height: 60px;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['operation'])) {
                if ($_POST['operation'] == "add"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $result = $num1 + $num2 ;
                   
                } else if ($_POST['operation'] == "subtract"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $result = $num1 - $num2 ;
                }elseif ($_POST['operation'] == "multiply"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $result = $num1 * $num2 ;
                }elseif ($_POST['operation'] == "divide"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    if ($num2 == 0 ){
                        echo "cant divide by zero";
                    }else{
                    $result = $num1 / $num2 ;
                    }
                }
            }
            }

    ?>

<div class="calculator">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
            <input type="number" class="form-control" name="num1" placeholder="Enter first number" value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>" required>
            <input type="number" class="form-control" name="num2" placeholder="Enter second number" value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>" required>
            <select class="form-control" name="operation" required>
                <option value="">Select Operation</option>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <button type="submit" class="btn btn-primary btn-block">Calculate</button>
            <button type="submit" name="clear" class="btn btn-danger btn-block">Clear</button>
            <input type="text" id="result" class="form-control" value="<?php echo isset($result) ? htmlspecialchars($result) : ''; ?>" disabled>
        </form>
    </div>
</body>
</html>
