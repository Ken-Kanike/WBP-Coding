<html>
<body>
    <?php
        $a = 10;
        $b = 20;
        $c = 30;
        
        if( $a > $b and $a > $c)
        {
            echo ("<br>".$a ." is greater"); 
        }
        else if($b > $c)
        {
            echo ("<br>".$b ." is greater"); 
        }
        else
        {
            echo ("<br>".$c ." is greater"); 
        }
    ?>
</body>
</html>