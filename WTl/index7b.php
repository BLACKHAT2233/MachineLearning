<!DOCTYPE html>
<html>

<head>
    <title>Arrays in PHP</title>
</head>

<body>
    <h2>Numeric Array</h2>
    <table>
        <tr>
            <th>Index</th>
            <th>Value</th>
        </tr>
        <?php
        $numeric_array = array(10, 20, 30, 40, 50);

        foreach ($numeric_array as $index => $value) {
            echo "<tr><td>$index</td><td>$value</td></tr>";
        }
        ?>
    </table>

    <h2>Associative Array</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
        $assoc_array = array("name" => "John", "age" => 30, "city" => "New York");

        foreach ($assoc_array as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        ?>
    </table>

    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
        <?php
        $multi_array = array(
            array("name" => "John", "age" => 30, "city" => "New York"),
            array("name" => "Mary", "age" => 25, "city" => "Los Angeles"),
            array("name" => "Tom", "age" => 35, "city" => "Chicago")
        );

        foreach ($multi_array as $item) {
            echo "<tr><td>{$item['name']}</td><td>{$item['age']}</td><td>{$item['city']}</td></tr>";
        }
        ?>
    </table>
</body>

</html>