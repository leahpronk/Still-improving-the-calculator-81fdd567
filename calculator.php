  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <?php
        echo('<h1>The Calculator</h1>');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_REQUEST;
            $result = 0;
            switch ($data['operator']) {
                case 'Add':
                    $data['result'] = $data['firstNumber'] + $data['secondNumber'];
                    echo('<h1>' . $data['firstNumber'] . ' + ' . $data['secondNumber'] . ' = ' . $data['result'] . '<hr>');
                    break;
                case 'Subtract':
                    $data['result'] = $data['firstNumber'] - $data['secondNumber'];
                    echo('<h1>' . $data['firstNumber'] . ' - ' . $data['secondNumber'] . ' = ' . $data['result'] . '<hr>');
                    break;
                case 'Multiply':
                    $data['result'] = $data['firstNumber'] * $data['secondNumber'];
                    echo('<h1>' . $data['firstNumber'] . ' * ' . $data['secondNumber'] . ' = ' . $data['result'] . '<hr>');
                    break;
                case 'Divide':
                    $data['result'] = $data['firstNumber'] / $data['secondNumber'];
                    echo('<h1>' . $data['firstNumber'] . ' / ' . $data['secondNumber'] . ' = ' . $data['result'] . '<hr>');
                    break;
                default:
                    $data['result'] = $data['firstNumber'] % $data['secondNumber'];
                    echo('<h1>' . $data['firstNumber'] . ' % ' . $data['secondNumber'] . ' = ' . $data['result'] . '<hr>');
                    break;
            }
        };
        echo('<form method="POST" action="calculator.php">');
        echo('<input type="number" id="firstNumber" name="firstNumber" required> <label for="firstNumber"> <b> First Number </b> </label> <br><br>');
        echo('<input type="number" id="secondNumber" name="secondNumber" required> <label for="secondNumber"> <b> Second Number </b> </label> <br><br>');
        echo('<input type="submit" name="operator" value="Add">');
        echo('<input type="submit" name="operator" value="Subtract">');
        echo('<input type="submit" name="operator" value="Multiply">');
        echo('<input type="submit" name="operator" value="Divide">');
        echo('<input type="submit" name="operator" value="Modulo  ">');
        echo('</form>');
    ?>
</body>
</html>