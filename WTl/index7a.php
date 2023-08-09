<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<form method="GET" action="practical_7a.php"></form>
    <div >
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="number" name="number" id="number" required>
            <input type="submit" value="Generate Table">
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];

        echo "<h2>Table of $number</h2>";
        echo "<table>";
        echo "<tr><th>Number</th><th>Multiplier</th><th>Result</th></tr>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$number</td><td>$i</td><td>" . ($number * $i) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</div>












   
</body>
</html>