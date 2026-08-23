<html>
<body>
    
    <?php
       // simple 1 to 100
        $rows = 10;
        $cols = 10;
        $count = 0;
        echo "<table border='1' style='background-color: cyan;'>";
        for($i = 1 ; $i <= $rows ; $i++)
        {
            echo "<tr>";
            for($j = 1 ; $j <= $cols ; $j++)
            {
                $count += 1;
                echo "<td style='padding:20px;'> $count </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    ?>


    <?php
       // table matrix till 10
        $rows = 10;
        $cols = 10;
        echo "<table border='1' style='background-color: cyan;'>";
        for($i = 1 ; $i <= $rows ; $i++)
        {
            echo "<tr>";
            for($j = 1 ; $j <= $cols ; $j++)
            {
                $product = $i * $j;
                echo "<td style='padding:20px;'> $product </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
    // table for sqaure square root and cube of numbers
    echo "<table border='1' style='background-color: cyan;'>";
    echo "<tr>";
    echo "<th>Number</th>";
    echo "<th>Square root</th>";
    echo "<th>Square</th>";
    echo "<th>Cube</th>";
    echo "</tr>";
    for($i = 1 ; $i <= 10;$i++){
        $sqroot = round(sqrt($i), 2);
        $square = $i*$i;
        $cube = $i*$i*$i;
        echo "<tr>";
        echo "<td> $i </td>";
        echo "<td> $sqroot </td>";
        echo "<td> $square </td>";
        echo "<td> $cube </td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>