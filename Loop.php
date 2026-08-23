<html>
<body>
    <?php 
    echo "even no from 1 to 30 using for Loop are :<br>";
    for($i=1;$i<=60;$i++)
    {
        if($i%2==0)
        {
            echo $i;
            echo "<br>";
        }
    }    
    echo "even no from 1 to 30 using while Loop are :<br>";
    $j=1;
    while($j<=60)
    {
        if($j%2==0)
        {
            echo $j;
            echo "<br>";
        }
        $j++;
    }
    echo "even no from 1 to 30 using do while Loop are :<br>";
    do {
        if($k%2==0)
        {
            echo $k;
            echo "<br>";
        }
        $k++;
    } while($k<=60);

    ?>
</body>
</html>