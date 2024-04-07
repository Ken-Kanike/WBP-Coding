<html>
<body>
    <?php
        $rows = 10;
        $cols = 10;
        echo "<table border='1' background=>";
        for($i = 1 ; $i <= $rows ; $i++)
        {
            echo "<tr>";
            for($j = 1 ; $j <= $cols ; $j++)
            {
                $product = $i * $j;
                echo "<td> $product </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>